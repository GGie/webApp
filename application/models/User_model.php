<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	public function __construct()
	{
		//parent::__construct();
	}
	
	//$param == user_id
	public function getByUserId($param)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $param);
		
		return $this->db->get()->row();
	}

	public function getUserOnline($limit = "")
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id !=', user_id());
		
		if(!empty($limit))
			$this->db->limit($limit);

		return $this->db->get();
	}

	public function last_password()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', user_id());
		$this->db->order_by('input_date', 'DESC');

		$this->db->limit(1);
		
		return $this->db->get()->row();
	}
	
}

/* End of file User_model.php */
/* Location: ./application/model/User_model.php */