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

	public function getMessageIndex($limit, $page, $user_id)
	{
		$this->db->select('a.group_id, 
			a.to,
			max(a.id) as id, 
			max(a.to) as vto, 
			max(a.from) as vform, 
			max(users.fullname) as fullname, 
			(SELECT b.message FROM messages as b WHERE b.group_id = a.group_id ORDER BY b.id DESC LIMIT 1 ) as msg,
			(SELECT b.input_date FROM messages as b WHERE b.group_id = a.group_id ORDER BY b.id DESC LIMIT 1 ) as input_date,
			(SELECT COUNT(c.message) FROM messages as c WHERE c.group_id = a.group_id  AND c.is_read = "0") as noread 
		');
		$this->db->from('messages as a');
		$this->db->join('users', 'users.user_id = a.to', 'left');
		$this->db->where("a.group_id like '%".$user_id."%' AND a.from = '".$user_id."' ");
		$this->db->group_by('a.group_id');
		$this->db->group_by('a.to');
		return $this->db->get()->result();
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
	
	public function update_flag_read($group_id)
	{
		$this->db->query("UPDATE messages SET is_read = '1' WHERE group_id = '".$group_id."' ");
	}

}