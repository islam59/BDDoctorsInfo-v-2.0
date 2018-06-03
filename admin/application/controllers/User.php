<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('user_model');

	}

	public function login(){
		$this->load->view('login');
	}

	public function loginForm(){
		$data = array();
		$data['username']  = $this->input->post('username');
		$data['password']  = $this->input->post('password');

		$username = $data['username']; 
		$password = $data['password'];

		if(empty($username) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = '<span class="alert alert-danger">Invalid Username Or Password !</span>'; 
			$this->session->set_flashdata($sdata);

			redirect('user/login',$sdata); 
		}else{
			$this->user_model->checkUser($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:green;">Wellcome to Dashboard !</span>'; 


			$check = $this->user_model->checkUser($data);

			if($check){
				$sdata = array(); 
				$sdata['userid'] = $check->id; 
				$sdata['username'] = $check->username; 
				$sdata['userrole'] = $check->userrole;
				$sdata['userlogin'] = TRUE; 

				$this->session->set_userdata($sdata);
				redirect('Dashboard');
			}else{
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;">Invalid Username Or Password !</span>'; 
				$this->session->set_flashdata($sdata);

				redirect('user/login',$sdata); 
			}
		}



	}

	public function logout(){
		$this->session->unset_userdata($userid);
		$this->session->unset_userdata('userlogin',FALSE);
		$this->session->sess_destroy(); 
		redirect('user/login'); 

	}

}
?>