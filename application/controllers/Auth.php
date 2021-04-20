<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('index');
    }
    public function login()
    {
        $data=array(
            'title'=>'Login'
        );
        $this->load->view('template/login_header',$data);
        $this->load->view('template/login');
        $this->load->view('template/login_footer');
    }
    public function daftar()
    {
       $data=array(
            'title'=>'Buat Akun Baru'
        );
        $this->load->view('template/login_header',$data);
        $this->load->view('template/daftar');
        $this->load->view('template/login_footer');
    }
    public function daftar__()
    {
        
        $data=array(
            'id_user'=>$this->input->post('id'),
            'nama'=>$this->input->post('nama'),
            'id_kelas'=>$this->input->post('kelas'),
            'level'=>$this->input->post('level'),
            'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT)
        );
        $this->Auth_model->daftar($data);
        redirect('auth/login');
    }
    public function logout()
    {
        redirect('auth');
    }
    public function loginp()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if ($username=="guru" && $password=="guru") {
            redirect('guru');
        } elseif ($username=="siswa" && $password=="siswa") {
            redirect('siswa');
        } else {
            redirect('auth/login');
        }
    }
}
