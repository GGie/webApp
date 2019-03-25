<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	
	public function __construct()
	{
		//parent::__construct();
	}
	
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		
		return $this->db->get()->result();
	}

	public function getIdParent()
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		
		return $this->db->get()->result();
	}

	public function getIdParent()
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		
		return $this->db->get()->result();
	}

	
}

/* End of file Dashboard_model.php */
/* Location: ./application/model/Dashboard_model.php */