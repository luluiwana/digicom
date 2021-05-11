<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Guru extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    if ($this->session->userdata('level') == '0') {
      $this->load->model('Auth_model');
    } else {
      redirect('auth/login');
    }
  }

  public function index()
  {
    $data = array(
      'title' => 'Dashboard'
    );
    echo $this->session->userdata('level');
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/dashboard');
    $this->load->view('template/footer');
  }
  public function kelas()
  {
    $data = array(
      'title' => 'Kelas'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/kelas');
    $this->load->view('template/footer');
  }
  public function lihat_kelas()
  {
    $data = array(
      'title' => 'Kelas'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/lihat_kelas');
    $this->load->view('template/footer');
  }
  public function materi()
  {
    $data = array(
      'title' => 'Kelas'
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
  public function surat()
  {
    $data = array(
      'title' => 'Surat'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/surat');
    $this->load->view('template/footer');
  }
  public function buat_surat()
  {
    $data = array(
      'title' => 'Surat',
      'level' => 'guru'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('all/buat_surat');
    $this->load->view('template/footer');
  }
  public function form_surat($jenis, $style)
  {
    $data = array(
      'title' => 'Surat',
      'jenis' => $jenis,
      'style' => $style,
      'level' => 'guru'

    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('all/form_surat');
    $this->load->view('template/footer');
  }
  public function form_surat_pribadi()
  {
    $data = array(
      'title' => 'Surat',
      'level' => 'guru'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('all/form_surat_pribadi');
    $this->load->view('template/footer');
  }
  public function preview()
  {
    $data = array(
      'level' => 'guru',
      'title' => 'Surat'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('all/preview');
    $this->load->view('template/footer');
  }
  public function cetak_surat()
  {
    force_download('file/surat.pdf', NULL);
    redirect('guru/preview');
  }
  public function cetak_amplop()
  {
    force_download('file/amplop.pdf', null);
    redirect('guru/preview');
  }
  public function edit_surat()
  {
    $data = array(
      'title' => 'Surat',
      'level' => 'guru'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('all/edit_surat');
    $this->load->view('template/footer');
  }
  public function tambah_materi()
  {
    $data = array(
      'title' => 'Kelas',
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/tambah_materi');
    $this->load->view('template/footer');
  }
  public function edit_materi()
  {
    $data = array(
      'title' => 'Kelas',
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/edit_materi');
    $this->load->view('template/footer');
  }
  public function tambah_tugas()
  {
    $data = array(
      'title' => 'Kelas',
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/tambah_tugas');
    $this->load->view('template/footer');
  }
  public function lihat_tugas()
  {
    $data = array(
      'title' => 'Kelas',
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/lihat_tugas');
    $this->load->view('template/footer');
  }
  public function edit_tugas()
  {
    $data = array(
      'title' => 'Kelas',
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_guru');
    $this->load->view('guru/edit_tugas');
    $this->load->view('template/footer');
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
  public function data_siswa()
  {
    $data = array(
      'title' => 'Kelas',
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
  public function download_materi()
  {
    force_download('file/materi/1.pdf', NULL);
    redirect('guru/materi');
  }
  public function download_tugas()
  {
    force_download('file/materi/1.pdf', NULL);
    redirect('guru/lihat_tugas');
  }
}
