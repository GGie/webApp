<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;
		$this->load->model('Login_model', 'LoginModel');

		$this->load->library('Mobile_Detect');	
		
	}

	private function direct_login_success(){
		if($this->input->post('url_old')) {
			return $this->input->post('url_old');
		} else {
			return site_url();
		}
	}

	private function direct_login_failed(){
		if($this->input->post('url_old')) {
			return site_url('auth/login') . "?url_old=" . $this->input->post('url_old');
		} else {
			return site_url('auth/login');
		}
	}

	public function login(){
		if (is_login()){
			redirect(base_url());
		}

		$this->load->library('Mobile_Detect');
		$detect = new Mobile_Detect;
		if (!$detect->isMobile()) {
			parent :: header_logo() ;
		    $this->load->view('auth/login');
			$this->load->view('web/footer_blank');
		} else {
			$this->load->view('auth/login_mobile');
		}
	}

	public function register(){
		$this->load->library('Mobile_Detect');

		$detect = new Mobile_Detect;
		if (!$detect->isMobile()) {
			parent :: header_logo() ;
		    $this->load->view('auth/register');
			$this->load->view('web/footer_blank');
		} else {
			$this->load->view('auth/register_mobile');
		}
	}

	public function forgot(){
		$this->load->library('Mobile_Detect');
		$this->load->library('sendmail');

		$detect = new Mobile_Detect;

		$email 		= $this->input->post('txtemail');
		$dt 		= date("Y-m-d");
		$expired 	= date( "Y-m-d", strtotime( "$dt +1 day" ) );
		if ($email){
			if ($this->LoginModel->cekEmailReady($this->input->post('txtemail')) ) {
			$aktivasi = sha1($email . time());

						$return = $this->sendmail->mail_reseter(array(
							'email' => $email,
							'link' => base_url('auth/resetpwd/' . $aktivasi) 
						));

						if ($return){
							$this->db->where('email', $email);
	    					$this->db->update('users', array('aktivasi' => $aktivasi, 'expired' => $expired));
	    				}

				$this->session->set_flashdata('message', 'New Password, Please Check Email');
			} else {
				$this->session->set_flashdata('message', 'Account Not Found');
			}
		}

		if (!$detect->isMobile()) {
			parent :: header() ;
		    $this->load->view('auth/forgot');
			$this->load->view('web/footer_blank');
		} else {
			$this->load->view('auth/forgot_mobile');
		}
	}

	public function aktivasi($param = "hhaha") {
		
		$data['data'] = $this->LoginModel->getKodeAktivasi($param);

		if (!$data['data'])
			redirect(base_url());

		$detect = new Mobile_Detect;
		if (!$detect->isMobile()) {
			parent::header();
		    $this->load->view('auth/aktivasi', $data);
			$this->load->view('web/footer_blank');
		} else {
			$this->load->view('auth/aktivasi_mobile', $data);
		}		
		
	}

	public function resetpwd($param = "hhaha") {
		
		$data['data'] = $this->LoginModel->getKodeAktivasi($param);

		if (!$data['data'])
			exit();

		$detect = new Mobile_Detect;

		parent :: header() ;

		if ($this->input->post('txtemail')){
			$pwd1	= $this->input->post('txtpassword');
			$pwd2	= $this->input->post('txtpassword2');
			$email 	= $this->input->post('txtemail');

			if ( $pwd1 != $pwd2 ) {
				$this->session->set_flashdata('message', 'Password harus sama');
			} else {
				$this->db->where('email', $email);
				$this->db->update('users', array('aktivasi' => '', 'password' => md5($pwd2) ));

				$this->session->set_flashdata('message', 'Berhasil reset password, silahkan login!');
				redirect(site_url('auth/login'));
			}

			
		}

		if (!$detect->isMobile()) {
		    $this->load->view('auth/reset', $data);
			$this->load->view('web/footer_blank');
		} else {
			$this->load->view('auth/reset_mobile', $data);
		}		
		
	}

	public function auth(){
		$user = $this->input->post('txtusername');
		$pass = md5($this->input->post('txtpassword'));
		if ( $user AND $pass ) {		// Cek apakah user telah menginput username dan password
			
			$user_cek = $this->LoginModel->cek_login($user, $pass);
			if ( $user_cek == 1 ) {	
				$data = $this->LoginModel->get_data_login($user, $pass);
				foreach ($data->result() as $data_login ) {
	
					$sess_array = array(
											'user_id' 		=> $data_login->user_id, 
											'fullname'		=> $data_login->fullname, 
											'email' 		=> $data_login->email, 
											'is_login' 		=> TRUE
										) ;
												
					$this->session->set_userdata($sess_array);
					
					
					//update lst login
					$paramLogin = array(
						'last_login'	=> date('Y-m-d H:i:s'),
					);
					$this->db->where('user_id',$data_login->user_id);
					$this->db->update('users', $paramLogin);
					
					//berhasil login
					redirect($this->direct_login_success());
					
				}
			} elseif ( $user_cek == 2 ) {
				$this->session->set_flashdata('message', 'Account Disabled.');
				
				// $param['id_browser'] = $this->get__browser();

				redirect($this->direct_login_failed());
				
			} elseif ( $user_cek == 3 ) {
				$this->session->set_flashdata('message', 'Incorrect Password.');
				
				redirect($this->direct_login_failed());

			} elseif ( $user_cek == 4 ) {
				$this->session->set_flashdata('message', 'Incorrect Username.');
				
				redirect($this->direct_login_failed());
				
			} else {
				$this->session->set_flashdata('message', 'Incorrect Login.');
				
				redirect($this->direct_login_failed());
				
			}
		} else {
			if ( !$this->session->userdata('is_login') ) {
				$this->session->set_flashdata('message', 'Username and Password required.');

				redirect($this->direct_login_failed());
			} else {
				//berhasil login
				redirect($this->direct_login_success());
			}
		}
	}

	public function reset(){
		$this->load->library('sendmail');
		$return = $this->sendmail->mail_register(array(
			'email' => $this->input->post('txtemail'),
			'link' => base_url('auth/aktivasi/' . $aktivasi) 
		));

		$this->load->view('auth/register_message');
	}

	public function register_message(){
		$this->load->view('auth/register_message');
	}
	public function auth2() {
			if (!$this->LoginModel->cekEmailReady($this->input->post('txtemail')) ) {
				$aktivasi = sha1($this->input->post('txtemail',true) . time());
				
				$this->load->library('sendmail');
				$return = $this->sendmail->mail_register(array(
					'email' => $this->input->post('txtemail'),
					'link' => base_url('auth/aktivasi/' . $aktivasi) 
				));

				if ($return){
					$this->db->insert('users',array(
						'user_id'			=> $this->auto_id(),
						'email'				=> $this->input->post('txtemail',true),
						'aktivasi'			=> $aktivasi,
						'expired'			=> strtotime(date('Y-m-d H:i:s') . ' + 1 days'),
						//'input_by' 			=> '', //$this->session->userdata('user_id'),
						'input_date' 		=> date('Y-m-d H:i:s')
					));

					$this->session->set_flashdata('message', 'Success');
					redirect(base_url('auth/register_message'));
				} else {
					$this->session->set_flashdata('message', 'Failed');
					redirect(base_url('auth/register_message'));
				}
				
			} else {

				$this->session->set_flashdata('message', 'Email AlReady!');
			
				redirect(base_url('auth/register'));
			}
	}

	public function auth3(){
		
		if (!$this->input->post('txtemail')) {
			$this->session->set_flashdata('message', 'Email Required');
			redirect(base_url('auth/login'));
		}

		if (!$this->input->post('txtfullname')){
			$this->session->set_flashdata('message', 'Fullname Required');
			redirect(base_url('auth/login'));
		}

		if (!$this->input->post('txthp')){
			$this->session->set_flashdata('message', 'Nomor Ponsel Required');
			redirect(base_url('auth/login'));
		}

		if (!$this->input->post('txtpassword')){
			$this->session->set_flashdata('message', 'Password Required');
			redirect(base_url('auth/login'));
		}

		$this->db->where('email', $this->input->post('txtemail'));
		$this->db->update('users',array(
			'fullname'			=> $this->input->post('txtfullname',true),
			'nohp'				=> $this->input->post('txthp',true),
			'password'			=> md5($this->input->post('txtpassword',true)),
			'aktivasi'			=> '',
			'status_id'			=> 1,
			//'update_by'		=> $this->session->userdata('user_id'),
			'update_date' 		=> date('Y-m-d H:i:s')
		));
		
		$this->session->set_flashdata('message', 'Berhasil diaktivasi, silahkan login');
		redirect(base_url('auth/login'));
	}

	public function logout() {
		$this->session->sess_destroy();

		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('lastname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('is_login');
		//session_destroy() ;
		
		redirect(base_url()) ;
		
	}

	function get__browser(){
		
		$user_agent = $_SERVER['HTTP_USER_AGENT']; 
		
		if (preg_match('/MSIE/i', $user_agent)) { $browser = "Internet Explorer";} 
		elseif (preg_match('/Firefox/i', $user_agent)){$browser = "Mozilla Firefox";} 
		elseif (preg_match('/Chrome/i', $user_agent)){$browser = "Google Chrome";} 
		elseif (preg_match('/Safari/i', $user_agent)){$browser = "Safari";} 
		elseif (preg_match('/Opera/i', $user_agent)){$browser = "Opera";}
		else {$browser = "Other";}

		return $browser;
	}

	private function auto_id()
	{
		$sql = "SELECT max(RIGHT(user_id, 6)) as id FROM users";
		$query = $this->db->query($sql);
		foreach ( $query->result() as $data ) {}
		$id_auto =  $data->id + 1; //no urut
		return "u" . sprintf("%06s", $id_auto);
	}


	public function fb_login()
	{
		$this->load->library('facebook');

		if ($this->facebook->logged_in())
		{
			redirect("/test");
		}
		redirect($this->facebook->login_url(), 'refresh');

	}

	public function get_fb_login(){
		$this->load->library('facebook');
		
		$user = $this->facebook->user();

		if ($user['code'] === 200)
		{
				$users = $this->LoginModel->getByFbId($user['data']['id']);
				
				if ( $users == "" AND $users->user_id == "" ) {
					$this->session->set_flashdata('message', 'Tidak terhubung ke akun manapun');
					redirect(base_url('auth/login'));
				}
				
					$sess_array = array(
						'user_id' 		=> $users->user_id, 
						'fullname'		=> $users->fullname, 
						'email' 		=> $users->email, 
						'is_login' 		=> TRUE
					) ;
												
					$this->session->set_userdata($sess_array);
					
					
					//update lst login
					$paramLogin = array(
						'last_login'	=> date('Y-m-d H:i:s'),
					);
					$this->db->where('user_id',$users->user_id);
					$this->db->update('users', $paramLogin);
					
					//berhasil login
					redirect($this->direct_login_success());
			} else {
				echo $user['code'];
				var_dump($user);
			}
			
	}

	// public function auth_fb(){
	// 	$this->load->library('facebook');
		
			
	// 	$contents['user_profile'] = $this->session->userdata('user_profile');
		
	// 	var_dump($contents['user_profile']);
	// }



}

/* End of file Auth.php */
/* Location: ./application/controller/Auth.php */