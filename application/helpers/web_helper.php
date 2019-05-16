<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Helper untuk pengaturan web
 */


function is_mobile(){
  $init =& get_instance();

  $init->load->library('Mobile_Detect');
  $detect = new Mobile_Detect;
    if (!$detect->isMobile()) {
        return false;
    } else {
        return true;
    }
}
function product_stock($operator, $qty, $product_id){
    $init =& get_instance();

    if ( $operator == "+") {
      $init->db->set('product_stock', 'product_stock +'. $qty .'',false);
      $init->db->where('product_id', $product_id);
      $init->db->update('product');
    } else {
      $init->db->set('product_stock', 'product_stock -'. $qty .'',false);
       $init->db->where('product_id', $product_id);
      $init->db->update('product');
    }


    $init->db->where('product_id', $product_id);
    $product = $init->db->get('product')->row();

    if ( $product->product_stock <= 0 ){
      $init->db->set('product_type', 0,false);
      $init->db->where('product_id', $product_id);
      $init->db->update('product');
    } elseif( $product->product_stock >= 1 ){
      $init->db->set('product_type', 1,false);
      $init->db->where('product_id', $product_id);
      $init->db->update('product');
    }

}
function meta_desc($text, $num_char = 80){

  $removeDouble = preg_replace('/\s\s+/', ' ', $text);
  return substr($removeDouble, 0, $num_char) . '...';
}
function ImgToBlob($param){

    $img = @file_get_contents($param);

        if ($img == "") {
          $dataBlob = 'data:image/jpeg;base64,' . base64_encode($img);
        }
        else{
          $dataBlob = "";
        }

    return $dataBlob;

}
function number_rp($param){
  return "Rp " . number_format($param,0,',','.');
}

function number_hp_prefix($originalNumber){
  $countryCode = '62'; // Replace with known country code of user.
  $internationalNumber = preg_replace('/^0/', $countryCode, $originalNumber);
  return $internationalNumber;
}


