<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;
		// if ( !$this->session->userdata('is_login') ) {
		// 		redirect('login');
		// 		exit;
		// }

		// $this->load->library('Mobile_Detect');
			// $detect = new Mobile_Detect;
			// if (!$detect->isMobile()) {
			    // $this->load->view('chat/chat');
			// }
		$this->load->model('product_model', 'ProductModel');
	}

	public function index()
	{
		$param['title'] = "Social Eccomerce || Belanja Murah";
		parent :: header($param) ;
		
		$param['product'] = $this->ProductModel->getProductAll();
		$param['product2'] = $this->ProductModel->getProductAll2();
		$param['product3'] = $this->ProductModel->getProductAll3();
		$this->load->view('web/index', $param);
		
		parent :: footer() ;
	}

	public function detail($data = "")
	{

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
				// $config['base_url'] = base_url().'p/detail/' . $data . '.php';

				$config['base_url'] = base_url().'p/detail/hobi-olah-raga';

				$offset = ($this->input->get('per_page')) ? $data : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getBySlug(false, $data)->num_rows();
			    $config['per_page'] = 12; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['product'] = $this->ProductModel->getBySlug(true, $data, $config["per_page"], $offset);
    			
			    $title['title'] = str_replace("-", " ", ucwords($data) ) . " | Goopiz";
    			parent :: header($title) ;

				$this->load->view('product/product_kategori', $param);

				parent :: footer();
	}

	public function search()
	{

		//parameter search
		$param['search'] = $this->input->get('search');
		$param['order_by'] = $this->input->get('order_by');
		$param['min'] = $this->input->get('min');
		$param['max'] = $this->input->get('max');

		$this->load->model('search_model', 'SearchModel');

		if(isset($param['search']))
			$this->SearchModel->insert($param['search']);

    	if ($this->input->get('search')){

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
				$config['base_url'] = base_url().'p/search.php?search='.$param['search'].'&order_by='.$param['order_by'].'&min='.$param['min'].'&max='.$param['max'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getSearch(false, $param)->num_rows();
			    $config['per_page'] = 12; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['DataSearch'] = $this->ProductModel->getSearch(true, $param, $config["per_page"], $offset);
    			
    			$title['title'] = $param['search'] . " | Goopiz";
    			parent :: header($title) ;

    			$this->load->view('product/product_search', $param);


    			parent :: footer() ;
    	}

	}

	public function product($param = ""){
		$this->load->model('comments_model', 'CommentsModel');

		//$id == Product_id
		$id = explode("-", $param)[0] ;


		$data['product'] = $this->ProductModel->getProductId($id);
		$data['commentsRows'] = $this->CommentsModel->getByProductId($id)->num_rows();
		$data['comments'] = $this->CommentsModel->getComment($id, true);
		$data['images'] = $this->ProductModel->getImage($id);
		$data['music'] = $this->ProductModel->getMusic($id);
		$data['document'] = $this->ProductModel->getDocx($id);

		if ($data['product'] == null)
			show_404();

		//increment view product
		increment_product_view($id);
		if(!$data['product']){
			show_404();
			exit;
		}

		$title['title'] = $data['product']->product_name;
		$title['desc'] = meta_desc($data['product']->description);
		

		if (is_mobile()) {
			$this->load->view('product/product_mobile', $data);
		} else {
			parent :: header($title) ;
			//$this->load->view('product/product_index', $data);
		}
		
		parent :: footer_blank() ;
	}

	public function report_r($param = null){
		//redirect jika belum login
		if (!is_login()){
			redirect(site_url('auth/login'));
		}

		if ($param == "")
			exit("Error(0)");

		$title['title'] = "Report Messages";
		$title['link'] = base_url();
		parent :: header_modif($title);

		$data['return'] = $param;

		if (is_mobile()) {
			$this->load->view('product/report_messages', $data);
		} else {
			//blank
		}


		parent :: footer_blank() ;
	}

	public function report($productId)
	{
		//redirect jika belum login
		if (!is_login()){
			redirect(site_url('auth/login'));
		}
		
		
		$data["product"] = $this->ProductModel->getProductId($productId);

		if ($data["product"] == null)
			exit("Product tidak ditemukan");

		//save submit
		if($this->input->post('report_desc')){
			$return = $this->ProductModel->getProductReport($productId, user_id());

			if ($return == null){ 
				$this->db->insert('product_report',array(
					'desc'			=> $this->input->post('report_desc'),
					'product_id'	=> $productId,
					'user_id'		=> user_id(),
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));
				redirect(base_url('p/report_r/true'));
			} else {
				redirect(base_url('p/report_r/false'));
			}
		}

		$title['title'] = "Report Produk";
		$title['link'] = base_url();
		parent :: header_modif($title);

		if (is_mobile()) {
			$this->load->view('product/report_product', $data);
		} else {
			//blank
		}
		
		parent :: footer_blank() ;
	}

	public function comment( $param = "" )
	{
		if ($param == 'add'){

			if(!user_id())
				redirect(link_ref());

				$this->db->insert('comments',array(
					'product_id'	=> $this->input->post('product_id',true),
					'com_parent_id'	=> $this->input->post('com_parent_id',true),
					'comment'		=> $this->input->post('comment',true),
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));
			redirect(link_ref());

		} else {
			exit('No access');
		}

	}
	public function tes()
	{
		$this->load->library('rajaongkir');
		// $provinces = $this->rajaongkir->province();

		// 	$queries = json_decode($provinces);
		// foreach($queries as $query){
			
		// 	 $this->db->insert('payers', $data);
		// 	foreach($query->results as $result){

		// 		$data = array(
		// 			'province_id' => $result->province_id,
		// 			'province' => $result->province,
		// 		);
		// 		$this->db->insert('province', $data);
			
		// 	}

		// }
		//$cost = $this->rajaongkir->subdistrict(151);

		$cost = $this->rajaongkir->cost(501, 114, 10, "jne");
		echo var_dump($cost);

	// 	$json_pretty = json_encode(json_decode($cost), JSON_PRETTY_PRINT);
	// 		echo $json_pretty;
	}
	public function test(){
		$data = $this->db->get('kategory');

		foreach ($data->result() as $k){
			$this->db->where('kategori_id', $k->kategori_id);
			$this->db->update('kategory', array('slug' => replace_url_char($k->detail)));
			echo $k->detail . "<br>";
		}
	}

}

/* End of file P.php */
/* Location: ./application/controller/P.php */