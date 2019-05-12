<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Diskusi extends CI_Controller {

	public function __construct()
	{
		parent :: __construct() ;
		if (!is_login()){
			redirect(site_url('auth/login'));
		}

		$this->load->model('product_model', 'ProductModel');
		$this->load->model('cart_model', 'CartModel');
		$this->load->model('order_model', 'OrderModel');
		$this->load->model('payment_model', 'PaymentModel');
	}

	public function p($productId){

		$data["product"] = $this->ProductModel->getProductId($productId);

		if( !$data["product"] )
			exit("Diskusi Tidak Ditemukan");

		if (is_mobile()) {
			$this->load->view('diskusi/diskusi_mobile', $data);
		} else {
			parent :: header($title) ;
			//$this->load->view('', $data);
		}

		
		parent::footer_blank();
	}


}

/* End of file Diskusi.php */
/* Location: ./application/controller/Diskusi.php */