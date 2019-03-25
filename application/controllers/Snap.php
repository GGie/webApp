<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

        if (!is_login()){
			redirect(site_url('auth/login'));
		}
		
		$this->load->library('sendmail');
		$this->load->library('midtrans');
        $params = array('server_key' => 'SB-Mid-server-UAWe3EsfJwUJyxBv2BM0Gh01', 'production' => false);
		$this->midtrans->config($params);
		$this->load->helper('url');	

		$this->load->model('cart_model', 'CartModel');

    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
		
		if (!$this->input->post('invoice_id')) {
            exit('No direct script access allowed');
        }



        $order = $this->CartModel->getSKUbyInvoiceId($this->input->post('invoice_id'));
        $this->db->trans_start();
		        //Kembalikan stock ke product
				product_stock("+", $order->qty, $order->product_id);

				$this->db->where('invoice_id', $this->input->post('invoice_id'));
				$this->db->update('order',array(
							'ongkir' => $this->input->post('product_ongkir'),
							'qty' => $this->input->post('product_qty')
						));

				//Kembalikan stock ke product
				product_stock("-", $this->input->post('product_qty'), $order->product_id);
		$this->db->trans_complete();






		$dataSKU = $this->CartModel->getSKUbyInvoiceId($this->input->post('invoice_id'));

		if ($dataSKU == null) {
            exit('No direct script access allowed');
        }

		$total_price = ($dataSKU->price*$dataSKU->qty) + $dataSKU->ongkir;
		// Required
		$transaction_details = array(
		  'order_id' => $dataSKU->invoice_id, //rand(), // 
		  'gross_amount' => $total_price, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' 			=> $dataSKU->product_id,
		  'price' 		=> $dataSKU->price,
		  'quantity' 	=> $dataSKU->qty,
		  'name' 		=> SUBSTR($dataSKU->product_name, 0, 50),
		);

		// Optional
		$item2_details = array(
		  'id' => 'ONGKIR001',
		  'price' => $dataSKU->ongkir,
		  'quantity' => 1,
		  'name' => "Ongkos Kirim"
		);

		// Optional
		$item_details = array ($item1_details, $item2_details);

		// Optional
		$billing_address = array(
		  'first_name'    => $dataSKU->seller_name,
		  'last_name'     => "",
		  'address'       => $dataSKU->sell_a_alamat_detail,
		  'city'          => "Jakarta",
		  'postal_code'   => $dataSKU->sell_a_kode_pos,
		  'phone'         => $dataSKU->seller_nohp,
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => $dataSKU->buyer_name,
		  'last_name'     => "",
		  'address'       => $dataSKU->buy_a_alamat_detail,
		  'city'          => "Jakarta",
		  'postal_code'   => $dataSKU->buy_a_kode_pos,
		  'phone'         => $dataSKU->buyer_nohp,
		  'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $dataSKU->buyer_name,
		  'last_name'     => "",
		  'email'         => $dataSKU->buyer_email,
		  'phone'         => $dataSKU->buyer_nohp,
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	//echo 'RESULT <br><pre>';
    	//var_dump($result);
    	//echo '</pre>' ;

    	if ($result->status_code == 404 ){
    		exit;
    	}

    	if ($result->payment_type == "bank_transfer") {
    		if(isset($result->permata_va_number) && count($result->permata_va_number) > 0){
    			$va_bank = "permata";
    			$va_number = $result->permata_va_number;
    		} else {
    			$va_bank = $result->va_numbers[0]->bank;
    			$va_number = $result->va_numbers[0]->va_number;
    		}
    	 }else if($result->payment_type == "echannel"){
            $va_bank = "";
    		$va_number = $result->bill_key;
          
          }
          else if($result->payment_type == "cstore"){
            $va_bank = "";
    		$va_number = $result->payment_code;
          }



		if($result != null) {
		$check_exist = $this->CartModel->getSKUbyInvoiceId($result->order_id);
			if( $check_exist != null ) {
			$this->db->trans_start();
    			$this->db->insert('payment',array(
					'status_code'		=> $result->status_code,
					'status_message'	=> $result->status_message,
					'transaction_id'	=> $result->transaction_id,
					'order_id'			=> $result->order_id,
					'gross_amount'		=> $result->gross_amount,
					'payment_type'		=> $result->payment_type,
					'transaction_time'	=> $result->transaction_time,
					'transaction_status' => $result->transaction_status,
					'va_bank'			=> $va_bank,
					'va_number'			=> $va_number,
					'fraud_status'		=> $result->fraud_status,
					'pdf_url'			=> $result->pdf_url,
					'finish_redirect_url'	=> $result->finish_redirect_url,
					'input_date' 		=> date('Y-m-d H:i:s')
				));

				
				$this->db->insert('auto_mail',array(
					'param'			=> "INVOICE",
					'paramId'		=> $check_exist->invoice_id,
					'subject'		=> "TAGIHAN PEMBAYARAN GOOPIZ",
					'description'	=> $check_exist->product_id . " - " . $check_exist->product_name,
					'email'			=> $check_exist->buyer_email,
					'status_id'		=> 0,
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));

				$this->db->insert('messages',array(
					'message_detail'=> "Segera Lakukan Pembayaran",
					'link'			=> 'cart/invoice/' . $check_exist->invoice_id,
					'param'			=> $check_exist->invoice_id,
					'from'			=> "u100001",
					'to'			=> $check_exist->buyer,
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));
			$this->db->trans_complete();
			}
    	}



    			redirect(base_url('cart/invoice/' . $result->order_id));
    }
}
