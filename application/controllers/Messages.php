<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends MX_Controller {

	public function __construct()
	{
		parent :: __construct() ;

		//redirect jika belum login
		if (!is_login()){
			redirect(site_url('auth/login'));
		}

		$this->load->model('Messages_model', 'MessagesModel');
		$this->load->model('User_model', 'UsersModel');
	}

	public function d($param = "")
	{

		$user1 = substr($param, 0, 7);
		$user2 = substr($param, 7, 13);

		$messages = $this->MessagesModel->getByGroupId($param);

		if ($user1 != user_id() AND $user2 != user_id()){
			exit("_bLANK");
		}
 		
 		if ($user2 == user_id()) {
 			$var_to = $user1;
 		} else {
 			$var_to = $user2;
 		}

 		//mengurutkan group_id
 		$a = substr($param, 0, 7);
		$b = substr($param, 7, 13);

		if (substr($a, 1) > substr($b, 1)) {
			$group_id =  $b . $a;
		} else {
			$group_id = $a . $b;
		}
		//mengurutkan group_id EOF

		$userid = $this->UsersModel->getByUserId($var_to);
		if (is_null($userid)){
			exit("_bLANK");
		}


				
				$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
    			$config['full_tag_open'] = '<div class="tt-pagination"><div class="pagination"><ul>';
				$config['full_tag_close'] = '</ul></div></div>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<a class="active"><li>';
				$config['cur_tag_close'] = '</li></a>';
				$config['prev_tag_open'] = '<li class="">';
				$config['prev_tag_close'] = '<li>';
				$config['next_tag_open'] = '<li class="">';
				$config['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['first_link'] = '<li class="">FIRST</li>';
				$config['first_tag_open'] = '<li class="">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = '<li class="">LAST</li>';
				$config['last_tag_open'] = '<li class="">';
				$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;

				$config['base_url'] = base_url().'messages/d/' . $group_id;

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 3;
			   	$config["total_rows"] = $this->MessagesModel->getByGroupId($group_id)->num_rows();
			    $config['per_page'] = 20; 
			    $this->pagination->initialize($config); 

			    $data["total_rows"] = $config["total_rows"];
			    $data['msg'] = $this->MessagesModel->getByGroupId($group_id, $config["per_page"], $offset);


		$header['title'] = is_username($var_to);
		$header['link'] = base_url('messages');
		parent :: header_modif($header);
		// $data['msg'] = $messages;
		$data['to'] = $var_to;
		$this->load->view("messages/messages_mobile", $data);
		parent :: footer_blank();
	}


	public function load_read()
	{
		$item_per_page = 5;

		$page_number = $_POST["page"];
		$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";

		//$this->load->view('home/load_product', $param);
		// echo "tesssssssssssssss<br>";
		// echo $page_number;
		$data = $this->MessagesModel->getMessageIndex(true, $param['search'], $item_per_page, $page_number);
		foreach ($data->result() as $chat) {
		if ($chat->from == user_id()) {
	        $displayName = $chat->to;
	      } else {
	        $displayName = $chat->from;
	      }
	      $date = format_indo_time($chat->input_date);

	    echo "<script>$('li').click(function (e) {
			    e.preventDefault();
			    $('li').removeClass('active');
			    $(this).addClass('active');
			});
	     	</script>";

		echo '<li onclick="update_url(\'' . $displayName . '\', \'' . $chat->group_id . '\')" id="' . $displayName . '" class="">
                	<a href="javascript:void(0)" class="clearfix">
                		<img src="' . get_photo($displayName) . '" alt="" class="img-circle">
                		<div class="friend-name">	
                			<strong>' . is_username($displayName) . '</strong>
                		</div>
                		<div class="last-message text-muted">' . $chat->message . '</div>
                		<small class="time text-muted">' . $date . '</small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>';
		}
	}

	public function read(){

				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
				$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
    			$config['full_tag_open'] = '<div class="tt-pagination"><div class="pagination"><ul>';
				$config['full_tag_close'] = '</ul></div></div>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<a class="active"><li>';
				$config['cur_tag_close'] = '</li></a>';
				$config['prev_tag_open'] = '<li class="">';
				$config['prev_tag_close'] = '<li>';
				$config['next_tag_open'] = '<li class="">';
				$config['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['first_link'] = '<li class="">FIRST</li>';
				$config['first_tag_open'] = '<li class="">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = '<li class="">LAST</li>';
				$config['last_tag_open'] = '<li class="">';
				$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;
				//$config['suffix'] = '?&search='.$data['search'] ;
				$config['base_url'] = base_url().'messages?search=' . $param['search'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 3;
			   	$config["total_rows"] = $this->MessagesModel->getMessageIndex(false, $param['search'])->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["count_messages"] = messages_count(user_id() . $this->uri->segment(3));
			    $param['chats'] = $this->MessagesModel->getMessageIndex(true, $param['search'], $config["per_page"], $offset);

		parent::header();

		//redirect jika null
		foreach($param['chats']->result() as $chat){}
		if ($chat->from == user_id()) {
            $displayName = $chat->to;
          } else {
            $displayName = $chat->from;
          }
        if(is_null($this->uri->segment(3)))
                      redirect(base_url('messages/read/' . $displayName),'refresh');

		$this->load->view('messages/messages_desktop_index', $param);
		parent::footer_blank();
	}
	public function index()
	{
				$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";
				$this->load->library('pagination');
    			            // $config["base_url"] = base_url() . "/home/";
    			// $config['base_url'] = base_url() . 'home/'.$this->uri->segment(2).'?search='.$data['search'];
    			$config['full_tag_open'] = '<div class="tt-pagination"><div class="pagination"><ul>';
				$config['full_tag_close'] = '</ul></div></div>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<a class="active"><li>';
				$config['cur_tag_close'] = '</li></a>';
				$config['prev_tag_open'] = '<li class="">';
				$config['prev_tag_close'] = '<li>';
				$config['next_tag_open'] = '<li class="">';
				$config['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li class="">';
				$config['num_tag_close'] = '</li>';
				$config['first_link'] = '<li class="">FIRST</li>';
				$config['first_tag_open'] = '<li class="">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = '<li class="">LAST</li>';
				$config['last_tag_open'] = '<li class="">';
				$config['last_tag_close'] = '</li>';
				$config['page_query_string'] = TRUE;
				$config['use_page_numbers'] = FALSE;
				//$config['suffix'] = '?&search='.$data['search'] ;
				$config['base_url'] = base_url().'messages?search=' . $param['search'];

				$offset = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
    			$config['uri_segment'] = 3;
			   	$config["total_rows"] = $this->MessagesModel->getMessageIndex(false, $param['search'])->num_rows();
			    $config['per_page'] = 5; 
			    $this->pagination->initialize($config); 

			    $param["total_rows"] = $config["total_rows"];
			    $param['chats'] = $this->MessagesModel->getMessageIndex(true, $param['search'], $config["per_page"], $offset);
    			

		parent::header();
		// $this->load->view('messages/messages_index');


		$this->load->view('messages/messages_mobile_index', $param);
		parent::footer_blank();
	}


	public function get_more_messages()
	{
		//header('Content-Type: application/json');

		// $to 		= $this->input->post('to');
		// $total 	= $this->input->post('total');
		// $timestamp 	= $this->input->post('timestamp');
		
		// $messages = $this->MessagesModel->get_chat($to, $total, $timestamp);
		
		// $this->output->set_header('HTTP/1.0 200 OK');
  //   	$this->output->set_header('HTTP/1.1 200 OK');
		// echo json_encode($messages->result());

		$item_per_page = 5;


		$to = $this->input->post("to");
		$total = $_POST["page"];
		$timestamp = "";
		$param['search'] = $this->input->get('search') ? $this->input->get('search') : "0";

		

		$data = $this->MessagesModel->get_chat($to, $total);
		// foreach ($data->result() as $chat) {
		// if ($chat->from == user_id()) {
	 //        $displayName = $chat->to;
	 //      } else {
	 //        $displayName = $chat->from;
	 //      }
	 //      $date = format_indo_time($chat->input_date);

	      	// $messages = "";
			// if ($chat->from == $displayName){
			// 	$messages = $chat->fullname . " " . $chat->message . "<br>";
	  //               $messages .= '<li class="left">';
	  //               $messages .= '<span class="chat-img pull-left">';
	  //               $messages .= '<img src="' . base_url($chat->avatar) . '" alt="User Avatar-Left">';
	  //               $messages .= '</span>';
	  //               $messages .= '<div class="chat-body">';
	  //               $messages .= '<div class="header">';
	  //               $messages .= '<strong class="primary-font">' . $chat->fullname . '</strong>';
	  //               $messages .= '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' . $chat->input_date . '</small>';
	  //               $messages .= '</div>';
	  //               $messages .= '<p>' .$chat->message. '</p>';
	  //               $messages .= '</div>';
	  //               $messages .= '</li>';

                // } else {
                // 	$messages = $chat->fullname . " " . $chat->message;
   //                	$messages .= '<li class="right">';
   //                  $messages .= '<span class="chat-img pull-right">';
   //                  $messages .= '<img src="' .base_url($chat->avatar). '" alt="User Avatar-Right">';
   //                  $messages .= '</span>';
   //                  $messages .= '<div class="chat-body">';
   //                  $messages .= '<div class="header">';
   //                  $messages .= '<strong class="primary-font">' .$chat->fullname. '</strong>';
   //                  $messages .= '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' .$chat->input_date. '</small>';
   //                  $messages .= '</div>';
   //                  $messages .= '<p>' .$chat->message. '</p>';
   //                  $messages .= '</div>';
   //                  $messages .= '</li>';
                // }

           

		
		// }
		 $this->output->set_header('HTTP/1.0 200 OK');
    	$this->output->set_header('HTTP/1.1 200 OK');
		 echo json_encode($data->result());
	}

	public function get_messages()
	{
		header('Content-Type: application/json');
		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

		$to 		= $this->input->post('to');
		$total 	= $this->input->post('total');
		$timestamp 	= $this->input->post('timestamp');
		
		$messages = $this->MessagesModel->get_chat($to, $total, $timestamp);
		
		$this->output->set_header('HTTP/1.0 200 OK');
    	$this->output->set_header('HTTP/1.1 200 OK');
		echo json_encode($messages->result());
	}

	public function get_messages_count()
	{
		header('Content-Type: application/json');

		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

		$group_id 	= $this->input->post('group_id');
		echo json_encode(array('data' => messages_count($group_id)));
		// echo messages_count($group_id);
	}

	public function get_messages_update()
	{
		header('Content-Type: application/json');
		if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

		$to = $this->input->post('to');
		
		$messages = $this->MessagesModel->get_chat($to);
		
		$this->output->set_header('HTTP/1.0 200 OK');
    	$this->output->set_header('HTTP/1.1 200 OK');
		echo json_encode($messages->result());
	}

	//JSON
	public function add_messages()
    {
    	header('Content-Type: application/json');

    	$to = $this->input->post('to');

    	if ( !isset($to) ) {
			echo json_encode(array('msg'=>'Invalid Request')); 
			exit;
    	}

    	//function sortir group_id
    	$a = $to;
		$b = user_id();

		if (substr($a, 1) > substr($b, 1)) {
			$group_id =  $b . $a;
		} else {
			$group_id = $a . $b;
		}
		//function sortir group_id EOF

    	$this->db->insert('messages',array(
					'group_id'		=> $group_id,
					'from'			=> user_id(),
					'to'			=> $to,
					'message'		=> $this->input->post('msg'),
					'is_read'		=> "0",
					'timestamp'		=> time(),
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));

    	$this->output->set_header('HTTP/1.0 200 OK');
    	$this->output->set_header('HTTP/1.1 200 OK');
		echo json_encode(array('msg'=>'true'));
    }

    public function add_messages_m()
    {
    	if(!user_id())
    		show_404();

    	$a =  $this->input->post('to');
		$b = user_id();

		if($a == null)
    		show_404();

		if (substr($a, 1) > substr($b, 1)) {
			$group_id =  $b . $a;
		} else {
			$group_id = $a . $b;
		}

    			$this->db->insert('messages',array(
					'group_id'		=> $group_id,
					'from'			=> user_id(),
					'to'			=> $a,
					'message'		=> $this->input->post('msg'),
					'is_read'		=> "0",
					'timestamp'		=> time(),
					'input_by'		=> user_id(),
					'input_date'	=> date('Y-m-d H:i:s')
				));
				$this->session->set_flashdata('message', 'Pesan Dikirim');
				redirect(base_url('messages/d/'.$group_id));
    }

}

/* End of file Message.php */
/* Location: ./application/controller/Message.php */