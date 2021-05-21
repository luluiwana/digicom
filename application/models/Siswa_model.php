<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Siswa_model extends CI_Model {
      

public function getNamaKelas($id_kelas)
{
    #get ClassName based on id_kelas
    #SELECT * FROM kelas WHERE id_kelas=1
    $this->db->where('id_kelas',$id_kelas);
    $row=$this->db->get('kelas')->row();
    return $row->nama_kelas;
}
public function getGuru($id_kelas)
{
    # get id_guru
    $this->db->where('id_kelas', $id_kelas);
    $row=$this->db->get('kelas')->row();
    $id_user = $row->id_user;

    # get nama guru
    $this->db->where('id_user', $id_user);
    $row=$this->db->get('users')->row();
    return $row->nama;
}
public function countMateri($id_kelas)
{
    // SELECT COUNT(*) as c FROM materi WHERE id_kelas=1
    $this->db->select('count(*) as c');
    $this->db->where('id_kelas',$id_kelas);
    $row=$this->db->get('materi')->row();
    return $row->c;
}

public function countTugas($id_kelas)
{
    // SELECT COUNT(*) as c FROM materi WHERE id_kelas=1
    $this->db->select('count(*) as c');
    $this->db->where('id_kelas',$id_kelas);
    $row=$this->db->get('tugas')->row();
    return $row->c;
}
public function materi()
{
    $id_kelas = $this->session->userdata('kelas');
    $this->db->where('id_kelas',$id_kelas);
    return $this->db->get('materi')->result();
}
public function tugas()
{
    $id_kelas = $this->session->userdata('kelas');
    $this->db->where('id_kelas',$id_kelas);
    return $this->db->get('tugas')->result();
}
public function getMateriById($id_materi)
{
    $this->db->where('id_materi',$id_materi);
    return $this->db->get('materi')->result();
}
public function getTugasById($id_tugas)
{
    $this->db->where('id_tugas',$id_tugas);
    return $this->db->get('tugas')->result();
}

                        
                            
                        
}
                        
/* End of file Siswa.php */
    
                        