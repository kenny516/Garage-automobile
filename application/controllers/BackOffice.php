<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('back-office/login');
    }
}