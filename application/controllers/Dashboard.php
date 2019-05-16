<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;

		//redirect jika belum login
		if (!is_login()){
			redirect(site_url('auth/login'));
		}

		$this->load->library('Mobile_Detect');
		$this->load->model('Kategory_model', 'KategoryModel');
		$this->load->model('Product_model', 'ProductModel');
		$this->load->model('Alamat_model', 'AlamatModel');
		$this->load->model('Order_model', 'OrderModel');
	}

	public function index()
	{
		$this->load->model('User_model', 'UserModel');

		if (!user_id()){
			redirect(site_url('auth/login'));
		}


		$title['title'] = "Dashboard";
		$title['buttonBack'] = "Dashboard";
		$title['link'] = base_url();

		parent :: header_modif($title);

		$data['user'] = $this->UserModel->getByUserId(user_id());

		if (is_mobile()) {
			$this->load->view('dashboard/dashboard', $data);
		} else {
			parent :: header($title) ;
			//Belum ada
		}

		parent::footer_blank();
	}

	public function sell()
	{
			$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
			$config['first_link'] = '<li class="">FIRST</li>';
			$config['first_tag_open'] = '<li class="">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = '<li class="z-depth-1">LAST</li>';
			$config['last_tag_open'] = '<li class="z-depth-1">';
			$config['last_tag_close'] = '</li>';
			$config['page_query_string'] = TRUE;
			$config['use_page_numbers'] = FALSE;
			//$config['suffix'] = '?&search='.$data['search'] ;
			$config['base_url'] = base_url().'dashboard/sell';

			$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
			$config['uri_segment'] = 2;
		   	$config["total_rows"] = $this->ProductModel->getProductSell($this->session->userdata('user_id'), false, $this->input->get('search'))->num_rows();
		    $config['per_page'] = 10; 
		    $this->pagination->initialize($config); 

		    $param["total_rows"] = $config["total_rows"];
		    $param['Dataproduct'] = $this->ProductModel->getProductSell($this->session->userdata('user_id'), true, $this->input->get('search'), $config["per_page"], $offset);

			$title['title'] = "Product Jual";
			$title['link'] = site_url('dashboard');

			parent :: header_modif($title);

			if (is_mobile()) {
				$this->load->view('dashboard/product_sell_mobile', $param);
			} else {
				parent :: header($title) ;
				//Belum ada
			}

			parent :: footer_blank() ;
	}

	public function products()
	{
		$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['first_link'] = '<li class="">FIRST</li>';
				$config['first_tag_open'] = '<li class="">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = '<li class="z-depth-1">LAST</li>';
				$config['last_tag_open'] = '<li class="z-depth-1">';
				$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;
				//$config['suffix'] = '?&search='.$data['search'] ;
				$config['base_url'] = base_url().'dashboard/product_list';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getSearchInputBy($this->session->userdata('user_id'), false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 10; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['Dataproduct'] = $this->ProductModel->getSearchInputBy($this->session->userdata('user_id'), true, $this->input->get('search'), $config["per_page"], $offset);

		$title['title'] = "Product";
		$title['buttonBack'] = "Dashboard";

		parent :: header_modif($title);
		$this->load->view('dashboard/product', $param);

		parent :: footer_blank() ;
	}

	public function rekening_list()
	{
				$this->load->model('rekening_model', 'RekeningModel');

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'dashboard/rekening_list';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->RekeningModel->RekeningByInput(false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['DataRekening'] = $this->RekeningModel->RekeningByInput(true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->view_dashboard('dashboard/rekening_list', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
	}

	public function rekening($param = ""){
		$this->load->model('rekening_model', 'RekeningModel');
		$user_id = $this->session->userdata('user_id');

		if ( $param == 'add'){
			$this->view_dashboard('dashboard/rekening_add');
		} elseif ( $param == 'save' AND $this->input->post('bankAccount') != "" ) {

			if (is_set_rekening(user_id())) {
				$type = 0;
			} else {
				$type = 1;
			}
				$this->db->insert('rekening',array(
					'rekening_id'	=> auto_number('REKENING'),
					'bankCode'		=> $this->input->post('bankCode',true),
					'bankAccount'	=> $this->input->post('bankAccount',true),
					'beneficiary'	=> $this->input->post('beneficiary',true),
					'type'			=> $type,

					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));


				redirect(site_url('dashboard/rekening_list'));
		}  elseif ( $param == 'edit'){
			$id = $this->input->get('id');

			if ( !$id )
				exit("No access");

			$access = $this->RekeningModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				$data['data'] = $access;
				$this->view_dashboard('dashboard/rekening_edit', $data);
			}
		} elseif ( $param == 'update'){
			$id = $this->input->post('rekening_id');
			$ref = $this->input->post('link_ref') ? $this->input->post('link_ref') : site_url('dashboard/rekening_list');
			
			if ( !$id )
				exit("No access");

			$access = $this->RekeningModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				$this->db->where('rekening_id', $id);
				$this->db->update('rekening',array(
						'bankCode'		=> $this->input->post('bankCode',true),
						'bankAccount'	=> $this->input->post('bankAccount',true),
						'beneficiary'	=> $this->input->post('beneficiary',true),

						'update_by'		=> user_id(),
						'update_date'	=> date('Y-m-d H:i:s')
				));
			}

			redirect($ref);
		} elseif ( $param == 'set'){ // set lokasi sebagai utama
			$id = $this->input->post('id');

			if ($id){
			$this->db->trans_start();
				$this->db->where('rekening_id', $id);
				$this->db->where('input_by', user_id());
				$this->db->update('rekening', array('type' => 1));


				$this->db->where('rekening_id !=', $id);
				$this->db->where('input_by', user_id());
				$this->db->update('rekening', array('type' => 0));

			$this->db->trans_complete();

			}

		} elseif ( $param == 'delete'){
			$id = $this->input->post('id');

			if ( !$id )
				exit("No access");

			$access = $this->RekeningModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				return $this->db->delete('rekening', array('rekening_id' => $id));
				exit;
			}
		} else {
			exit("No access");
		}
	}

	public function location_list()
	{

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'dashboard/location_list';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->AlamatModel->alamatByInput(false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['DataAlamat'] = $this->AlamatModel->alamatByInput(true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->view_dashboard('dashboard/location_list', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
		
	}

	public function location($param = "")
	{
		$title['title'] = "Dashboard";
		parent :: header($title);


		$user_id = $this->session->userdata('user_id');
		$id = $this->input->post('id');

		if ( $param == 'save' AND $this->input->post('penerima') != "" ){

			if (is_alamat(user_id())) {
				$type = 0;
			} else {
				$type = 1;
			}

				$this->db->insert('alamat',array(
					'alamat_name'	=> $this->input->post('alamat_name',true),
					'penerima'		=> $this->input->post('penerima',true),
					'no_hp'			=> $this->input->post('no_hp',true),
					'pro_kec'		=> $this->input->post('pro_kec',true),
					'type'			=> $type,
					'kode_pos'		=> $this->input->post('kode_pos',true),
					'alamat_detail'	=> $this->input->post('alamat_detail',true),
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));

				redirect(site_url('dashboard/location_list'));
		} elseif ( $param == 'edit'){
			$id = $this->input->get('id');

			if ( !$id )
				exit("No access");

			$access = $this->AlamatModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				$data['data'] = $access;
				$this->load->view('dashboard/location_edit_mobile', $data);
				parent :: footer_blank();
			}
		} elseif ( $param == 'update'){
			$id = $this->input->post('alamat_id');
			$ref = $this->input->post('link_ref') ? $this->input->post('link_ref') : site_url('dashboard/location_list');

			if ( !$id )
				exit("No access");

			$access = $this->AlamatModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				$this->db->where('alamat_id', $id);
				$this->db->update('alamat',array(
						'alamat_name'	=> $this->input->post('alamat_name',true),
						'penerima'		=> $this->input->post('penerima',true),
						'no_hp'			=> $this->input->post('no_hp',true),
						'pro_kec'		=> $this->input->post('pro_kec',true),
						'kode_pos'		=> $this->input->post('kode_pos',true),
						'alamat_detail'	=> $this->input->post('alamat_detail',true),
						'update_by'		=> user_id(),
						'update_date'	=> date('Y-m-d H:i:s')
					));
			}

			redirect($ref);
		} elseif ( $param == 'add'){
			$this->load->view('dashboard/location_add_mobile');
				parent :: footer_blank();
		} elseif ( $param == 'set'){ // set lokasi sebagai utama
			
			if ($id){
			$this->db->trans_start();
				$this->db->where('alamat_id', $id);
				$this->db->where('input_by', user_id());
				$this->db->update('alamat', array('type' => 1));


				$this->db->where('alamat_id !=', $id);
				$this->db->where('input_by', user_id());
				$this->db->update('alamat', array('type' => 0));

			$this->db->trans_complete();

			}

		} elseif ( $param == 'delete'){
			if ( !$id )
				exit("No access");

			$access = $this->AlamatModel->getInputBy($id);
			if ($access != "" AND $access->input_by == user_id()){
				return $this->db->delete('alamat', array('alamat_id' => $id));
				exit;
			}
		} else {
			exit("No access");
		}
		
	}

	public function product($param = "")
	{
		$user_id = $this->session->userdata('user_id');

		if ( $param == 'save' and $this->input->post('product_name') != "" ) {
				$this->db->trans_start();

				$this->load->helper('unique_helper');
				$product_id = product_id();

				$this->db->insert('product',array(
					'product_id'		=> $product_id,
					'video_youtube_url' => $this->input->post('url_video',true),
					'product_name'		=> $this->input->post('product_name',true),
					'product_type'		=> 1, //Product Dijual
					'status'			=> 1, //Aktif
					'description'		=> $this->input->post('product_desc',true),
					'meta_title'		=> replace_url_char($this->input->post('product_name',true)),
					'meta_description'  => replace_url_char($this->input->post('product_desc',true)),
					'meta_keyword'		=> replace_url_char($this->input->post('product_name',true)),
					'quantity'			=> $this->input->post('product_stock') ? $this->input->post('product_stock') : 1,
					'kategori_id'		=> $this->input->post('kategori_id',true),
					'kategori_detail'	=> $this->input->post('kategori_detail',true),
					'price'				=> $this->input->post('price',true),
					'weight'			=> $this->input->post('weight') ? $this->input->post('weight') : 0,
					'input_by'			=> $user_id,
					'input_date'		=> date('Y-m-d H:i:s')
				));

				$this->unggah_gambar($product_id);
				$this->unggah_music($product_id);
				$this->unggah_dokumen($product_id);

				$this->db->trans_complete();

				redirect('dashboard/sell');


		} elseif ( $param == 'edit'){
			$id = $this->input->get('id');

			if ( !$id )
					exit("No access");

				$access = $this->ProductModel->getInputBy($id);
				if ($access != "" AND $access == user_id()){

						$data['data'] = $this->KategoryModel->getAll();
						$data['product'] = $this->ProductModel->getProductId($id);
						$data['productImages'] = $this->ProductModel->getImageNoResult($id);						

						$this->view_dashboard('dashboard/product_edit', $data);

				}

		} elseif ( $param == 'update'){
			$id = $this->input->post('product_id');

			if ( !$id )
					exit("No access");

				$access = $this->ProductModel->getInputBy($id);
				if ($access != "" AND $access == user_id()){
					$this->db->trans_start();
					
					$this->db->delete('product_file', array('product_id' => $id));

					$this->unggah_gambar($id);
					$this->unggah_music($id);

						$ref = $this->input->post('link_ref') ? $this->input->post('link_ref') : site_url('dashboard/product_list');
						$this->db->where('product_id', $id);
						$this->db->update('product',array(
								'url_video'			=> $this->input->post('url_video',true),
								'product_name'		=> $this->input->post('product_name',true),
								'product_desc'		=> $this->input->post('product_desc',true),
								'product_title'		=> replace_url_char($this->input->post('product_name',true)),
								'product_key'		=> replace_url_char($this->input->post('product_name',true)),
								'product_stock'		=> replace_url_char($this->input->post('product_stock',true)),
								'kategori_id'		=> $this->input->post('kategori_id',true),
								'kategori_detail'	=> $this->input->post('kategori_detail',true),
								'price'				=> $this->input->post('price',true),
								'weight'			=> $this->input->post('weight',true),
								'update_by'			=> user_id(),
								'update_date'		=> date('Y-m-d H:i:s')
							));

					$this->db->trans_complete();

						redirect($ref);

				}

		} elseif ( $param == 'delete' ) {



				if ( !$this->input->post('id') )
					exit("No access");

				$access = $this->ProductModel->getInputBy($this->input->post('id'));
				if ($access != "" AND $access == user_id()){
					$this->db->trans_start();
						$this->db->delete('product', array('product_id' => $this->input->post('id')));
						$this->db->delete('product_file', array('product_id' => $this->input->post('id')));
					$this->db->trans_complete();
					
					exit;
				}



		} elseif ( $param == 'add'){

			$type = $this->input->get('type');

			if ( !$type )
				exit();

			//$params['data'] = $this->KategoryModel->getAll();

			$title['title'] = "Tambah Produk";
			$title['link'] = site_url("dashboard");
			parent :: header_modif($title);

			$data['kategories'] = $this->KategoryModel->idFom($type);

			if ( $type == 1 ){
				$this->load->view('dashboard/product_add_type1', $data);
			}
			if ( $type == 2 ) {
				$this->load->view('dashboard/product_add_type2', $data);
			}
			if ( $type == 3 ) {
				$this->load->view('dashboard/product_add_type3', $data);
			}
			parent :: footer_blank() ;

			// $this->view_dashboard('dashboard/product_add', $params);



		} else{
			exit("No access");
		}

	}

	public function order($action = "", $orderId = "", $param = "")
	{

		if($action == "is_order") {
		//ketika status_order_id == 2
		//seller memilih antara menerima atau menolak pesanan
			if($orderId == "")
				show_404(user_id() . "Tidak ada data orderID");
			if($param == "")
				show_404(user_id() . "Tidak ada data Parameter");

			$Order = $this->OrderModel->getOrderById($orderId);
			if($Order == null)
				show_404(user_id() . "Tidak ada data order");

			if($Order->seller != user_id())
				show_404(user_id() . "Seller Tidak Sama dengan session ID");

			if($Order->status_order_id != "2")
				show_404();

			if( $param == "1" AND $Order->is_order == "99"){
				$this->db->where('order_id', $orderId );
				$this->db->update('order', array('is_order' => 1, 'status_order_id' => 3));
				redirect(base_url('dashboard/order/resi/' . $orderId));
			}elseif( $param == "0" AND $Order->is_order == "99"){
				$this->db->where('order_id', $orderId );
				$this->db->update('order', array('is_order' => 0));
				redirect(link_ref());
			}else{
				show_404();
			}



		} elseif($action == "resi"){
		//ketika status_order_id == 3
		//seller view inputan no resi


			if($orderId == "")
				show_404(user_id() . "Tidak ada data orderID");

			$Order = $this->OrderModel->getOrderById($orderId);
			if($Order == null)
				show_404(user_id() . "Tidak ada data order");

			if($Order->seller != user_id())
				show_404(user_id() . "Seller Tidak Sama dengan session ID");

			$this->load->view('dashboard/header_dashboard');
			$this->load->view('dashboard/input_resi');
			$this->load->view('web/footer_blank');



		} elseif($action == "save_resi"){
		//ketika status_order_id == 3
		//seller save no resi dan status_order_id menjadi 4 (sudah dikirim)


			$noresi 	= $this->input->post('no_resi');
			$order_id 	= $this->input->post('order_id');

			if (!$this->input->post())
				redirect('dashboard/product_order');

			if (strlen($noresi) <= 5){
				$this->session->set_flashdata('message', 'No Resi Invalid');
				redirect(link_ref());
			}

			$order = $this->OrderModel->getOrderById($order_id);
			if($order == null)
				show_404(user_id() . "Tidak ada data order");

			if($order->seller != user_id())
				show_404(user_id() . "Seller Tidak Sama dengan session ID");

			// if($order->status_order_id != "3")
			// 	show_404();

			if($order->status_order_id == "3"){
				$this->db->where('order_id', $order_id );
				$this->db->update('order', array('no_resi' => $noresi, 'status_order_id' => 4));
			}

			$this->load->view('dashboard/header_dashboard');
			$this->load->view('dashboard/input_resi_success');
			$this->load->view('web/footer_blank');
			

		}

	}
	public function product_order()
	{
		$this->load->model('Cart_model', 'CartModel');

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'dashboard/product_order';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getOrder($this->session->userdata('user_id'), false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['Dataproduct'] = $this->ProductModel->getOrder($this->session->userdata('user_id'), true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->view_dashboard('dashboard/product_order', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
		
	}

	public function product_stock()
	{
		$this->load->model('Cart_model', 'CartModel');

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'dashboard/product_stock';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getSearchInputByStock($this->session->userdata('user_id'), false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['Dataproduct'] = $this->ProductModel->getSearchInputByStock($this->session->userdata('user_id'), true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->view_dashboard('dashboard/product_list', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
		
	}

	public function product_buy()
	{

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'dashboard/product_buy';

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->ProductModel->getProductBuy($this->session->userdata('user_id'), false, $this->input->get('search'))->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['Dataproduct'] = $this->ProductModel->getProductBuy($this->session->userdata('user_id'), true, $this->input->get('search'), $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->view_dashboard('dashboard/product_buy', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
		
	}


	public function kategori_detail()
	{
		$param = $this->input->post('id');

		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

        if(!$param){
        	exit();
        }

       	$data = $this->KategoryModel->getIdParent($param);

	       	foreach ( $data as $kategori){
	       		 echo '<option value="' . $kategori->kategori_id . '">' . $kategori->detail . '</option>';	
	       	}
       
	}

	public function lokasi_detail($param)
	{

		$this->load->model('Lokasi_model', 'LokasiModel');

		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        
       	$data = $this->LokasiModel->getName($param);

	       	foreach ( $data as $kategori){
	       		 echo '<option value="' . $kategori->city_id . '">' . $kategori->city_name . ", " . $kategori->province . '</option>';	
	       	}
       
	}

	public function account_setting()
	{
		$this->load->model('User_model', 'UserModel');

		$data['data'] = $this->UserModel->getByUserId(user_id());
		$data['last'] = $this->UserModel->last_password();
		$this->view_dashboard('dashboard/account_setting', $data);
	}


	public function account($action = "", $param = "")
	{
		$this->load->model('User_model', 'UserModel');


       if ($action == "edit_info"){

       		$data['user'] = $this->UserModel->getByUserId(user_id());

       		
       		if ($data['user'] == null){
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');
	       		redirect(site_url('dashboard/account_setting'));
	       	}

       		$this->view_dashboard('dashboard/info_edit', $data);

       } elseif ($action == "update_info"){

       		if (!user_id()){
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');
	       		redirect(site_url('dashboard/account_setting'));
	       	}

	       	if ($this->input->post('fullname')) {

	       		$this->db->where('user_id', user_id());
				$this->db->update('users',array(
					'fullname'		=> $this->input->post('fullname',true),
					'birthday'		=> $this->input->post('birthday',true),
					'gender'	=> $this->input->post('gender',true),

					'update_by'		=> user_id(),
					'update_date'	=> date('Y-m-d H:i:s')
				));

				$this->session->set_flashdata('message', 'Detail Info berhasil dirubah');
			}

			redirect(site_url('dashboard/account_setting'));
       } elseif ($action == "edit_contact") {



       		$data['user'] = $this->UserModel->getByUserId(user_id());

       		
       		if ($data['user'] == null){
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');
	       		redirect(site_url('dashboard/account_setting'));
	       	}

       		$this->view_dashboard('dashboard/kontak_edit', $data);



       } elseif ($action == "update_contact"){

	       	if (!user_id()){
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');
	       		redirect(site_url('dashboard/account_setting'));
	       	}

	       	if ($this->input->post('email')) {

	       		$this->db->where('user_id', user_id());
				$this->db->update('users',array(
					'email'		=> $this->input->post('email',true),
					'nohp'		=> $this->input->post('nohp',true),
					'whatsapp'	=> $this->input->post('whatsapp',true),

					'update_by'		=> user_id(),
					'update_date'	=> date('Y-m-d H:i:s')
				));

				$this->session->set_flashdata('message', 'Detail Kontak berhasil dirubah');
			}

			redirect(site_url('dashboard/account_setting'));

       } elseif ($action == "edit_password"){

       		$this->view_dashboard('dashboard/password_edit');


       } elseif ($action == "update_password"){

	       	$users = $this->UserModel->getByUserId(user_id());

	       	if ($users == null){
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');
	       		redirect(site_url('dashboard/account/edit_password'));
	       	}

	       	if ($users->password != md5($this->input->post('password_old')) ) {
	       		$this->session->set_flashdata('message', 'Password Lama Anda Salah');
	       		redirect(site_url('dashboard/account/edit_password'));
	       	}

	       	if ($this->input->post('password') != $this->input->post('password2')){
	       		$this->session->set_flashdata('message', 'Konfirmasi Password Tidak Benar');
	       		redirect(site_url('dashboard/account/edit_password'));
	       	}

	       	if (!$this->input->post())
	       		$this->session->set_flashdata('message', 'Tidak Ada Session');

	       	if ($this->input->post()) {

	       		$this->db->trans_start();
			
						$this->db->insert('log_password',array(
							'password_new'		=> $this->input->post('password',true),
							'password_old'		=> $this->input->post('password_old',true),

							'input_by'		=> user_id(),
							'input_date'	=> date('Y-m-d H:i:s')
						));

			       		$this->db->where('user_id', user_id());
						$this->db->update('users',array(
							'password'		=> md5($this->input->post('password',true)),

							'update_by'		=> user_id(),
							'update_date'	=> date('Y-m-d H:i:s')
						));

				$this->db->trans_complete();

				$this->session->set_flashdata('message', 'Password telah dirubah');
			}
			redirect(site_url('dashboard/account_setting'));

       }
	}


	function delete_gambar( $id = "" )
	{	
		$this->db->where('product_image_id', $id);
		
		$query = $this->db->get('product_image');
		foreach ( $query->result() as $gambar ) {}
			if(!is_dir($gambar->file_url)) {
				if (file_exists($gambar->file_url)) {
					unlink($gambar->file_url);
				}
			}
		
		$this->db->where('product_image_id', $id);
		$this->db->delete('product_image');
		
		echo json_encode(array("status" => TRUE));
	}

	private function unggah_gambar( $product_id = "" )
    {
    	$this->load->helper('string');

			$images = $this->input->post('images');
			$output_dir = "./users/product/images/";

		   for($i=0;$i<sizeof($images);$i++)
		   {
		     //$dataSet[$i] = array ('points' => $points[$i], 'passes' => $passses[$i]);

		   		if ($images[$i] != ""){
		   		$id = "IMG_" . user_id() . "_" . time() . "_" . mt_rand(0000, 9999);

				list($type, $images[$i]) = explode(';', $images[$i]);
		        list(, $images[$i])      = explode(',', $images[$i]);
		        $images[$i] = base64_decode($images[$i]);

		        file_put_contents($output_dir . $id . '.png', $images[$i]);


		        $this->set_unggah_gambar(350, 350, $output_dir . $id . '.png', $output_dir . $id . '.png');

		        if ($i == 0) {
					$this->db->where('product_id', $product_id);
					$this->db->update('product', array('image' => "users/product/images/" . $id . '.png'));
				}	

 					$database = array(
 						'product_image_id' => random_string('unique',8),
						'product_id' => $product_id, //$id,
						'image' => $id . '.png',
						'image_url' => "users/product/images/" . $id . '.png', //. $fileName,
						'sort_order' => ($i+1),
						'input_by' => $this->session->userdata('user_id'),
						'input_date' => date('Y-m-d H:i:s')
					);

					$this->db->insert('product_image', $database);
				}
		   }
		
	}

	function set_unggah_gambar($max_width, $max_height, $source_file, $dst_dir, $quality = 80){
	    $imgsize = getimagesize($source_file);
	    $width = $imgsize[0];
	    $height = $imgsize[1];
	    $mime = $imgsize['mime'];
	 
	    switch($mime){
	        case 'image/gif':
	            $image_create = "imagecreatefromgif";
	            $image = "imagegif";
	            break;
	 
	        case 'image/png':
	            $image_create = "imagecreatefrompng";
	            $image = "imagepng";
	            $quality = 7;
	            break;
	 
	        case 'image/jpeg':
	            $image_create = "imagecreatefromjpeg";
	            $image = "imagejpeg";
	            $quality = 80;
	            break;
	 
	        default:
	            return false;
	            break;
	    }
	     
	    $dst_img = imagecreatetruecolor($max_width, $max_height);
	    $src_img = $image_create($source_file);
	     
	    $width_new = $height * $max_width / $max_height;
	    $height_new = $width * $max_height / $max_width;
	    //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
	    if($width_new > $width){
	        //cut point by height
	        $h_point = (($height - $height_new) / 2);
	        //copy image
	        imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
	    }else{
	        //cut point by width
	        $w_point = (($width - $width_new) / 2);
	        imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
	    }
	     
	    $image($dst_img, $dst_dir, $quality);
	 
	    if($dst_img)imagedestroy($dst_img);
	    if($src_img)imagedestroy($src_img);
	}

	private function unggah_music( $id = "" )
    {
		$user_id = $this->session->userdata('user_id');
		$output_dir = "./users/product/music/";
				$fileCount = count($_FILES["music"]["name"]);
				for ($i = 0; $i < $fileCount; $i++) {
				$file_ext = substr($_FILES["music"]["name"][$i], strrpos($_FILES["music"]["name"][$i], '.')); //get file extention
					
                    $fileName = "SOUND_" . user_id() . "_" . time() . "_" . mt_rand(0000, 9999) . $file_ext;
					if ( $_FILES["music"]["size"][$i] > 1 ) {
						
						// if (  ) { //filter extension file
							
							move_uploaded_file($_FILES["music"]["tmp_name"][$i], $output_dir . $fileName);
							// watermark("./users/" . $user_id . "/images/" . $fileName);
							if ( $i == 0 ) {
								$utama = 1;
							} else {
								$utama = 0;
							}
								$database = array(
									'product_id' => $id,
									'file_name' => $fileName,
									'type_file_id' => '2',
									'file_url' => "users/product/music/" . $fileName,
									'input_by' => $this->session->userdata('user_id'),
									'input_date' => date('Y-m-d H:i:s')
								);

								$this->db->insert('product_file', $database);
						// }
					}
				}
				
	}


	private function unggah_dokumen( $id = "" )
    {
		$user_id = $this->session->userdata('user_id');
		$output_dir = "./users/product/dokumen/";
				$fileCount = count($_FILES["dokumen"]["name"]);
				for ($i = 0; $i < $fileCount; $i++) {
				$file_ext = substr($_FILES["dokumen"]["name"][$i], strrpos($_FILES["dokumen"]["name"][$i], '.')); //get file extention
					
                    $fileName = "DOK_" . user_id() . "_" . time() . "_" . mt_rand(0000, 9999) . $file_ext;
					if ( $_FILES["dokumen"]["size"][$i] > 1 ) {
						
						// if (  ) { //filter extension file
							
							move_uploaded_file($_FILES["dokumen"]["tmp_name"][$i], $output_dir . $fileName);

							if ( $i == 0 ) {
								$utama = 1;
							} else {
								$utama = 0;
							}
								$database = array(
									'product_id' => $id,
									'file_name' => $fileName,
									'type_file_id' => '4',
									'file_url' => "users/product/dokumen/" . $fileName,
									'input_by' => $this->session->userdata('user_id'),
									'input_date' => date('Y-m-d H:i:s')
								);

								$this->db->insert('product_file', $database);
						// }
					}
				}
				
	}


	public function upload_photo(){

        $id = time();
        $user_id = $this->session->userdata('user_id');
        $output_dir = "./users/photo/";
             
                $file_ext = '.png'; //substr($_FILES["profile_picture"]["name"], strrpos($_FILES["profile_picture"]["name"], '.')); //get file extention
                    
                    $fileName = user_id() . $id . "_goopiz" . $file_ext;
                    if ( $_FILES["profile_picture"]["size"] > 1 ) {
                        
                        // if (  ) { //filter extension file
                            
                            move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $output_dir . $fileName);
                            // watermark("./users/" . $user_id . "/images/" . $fileName);

                                if (isset($fileName)){
									$this->db->where('user_id', user_id());
									$this->db->update('users', array('avatar' => "users/photo/" . $fileName));
								}

								$database = array(
									'avatar_name' 	=> $fileName,
									'type_file_id' 	=> '5',
									'avatar_url'	=> "users/photo/" . $fileName,
									'input_by' 		=> user_id(),
									'input_date' 	=> date('Y-m-d H:i:s')
								);

								$this->db->set('avatar_id', 'UUID()', FALSE);
								$this->db->insert('log_avatar', $database);
						// }

                                $this->output->set_header('HTTP/1.0 200 OK');
                                $this->output->set_header('HTTP/1.1 200 OK');
                                 echo json_encode(array('success'=>true));
                        // }
                    }
                
               

    }

	private function view_dashboard($param, $param2 = "")
	{
		

		$title['title'] = "Dashboard";
		parent :: header($title);

		$data['menu'] = $param;
		$data['param'] = $param2;
		
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('web/footer_mobile');
		
	}

	public function getLokasi()
	{
		$q = $this->input->get('q');

		$this->db->select('subdistrict_id as id, CONCAT(province, ", ", city, ", ", subdistrict_name) as text');
        $this->db->like('province', $q, 'both');
        $this->db->or_like('city', $q, 'both');
        $this->db->or_like('subdistrict_name', $q, 'both');
        $query = $this->db->get('subdistrict');
        echo json_encode($query->result());
	}

	public function getBank()
	{
		$q = $this->input->get('q');

		$this->db->select('bankCode as id, bankName as text');
		$this->db->like('bankName', $q, 'both');
        $query = $this->db->get('bank');
        echo json_encode($query->result());
	}

	private function auto_product_id()
	{
		$sql = "SELECT max(RIGHT(product_id, 6)) as id FROM product";
		$query = $this->db->query($sql);
		foreach ( $query->result() as $data ) {}
		$id_auto =  $data->id + 1; //no urut
		return "sku" . sprintf("%08s", $id_auto);
	}

}


/* End of file Dashboard.php */
/* Location: ./application/controller/Dashboard.php */