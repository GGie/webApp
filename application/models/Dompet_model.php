<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dompet_model extends CI_Model {


	public function getMutasi($pages = false, $param, $limit = 20, $page = 1) {
		if ( $param['start_date'] )
		$this->db->where('a.input_date >=', date('Y-m-d 00:00:00', strtotime($param['start_date'])) );

		if ( $param['end_date'] )
		$this->db->where('a.input_date <=', date('Y-m-d 23:59:59', strtotime($param['end_date'])) );

		$this->db->where('a.input_by', user_id());
		// if ( $param['search'] )
		// $this->db->like('product_name', $param['search']);
		
		$this->db->select('a.*');
		$this->db->from('log_mutasi as a');

		// if ( $param['order_by'] == 1){
		// 	//Posting Terbaru
		// 	$this->db->order_by('input_by', 'asc');
		// } elseif ( $param['order_by'] == 2){
		// 	//Posting Termurah
		// 	$this->db->order_by('price', 'asc');
		// } elseif ( $param['order_by'] == 3){
		// 	//Posting Termahal
		// 	$this->db->order_by('price', 'desc');
		// } elseif ( $param['order_by'] == 4){
		// 	//Posting Termahal
		// 	$this->db->order_by('view', 'desc');
		// }

		$this->db->order_by('input_date', 'desc');
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	//$paramId == product_id
	//$parentId == com_parent_id
	function getByParentCom( $paramId, $parentId ) {

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

	
}

/* End of file Dompet_model.php */
/* Location: ./application/model/Dompet_model.php */