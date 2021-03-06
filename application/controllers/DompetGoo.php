<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DompetGoo extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;
		if ( !$this->session->userdata('is_login') ) {
				redirect(site_url('auth/login'));
				exit;
		}

		//$this->load->model('product_model', 'ProductModel');
		$this->load->model('Dompet_model', 'DompetModel');
		$this->load->model('User_model', 'UsersModel');
	}

	public function coupons()
	{
		$title['title'] = "Kupon Promo";
		$title['link'] = site_url('dashboard');
		parent :: header_modif($title);

		$data['coupons']	= $this->DompetModel->getCoupon();
		$data['users']		= $this->UsersModel->getByUserId(user_id());

		if (is_mobile()) {
			$this->load->view('dompetGoo/coupons_mobile', $data);
		} else {
			parent :: header($title) ;
			//Belum ada
		}

		parent::footer_blank();
	}
	public function detail()
	{
				$param['start_date'] 	= $this->input->get('start_date');
				$param['end_date'] 		= $this->input->get('end_date');
				$param['order_by'] 		= $this->input->get('search');

				$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
			$config['full_tag_open'] = '<div class="pagination basic-pagination"><div class="pagination"><ul>';
			$config['full_tag_close'] = '</ul></div></div>';
			$config['num_tag_open'] = '<li class="z-depth-1">';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="disabled"><a class="z-depth-1">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li class="z-depth-1">';
			$config['prev_tag_close'] = '<li>';
			$config['next_tag_open'] = '<li class="z-depth-1">';
			$config['next_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li class="z-depth-1">';
			$config['num_tag_close'] = '</li>';
			$config['first_link'] = 'FIRST';
			$config['first_tag_open'] = '<li class="">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'LAST';
			$config['last_tag_open'] = '<li class="z-depth-1">';
			$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;
				//$config['suffix'] = '?&search='.$data['search'] ;
				$config['base_url'] = base_url().'dompetgoo/detail.php?start_date='.$param['start_date'].'&end_date='.$param['end_date'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->DompetModel->getMutasi(false, $param)->num_rows();
			    $config['per_page'] = 10; 
			    $this->pagination->initialize($config); 

			    $data["total_rows"] = $config["total_rows"];
			    $data['DataDompet'] = $this->DompetModel->getMutasi(true, $param, $config["per_page"], $offset);

		$title['title'] = "DompetGoo";
		$title['link'] = site_url('dashboard');
		parent :: header_modif($title);


		$data['users']		= $this->UsersModel->getByUserId(user_id());

		if (is_mobile()) {
			$this->load->view('dompetGoo/dompet_detail', $data);
		} else {
			parent :: header($title) ;
			//Belum ada
		}

		parent::footer_blank();
	}
	public function invoice($param = "")
	{
		if ($param == "")
			show_404();

		$data['invoice'] = $this->CartModel->getInvoice($param);

		if ($data['invoice']  == null)
			show_404();

		$this->load->view('web/header_cart');
		$this->load->view('cart/invoice', $data);

		return $this->load->view('web/footer_blank');
	}
	



}


/* End of file DompetGoo.php */
/* Location: ./application/controller/DompetGoo.php */