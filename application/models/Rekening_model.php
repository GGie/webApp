<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekening_model extends CI_Model {

	public function RekeningByInput($pages = false, $search, $limit = 20, $page = 1)
	{
		$this->db->select('a.*, c.bankName');
		$this->db->from('rekening as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->join('bank as c', 'c.bankCode = a.bankCode');
		$this->db->where('a.input_by', user_id());
		$this->db->order_by('a.type', 'DESC');
		
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}


	public function getInputBy($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('a.*, c.bankName');
		$this->db->from('rekening as a');
		$this->db->join('bank as c', 'c.bankCode = a.bankCode');
		$this->db->where('a.rekening_id', $paramId);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}
	
}

/* End of file Rekening_model.php */
/* Location: ./application/model/Rekening_model.php */