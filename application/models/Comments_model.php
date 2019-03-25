<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends CI_Model {

	//$paramId == Product_id
	function getByProductId( $paramId ) {

		$this->db->select('a.*, b.fullname');
		$this->db->where('a.product_id', $paramId);
		$this->db->where('a.com_parent_id', 0);
		$this->db->from('comments as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');

		return $this->db->get();
	}

	//$paramId == product_id
	//$parentId == com_parent_id
	function getByParentCom( $paramId, $parentId ) {

		$this->db->select('a.*, b.fullname');
		$this->db->where('a.product_id', $paramId);
		$this->db->where('a.com_parent_id', $parentId);
		$this->db->from('comments as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$query = $this->db->get();

		if( $query->row() ) {
			return $query->result();
		} else{
			return false;
		}
	}

	//$paramId == Product_id
	public function getComment($paramId, $pages = false, $limit = 20, $page = 0)
	{
		$this->db->select('a.*, b.fullname');
		$this->db->from('comments as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->where('a.product_id', $paramId);
		$this->db->where('a.com_parent_id', 0);
		$this->db->order_by("a.input_date", "ASC");
		
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	
}

/* End of file Comments_model.php */
/* Location: ./application/model/Comments_model.php */