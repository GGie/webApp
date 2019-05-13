<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {

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

	
	//$param == product_id
	public function cartBACKUP($param = "")
	{
		$qty = $this->input->post('qty');

		$this->load->model('alamat_model', 'AlamatModel');
		$this->load->model('user_model', 'UsersModel');
		$seller = $this->ProductModel->getInputBy($param);

		if($param == "" OR $seller == "")
			show_404();

		if($qty== "")
			$qty = 1;

		if($this->session->userdata('user_id')){

			$check_pending_sku = $this->CartModel->getProductId($param);
			if($check_pending_sku == null){

					//insert product parameter
					$product 		= $this->ProductModel->getProductId($param);
					$sell_alamat 	= $this->AlamatModel->getAlamatByUserId($seller);
					$sell_data		= $this->UsersModel->getByUserId($seller);

					$buy_alamat 	= $this->AlamatModel->getAlamatByUserId(user_id());
					$buy_data		= $this->UsersModel->getByUserId(user_id());

					if( $buy_alamat == "" ) {
						$this->session->set_flashdata('message', 'Yuk Lengkapi Alamat dulu');
						redirect(base_url('dashboard/location/add'));
					}

					$invoice_id		= auto_number_inv();

					$this->db->insert('order',array(
						'invoice_id'		=> $invoice_id,
						'product_id'		=> $param,
						'product_name'		=> $product->product_name,
						'product_desc'		=> $product->product_desc,
						'price'				=> $product->price,
						'weight'			=> $product->weight,
						'url_video'			=> $product->url_video,
						'kategori_id'		=> $product->kategori_id,

						'qty'				=> $qty,
						'price'				=> $product->price,
						'price_total'		=> $product->price * $qty,

						'seller'			=> $seller,
						'seller_name'		=> $sell_data->fullname,
						'seller_email'		=> $sell_data->email,
						'seller_nohp'		=> $sell_data->nohp,
						'seller_whatsapp'	=> $sell_data->whatsapp,
						'sell_a_penerima'	=> $sell_alamat->penerima,
						'sell_a_no_hp'		=> $sell_alamat->no_hp,
						'sell_a_pro_kec'	=> $sell_alamat->pro_kec,
						'sell_a_kode_pos'	=> $sell_alamat->kode_pos,
						'sell_a_alamat_detail'	=> $sell_alamat->alamat_detail,

						'buyer'				=> user_id(),
						'buyer_name'		=> $buy_data->fullname,
						'buyer_email'		=> $buy_data->email,
						'buyer_nohp'		=> $buy_data->nohp,
						'buyer_whatsapp'	=> $buy_data->whatsapp,
						'buy_a_penerima'	=> $buy_alamat->penerima,
						'buy_a_no_hp'		=> $buy_alamat->no_hp,
						'buy_a_pro_kec'		=> $buy_alamat->pro_kec,
						'buy_a_kode_pos'	=> $buy_alamat->kode_pos,
						'buy_a_alamat_detail'	=> $buy_alamat->alamat_detail,

						'status_order_id'	=> 1,
						'input_by'			=> user_id(),
						'input_date'		=> date('Y-m-d H:i:s')
					));

					//mengurangi stock sesuai Qty
					product_stock("-", $qty, $param);

			} else {
				$this->session->set_flashdata('message', 'Selesaikan Pending Order Anda');
			}
					redirect(base_url('cart/sku/' . $param));
		} else {
			redirect(site_url('auth/login') . "?url_old=" . $_SERVER['HTTP_REFERER']);
		}
	}

	//$param == product_id
	public function order($param = "")
	{
		if($param == null)
			exit("parameter not found");

		$product = $this->CartModel->getOrderCartProductId($param);

		if($product == null) {
			$this->db->insert('order_cart',array(
				'user_id'		=> user_id(),
				'product_id'	=> $param,
				'quantity'		=> 1,
				'input_by'		=> user_id(),
				'input_date'	=> date('Y-m-d H:i:s')
			));
		}
		else {
			$this->db->where('product_id', $param);
			$this->db->update('order_cart',array(
				'quantity'		=> $product->quantity + 1,
				'update_by'		=> user_id(),
				'update_date'	=> date('Y-m-d H:i:s')
			));
		}

		redirect(base_url('cart/cart'));
		
	}

	//$param == product_id
	public function cart()
	{
		$data['product_cart'] = $this->CartModel->getOrderCart();

		$title['title'] = "Keranjang Pesanan";
		$title['link'] = base_url();

		if (is_mobile()) {
			parent :: header_modif($title) ;
			$this->load->view('cart/cart_mobile', $data);
		} else {
			
			//$this->load->view('cart/cart', $data);
		}

		
		
		parent :: footer_blank() ;
	}
	//order_status == 1
	public function sku($id = null)
	{
		$this->load->model('alamat_model', 'AlamatModel');
		$this->load->library('rajaongkir');

		$data['product'] = $this->ProductModel->getProductId($id);

		if ($data['product'] == null)
			show_404();

		// $order_id = $this->CartModel->getProductId($param);
		// if (!$order_id)
		// 	show_404();

		//echo ($_SERVER['HTTP_REFERER']);
		
		// // $data['ongkos'] = $this->rajaongkir->cost(501, 114, 10, "tiki");
		// $data['Dataproduct'] 	= $this->OrderModel->getSKU($param);
		// $data['seller'] 		= $this->ProductModel->getInputBy($param);
		// $data['product'] 		= $this->ProductModel->getProductId($param);

		// $payment_order_id = $this->PaymentModel->getOrderId($data['Dataproduct']->invoice_id);
		// if ($payment_order_id) {
		// 	$this->session->set_flashdata('message', 'Yuk Selesaikan Pending Pembayaran Anda');
		// 	redirect(base_url('cart/invoice/' . $payment_order_id->order_id));
		// }
		$data["alamat"] 	= $this->AlamatModel->getAlamatByUserId(user_id());

		$title['title'] = "Shipment";
		$title['link'] = base_url('cart/cart/');

		if (is_mobile()) {
				parent :: header_modif($title) ;
				$this->load->view('cart/sku_mobile', $data);
			} else {
				
				//$this->load->view('cart/cart', $data);
			}

		
		
		parent :: footer_blank() ;
	}

	public function pay()
	{
		parent :: header() ;
		
		$this->load->view('cart/pay');
		
		parent :: footer() ;
	}


	public function sku_delete($param)
	{

			if ( !$this->input->post('id') )
				exit("No access");

			$access = $this->CartModel->getInputBy($this->input->post('id'));
			if ($access != ""){
				return $this->db->delete('order', array('product_id' => $this->input->post('id')));
				exit;
			}

	}

	//$param == Order_id
	public function order_delete($param)
	{
			if ( !$this->input->post('id') )
				exit("No access");

			$access = $this->OrderModel->getOrderById($this->input->post('id'));
			if ($access->input_by == user_id()){

				$this->db->trans_start();
				
					//Kembalikan stock ke product
					product_stock("+", $access->qty, $access->product_id);

					//Hapus Product
					return $this->db->delete('order', array('order_id' => $this->input->post('id')));

				$this->db->trans_complete();
			}

	}

	public function demo()
	{
		// $params = array('server_key' => '<your server key>', 'production' => false);
		// $this->load->library('veritrans');
		// $this->veritrans->config($params);

		// $this->load->view('midtrans');

		$data['link'] = "http://localhost:8080/dev/frontend/cart/invoice/GOO-190210000028";
		$this->load->view('mail/mail_invoice', $data);
	}



	public function ongkir()
	{
		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

		$this->load->library('rajaongkir');
		
		$origin 		= $this->input->post('origin');
		$destination 	= $this->input->post('destination');
		$weight 		= $this->input->post('weight');
		$courier 		= $this->input->post('courier');

		//$origin, $destination, $weight, $courier
		$ongkos = $this->rajaongkir->cost($origin, $destination , $weight, $courier);
		//$ongkos = $this->rajaongkir->cost($origin, $destination, $weight, $courier);
		$queries = json_decode($ongkos);

		if ($queries != null) {
				echo "<table class='tt-table-02'>";

		        foreach($queries->rajaongkir->results as $results ){ 
		          foreach($results->costs as $costs) {
		            echo "<tr>";
		              echo"<td width='10px'>";
		              	echo "<input type='radio' name='ongkir' required onclick='ongkir(\"" . $costs->cost[0]->value . "\")'>";
		              echo "</td>";
		              echo "<td width='20px'>" . $costs->service . "</td>";
		              echo "<td width='70px'>" . $costs->description . "</td>";
		              foreach ($costs->cost as $cost) {
		              	echo "<td>";
		                	echo number_format($cost->value, 0,',', '.');
		                echo "</td>";
		                echo "<td>" . $cost->etd . " Hari</td>";
		              }
		            echo "</tr>";
		           }
		         }

		        echo "</table>";

    	} else {
    		echo "NOT CONNECTED...";
    	}

	}



}


/* End of file Cart.php */
/* Location: ./application/controller/Cart.php */