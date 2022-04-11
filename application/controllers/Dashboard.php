<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('M_Dashboard');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard');
        $this->load->view('layouts/footer');
    }
}
