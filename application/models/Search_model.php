<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {
	
	public function insert($param)
	{
		$this->db->insert('search_key',array(
			'keyword'		=> $param,

			'input_by'		=> user_id(),
			'input_date'	=> date('Y-m-d H:i:s')
		));
	}


	public function getKeyword()
	{
		return $this->db->query("SELECT keyword, count(id) as count FROM search_key GROUP BY keyword ORDER BY count DESC LIMIT 5")->result();
	}

}