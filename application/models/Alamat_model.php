<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alamat_model extends CI_Model {

	public function alamatByInput($pages = false, $search, $limit = 20, $page = 1)
	{
		$this->db->select('a.*, c.province, c.city_name');
		$this->db->from('alamat as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->join('city as c', 'c.city_id = a.pro_kec');
		$this->db->where('a.input_by', user_id());
		$this->db->order_by('a.type', 'DESC');
		
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}


	public function getInputBy($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('alamat_id', $paramId);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}

	//$param == user_id
	public function getAlamatByUserId($param)
	{
		//$paramId == alamat_id
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('type', 1);
		$this->db->where('input_by', $param);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}

	public function checkAlamat($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('input_by');
		$this->db->from('alamat');
		$this->db->where('alamat_id', $paramId);
		
		return $this->db->get()->row()->input_by;
	}

	
}

/* End of file Alamat_model.php */
/* Location: ./application/model/Alamat_model.php */