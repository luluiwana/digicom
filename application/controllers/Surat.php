<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Surat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('level') == '1') {
      $this->load->model('Auth_model');
      $this->load->model('Surat_model');
      $this->load->library('session');
    } else {
      redirect('auth/login');
    }
  }

  public function dinas_blok()
  {
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = $_SESSION['id'] . '_' . round(microtime(true)) . '.' . $temp[1];

    $config['file_name']            = $newfilename;
    $config['upload_path']          = "file/logo_surat/";
    $config['allowed_types']        = '*';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
      echo $this->upload->display_errors();
    } else {
      $data = array(
        'nama_instansi' => $this->input->post('nama_instansi'),
        'jenis_surat' => 'Surat Dinas Blok',
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'kota_tujuan' => $this->input->post('kota'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ucapan' => $this->input->post('ucapan'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        // 'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
      $id_user = $_SESSION['nama'];
      $this->Surat_model->dinas_blok($data, $id_user);

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Dinas Blok_1.pdf";
      $this->load->view('all/dinas_blok', $data);
      // $this->pdf->load_view('all/dinas_blok', $data);
    }
    // 
  }
  public function dinas_hanging()
  {
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = $_SESSION['id'] . '_' . round(microtime(true)) . '.' . $temp[1];

    $config['file_name']            = $newfilename;
    $config['upload_path']          = "file/logo_surat/";
    $config['allowed_types']        = '*';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
      echo $this->upload->display_errors();
    } else {
      $data = array(
        'nama_instansi' => $this->input->post('nama_instansi'),
        'jenis_surat' => 'Surat Dinas Hanging',
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'kota_tujuan' => $this->input->post('kota'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ucapan' => $this->input->post('ucapan'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        // 'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
      $id_user = $_SESSION['nama'];
      $this->Surat_model->dinas_blok($data, $id_user);

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Dinas Blok_1.pdf";
      // $this->load->view('all/dinas_blok', $data);
      $this->pdf->load_view('all/dinas_hanging', $data);
    }
    // 
  }
  public function dinas_fullblok()
  {
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = $_SESSION['id'] . '_' . round(microtime(true)) . '.' . $temp[1];

    $config['file_name']            = $newfilename;
    $config['upload_path']          = "file/logo_surat/";
    $config['allowed_types']        = '*';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
      echo $this->upload->display_errors();
    } else {
      $data = array(
        'nama_instansi' => $this->input->post('nama_instansi'),
        'jenis_surat' => 'Surat Dinas Full Blok',
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'kota_tujuan' => $this->input->post('kota'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ucapan' => $this->input->post('ucapan'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        // 'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
      $id_user = $_SESSION['nama'];
      $this->Surat_model->dinas_blok($data, $id_user);

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Dinas pdf";
      // $this->load->view('all/dinas_blok', $data);
      $this->pdf->load_view('all/dinas_fullblok', $data);
    }
    // 
  }
  public function dinas_semiblok()
  {
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = $_SESSION['id'] . '_' . round(microtime(true)) . '.' . $temp[1];

    $config['file_name']            = $newfilename;
    $config['upload_path']          = "file/logo_surat/";
    $config['allowed_types']        = '*';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
      echo $this->upload->display_errors();
    } else {
      $data = array(
        'nama_instansi' => $this->input->post('nama_instansi'),
        'jenis_surat' => 'Surat Dinas Semi Blok',
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'kota_tujuan' => $this->input->post('kota'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ucapan' => $this->input->post('ucapan'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        // 'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
      $id_user = $_SESSION['nama'];
      $this->Surat_model->dinas_blok($data, $id_user);

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Dinas pdf";
      // $this->load->view('all/dinas_blok', $data);
      $this->pdf->load_view('all/dinas_semiblok', $data);
    }
    // 
  }

  public function dinas_intended()
  {
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = $_SESSION['id'] . '_' . round(microtime(true)) . '.' . $temp[1];

    $config['file_name']            = $newfilename;
    $config['upload_path']          = "file/logo_surat/";
    $config['allowed_types']        = '*';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
      echo $this->upload->display_errors();
    } else {
      $data = array(
        'nama_instansi' => $this->input->post('nama_instansi'),
        'jenis_surat' => 'Surat Dinas Intended',
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'kota_tujuan' => $this->input->post('kota'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'ucapan' => $this->input->post('ucapan'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        // 'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
      $id_user = $_SESSION['nama'];
      $this->Surat_model->dinas_blok($data, $id_user);

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Dinas pdf";
      // $this->load->view('all/dinas_blok', $data);
      $this->pdf->load_view('all/dinas_intended', $data);
    }
    // 
  }
}


/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */