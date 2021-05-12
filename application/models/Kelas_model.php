<?php

defined('BASEPATH') or exit('No direct script access allowed');
                        
class Kelas_model extends CI_Model
{
    public function jml_kelas()
    {
        $this->db->select('count(*) as jml');
        $this->db->where('id_user', $this->session->userdata('id'));
        $row=$this->db->get('kelas')->row();
        return $row->jml;
    }
    public function countMateriByClass($id_kelas)
    {
        #SELECT COUNT(*) as c FROM `materi` WHERE id_kelas=2
        $this->db->select('count(*) as c');
        $this->db->where('id_kelas',$id_kelas);
        $row=$this->db->get('materi')->row();
        return $row->c;
    }
    public function getKelasLimit()
    {
        $this->db->where('id_user', $this->session->userdata('id'));
        $this->db->order_by('id_kelas', 'DESC');
        $this->db->limit(5);
        return $this->db->get('kelas')->result();
    }
     public function getKelas()
    {
        $this->db->where('id_user', $this->session->userdata('id'));
        $this->db->order_by('id_kelas', 'DESC');
        return $this->db->get('kelas')->result();
    }
    public function getKelasById($id_kelas)
    {
        $this->db->where('id_kelas',$id_kelas);
        return $this->db->get('kelas')->result();
    }
    public function getMateriByKelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->order_by('id_materi', 'asc');
        return $this->db->get('materi')->result();
    }
    public function getMateriById($id_materi)  
    {
        $this->db->where('id_materi',$id_materi);
        return $this->db->get('materi')->result();
    }
   
}
                        
/* End of file Kelas.php */
