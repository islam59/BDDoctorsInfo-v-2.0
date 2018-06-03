<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('profile_model');

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}

	}

	public function SelfProfile(){		
		$data['title']   = 'User Profile'; 

		$data['id'] = $this->session->userid; 

		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['userdata'] = $this->profile_model->getUserData($data); //model calling.... 
		$data['content'] = $this->load->view('files/profilelist', $data, TRUE);

		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function ChangePassword(){
		$id = $this->session->userid; 
		$data['title']   = 'Update Password'; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		
		$data['content'] = $this->load->view('files/passwordchange', $data, TRUE);

		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}


	public function ChangePasswordForm(){ //password change...
		$data['newpassword']  = $this->input->post('newpassword');
		$data['confirmpassword'] = $this->input->post('confirmpassword'); 
		$data['oldpassword'] = $this->input->post('oldpassword');
		$data['userid'] = $this->input->post('userid'); 

		$newpassword = $data['newpassword'];
		$confirmpassword = $data['confirmpassword'];
		$oldpassword = $data['oldpassword'];


		if(empty($newpassword) OR empty($confirmpassword) OR empty($oldpassword)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Profile/ChangePassword");

		}elseif($newpassword != $confirmpassword){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Password Not Matched !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Profile/ChangePassword");
		}else{
			$check = $this->profile_model->checkOldPassword($data);
			if($check){
				//update korte hobe ekhon..//
				$this->profile_model->updatePassword($data);

				$sdata = array();
				$sdata['msg'] = '<div class="alert alert-info">Password Update Successfully... Re-Login For Better Use !</div>'; 
				$this->session->set_flashdata($sdata);
				redirect("Profile/ChangePassword");
			}else{
				$sdata = array();
				$sdata['msg'] = '<div class="alert alert-danger">Password Update Failed !</div>'; 
				$this->session->set_flashdata($sdata);
				redirect("Profile/ChangePassword");
			}
			
		}
	}//end# password change...... 


	public function ChangeInfo(){
		$data['id'] = $this->session->userid; 
		$data['title']   = 'Update Information'; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		
		$data['userdata'] = $this->profile_model->getUserData($data);
		$data['content'] = $this->load->view('files/informationchange', $data, TRUE);

		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function ChangeInfoForm(){ //password change...
		$data['username']     = $this->input->post('username');
		$data['email']        = $this->input->post('email'); 
		$data['phonenumber']  = $this->input->post('phonenumber');
		$data['address']      = $this->input->post('address'); 
		$data['userid']       = $this->input->post('userid'); 

		$username    = $data['username'];
		$email       = $data['email'];
		$phonenumber = $data['phonenumber'];
		$address     = $data['address']; 

		if(empty($address)){
			$data['address'] = "N/A"; 
		}

		if(empty($username) OR empty($email) OR empty($phonenumber) OR empty($address)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Profile/ChangeInfo");

		}else{
			$this->profile_model->updateInfo($data);

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-info">Update Successfully... Re-Login For Better Use !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Profile/ChangeInfo");	
		}
	}//end# password change...... 

}
?>