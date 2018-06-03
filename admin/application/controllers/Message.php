<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('message_model');
		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}
	}
	public function MessageList(){
		$data['title'] = 'Message List'; 
		$data['id'] = $this->session->userid; 
		$data['header'] = $this->load->view('include/header', $data, TRUE);
		$data['messageamount'] = $this->message_model->getTotalMessage($data); //load doctor amount..
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['messagedata'] = $this->message_model->getAllMessage($data);
		$data['content'] = $this->load->view('files/messagelist', $data, TRUE);

		$data['footer'] = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//end# show all memebr.. 

	public function AccessOn($uid){		
		$this->message_model->accessOn($uid);
		redirect("Message/MessageList");
	}//end# access controls of member... 

	public function AccessOff($uid){
		$this->message_model->accessOff($uid);
		redirect("Message/MessageList");
	}//end# access control of member....

	public function MessageShow($id){		
		$data['title']   = 'From # '; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['message'] = $this->message_model->MessageShow($id); //model calling.... 
		$data['content'] = $this->load->view('files/messageview', $data, TRUE);

		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//end# individual member show.... 

	public function MessageDelete($id){
		$this->message_model->delMessage($id);
		redirect("Message/MessageList"); 
	}//end# remove memeber...





}
