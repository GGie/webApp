<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function product($product_id = null)
	{
		$init =& get_instance();
		
		$init->db->select('*');
		$init->db->from('product');
		$init->db->where('product_id', $product_id);
		
		return $init->db->get()->num_rows();
	}
	
	function product_id()
	{
		$init =& get_instance();
		$init->load->helper('string');
		
		$unique = false;
		$unique = 0;

		do {
			$random = strtolower(random_string('alnum',8));
			
			if (product($random) != 1) {
					$var = $random;
				
				$unique = true;
			}
		} 
		while(!$unique); 

		return $var;
		
	}



	function ___iki64_Cipher($ch, $key)
{
    if (!ctype_alpha($ch))
        return $ch;
    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}
function ___iki64_Encipher($input, $key)
{
    $output = "";
    $inputArr = str_split($input);
    foreach ($inputArr as $ch)
        $output .= ___iki64_Cipher($ch, $key);
    return $output;
}
function ___iki64_Decipher($input, $key)
{
    return ___iki64_Encipher($input, 26 - $key);
}
// iki64
function ___iki64_abc($data){
    $md5    = md5("$data" . 'iki64');
    $az     = implode(range('a', 'z'));
    $base64 = strtolower(base64_encode($md5)) . "$az";
    $final  = preg_replace('([0-9|\=])', '', "$base64");
    $arr    = array_unique(str_split($final));
    return implode($arr);
};
function ___iki64_ABCD($data){
    $md5    = md5("$data" . '_iki64');
    $az     = implode(range('A', 'Z'));
    $base64 = strtoupper(base64_encode($md5)) . "$az";
    $final  = preg_replace('([0-9|\=])', '', "$base64");
    $arr    = array_unique(str_split($final));
    return implode($arr);
};
function iki64_encode($data, $key){
    $keyLen = strlen($key);
    $az     = implode(range('a', 'z'));
    $AZ     = implode(range('A', 'Z'));
    $rand   = ___iki64_abc($key);
    $rand2  = ___iki64_ABCD($key);
    $one    = base64_encode($data);
    $two    = ___iki64_Encipher($one, $keyLen);
    $three  = strtr($two, $az, $rand);
    $four   = strtr($three, $AZ, $rand2);
    return $four;
};
function iki64_decode($data, $key){
    $keyLen = strlen($key);
    $az     = implode(range('a', 'z'));
    $AZ     = implode(range('A', 'Z'));
    $rand   = ___iki64_abc($key);
    $rand2  = ___iki64_ABCD($key);
    $four   = strtr($data, $rand2, $AZ);
    $three  = strtr($four, $rand, $az);
    $two    = ___iki64_Decipher($three, $keyLen);
    $one    = base64_decode($two);
    return $one;
};