function status_orderStock($paramId){
echo '<div class="se-progress se-progress-steps-6">
  <!-- Proses Pembayaran -->
  <div class="se-progress-step" data-tooltip="test">
    <div class="se-progress-step-icon">
      <i class="iconx icon-e-47"></i>
    </div>
  </div>
  <!-- Proses Pembayaran -->

  <!-- Proses Pengiriman -->
  <div class="se-progress-step" data-tooltip="Proses Pengiriman">
    <div class="se-progress-step-icon">
      <i class="iconx icon-f-48"></i>
    </div>
  </div>
  <!-- Proses Pengiriman -->
  <!-- Proses Pengiriman -->
  <div class="se-progress-step" data-tooltip="Proses Pengiriman">
    <div class="se-progress-step-icon">
      <i class="iconx icon-f-43"></i>
    </div>
  </div>
  <!-- Proses Pengiriman -->
  <!-- Selesai -->
  <div class="se-progress-step" data-tooltip="Selesai">
    <div class="se-progress-step-icon">
      <i class="iconx icon-e-46"></i>
    </div>
  </div>
  <!-- Selesai -->
  <!-- spacer -->
  <span class="se-progress-spacer"></span>
  <!-- spacer -->
  
  <!-- bar -->
  <div class="se-progress-bar"></div>
  <!-- bar -->
</div>';
}
//$paramId == invoice_id pada table order
function status_order($paramId){
   $init =& get_instance();
  $init->db->where('order_id', $paramId);
  $query = $init->db->get('order');
  
  $view     = $query->row()->status_order_id;
  $payment  = $query->row()->payment_status;

  $first      = ($view >= 1) ? 'se-progress-step-icon' : 'se-progress-step-icon-disable';
  $firstIcon  = ($view >= 2) ? 'iconx' : '';
  $firstStatus = ($view >= 2) ? 'Sudah dibayar' : 'Proses Pembayaran';

  $Second     = ($view >= 3) ? 'se-progress-step-icon' : 'se-progress-step-icon-disable';
  $SecondIcon = ($view >= 4) ? 'iconx' : '';
  $SecondStatus = ($view >= 4) ? 'Sudah Dikirim' : 'Proses Pengiriman';

  $Three      = ($view >= 5) ? 'se-progress-step-icon' : 'se-progress-step-icon-disable';
  $ThreeIcon  = ($view >= 6) ? 'iconx' : '';
  $ThreeStatus = ($view >= 6) ? 'Komplain' : 'Diterima';

  $Fours      = ($view >= 7) ? 'se-progress-step-icon' : 'se-progress-step-icon-disable';
  $FoursIcon  = ($view >= 8) ? 'iconx' : '';
  $FoursStatus = ($view >= 8) ? 'Selesai' : 'Proses Review';

  echo '<div class="se-progress se-progress-steps-6">
  <!-- Proses Pembayaran -->
  <div class="se-progress-step" data-tooltip="'.$firstStatus.'">
    <div class="'.$first.'">
      <i class="'.$firstIcon.' icon-e-47"></i>
    </div>
  </div>
  <!-- Proses Pembayaran -->

  <!-- Proses Pengiriman -->
  <div class="se-progress-step" data-tooltip="'.  $SecondStatus . '">
    <div class="'.$Second.'">
      <i class="'.$SecondIcon.' icon-f-48"></i>
    </div>
  </div>
  <!-- Proses Pengiriman -->
  <!-- Proses Pengiriman -->
  <div class="se-progress-step" data-tooltip="'.  $ThreeStatus . '">
    <div class="'.$Three.'">
      <i class="'.$ThreeIcon.' icon-f-43"></i>
    </div>
  </div>
  <!-- Proses Pengiriman -->
  <!-- Selesai -->
  <div class="se-progress-step" data-tooltip="'.  $FoursStatus . '">
    <div class="'.$Fours.'">
      <i class="'.$FoursIcon.' icon-e-46"></i>
    </div>
  </div>
  <!-- Selesai -->
  <!-- spacer -->
  <span class="se-progress-spacer"></span>
  <!-- spacer -->
  
  <!-- bar -->
  <div class="se-progress-bar"></div>
  <!-- bar -->
</div>';


}

function messages_count($paramId)
{
  $init =& get_instance();

  $a = substr($paramId, 0, 7);
  $b = substr($paramId, 7, 7);

  if (substr($a, 1) > substr($b, 1)) {
    $group_id =  $b . $a;
  } else {
    $group_id = $a . $b;
  }


  $init->load->model('Messages_model', 'MessagesModel');
  $row = $init->MessagesModel->get_chat_count($group_id);

  return $row;
}


function auto_number_inv()
{
  $init =& get_instance();
  
  $init->db->set('number', 'number +'. 1 .'',false);
  $init->db->where('detail', 'INVOICE');
  $init->db->update('auto_number');

  $init->db->where('detail', 'INVOICE');
  $data = $init->db->get('auto_number')->row();

  return $data->prefix . "-" . date('y') . (date('m')) . $data->number;

}

function auto_number($detail)
{
  $init =& get_instance();
  
  $init->db->set('number', 'number +'. 1 .'',false);
  $init->db->where('detail', $detail);
  $init->db->update('auto_number');

  $init->db->where('detail', $detail);
  $data = $init->db->get('auto_number')->row();

  return $data->prefix . "-" . date('y') . (date('m')) . $data->number;

}

function is_login()
{
  $CI =& get_instance();

    if($CI->session->userdata('is_login')){
      return true;
    } else {
      return false;
    }
}

function user_id()
{
  $CI =& get_instance();
  return $CI->session->userdata('user_id');
}

function link_ref()
{
  return $_SERVER['HTTP_REFERER'];
}

