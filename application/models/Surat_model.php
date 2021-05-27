<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }

    public function add_dinas($data_surat, $user, $id_tugas)
    {
        $this->db->insert('surat', $data_surat);

        $data_tugas = array(
            'id_surat' => $this->db->insert_id(),
            'id_user' => $user,
            'id_tugas' => $id_tugas
        );
        
        $this->db->insert('surat_user', $data_tugas);
        #SELECT * FROM tugas_siswa WHERE id_tugas=6 AND id_user=11
        $nilai_siswa = array(
            'nilai'=>0,
            'id_user' => $user,
            'id_tugas' => $id_tugas
        );
        $this->db->select('count(*) as c');
        $this->db->where('id_tugas',$id_tugas);
        $this->db->where('id_user',$user);
        $row=$this->db->get('tugas_siswa')->row();
        if($row->c==0){
            $this->db->insert('tugas_siswa', $nilai_siswa);
        }
    }
    public function getPreviewId($id_user)  
    {
        $this->db->select('max(surat_user.id_surat) as max');
        $this->db->from('surat');
        $this->db->join('surat_user','surat_user.id_surat=surat.id_surat');
        $this->db->where('surat_user.id_user',$id_user);
        $row = $this->db->get()->row();
        return $row->max;
    }
    public function getSurat($id_surat)
    {   $this->db->where('id_surat',$id_surat);
        return $this->db->get('surat')->result();
    }
    public function getJenisSurat($id_surat)
    {
       $this->db->where('id_surat',$id_surat);
        $row=$this->db->get('surat')->row();
        return $row->jenis_surat.'_'.$row->style;
    }
    public function getSuratByTugas($id_tugas)
    {
        # SELECT * FROM `surat_user` INNER JOIN surat ON surat.id_surat=surat_user.id_surat WHERE id_tugas=5 AND id_user=10
        $id_user=$this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('surat_user');
        $this->db->join('surat','surat.id_surat=surat_user.id_surat');
        $this->db->where('id_tugas',$id_tugas);
        $this->db->where('id_user', $id_user);
        return $this->db->get()->result();
    }
    
}
