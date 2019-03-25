<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;		
		
	}

	public function index($userid = NULL)
	{

	}

	public function users($user_id = ""){
		$this->load->model(('Product_model'), 'ProductModel');
		$this->load->model('User_model', 'UsersModel');

		//parameter search
		$param['search'] = $this->input->get('search');
		$param['order_by'] = $this->input->get('order_by');
		$param['min'] = $this->input->get('min');
		$param['max'] = $this->input->get('max');
		$param['user_id'] = $user_id;

    	if (user_id()){

    			$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
    			$config['full_tag_open'] = '<div class="tt-pagination"><div class="pagination"><ul>';
				$config['full_tag_close'] = '</ul></div></div>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<a class="active"><li>';
				$config['cur_tag_close'] = '</li></a>';
				$config['prev_tag_open'] = '<li class="">';
				$config['prev_tag_close'] = '<li>';
				$config['next_tag_open'] = '<li class="">';
				$config['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['first_link'] = '<li class="">FIRST</li>';
				$config['first_tag_open'] = '<li class="">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = '<li class="">LAST</li>';
				$config['last_tag_open'] = '<li class="">';
				$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;
				//$config['suffix'] = '?&search='.$data['search'] ;
				$config['base_url'] = base_url().'users/users.php?search='.$param['search'].'&order_by='.$param['order_by'].'&min='.$param['min'].'&max='.$param['max'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getSearch(false, $param)->num_rows();
			    $config['per_page'] = 12; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['product'] = $this->ProductModel->getSearch(true, $param, $config["per_page"], $offset);
    			
    			$title['title'] = $param['search'] . " | Goopiz";
    			parent :: header($title) ;

    			$this->load->view('users/users', $param);

    			parent :: footer_blank() ;
		}
	}



}


/* End of file Users.php */
/* Location: ./application/controller/Users.php */