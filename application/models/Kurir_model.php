<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kurir_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->library('rajaongkir');
	}

	public function ongkir($kurir)
	{		
		$this->load->library('rajaongkir');
		
		$return = "";
		$ongkos = $this->rajaongkir->cost('734', 'subdistrict', '731', 'subdistrict', '1000', $kurir);
		$queries = json_decode($ongkos);

		if ($queries != null) {
							// $return .= "<div>";

		        foreach($queries->rajaongkir->results as $results ){ 
		          foreach($results->costs as $key => $costs) {
		          		$return .= '<div class="css-19midj">';
		          		$return .= '<div>';
		          	    $return .= '<label class="c-input-label">';
					        $return .= '<input type="radio" class="co-input-radio" value="jnt_reg" name="kurir" onclick="selectKurir(\'' . $kurir . $key . '\')">';
					        $return .= '<span class="co-input__inner-label o-flag" id="kurir' . $kurir . $key . '">';
					            $return .= '<div class="o-flag__head">';
					                $return .= '<div class="css-logo-' . $kurir . '">' . $costs->service . '</div>';
					            $return .= '</div>';
					            $return .= '<div class="o-flag__body">';
					                $return .= '<div>' . $costs->service . ' - ' . $costs->description . '</div>'; 
					                foreach ($costs->cost as $cost) {
					                $return .= '<div class="u-fg--ash-dark"><span id="kurirValue' . $kurir . $key . '">' . number_format($cost->value, 0,',', '.') . '</span> (' . $cost->etd . ' hari kerja)</div>';
					            	}
					            $return .= '</div>';
					        $return .= '</span>';
					    $return .= '</label>';
					    $return .= '</div>';
					    $return .= '</div>';
		           }
		         }


    	} else {
    		$return .= "NOT CONNECTED...";
    	}

    	return $return;
	}
	
}

/* End of file Kurir_model.php */
/* Location: ./application/model/Kurir_model.php */