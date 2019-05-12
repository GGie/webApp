<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages_model extends CI_Model {

	public function getMessage($param)
	{
		$this->db->select('a.*');
		$this->db->from('notification as a');
		$this->db->where('a.to', $param);
		$this->db->limit(4);
		$this->db->order_by('a.input_date', 'DESC');
		
		return $this->db->get();
	}

	public function getByGroupId($param, $limit, $page)
	{
		$offset      = ($page - 1) * $limit;
		$this->db->select('*, (SELECT fullname FROM users WHERE user_id = messages.from) as name_from, (SELECT fullname FROM users WHERE user_id = messages.to) as name_to');
		$this->db->where('group_id', $param);
		$this->db->order_by('id', 'desc');
		return $this->db->get('messages', $limit, $offset);
	}

	public function getMessageIndex($pages = false, $search, $limit = 20, $page = 1)
	{
		if ( $search)
		$this->db->like('message', $search);

		$this->db->like('group_id', user_id());

		$this->db->select('a.*');
		$this->db->from('messages as a');
		$this->db->where('`timestamp` IN', '(SELECT MAX(`timestamp`) FROM messages WHERE group_id LIKE "%' . user_id() . '%" GROUP BY group_id)', false);
		$this->db->order_by('input_date', 'DESC');
		
		if ( $pages )
		$this->db->limit($limit, $page);
	
		return $this->db->get();
	}

	public function get_chat($param, $total, $timestamp = "")
	{
		$limit = 5;
		$page = (($total - $limit) < 0 ) ?  0  : ($total - $limit);

		$a = $param;
		$b = user_id();

		if (substr($a, 1) > substr($b, 1)) {
			$group_id =  $b . $a;
		} else {
			$group_id = $a . $b;
		}

		$this->db->select('a.*, b.fullname, b.avatar');
		$this->db->from('(SELECT * FROM messages ORDER BY input_date desc) as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->where('a.group_id', $group_id);

		if(!empty($timestamp))
		$this->db->where('timestamp >', $timestamp);

		$this->db->order_by('a.timestamp', 'ASC');

		if(empty($timestamp) OR $timestamp == "")
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	public function get_chat_count($group_id)
	{
		$this->db->select('COUNT(message) AS total');
		$this->db->from('messages as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->where('a.group_id', $group_id);
		
		$query = $this->db->get();
		return $query->row()->total;
	}

}