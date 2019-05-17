<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent :: __construct() ;
		$this->load->model('Login_model', 'LoginModel');
		
		//redirect jika belum login
		if (!$this->input->is_ajax_request()) {
            //exit('No direct script access allowed');
        }
		
	}

	public function comment()
	{
		$this->load->model('Comments_model', 'CommentsModel');

				// $param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
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
				$config['base_url'] = base_url().'ajax/comment?product_id=' . $this->input->get('product_id');

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 2;
			   	$config["total_rows"] = $this->CommentsModel->getComment($this->input->get('product_id'), false)->num_rows();
			    $config['per_page'] = 2; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['DataComment'] = $this->CommentsModel->getComment($this->input->get('product_id'), true, $config["per_page"], $offset);
    			

    			// parent :: header() ;

    			$this->load->view('include/ajax_comment', $param);
				//$this->load->view('dashboard/product_list', $param);

				// parent :: footer() ;
		
	}

	public function bahasa(){
		$this->load->helper('google_translate_helper');
		google_translate("Ini bahasa indonesia menjadi","en");
	}

	public function kurir(){
		$this->load->model('kurir_model', 'KurirModel');
		$dataKurir = "";

		$kurirAktif = $this->db->where('status', 1)->get('courier');
		foreach ($kurirAktif->result() as $kurir) {
			$dataKurir .= $this->KurirModel->ongkir($kurir->courier);
		}
		echo $dataKurir;
	}

	public function alamat(){
		$this->load->model('alamat_model', 'AlamatModel');
		$dataAlamat = "";

		$dataAlamat .= $this->AlamatModel->alamat();
	
		echo $dataAlamat;
	}
	// public function keyword()
	// {		
	// 	$param = $this->input->post("q");

	// 	$getData = $this->db->query("SELECT product_name FROM product WHERE product_name LIKE '%" . $param . "%' LIMIT 5")->result();

	// 			header('Content-Type: application/json');
					
					
	// 			$json_pretty = json_encode($getData, JSON_PRETTY_PRINT);
	// 			echo $json_pretty;

	// }

	

	// public function ongkir($param)
	// {		
	// 	$this->load->library('rajaongkir');
		

	// 	//$origin, $destination, $weight, $courier
	// 	$ongkos = $this->rajaongkir->subdistrict($param);
	// 	//$ongkos = $this->rajaongkir->cost($origin, $destination, $weight, $courier);
	// 	$queries = json_decode($ongkos);

	// 	var_dump($queries);

	// 	if ($queries != null) {
	// 	        foreach($queries->rajaongkir->results as $results ){ 
	// 	        	$this->db->insert('subdistrict',array(
	// 				'subdistrict_id'	=> $results->subdistrict_id,
	// 				'province_id'		=> $results->province_id,
	// 				'province'			=> $results->province,
	// 				'city_id'			=> $results->city_id,
	// 				'city'				=> $results->city,
	// 				'type'				=> $results->type,
	// 				'subdistrict_name'	=> $results->subdistrict_name,
	// 			));
	// 	         }

 //    	} else {
 //    		echo "NOT CONNECTED...";
 //    	}

	// }

	// public function kecamatan()
	// {
	// 	$query = $this->db->get('city');

	// 	foreach ($query->result() as $value) {
	// 		//echo $value->city_id;
	// 		$this->ongkir($value->city_id);
	// 	}
		
	// }


}

/* End of file Ajax.php */
/* Location: ./application/controller/Ajax.php */