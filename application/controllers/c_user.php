<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('datamodel');
        $this->load->helper(array('form', 'url'));
    }
    
    public function index(){
        $data['user'] = $this->datamodel->tampil_user()->result();
        $this->load->view('template/header');
        $this->load->view('h_user', $data);
        $this->load->view('template/footer');
    }
    
    public function adduser(){
        $this->load->view('template/header');
        $this->load->view('adduser');
        $this->load->view('template/footer');
    }
    
    public function tambah_aksi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama     = $this->input->post('nama');
        $email    = $this->input->post('email');
        
        $data = array(
            'username'     => $username,
            'password'     => $password,
            'nama_lengkap' => $nama,
            'email'        => $email,
        );
        $this->datamodel->input_user($data,'user');
        redirect('c_user/index');
    }
    
    public function hapus($id){
        $where = array('id_user' => $id);
        $this->datamodel->hapus_user($where,'user');
        redirect('c_user/index');
    }
    
    public function edituser($id){
        $where = array('id_user' => $id);
        $data['user'] = $this->datamodel->edit_user($where,'user')->result();
        $this->load->view('template/header');
        $this->load->view('edituser', $data);
        $this->load->view('template/footer');
    }
    
    public function update(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama,
            'email' => $email,
        );
        
        $where = array(
            'id_user' => $id
        );
        $proses = $this->datamodel->update_user($where,$data,'user');
        if($proses = true){
            redirect('c_user/index');
        }else{
            echo $proses;
        }
    }
}