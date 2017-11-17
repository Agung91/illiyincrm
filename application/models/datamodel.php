<?php 

class Datamodel extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('industry');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);		
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;
	}
	
	function tampil_data_company(){
		return $this->db->get('company');
	}
	
	function input_data_company($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data_company($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
    function edit_data_company($where,$table){
		return $this->db->get_where($table,$where);		
	}
	
	function update_data_company($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;
	}
	
	function ambil_data_industry(){
		return $this->db->get('industry');
	}
    
    function tampil_data_customer(){
		return $this->db->get('customer');
	}
    
    function input_data_customer($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data_customer($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
        return true;
	}
	
	function edit_data_customer($where,$table){
		return $this->db->get_where($table,$where);		
	}
	
	function update_data_customer($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;
	}
    
    function ambil_data_company(){
		return $this->db->get('company');
    }
    function detail_data_customer($where,$table){
		return $this->db->get_where($table,$where);		
	}
    
    function tampil_user(){
        return $this->db->get('user');
    }
    
    function input_user($data,$table){
        $this->db->insert($table,$data);
    }
    
    function hapus_user($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
        return true;
    }
    
    function edit_user($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    function update_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        return true;
    }
    
    function tampil_login($where, $table){
        return $this->db->get_where($table, $where);
    }
    
//fungsi untuk menampilkan data per satuan dari tabel database
//    function edit_gambar($where) {
//        $this->db->from($tabel);
//        $this->db->where($where);
//        $query = $this->db->get();
 
//        cek apakah ada data
//        if ($query->num_rows() == 1) {
//            return $query->row();
//        }
//    }
}