<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
		
	function __construct()
	{
		parent::__construct();		
		$this->load->model('datamodel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['industry'] = $this->datamodel->tampil_data()->result();
        $this->load->view('template/header');
		$this->load->view('home',$data);
        $this->load->view('template/footer');
	}
	
	public function add()
	{
        $this->load->view('template/header');
		$this->load->view('add');
        $this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
 
		$data = array(
			'name_industry' => $name,
			'description_industry' => $description,
        );
		$this->datamodel->input_data($data,'industry');
		redirect('baru/index');
	}
	
	public function hapus($id)
	{
		$where = array('id_industry' => $id);
		$this->datamodel->hapus_data($where,'industry');
		redirect('baru/index');
	}
	
	public function edit($id)
	{
		$where = array('id_industry' => $id);
		$data['industry'] = $this->datamodel->edit_data($where,'industry')->result();
		$this->load->view('template/header');
		$this->load->view('edit',$data);
		$this->load->view('template/footer');
	}
	
	public function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		
		$data = array(
			'name_industry' => $name,
			'description_industry' => $description, 
		);
		
		$where = array(
			'id_industry' => $id
		);
		$proses = $this->datamodel->update_data($where,$data,'industry');
		if($proses == true){
				redirect('baru/index');
		}else{
			echo $proses;
		}
	}
}