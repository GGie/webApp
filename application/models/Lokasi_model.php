<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi_model extends CI_Model {
	
	public function __construct()
	{
		//parent::__construct();
	}

	public function getName($param)
	{
		$this->db->like('city_name', $param);
		// $this->db->like('province', $param);
		$this->db->select('*');
		$this->db->from('city');
		
		return $this->db->get()->result();
	}
	
}

/* End of file Lokasi_model.php */
/* Location: ./application/model/Lokasi_model.php */