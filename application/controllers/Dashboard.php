<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Ci_Controller
{
    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view("dashboard");
        $this->load->view('inc/footer');
    }
}