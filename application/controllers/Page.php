<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;

		// //redirect jika belum login
		// if (!is_login()){
		// 	redirect(site_url('auth/login'));
		// }

	}

	function test($id = null){
		$this->load->helper("unique_helper");

		echo product_id();
	}
	public function about()
	{
		$title['title'] = "About Goopiz";
		$title['link'] = base_url();
		parent :: header_modif($title);

		$this->load->view('page/about');

		parent :: footer_blank();
	}

	public function term()
	{
		$title['title'] = "Term Goopiz";
		$title['link'] = base_url();
		parent :: header_modif($title);

		$this->load->view('page/term');

		parent :: footer_blank();
	}

	public function privacy()
	{
		$title['title'] = "Privacy Goopiz";
		$title['link'] = base_url();
		parent :: header_modif($title);

		$this->load->view('page/privacy');

		parent :: footer_blank();
	}
}