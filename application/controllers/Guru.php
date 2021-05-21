<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kelas_model');
    
        if ($this->session->userdata('level') == '0') {
            $this->load->model('Auth_model');
        } else {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data = array(
      'title' => 'Dashboard',
      'nama'  => $this->session->userdata('nama'),
      'jml_kelas'=>$this->Kelas_model->jml_kelas(),
      'kelas'=> $this->Kelas_model->getKelasLimit()
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/dashboard');
        $this->load->view('template/footer');
    }
    public function kelas()
    {
        $data = array(
      'title' => 'Kelas',
       'kelas'=> $this->Kelas_model->getKelas()
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/kelas');
        $this->load->view('template/footer');
    }
    public function buat_kelas()
    {
        $data = array(
      'title' => 'Kelas'
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/buat_kelas');
        $this->load->view('template/footer');
    }
    public function add_kelas()
    {
        $data = array(
      'nama_kelas' => $this->input->post('nama_kelas'),
      'nama_sekolah' => $this->input->post('nama_sekolah'),
      'id_user' => $this->session->userdata('id'),
    );
        $this->db->insert('kelas', $data);
        redirect('guru/lihat_kelas/'.$this->db->insert_id());
    }
    public function lihat_kelas($id_kelas)
    {
        $data = array(
        'title' => 'Kelas',
        'getKelasById'=>$this->Kelas_model->getKelasById($id_kelas),
        'materi'=>$this->Kelas_model->getMateriByKelas($id_kelas),
        'jml_materi'=>$this->Kelas_model->countMateriByClass($id_kelas),
        'jml_siswa'=>$this->Kelas_model->countSiswaByClass($id_kelas),
        'jml_tugas'=>$this->Kelas_model->countTugasByClass($id_kelas),
        'tugas'=>$this->Kelas_model->getTugasByKelas($id_kelas),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/lihat_kelas');
        $this->load->view('template/footer');
    }
    public function edit_kelas($id_kelas)
    {
        $data = array(
            'title'=>'Kelas',
            'kelas'=>$this->Kelas_model->getKelasById($id_kelas)
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/edit_kelas');
        $this->load->view('template/footer');
    }
    public function update_kelas($id_kelas)
    {
        $data = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
        redirect('guru/lihat_kelas/'.$id_kelas, 'refresh');
    }
 
    public function materi($id_kelas, $id_materi)
    {
        $data = array(
      'title' => 'Kelas',
      'id_kelas'=>$id_kelas,
      'materi'=>$this->Kelas_model->getMateriById($id_materi),
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/materi');
        $this->load->view('template/footer');
    }
  
    public function profil()
    {
        $data = array(
      'title' => 'Profil'
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/profil');
        $this->load->view('template/footer');
    }

    public function tambah_materi($id_kelas)
    {
        $data = array(
      'title' => 'Kelas',
      'id_kelas'=>$id_kelas,
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/tambah_materi');
        $this->load->view('template/footer');
    }
    public function add_materi()
    {
        $config['file_name'] = uniqid().'.pdf';
        $data = array(
      'judul_materi' => $this->input->post('judul_materi'),
      'id_kelas'=>$this->input->post('id_kelas'),
      'filename'=>$config['file_name'],
    );

        if (!is_dir('file/materi/'.$data['id_kelas'])) {
            mkdir('./file/materi/' . $data['id_kelas'], 0777, true);
        }
        $config['upload_path']          = "file/materi/".$data['id_kelas']."/";
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $this->db->insert('materi', $data);
      
            redirect('guru/lihat_kelas/'.$data['id_kelas'], 'refresh');
        }
    }
    public function edit_materi($id_materi)
    {
        $data = array(
      'title' => 'Kelas',
      'materi'=>$this->Kelas_model->getMateriById($id_materi),
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/edit_materi');
        $this->load->view('template/footer');
    }
    public function update_materi($id_kelas, $id_materi, $filename)
    {
        $config['file_name'] = uniqid().'.pdf';
        if (!is_dir('file/materi/'.$id_kelas)) {
            mkdir('./file/materi/' . $id_kelas, 0777, true);
        }
        $config['upload_path']          = "file/materi/".$id_kelas."/";
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
       
        if (!$this->upload->do_upload('file')) {
            $data = array(
              'judul_materi' => $this->input->post('judul_materi')
            );
            $this->db->where('id_materi', $id_materi);
            $this->db->update('materi', $data);
        } else {
            $data = array(
              'judul_materi' => $this->input->post('judul_materi'),
              'filename'=>$config['file_name'],
            );
            unlink('./file/materi/'.$id_kelas.'/'.$filename); // This is an absolute path to the file

            $this->db->where('id_materi', $id_materi);
            $this->db->update('materi', $data);
        }
        
        redirect('guru/lihat_kelas/'.$id_kelas, 'refresh');
    }
    public function hapus_materi($id_materi, $filename, $id_kelas)
    {
        $this->db->where('id_materi', $id_materi);
        $this->db->delete('materi');
        unlink('./file/materi/'.$id_kelas.'/'.$filename); // This is an absolute path to the file
        redirect('guru/lihat_kelas/'.$id_kelas, 'refresh');
    }
    public function tambah_tugas($id_kelas)
    {
        $data = array(
      'title' => 'Kelas',
      'id_kelas'=>$id_kelas,
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/tambah_tugas');
        $this->load->view('template/footer');
    }
    public function add_tugas()
    {
        $config['file_name'] = uniqid().'.pdf';
        $data = array(
        'id_kelas'=>$this->input->post('id_kelas'),
        'judul_tugas'=>$this->input->post('judul_tugas'),
        'deskripsi'=>$this->input->post('deskripsi'),
        'date'=>$this->input->post('date'),
        'filename'=>$config['file_name'],
        );
        $config['upload_path']          = "file/tugas/";
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $this->db->insert('tugas', $data);
      
            redirect('guru/lihat_kelas/'.$data['id_kelas'], 'refresh');
        }

    }
    public function lihat_tugas($id_tugas)
    {
        $data = array(
      'title' => 'Kelas',
      'id_kelas'=>$this->Kelas_model->getKelasByTugas($id_tugas),
      'tugas'=>$this->Kelas_model->getTugasById($id_tugas),
      
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/lihat_tugas');
        $this->load->view('template/footer');
    }
    public function edit_tugas($id_tugas)
    {
        $data = array(
        'title' => 'Kelas',
      'tugas'=>$this->Kelas_model->getTugasById($id_tugas),

        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/edit_tugas');
        $this->load->view('template/footer');
    }
    public function update_tugas($id_tugas,$filename)
    {
        $config['file_name'] = uniqid().'.pdf';
        $config['upload_path']          = "file/tugas/";
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
       
        if (!$this->upload->do_upload('file')) {
            $data = array(
              'judul_tugas' => $this->input->post('judul_tugas'),
              'deskripsi' => $this->input->post('deskripsi'),
              'date' => $this->input->post('date'),
            );
            $this->db->where('id_tugas', $id_tugas);
            $this->db->update('tugas', $data);
        } else {
            $data = array(
              'judul_tugas' => $this->input->post('judul_tugas'),
              'deskripsi' => $this->input->post('deskripsi'),
              'date' => $this->input->post('date'),
              'filename'=>$config['file_name'],
            );
            unlink('./file/tugas/'.$filename); // This is an absolute path to the file

            $this->db->where('id_tugas', $id_tugas);
            $this->db->update('tugas', $data);
        }
        
        redirect('guru/lihat_tugas/'.$id_tugas, 'refresh');

    }
     public function hapus_tugas($tugas,$filename)
    {
        $id_kelas=$this->Kelas_model->getKelasByTugas($tugas);
        $this->db->where('id_tugas', $tugas);
        $this->db->delete('tugas');
        unlink('./file/tugas/'.$filename); // This is an absolute path to the file
        redirect('guru/lihat_kelas/'.$id_kelas, 'refresh');
    }

    public function hasil_tugas()
    {
        $data = array(
        'title' => 'Kelas',
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/hasil_tugas');
        $this->load->view('template/footer');
    }
    public function data_siswa($id_kelas)
    {
        $data = array(
        'title' => 'Kelas',
        'siswa'=>$this->Kelas_model->getSiswaByKelas($id_kelas),
        'kelas'=>$this->Kelas_model->getKelasById($id_kelas),
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_guru');
        $this->load->view('guru/data_siswa');
        $this->load->view('template/footer');
    }

    public function file_tugas()
    {
        $data = array(
      'title' => 'Kelas',
    );
        $this->load->view('template/header', $data);
        $this->load->view('guru/file_tugas');
    }
    public function download_materi($id_kelas, $id_materi, $filename)
    {
        force_download('./file/materi/'.$id_kelas.'/'.$filename, null);
        redirect('guru/materi/'.$id_kelas.'/'.$id_materi);
    }
    public function download_tugas($file)
    {
        force_download('file/tugas/'.$file, null);
        redirect('guru/lihat_tugas/');
    }
}
