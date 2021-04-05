<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('index');
    }
    public function login()
    {
        $this->load->view('template/login_header');
        $this->load->view('template/login');
        $this->load->view('template/login_footer');
    }
    public function daftar()
    {
        $this->load->view('template/login_header');
        $this->load->view('template/daftar');
        $this->load->view('template/login_footer');
    }
    public function logout()
    {
        redirect('auth');
    }
    public function loginp()
    {
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      if($username=="guru" && $password=="guru"){
        redirect('guru');
      }
        elseif($username=="siswa" && $password=="siswa"){
        redirect('siswa');
      }
     else {
        redirect('auth/login');

     }
    }
}
