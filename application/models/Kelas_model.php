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
    public function countSiswaByClass($id_kelas)
    {
        # SELECT count(*) as c FROM `users` WHERE kelas=1
        $this->db->select('count(*) as c');
        $this->db->where('kelas',$id_kelas);
        $row=$this->db->get('users')->row();
        return $row->c;
    }
    public function countTugasByClass($id_kelas)
    {
        $this->db->select('count(*) as c');
        $this->db->where('id_kelas', $id_kelas);
        $row=$this->db->get('tugas')->row();
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
    public function getSiswaByKelas($id_kelas)
    {
        $this->db->where('kelas',$id_kelas);
        return $this->db->get('users')->result();
    }
    public function getTugasByKelas($id_kelas)
    {
        $this->db->where('id_kelas',$id_kelas);
        return $this->db->get('tugas')->result();
    }
    public function getTugasById($id_tugas)
    {
        $this->db->where('id_tugas',$id_tugas);
        return $this->db->get('tugas')->result();
    }
    public function getKelasByTugas($id_tugas)
    {   
        $this->db->where('id_tugas',$id_tugas);
        $row=$this->db->get('tugas')->row();
        return $row->id_kelas;
    }
    public function getNilaiByTugas($id_tugas)
    {
        // SELECT * FROM users INNER JOIN tugas_siswa WHERE users.id_user=tugas_siswa.id_user AND id_tugas=6
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('tugas_siswa','users.id_user=tugas_siswa.id_user');
        $this->db->where('id_tugas',$id_tugas);
        return $this->db->get()->result();
    }
    public function hasil_tugas($id_tugas,$id_user)
    {
        # SELECT * FROM users INNER JOIN kelas ON users.kelas=kelas.id_kelas INNER JOIN tugas_siswa ON users.id_user=tugas_siswa.id_user WHERE tugas_siswa.id_user=10 AND id_tugas=6
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('kelas', 'users.kelas=kelas.id_kelas');
        $this->db->join('tugas_siswa','users.id_user=tugas_siswa.id_user');
        $this->db->where('tugas_siswa.id_user',$id_user);
        $this->db->where('tugas_siswa.id_tugas',$id_tugas);
        return $this->db->get()->result();
    }
    public function getSuratByTugas($id_tugas,$id_user)
    {
        # SELECT * FROM `surat_user` INNER JOIN surat ON surat.id_surat=surat_user.id_surat WHERE id_tugas=5 AND id_user=10
        $this->db->select('*');
        $this->db->from('surat_user');
        $this->db->join('surat','surat.id_surat=surat_user.id_surat');
        $this->db->where('id_tugas',$id_tugas);
        $this->db->where('id_user', $id_user);
        return $this->db->get()->result();
    }
    public function getDateById($id_tugas)
    {
        $this->db->where('id_tugas',$id_tugas);
        $row=$this->db->get('tugas')->row();
        return $row->date;
    }
    public function updateNilai($data,$id_tugas,$id_user)
    {
        
        $this->db->where('id_tugas',$id_tugas);
        $this->db->where('id_user',$id_user);
        $this->db->update('tugas_siswa', $data);
        
    }
  
   
}
                        
/* End of file Kelas.php */
