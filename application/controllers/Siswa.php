<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Siswa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Siswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    if ($this->session->userdata('level') == '1') {
      $this->load->model('Auth_model');
      $this->load->model('Siswa_model');
      $this->load->model('Surat_model');
    } else {
      redirect('auth/login');
    }
  }

  public function index()
  {
    $id_kelas=$this->session->userdata('kelas');

    $data = array(
      'title' => 'Dashboard',
      'nama_kelas'=>$this->Siswa_model->getNamaKelas($id_kelas),
      'guru'=>$this->Siswa_model->getGuru($id_kelas),
      'materi'=>$this->Siswa_model->countMateri($id_kelas),
      'tugas'=>$this->Siswa_model->countTugas($id_kelas),
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/dashboard');
    $this->load->view('template/footer');
  }
  public function profil()
  {
    $data = array(
      'title' => 'Profil'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/profil');
    $this->load->view('template/footer');
  }
  public function materi()
  {
    $data = array(
      'title' => 'Materi',
      'materi'=>$this->Siswa_model->materi(),
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/materi');
    $this->load->view('template/footer');
  }
  public function lihat_materi($id_materi)
  {
    $data = array(
      'title' => 'Materi',
      'materi'=>$this->Siswa_model->getMateriById($id_materi),
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/lihat_materi');
    $this->load->view('template/footer');
  }
  public function tugas()
  {
    $data = array(
      'title' => 'Tugas',
      'tugas'=>$this->Siswa_model->tugas(),
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/tugas');
    $this->load->view('template/footer');
  }
  public function lihat_tugas($id_tugas)
  {
    $data = array(
      'title' => 'Tugas',
      'tugas'=>$this->Siswa_model->getTugasById($id_tugas),
      'id_tugas'=>$id_tugas,
      'surat'=>$this->Surat_model->getSuratByTugas($id_tugas),
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('siswa/lihat_tugas');
    $this->load->view('template/footer');
  }
  public function buat_surat($id_tugas)
  {
    $data = array(
      'title' => 'Tugas',
      'level' => 'siswa',
      'id_tugas'=>$id_tugas,
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/buat_surat');
    $this->load->view('template/footer');
  }
  public function form_surat_dinas($jenis, $style,$id_tugas)
  {
    $data = array(
      'title' => 'Tugas',
      'jenis' => $jenis,
      'style' => $style,
      'level' => 'siswa',
      'id_tugas'=>$id_tugas
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/form_surat_dinas');
    $this->load->view('template/footer');
  }
  public function form_surat_niaga($jenis, $style,$id_tugas)
  {
    $data = array(
      'title' => 'Tugas',
      'jenis' => $jenis,
      'style' => $style,
      'level' => 'siswa',
      'id_tugas'=>$id_tugas
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/form_surat_niaga');
    $this->load->view('template/footer');
  }
  public function form_surat_pribadi($id_tugas)
  {
    $data = array(
      'title' => 'Tugas',
      'level' => 'siswa',
      'id_tugas'=>$id_tugas,
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/form_surat_pribadi');
    $this->load->view('template/footer');
  }

  public function preview()
  {
    $data = array(
      'title' => 'Tugas',
      'level' => 'siswa'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/preview');
    $this->load->view('template/footer');
  }
  public function cetak_surat()
  {
    force_download('file/surat.pdf', NULL);
    redirect('siswa/preview');
  }
  public function cetak_amplop()
  {
    force_download('file/amplop.pdf', null);
    redirect('siswa/preview');
  }
  public function edit_surat()
  {
    $data = array(
      'title' => 'Tugas',
      'level' => 'siswa'
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_siswa');
    $this->load->view('all/edit_surat');
    $this->load->view('template/footer');
  }
}


/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */