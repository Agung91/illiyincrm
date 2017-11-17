<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('datamodel');

	}

	public function index(){
        if(isset($_SESSION['nama'])){
            redirect('c_customer');
        }
		$this->load->view('h_login');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,
			);
		$cek = $this->datamodel->tampil_login($where, 'admin')->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "c_login"
				);

			$this->session->set_userdata($data_session);
			redirect('c_customer/index');

		}else{
			$this->session->set_flashdata('err', 'Username dan Password salah!');
            redirect('c_login/index');
		}
	}

	public function logout(){
//        $this->session->unset_userdata(array('username' => ''));
		$this->session->sess_destroy();
		redirect('c_login');
	}
}