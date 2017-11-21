<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_company extends CI_Controller {
		
	function __construct()
	{
		parent::__construct();
		$this->load->model('datamodel');
		$this->load->helper('url');
        if($this->session->userdata('status') != "c_login"){
			redirect('c_login');
		}
	}

	public function index()
	{
        $this->db->select('id_company, name_company, email_company, web_company, address_company, description_company, industry_id, id_industry,name_industry, description_industry');
        $this->db->from('company');
        $this->db->join('industry', 'company.industry_id=industry.id_industry');
		$data['company'] = $this->db->get()->result();
//		$data['company'] = $this->datamodel->tampil_data_company()->result();
        
        $this->load->view('template/header');
		$this->load->view('h_com',$data);
        $this->load->view('template/footer');
	}
	public function addcompany()
	{
		$data['industry']	= $this->datamodel->ambil_data_industry()->result_array();
        $this->load->view('template/header');
		$this->load->view('addcom', $data);
        $this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$web = $this->input->post('web');
        $industry = $this->input->post('industry');
 
		$data = array(
			'name_company' => $name,
			'email_company' => $email,
			'web_company' => $web,
            'industry_id' => $industry
			);
		$this->datamodel->input_data_company($data,'company');
		redirect('c_company/index');
	}
	
	public function hapus($id)
	{
		$where = array('id_company' => $id);
		$this->datamodel->hapus_data_company($where,'company');
		redirect('c_company/index');
	}
	
	public function edit($id)
	{
        $where = array('id_company' => $id);
        $data['industry']	= $this->datamodel->ambil_data_industry()->result_array();
		$data['company'] = $this->datamodel->edit_data_company($where,'company')->result();
		$this->load->view('template/header');
		$this->load->view('editcom',$data);
		$this->load->view('template/footer');
	}
	
	public function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$web = $this->input->post('web');
        $industry = $this->input->post('industry');
		
		$data = array(
			'name_company' => $name,
			'email_company' => $email,
			'web_company' => $web,
            'industry_id' => $industry,
		);
		
		$where = array(
			'id_company' => $id
		);
		$proses = $this->datamodel->update_data_company($where,$data,'company');
		if($proses == true){
				redirect('c_company/index');
		}
		else{
			echo $proses;
		}
	}
}