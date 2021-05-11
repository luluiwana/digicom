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
        date_default_timezone_set('Asia/Jakarta');
    }
    public function preview($id_surat)
    {
      $data = array(
      'title' => 'Tugas',

      'id_surat'=>$id_surat
    );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_siswa');
        $this->load->view('all/preview');
        $this->load->view('template/footer');
    }
    public function cetak_surat($id_surat)
    {
      $data = array(
      'surat' => $this->Surat_model->getSurat($id_surat),
      'jenis' => $this->Surat_model->getJenisSurat($id_surat)
    );

      // print_r($data);die;
      $this->load->library('pdf');
      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat ".$data['jenis']." ".$id_surat.".pdf";
      $this->load->view('all/'.$data['jenis'],$data);
      $this->pdf->load_view('all/'.$data['jenis'],$data);
    }
    public function add_surat()
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
        'jenis_surat' => $this->input->post('jenis_surat'),
        'style'=>$this->input->post('style'),
        'email' => $this->input->post('email'),
        'jenis_instansi' => $this->input->post('jenis_instansi'),
        'alamat_instansi' => $this->input->post('alamat_instansi'),
        'instansi_tujuan' => $this->input->post('instansi_tujuan'),
        'alamat_tujuan' => $this->input->post('alamat_tujuan'),
        'kota_tujuan' => $this->input->post('kota_tujuan'),
        'kota' => $this->input->post('kota'),
        'kode_pos' => $this->input->post('kode_pos'),
        'telp' => $this->input->post('telp'),
        'website' => $this->input->post('website'),
        'logo' => $newfilename,
        'tgl_surat' => $this->input->post('tgl_surat'),
        'tgl_buat' => date("Y-m-d"),
        'nomor_surat' => $this->input->post('nomor'),
        'perihal' => $this->input->post('perihal'),
        'lampiran' => $this->input->post('lampiran'),
        'penerima' => $this->input->post('penerima'),
        'kota' => $this->input->post('kota'),
        'salam_buka' => $this->input->post('salam_pembuka'),
        'isi_surat' => $this->input->post('isi'),
        'salam_tutup' => $this->input->post('salam_penutup'),
        'pengirim' => $this->input->post('nama'),
        'nomor_identitas' => $this->input->post('nip'),
        'jabatan' => $this->input->post('jabatan'),
      );
            $id_user = $this->session->userdata('id');
            $this->Surat_model->add_dinas($data, $id_user);
            $prevId = $this->Surat_model->getPreviewId($id_user);
            // print_r($prevId);die;
      
            redirect('surat/preview/'.$prevId);
      
         
        }
        //
    }
    public function hapus_surat($id_surat)
    {
        # code...
    }
    public function edit_surat($id_surat)
    {
        # code...
    }
    
 
}


/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */
