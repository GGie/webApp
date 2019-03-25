<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	
    function get_data_login($user, $pass){
		$sql = "SELECT * FROM users WHERE email='" . $user . "' AND password='" . $pass . "'";
        $query = $this->db->query($sql);

        return $query;
    }
	
	function cek_login($user, $pass)
	{
		//$db_sql = $this->load->database('sql_svr', true);
		
		//1 Berhasil Login
		//2 Akun disable
		//3 Salah password
		//4 Salah username
		if ( isset($user) AND isset($pass))
		{
			$sql = "SELECT * FROM users WHERE email='" . $user . "' AND password='" . $pass . "'";
			$query = $this->db->query($sql);
			
			if ( $query->num_rows() > 0 ) {
				if ( $query->row()->status_id == 1 ){
					$result = 1 ;
				} else {
					$result = 2 ;
				}
			} else {
				$sql_check = "SELECT * FROM users WHERE email='" . $user . "'";
				$query_check = $this->db->query($sql_check);
				
				if ( $query_check->num_rows() > 0 ) {
					$result = 3;
				} else {
					$result = 4;
				}
			}
		}
		return $result ;
	}
	
	public function getKodeAktivasi($param) {
		
		$this->db->where('aktivasi', $param);
		$data = $this->db->get('users');
		
		if ($data->num_rows() > 0)
		{
			return $data->row();
		} else {
			return false;
		}
		
	}

	public function cekEmailReady($param) {
		
		$this->db->where('email', $param);
		$data = $this->db->get('users');
		
		if ($data->num_rows() > 0)
		{
			return $data->row();
		} else {
			return false;
		}
		
	}

	//$param == fB_id
	public function getByFbId($param)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('fb_id', $param);
		$this->db->where('fb_id !=', NULL);
		
		return $this->db->get()->row();
	}
}

/* End of file Login_model.php */
/* Location: ./application/controllers/Login_model.php */