function is_set_alamat($paramId)
{
  $init =& get_instance();
  
  //$paramId == user_id
  //1 == alamat utama

  $init->db->where('type', 1);
  $init->db->where('input_by', $paramId);
  $init->db->order_by('input_date', 'desc'); 
  $init->db->limit(1);
  $query = $init->db->get('alamat');

   if(isset($query->row()->pro_kec)){
      return $query->row()->pro_kec;
   } else{
    return false;
   }
}

function is_set_rekening($paramId)
{
  $init =& get_instance();
  
  //$paramId == user_id
  //1 == alamat utama

  $init->db->where('type', 1);
  $init->db->where('input_by', $paramId);
  $init->db->order_by('input_date', 'desc'); 
  $init->db->limit(1);
  $query = $init->db->get('rekening');

   if(isset($query->row()->bankCode)){
      return $query->row()->bankCode;
   } else{
    return false;
   }
}

function is_username($paramId)
{
  $init =& get_instance();
  
  //$paramId == user_id
  $init->db->where('user_id', $paramId);
  $query = $init->db->get('users');

   if(isset($query->row()->fullname)){
      return $query->row()->fullname;
   } else{
    return false;
   }
}

function is_subdistrict($paramId)
{
  $init =& get_instance();
  
  //$paramId == user_id
  //1 == alamat utama
  $init->db->select('CONCAT(province, ", ", city, ", ", subdistrict_name) as alamat');
  $init->db->where('subdistrict_id', $paramId);
  $query = $init->db->get('subdistrict');

   if(isset($query->row()->alamat)){
      return $query->row()->alamat;
   } else{
    return false;
   }
}


function increment_product_view($paramId)
{
  $init =& get_instance();
  
  //$paramId == product_id

  $init->db->where('product_id', $paramId);
  $query = $init->db->get('product');
  
  $viewed = $query->row()->viewed + 1;

  $init->db->where('product_id', $paramId);
  $init->db->update('product', array('viewed' => $viewed));
  return $viewed;
}

function xxs_filter($param){
  return nl2br(htmlspecialchars($param, ENT_QUOTES, 'UTF-8'));
}

function description($param){
  return substr(nl2br(htmlspecialchars($param, ENT_QUOTES, 'UTF-8')), 0, 150);
}

function replace_url_char($text)
{
    return preg_replace('/[^\p{L}\p{N}]/u', '-', strtolower($text));
}

function test()
{
    $CI =& get_instance();

    if ( $CI->session->userdata('log_session') == FALSE ) {
        redirect(base_url() . 'akun/masuk');
        //$CI->load->view('akun/masuk');
        exit();
    }
    preg_replace('#\s+#', '-', $input);
}

function getKategori( $paramId ) {
  $init =& get_instance();
  
  //$paramId == Product_id

  $init->db->where('kategori_id', $paramId);
  $init->db->order_by('input_date', 'desc'); 
  $init->db->limit(1);
  $query = $init->db->get('kategory');

   if(isset($query->row()->detail)){
      return $query->row()->detail;
   } else{
    return false;
   }
  
  
}

function get_photo($userId) {
  $init =& get_instance();

  $init->db->where('user_id', $userId);
  $query = $init->db->get('users');

  $photo = base_url('assets/images/custom/profile.png');

  if (file_exists($query->row()->avatar) AND $query->row()->avatar != "")
    $photo = base_url($query->row()->avatar);

  return $photo;
  
}

function getProductPhotoUrl( $urlImage ) {
  $init =& get_instance();

  $photo = base_url('assets/images/custom/noimage.png');

  if (isset($urlImage))
    $photo = base_url($urlImage);

  return $photo;
  
}

