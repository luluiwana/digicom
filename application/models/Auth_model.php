<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------


  public function daftar_guru($data)
  {
    $this->db->insert('users', $data);
  }

  public function daftar_siswa($data)
  {
    $this->db->insert('users', $data);
  }
  public function getKelas()
  {
    return $this->db->get('kelas')->result();
  }
  // ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */