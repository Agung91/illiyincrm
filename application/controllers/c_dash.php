<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dash extends CI_Controller {
    
    function __construct(){
		parent::__construct();
        
        if($this->session->userdata('status') != "c_login"){
			redirect('c_login');
		}
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('dashboard');
	}
}
