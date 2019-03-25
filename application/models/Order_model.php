<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function getOrderById($param)
	{
		$this->db->select('a.*');
		$this->db->from('order as a');
		$this->db->where('a.order_id', $param);
		
		return $this->db->get()->row();
	}

	public function getSKU($param)
	{
		$this->db->select('a.*');
		$this->db->from('order as a');
		$this->db->where('a.product_id', $param);
		$this->db->where('a.input_by', user_id());
		$this->db->where('a.status_order_id', 1);
		$this->db->where('a.is_expired', 0);
		
		return $this->db->get()->row();
	}
	
}

/* End of file Order_model.php */
/* Location: ./application/model/Order_model.php */