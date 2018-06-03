<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('member_model');
		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}
	}
	public function MemberList(){
		$data['title'] = 'User List'; 
		$data['id'] = $this->session->userid; 
		$data['header'] = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		
		$data['memberdata'] = $this->member_model->getAllMember($data);
		$data['content'] = $this->load->view('files/memberlist', $data, TRUE);

		$data['footer'] = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//end# show all memebr.. 

	public function AccessOn($uid){		
		$this->member_model->accessOn($uid);
		redirect("Member/MemberList");
	}//end# access controls of member... 

	public function AccessOff($uid){
		$this->member_model->accessOff($uid);
		redirect("Member/MemberList");
	}//end# access control of member....

	public function MemberShow($id){		
		$data['title']   = 'User Information'; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['userdata'] = $this->member_model->MemberShow($id); //model calling.... 
		$data['content'] = $this->load->view('files/profilelist', $data, TRUE);

		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//end# individual member show.... 

	public function MemberDelete($id){
		$this->member_model->delMember($id);
		redirect("Member/MemberList"); 
	}//end# remove memeber...


	public function addMember(){

		$data['title']   = 'Add New Member !'; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['content'] = $this->load->view('files/memberadd', $data, TRUE);
		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function addMemberForm(){
		$data['username']   = $this->input->post('username');
		$data['email']      = $this->input->post('email');
		$data['phonenumber']      = $this->input->post('phonenumber');
		$data['address']    = $this->input->post('address');
		$data['userrole']   = $this->input->post('userrole');
		$pass  = $this->input->post('password');
		$data['password']   =md5($pass); 
		$data['useraccess'] = '0'; 

		$username = $data['username'];
		$email    = $data['email'];
		$phone    = $data['phone'];
		$address  = $data['address'];
		$phone 	  = $data['userrole'];
		$password = $data['password']; 

		if(empty($username) && empty($email) && empty($phone) && empty($address) && empty($userrole) OR empty($password)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Member/addMember");
		}else{
			$this->member_model->saveMember($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Registration Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Member/addMember");
		}
	}

	
	public function UpdateMember($id){
		$data['title'] = 'Update Member Information'; 
		$data['header'] = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['member'] = $this->member_model->getMemberData($id);
		$data['content'] = $this->load->view('files/memberupdate', $data, TRUE);
		$data['footer'] = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function MemberUpdateForm(){
		$data['username']= $this->input->post('username');
		$data['email']= $this->input->post('email');
		$data['phonenumber']= $this->input->post('phonenumber');
		$data['address']= $this->input->post('address');
		$data['userrole']= $this->input->post('userrole');
		/*pass*/$pass = $this->input->post('password'); 
		$data['password']=md5($pass); 
		$data['id'] = $this->input->post('mid'); 

		$id= $data['id']; 
		$username = $data['username'];
		$userrole = $data['userrole'];

		if(empty($username) && empty($userrole) && empty($id)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger">Field Must Not Empty</div>';
			$this->session->set_flashdata($sdata);
			redirect("Member/UpdateMember/".$id);
		}else{
			$this->member_model->updateMember($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success">Successfully Updated!</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Member/UpdateMember/".$id);
		}
	}

	public function DeleteMember($sid){
		$this->student_model->delStudentById($sid);
		$sdata = array();
		$sdata['msg'] = '<span style="color:green;">Data Deleted Successfully !</span>'; 
		$this->session->set_flashdata($sdata);
		redirect("student/studentlist"); 
	}

}
