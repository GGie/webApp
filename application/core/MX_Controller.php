<?php
class MX_Controller extends CI_Controller {

	function __construct()
	{
		parent :: __construct() ;		
	}

	public function header_logo(){
		$this->load->view('web/header_logo');
	}

	public function header_modif($param = ""){

		// if ($this->uri->segment(1) == "cart"){
		// 	return $this->load->view('web/header_cart', $param);
		// } else {
			// $this->load->model('kategory_model', 'kategoryModel');
			// $this->load->model('Cart_model', 'CartModel');
			// $this->load->model('User_model', 'UserModel');
			// $this->load->model('Messages_model', 'MessagesModel');
			
			// $param['data'] 		= $this->kategoryModel->getAll();
			// $param['cart'] 		= $this->CartModel->getCartPending();
			// $param['user'] 		= $this->UserModel->getByUserId(user_id());
			// $param['messages'] 	= $this->MessagesModel->getMessage(user_id());

			return $this->load->view('web/header_modif', $param);
		//}

	}

}

/* End of file MX_Controller.php */
/* Location: ./application/controller/MX_Controller.php */