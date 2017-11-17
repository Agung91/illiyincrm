<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "c_login"){
			redirect(base_url("c_login"));
		}
	}

	function index(){
		$this->load->view('h_admin');
	}
}