<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alamat_model extends CI_Model {

	public function alamatByInput($pages = false, $search, $limit = 20, $page = 1)
	{
		$this->db->select('a.*, c.province, c.city');
		$this->db->from('alamat as a');
		$this->db->join('users as b', 'b.user_id = a.input_by');
		$this->db->join('subdistrict as c', 'c.subdistrict_id = a.pro_kec');
		$this->db->where('a.input_by', user_id());
		$this->db->order_by('a.type', 'DESC');
		
		if ( $pages )
		$this->db->limit($limit, $page);
		
		return $this->db->get();
	}


	public function getInputBy($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('alamat_id', $paramId);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}

	//$param == user_id
	public function getAlamatByUserId($param)
	{
		//$paramId == alamat_id
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('type', 1);
		$this->db->where('input_by', $param);

		$query = $this->db->get()->row();

		if(isset($query)){
			return $query;
	   } else{
	    	return false;
	   }
		
	}

	public function checkAlamat($paramId)
	{
		//$paramId == alamat_id
		$this->db->select('input_by');
		$this->db->from('alamat');
		$this->db->where('alamat_id', $paramId);
		
		return $this->db->get()->row()->input_by;
	}

	public function alamat()
	{		
		$this->load->library('rajaongkir');
		
		$return = "";
		$query = $this->alamatByInput(false, "test");

		if ($query != null) {

		        foreach($query->result() as $results ){ 
		        	        $return .= '<div>';
		        	        	$return .= '<label class="c-input-label">';
		        	        	$return .= '<input type="radio" class="co-input-radio" value="jnt_reg" name="kurir" onclick="selectAlamat(\'' . $results->penerima . '\')">';
					            $return .= '<span class="co-input__inner-label o-flag">';
					            $return .= '<div class="row">';
						            
						                $return .= '<div class="col col-12">';
						                    $return .= '<div class="css-oq7xsu">' . $results->penerima . '</div>';
						                $return .= '</div>';
						            $return .= '</div>';
						            $return .= '<div class="row u-mt2">';
						                $return .= '<div class="col col-12">';
						                    $return .= '<div class="css-oq7xsu">' . $results->alamat_detail . '</div>';
						                $return .= '</div>';
						            
					            $return .= '</div>';
					            $return .= '</span>';
					            $return .= '</div>';
					        $return .= '</div>';
		         }


    	} else {
    		$return .= "Tidak ada alamat";
    	}

    	return $return;
	}
	
}

/* End of file Alamat_model.php */
/* Location: ./application/model/Alamat_model.php */