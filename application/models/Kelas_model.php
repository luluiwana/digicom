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
    public function getKelasLimit()
    {
        $this->db->where('id_user', $this->session->userdata('id'));
        $this->db->order_by('id_kelas', 'DESC');
        $this->db->limit(10);
        return $this->db->get('kelas')->result();
    }
}
                        
/* End of file Kelas.php */
