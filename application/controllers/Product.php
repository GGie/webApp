<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent :: __construct() ;

		// $this->load->library('Mobile_Detect');
			// $detect = new Mobile_Detect;
			// if (!$detect->isMobile()) {
			    // $this->load->view('chat/chat');
			// }
		$this->load->model('product_model', 'ProductModel');
	}

	public function index()
	{
		parent :: header() ;
		
		// $param['data'] = $this->ProductModel->getProductAll();
		// $this->load->view('web/index', $param);
		
		parent :: footer() ;
	}

	public function detail()
	{
		parent :: header() ;
		
		$this->load->view('product/detail');
		
		parent :: footer() ;
	}

	public function search()
	{
		$param['search'] = $this->input->get('search');
    	if ($this->input->get('search')){

    			$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
    			$config['full_tag_open'] = '<div class="container xsmall"><div class="pagination"><ul>';
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
				$config['base_url'] = base_url().'product/search.php?search='.$param['search'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getSearch(false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 12; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['DataSearch'] = $this->ProductModel->getSearch(true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			parent :: header() ;

    			$this->load->view('product/product_search', $param);
    	}

		// parent :: header() ;
		

		// $param['data'] = $this->ProductModel->getProductAll();
		// $this->load->view('web/index', $param);
		
		// parent :: footer() ;
	}
}


/* End of file Product.php */
/* Location: ./application/controller/Product.php */