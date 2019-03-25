<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Robotgoo extends CI_Controller {

	public function __construct()
	{
		parent :: __construct() ;
	}


	public function send_mail()
	{

		//BLASH Email Tagihan Pembayaran
		$this->db->where('status_id', 0);
		$this->db->where('param', 'INVOICE');
		$BlashEmail = $this->db->get('auto_mail');

		if ( $BlashEmail->num_rows() > 0 ) {
			foreach ($BlashEmail->result() as $key => $value) {
				$this->mail_invoice($value->paramId);

				$this->db->where('send_mail_id', $value->send_mail_id);
				$this->db->update('auto_mail',array(
						'status_id'		=> $value->status_id + 1,

						'update_by'		=> "u100001",
						'update_date'	=> date('Y-m-d H:i:s')
				));
			}

				
		}
		//BLASH Email Tagihan Pembayaran EOF

	}

	public function mail_invoice($param){
	// * Tagihan Pembayaran
	// * $param == invoice_id

		$this->load->library('sendmail');

		$return = $this->sendmail->mail_invoice(array(
			'link' => $param
		));
	}


}


/* End of file RobotGoo.php */
/* Location: ./application/controller/RobotGoo.php */