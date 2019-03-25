<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Callback extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-UAWe3EsfJwUJyxBv2BM0Gh01', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
		
    }

	public function index()
	{
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result);

		if($result){
		$notif = $this->veritrans->status($result->order_id);
		}

		error_log(print_r($result,TRUE));

		//notification handler sample

				file_put_contents('duitku.txt', "*** Logs virtual Account ***\r\n", FILE_APPEND | LOCK_EX);
				file_put_contents('duitku.txt', "TEST : " . $notif. "\r\n", FILE_APPEND | LOCK_EX);
				file_put_contents('duitku.txt', "\r\n***************************\r\n\r\n", FILE_APPEND | LOCK_EX);

		
		$transaction = $notif->transaction_status;
		$type = $notif->payment_type;
		$order_id = $notif->order_id;
		$fraud = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP
		      // echo "Transaction order_id: " . $order_id ." is challenged by FDS";
		      } 
		      else {
		      // TODO set payment status in merchant's database to 'Success'
		      // echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
		      }
		    }
		  }
		else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'
		  // echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
			$this->update_pay($order_id, 'settlement', 2);
		  } 
		  else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'
		  // echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
		  	$this->update_pay($order_id, 'pending', 1);
		  } 
		  else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  // echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
		}

	}

	private function update_pay($order_id, $payment_status, $status_order){
		$this->db->where('invoice_id', $order_id);
		$this->db->update('order', array('payment_status' => $payment_status, 'status_order_id' => $status_order));
	}
}


/* End of file Callback.php */
/* Location: ./application/controller/Callback.php */