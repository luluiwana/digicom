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

    public function dinas_blok($data_surat, $user)
    {
        $this->db->insert('surat', $data_surat);

        $data_tugas = array(
            'id_surat' => $this->db->insert_id(),
            'nama_user' => $user,
            'id_tugas' => 1
        );
        $this->db->insert('surat_user', $data_tugas);
    }
}
