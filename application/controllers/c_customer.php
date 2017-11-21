<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller{
    
    function __construct(){
		parent::__construct();
        
		$this->load->model('datamodel');
		$this->load->helper(array('form', 'url'));
//        $this->load->library('session');
        if($this->session->userdata('status') != "c_login"){
			redirect('c_login');
		}
	}
    
    public function index(){
        $this->db->select('id_customer, name_customer, email_customer, phone_customer, jobtitle_customer, company_id, id_company,name_company, email_company, web_company, address_company, description_company, industry_id');
        $this->db->from('customer');
        $this->db->join('company', 'customer.company_id=company.id_company');
		$data['customer'] = $this->db->get()->result();
//        $data['customer'] = $this->datamodel->tampil_data_customer()->result();
        $this->load->view('template/header');
        $this->load->view('h_cus',$data);
        $this->load->view('template/footer');
    }
    
    public function addcustomer(){
        $data['company'] = $this->datamodel->ambil_data_company()->result_array();
        $this->load->view('template/header');
        $this->load->view('addcus',$data);
        $this->load->view('template/footer');
    }
    
    public function upload_aksi(){
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = '.gif|jpg|png|jpeg';
        $config['max_size']         = '10000';
        $config['max_width']        = '5000';
        $config['max_height']       = '5000';
        
//        $this->load->library('C_customer', $config);
        
//        if ( ! $this->upload->do_upload('berkas')){
//            $error = array('error' => $this->C_customer->display_errors());
//            $this->load->view('v_upload', $error);
//        }else{
//            $data = array('upload_data' => $this->C_customer->data());
//            $this->load->view('v_upload_sukses', $data);
//        }
    }
    
    public function tambah_aksi(){
		$name     = $this->input->post('name');
		$email    = $this->input->post('email');
		$phone    = $this->input->post('phone');
		$job      = $this->input->post('job');
        $company  = $this->input->post('company');
        $berkas   = $_FILES['berkas']['name'];
        $sourc    = $_FILES['berkas']['tmp_name'];
        $destination = "upload/".$_FILES['berkas']['name'];
        move_uploaded_file($sourc,$destination);
        
        $data = array(
            'name_customer'     => $name,
			'email_customer'    => $email,
			'phone_customer'    => $phone,
			'jobtitle_customer' => $job,
            'upload_customer'   => $berkas,
            'company_id'        => $company
			);
		$this->datamodel->input_data_customer($data,'customer');
		redirect('c_customer/index');
	}
    
    public function hapus($id){
		$where = array('id_customer' => $id);
		$this->datamodel->hapus_data_customer($where,'customer');
		redirect('c_customer/index');
	}
	
	public function edit($id){
		$where = array('id_customer' => $id);
        $data['company'] = $this->datamodel->ambil_data_company()->result_array();
		$data['customer'] = $this->datamodel->edit_data_customer($where,'customer')->result();
		$this->load->view('template/header');
		$this->load->view('editcus',$data);
		$this->load->view('template/footer');
	}
	
	public function update(){
		$id       = $this->input->post('id');
		$name     = $this->input->post('name');
		$email    = $this->input->post('email');
		$phone    = $this->input->post('phone');
		$job      = $this->input->post('job');
        $company  = $this->input->post('company');
//        $berkas   = $_FILES['berkas']['name'];
//        $sourc    = $_FILES['berkas']['tmp_name'];
//        $destination = "upload/".$_FILES['berkas']['name'];
//        move_uploaded_file($sourc,$destination);
        
                $config['upload_path']      = './upload/';
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = '100';
                $config['max_width']        = '5000';
                $config['max_height']       = '5000';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('berkas'))
                {
                 $data = array(
                    'name_customer'      => $name,
			        'email_customer'     => $email, 
                    'phone_customer'     => $phone, 
                    'jobtitle_customer'  => $job,
                    'company_id'         => $company,
                    );
                    
                }else{
		          $data = array(
			         'name_customer'      => $name,
			         'email_customer'     => $email, 
                     'phone_customer'     => $phone, 
                     'jobtitle_customer'  => $job,
                     'upload_customer'    => $this->upload->data('file_name'),
                     'company_id'         => $company,
		          );
                }
		
		$where = array(
			'id_customer' => $id
		);
		$proses = $this->datamodel->update_data_customer($where,$data,'customer');
		if($proses == true){
				redirect('c_customer/index');
		}
		else{
			echo $proses;
		}
	}
    
    public function detail($id){
        $where = array('id_customer' => $id);
		$this->datamodel->detail_data_customer($where,'customer');
        $this->db->select('id_industry, name_industry, description_industry, id_company, name_company, email_company, web_company, address_company, description_company, industry_id, id_customer, name_customer, email_customer, phone_customer, jobtitle_customer, upload_customer, company_id');
        $this->db->from('customer');
        $this->db->join('company', 'customer.company_id=company.id_company');
        $this->db->join('industry', 'company.industry_id=industry.id_industry');
        $this->db->where($where);
        $data['customer'] = $this->db->get()->result();
//        $data['customer'] = $this->datamodel->tampil_data_customer()->result();
        $this->load->view('template/header');
        $this->load->view('detailcus', $data);
        $this->load->view('template/footer');
    }  
}