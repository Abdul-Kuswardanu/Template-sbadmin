<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view("update_profil/profil");
        $this->load->view('inc/footer');

    }

    public function update_profil()
    {
        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view("update_profil/update_profil");
        $this->load->view('inc/footer');
    }
    public function ganti()
    {
        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view("ganti_password/ganti_password");
        $this->load->view('inc/footer');
    }
}
