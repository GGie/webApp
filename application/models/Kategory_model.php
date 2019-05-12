<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategory_model extends CI_Model {
	
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		$this->db->where('id_parent', 0);
		
		return $this->db->get()->result();
	}

	public function idFom($param)
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		$this->db->where('idForm', $param);
		
		return $this->db->get()->result();
	}

	public function getIdParent($param)
	{
		$this->db->select('*');
		$this->db->from('kategory');
		$this->db->where('is_aktif', 1);
		$this->db->where('id_parent', $param);
		
		return $this->db->get()->result();
	}
	
}

/* End of file Kategory_model.php */
/* Location: ./application/model/Kategory_model.php */