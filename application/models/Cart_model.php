<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {


	//$param == user_id
	public function getOrderCart()
	{
		$this->db->select('a.*, b.product_name, b.comment, b.price, b.quantity as qty_order');
		$this->db->from('order_cart as a');
		$this->db->join('product as b', 'b.product_id = a.product_id');
		$this->db->where('b.quantity >= ', 1);
		$this->db->where('a.user_id', user_id());
		$this->db->order_by('a.input_date', 'DESC');
		
		return $this->db->get();
	}

	//$param == product_id
	public function getOrderCartProductId($param)
	{
		$this->db->select('a.*');
		$this->db->from('order_cart as a');
		$this->db->where('a.product_id', $param);
		
		return $this->db->get()->row();
	}
	// NEW EOF


	public function getSKU($param)
	{
		$this->db->select('a.*');
		$this->db->from('order as a');
		$this->db->where('a.product_id', $param);
		
		return $this->db->get()->row();
	}

	public function getSKUbyInvoiceId($param)
	{
		$this->db->select('a.*');
		$this->db->from('order as a');
		$this->db->where('a.invoice_id', $param);
		
		return $this->db->get()->row();
	}

	public function getInvoice($param)
	{
		$this->db->select('a.*, b.gross_amount, b.va_bank, b.va_number');
		$this->db->from('order as a');
		$this->db->join('payment as b', 'b.order_id = a.invoice_id');
		$this->db->where('a.invoice_id', $param);
		
		return $this->db->get()->row();
	}

	//$paramId == Product_id
	function getProductId( $paramId ) {

		  $this->db->where('product_id', $paramId);
		  $this->db->where('status_order_id', 1);
		  $this->db->where('input_by', user_id());
		  $query = $this->db->get('order');

		   if(isset($query->row()->order_id)){
		      return $query->row()->order_id;
		   } else{
		    return false;
		   }
	}

	//Check pada saat hapus barang yang di jual, apakah sudah ada di table order
	function checkOrder( $paramId ) {
		  $this->db->where('product_id', $paramId);
		  $this->db->where('input_by', user_id());
		  $query = $this->db->get('order');

		   if(isset($query->row()->order_id)){
		      return $query->row()->order_id;
		   } else{
		    return false;
		   }
	}

	//Cart yang baru dipesan dan belum checkout proses pembayaran
	function getCartPending() {
		$this->db->select('a.*, b.product_name, b.price, d.status');
		$this->db->from('order as a');
		$this->db->join('product as b', 'b.product_id = a.product_id');
		$this->db->join('users as c', 'c.user_id = a.input_by');
		$this->db->join('status_order as d', 'd.status_order_id = a.status_order_id');
		$this->db->where('a.input_by', user_id());
		$this->db->where('a.status_order_id', 1);
		$this->db->order_by('a.input_by', 'DESC');
		$this->db->limit(2);
		
		return $this->db->get();
	}

	public function getInputBy($paramId)
	{
		//$paramId == product_id
		$this->db->select('input_by');
		$this->db->from('order');
		$this->db->where('product_id', $paramId);
		
		return $this->db->get()->row()->input_by;
	}

	public function getRowInputBy($paramId)
	{
		//$paramId == product_id
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('product_id', $paramId);
		
		return $this->db->get()->row();
	}

	public function invoice()
	{
		$sql = "SELECT max(RIGHT(invoice_id, 8)) as invoice_id FROM `order`";
		$query = $this->db->query($sql);
		foreach ( $query->result() as $data ) {}
		$id_auto =  $data->invoice_id + 1; //no urut
		return "GOO-" . date("Y") . $this->bulan_to_alphabet(date("m")) . sprintf("%08s", $id_auto);
	}

	private function bulan_to_alphabet($bulan){
				switch ($bulan) {
			case 1 :
				return "I";
			break;
			case 2 :
				return "II";
			break;
			case 3 :
				return "III";
			break;
			case 4 :
				return "IV";
			break;
			case 5 :
				return "V";
			break;
			case 6 :
				return "VI";
			break;
			case 7 :
				return "VII";
			break;
			case 8 :
				return "VIII";
			break;
			case 9 :
				return "IX";
			break;
			case 10 :
				return "X";
			break;
			case 11 :
				return "XI";
			break;
			case 12 :
				return "XII";
			break;
			default :
				return "Error";
			break;
		}
	}
	
}

/* End of file Cart_model.php */
/* Location: ./application/model/Cart_model.php */