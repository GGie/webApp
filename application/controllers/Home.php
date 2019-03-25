<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent :: __construct() ;

		//redirect jika belum login
		if (!is_login()){
			redirect(site_url('auth/login'));
		}

		$this->load->model('product_model', 'ProductModel');
	}

	public function index()
	{
		$param['title'] = "Social Eccomerce || Belanja Murah";
		parent :: header($param) ;
		
		$param['product'] = $this->ProductModel->getProductAll();
		$param['product2'] = $this->ProductModel->getProductAll2();
		$param['product3'] = $this->ProductModel->getProductAll3();

		$param['list_chat'] = $this->chat_desktop();

		$this->load->view('home/home', $param);

		$this->load->view('web/footer_blank');
	}

	public function load()
	{
		$item_per_page = 5;

		$page_number = $_POST["page"];
		$position = (($page_number-1) * $item_per_page);
		
		$param['product'] = $this->ProductModel->getProductAll(5, $this->input->post('page'));

		$this->load->view('home/load_product', $param);
	}

	public function chat_desktop(){
		$this->load->model('user_model', 'UsersModel');

		$data["users"] = $this->UsersModel->getUserOnline(10);

		$this->load->view('messages/list_chat', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controller/Home.php */