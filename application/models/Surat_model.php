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

    public function add_dinas($data_surat, $user)
    {
        $this->db->insert('surat', $data_surat);

        $data_tugas = array(
            'id_surat' => $this->db->insert_id(),
            'id_user' => $user,
            'id_tugas' => 1
        );
        $this->db->insert('surat_user', $data_tugas);
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
    
}
