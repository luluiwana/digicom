<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('level') == '0') {
            redirect('guru', 'refresh');
        } elseif ($this->session->userdata('level') == '1') {
            redirect('siswa', 'refresh');
        } else {
            $this->load->view('index');
        }
    }
    public function login()
    {
        $data = array(
            'title' => 'Login'
        );
        $this->load->view('template/login_header', $data);
        $this->load->view('template/login');
        $this->load->view('template/login_footer');
    }
    public function daftar()
    {
        $data = array(
            'title' => 'Buat Akun Baru',
            'kelas'=>$this->Auth_model->getKelas()
        );
        $this->load->view('template/login_header', $data);
        $this->load->view('template/daftar');
        $this->load->view('template/login_footer');
    }
    public function daftar_siswa()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'level' => 1,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );

        $this->Auth_model->daftar_siswa($data);
        redirect('auth/login');
    }

    public function daftar_guru()
    {
        $data = array(
            // 'id' => $this->input->post('id'),
            'username' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'level' => 0,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $this->Auth_model->daftar_guru($data);
        redirect('auth/login');
    }


    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
    public function loginp()
    {
        $username    =     $this->input->post('username');
        $password    =     $this->input->post('password');
        $result = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($result) {
            if (password_verify($password, $result['password'])) {
                $sess = array(
                    'username' => $result['username'],
                    'id' => $result['id_user'],
                    'nama' => $result['nama'],
                    'level' => $result['level']
                );
                if ($result['level'] == 1) {
                    $this->session->set_userdata($sess);
                    redirect('siswa');
                } else {
                    $this->session->set_userdata($sess);
                    redirect('guru/index');
                }
            } else {
                $this->session->set_flashdata('login-failed', '<div class="alert alert-danger" role="alert">
                Wrong Password
                </div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('login-failed', '<div class="alert alert-danger" role="alert">
               Username Belum Terdaftar
                </div>');
            redirect('auth/login');
        }
    }
}