function getProductPhoto( $paramId ) {
  $init =& get_instance();
  
  //$paramId == Product_id

  $init->db->where('product_id', $paramId); // Where
  // $init->db->where('type_file_id', 1); // Where
  $init->db->order_by('input_date', 'desc'); // Order by
  $init->db->limit(1);
  $query = $init->db->get('product_image');

  $photo = base_url('assets/images/custom/noimage.png');

  if (isset($query->row()->image_url) && file_exists($query->row()->image_url))
    $photo = base_url($query->row()->image_url);

  return $photo;
  
}

function getProductPhotoRand( $paramId ) {
  $init =& get_instance();
  
  //$paramId == Product_id

  $init->db->where('Product_id', $paramId); // Where
  $init->db->where('type_file_id', 1); // Where
  $init->db->order_by('input_date', 'RANDOM'); // Order by
  $init->db->limit(1);
  $query = $init->db->get('file');

  $photo = base_url('assets/images/custom/noimage.png');

  if (isset($query->row()->file_url))
    $photo = base_url($query->row()->file_url);

  return $photo;
  
}

function format_indo($date) {
  if ( $date != '0000-00-00 00:00:00' AND isset($date)){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " " . $tahun;
    echo $result;
  } else {
    
  }
}

function format_indo_time($date) {
  if ( $date != '0000-00-00 00:00:00' AND isset($date)){
    $BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sept", "Okt", "Nov", "Des");
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    $time = substr($date, 10, 6);
    
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " " . $tahun . " " . $time;
    return $result;
  } else {
    
  }
}

//javascript
// function convertTimestamp(timestamp) {
//   var d = new Date(timestamp * 1000), // Convert the passed timestamp to milliseconds
//     yyyy = d.getFullYear(),
//     mm = ('0' + (d.getMonth() + 1)).slice(-2),  // Months are zero based. Add leading 0.
//     dd = ('0' + d.getDate()).slice(-2),     // Add leading 0.
//     hh = d.getHours(),
//     h = hh,
//     min = ('0' + d.getMinutes()).slice(-2),   // Add leading 0.
//     ampm = 'AM',
//     time;
      
//   if (hh > 12) {
//     h = hh - 12;
//     ampm = 'PM';
//   } else if (hh === 12) {
//     h = 12;
//     ampm = 'PM';
//   } else if (hh == 0) {
//     h = 12;
//   }
  
//   // ie: 2013-02-18, 8:35 AM  
//   time = yyyy + '-' + mm + '-' + dd + ', ' + h + ':' + min + ' ' + ampm;
    
//   return time;
// }

function timeAgo($original) {
  date_default_timezone_set('Asia/Jakarta');
  $chunks = array(
      array(60 * 60 * 24 * 365, 'tahun'),
      array(60 * 60 * 24 * 30, 'bulan'),
      array(60 * 60 * 24 * 7, 'minggu'),
      array(60 * 60 * 24, 'hari'),
      array(60 * 60, 'jam'),
      array(60, 'menit'),
  );
 
  $today = time();
  $since = $today - $original;
 
  if ($since > 604800)
  {
    $print = date("M jS", $original);
    if ($since > 31536000)
    {
      $print .= ", " . date("Y", $original);
    }
    return $print;
  }
 
  for ($i = 0, $j = count($chunks); $i < $j; $i++)
  {
    $seconds = $chunks[$i][0];
    $name = $chunks[$i][1];
 
    if (($count = floor($since / $seconds)) != 0)
      break;
  }
 
  $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
  if ( $print == 0 ) {
    return 'Beberapa detik yang lalu';
  } else {
   return $print . ' yang lalu';
  }

  function bulan_to_alphabet($bulan){
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

//sumber encode http://richardpeacock.com/blog/2011/08/encode-any-string-only-alphanumeric-chars-better-urlencode
function gie_encode($input) {
    $strrev = strrev($input);
    $string = base64_encode($strrev);
    return bin2hex($string);
}

function gie_decode($input) {
    $inputx = str_replace("-", "", $input);
    $string = pack("H*", $inputx);
    $base64 =  base64_decode($string);
    return strrev($base64);

}