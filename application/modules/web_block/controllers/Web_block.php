<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_block extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();      
    }

    public function index()
    {
        $this->benchmark->mark('code_start'); 
        $this->load->view('home_v');       
        $this->benchmark->mark('code_end');
    }
}
