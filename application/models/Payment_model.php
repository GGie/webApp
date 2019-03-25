<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_model extends CI_Model {
	

	public function getOrderId($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->where('order_id', $paramId);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}

	
}

/* End of file Payment_model.php */
/* Location: ./application/model/Payment_model.php */