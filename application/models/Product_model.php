<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	
	public function getProductReport($productId, $userId)
	{
		$this->db->select('a.id');
		$this->db->from('product_report as a');
		$this->db->where('a.product_id', $productId);
		$this->db->where('a.user_id', $userId);
		
		return $this->db->get()->row();
	}

	public function getProductAll($limit = 5, $page = 1)
	{
		$this->db->select('a.*, b.detail, c.user_id, c.firstname, c.lastname, c.fullname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');

		$this->db->order_by('a.input_by', 'RANDOM');

		$this->db->limit($limit, $page);

		return $this->db->get()->result();
	}

	public function getProductAll2()
	{
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->limit(12);
		$this->db->order_by('a.product_id', 'RANDOM');

		return $this->db->get()->result();
	}

	public function getProductAll3()
	{
		$this->db->select('a.*, b.detail, c.firstname, c.lastname, c.fullname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->limit(12);
		$this->db->order_by('a.input_date', 'RANDOM');

		return $this->db->get()->result();
	}

	public function getProductId($param)
	{
		$this->db->select('a.*, b.id_parent, a.kategori_id, a.kategori_detail, b.detail, c.firstname, c.lastname, c.fullname, c.whatsapp');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('a.product_id', $param);
		
		return $this->db->get()->row();
	}

	//$param adalah product_id

	public function getImage($param)
	{
		$this->db->select('image_url');
		$this->db->from('product_image');
		$this->db->where('product_id', $param);
		//$this->db->where('type_file_id', 1); //1 == tipe images
		$this->db->order_by('sort_order', 'asc');
		
		return $this->db->get()->result();
	}

	public function getImageNoResult($param)
	{
		$this->db->select('file_url, file_id');
		$this->db->from('file');
		$this->db->where('product_id', $param);
		$this->db->where('type_file_id', 1); //1 == tipe images
		
		return $this->db->get();
	}

	public function getImageLimit($param)
	{
		$this->db->select('file_url');
		$this->db->from('file');
		$this->db->where('product_id', $param);
		$this->db->where('type_file_id', 1); //1 == tipe images
		$this->db->limit(1);
		
		return $this->db->get()->result();
	}

	public function getMusic($param)
	{
		$this->db->select('file_name, file_url');
		$this->db->from('product_file');
		$this->db->where('product_id', $param);
		$this->db->where('type_file_id', 2); //2 == tipe music
		
		return $this->db->get()->result();
	}

	public function getDocx($param)
	{
		$this->db->select('file_name, file_url');
		$this->db->from('product_file');
		$this->db->where('product_id', $param);
		$this->db->where('type_file_id', 4); //2 == tipe music
		
		return $this->db->get()->result();
	}

	public function getSearch($pages = false, $param, $limit = 20, $page = 1)
	{

		if ( !empty($param['min']) )
		$this->db->where('price >=', $param['min']);

		if ( !empty($param['max']) )
		$this->db->where('price <=', $param['max']);

		if ( !empty($param['search']) )
		$this->db->like('product_name', $param['search']);

		if ( !empty($param['user_id']) )
		$this->db->like('c.user_id', $param['user_id']);
		
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');

		if ( $param['order_by'] == 1){
			//Posting Terbaru
			$this->db->order_by('input_by', 'asc');
		} elseif ( $param['order_by'] == 2){
			//Posting Termurah
			$this->db->order_by('price', 'asc');
		} elseif ( $param['order_by'] == 3){
			//Posting Termahal
			$this->db->order_by('price', 'desc');
		} elseif ( $param['order_by'] == 4){
			//Posting Termahal
			$this->db->order_by('view', 'desc');
		}

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	public function getSearchInputBy($input_by, $pages = false, $search, $limit = 20, $page = 1)
	{

		if ( $search != 0 || $search != "" ) {
			$this->db->like('product_name', $search);
		}
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('a.input_by', $input_by);
		$this->db->where('a.product_type =', 1);
		$this->db->order_by("a.input_date", "DESC");

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	public function getSearchInputByStock($input_by, $pages = false, $search, $limit = 20, $page = 1)
	{

		if ( $search != 0 || $search != "" ) {
			$this->db->like('product_name', $search);
		}
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('a.input_by', $input_by);
		$this->db->where('a.product_type =', 0);
		$this->db->order_by("a.input_date", "DESC");

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	public function getOrder($input_by, $pages = false, $search, $limit = 20, $page = 1)
	{

		if ( $search != 0 || $search != "" ) {
			$this->db->like('product_name', $search);
		}
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('order as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('a.seller', $input_by);
		$this->db->where('a.payment_status', 'settlement');
		$this->db->order_by("a.input_date", "DESC");

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}


	//Dashboard Daftar Beli
	public function getProductBuy($input_by, $pages = false, $search, $limit = 20, $page = 1)
	{

		if ( $search != 0 || $search != "" ) {
			$this->db->like('product_name', $search);
		}
		// $this->db->select('a.*, b.detail, c.firstname, c.lastname');
		// $this->db->from('product as a');
		// $this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		// $this->db->join('users as c', 'c.user_id = a.input_by');
		// $this->db->where('a.input_by', $input_by);
		// $this->db->order_by("a.input_date", "DESC");

		$this->db->select('*');
		$this->db->from('order as a');
		$this->db->where('buyer', user_id());
		$this->db->order_by("input_date", "DESC");

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	public function getInputBy($paramId)
	{
		//$paramId == product_id
		$this->db->select('input_by');
		$this->db->from('product');
		$this->db->where('product_id', $paramId);
		
		$query = $this->db->get()->row();

		if(isset($query)){
			return $query->input_by;
	   } else{
	    	return false;
	   }
	   
	}

	public function getBySlug($pages = false, $search, $limit = 20, $page = 1)
	{
		$this->db->select('a.*, b.detail, c.firstname, c.lastname, c.fullname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('b.slug', $search);
		// $this->db->order_by('product_id', 'RANDOM');
		
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}


	//NEW
	public function getProductSell($input_by, $pages = false, $search, $limit = 20, $page = 1)
	{

		if ( $search != 0 || $search != "" ) {
			$this->db->like('product_name', $search);
		}
		$this->db->select('a.*, b.detail, c.firstname, c.lastname');
		$this->db->from('product as a');
		$this->db->join('kategory as b', 'b.kategori_id = a.kategori_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->where('a.input_by', $input_by);
		$this->db->where('a.product_type =', 1);
		$this->db->order_by("a.input_date", "DESC");

		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}

	
}

/* End of file Product_model.php */
/* Location: ./application/model/Product_model.php */