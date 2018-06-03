<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function __construct(){
		parent::__construct(); 		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('doctor_model');
		$data = array();

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		} 
	}

	public function DoctorList(){
		$data['title']      = 'Doctor List'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['doctordata'] = $this->doctor_model->listDoctor();
		$data['content']    = $this->load->view('files/doctorlist', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}


	public function addDoctor(){
		$data['title']      = 'Doctor Registration'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['content']    = $this->load->view('files/doctoradd', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function addDoctorForm(){
		$data['name']                = $this->input->post('name');
		$data['division']            = $this->input->post('division');
		$data['district']            = $this->input->post('district');
		$data['degree']              = $this->input->post('degree');
		$data['designationtitle']    = $this->input->post('designationtitle');
		$data['designationdetails']  = $this->input->post('designationdetails');
		$data['chamber']             = $this->input->post('chamber');
		$data['gender']              = $this->input->post('gender');
		$data['priority']            = $this->input->post('priority');
		$data['status']              = '1'; 
		$data['created_by']          = $this->session->username; 

		
		$name                = $data['name']; 
		$chamber             = $data['chamber']; 


		if(empty($name) && empty($chamber)){

			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Doctor/addDoctor");

		}else{
			$this->doctor_model->saveDoctor($data);
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Saved !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Doctor/addDoctor");
		}
	}//end of doctor insertion.... 

	public function DoctorView($id){
		$data['title']      = 'Doctor Registration'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['doctordata'] = $this->doctor_model->getDoctorData($id);
		$data['content']    = $this->load->view('files/doctorview', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);		
	}

	public function DoctorDelete($id){
		$this->doctor_model->delDoctor($id);
		redirect("Doctor/DoctorList"); 
	}//end# remove memeber...


	public function DoctorUpdate($id){
		$data['title']      = 'Doctor Registration'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['doctor'] = $this->doctor_model->getDoctorData($id);
		$data['content']    = $this->load->view('files/doctorupdate', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function DoctorUpdateForm(){

		$data['name']                = $this->input->post('name');
		$data['division']            = $this->input->post('division');
		$data['district']            = $this->input->post('district');
		$data['degree']              = $this->input->post('degree');
		$data['designationtitle']    = $this->input->post('designationtitle');
		$data['designationdetails']  = $this->input->post('designationdetails');
		$data['chamber']             = $this->input->post('chamber');
		$data['gender']              = $this->input->post('gender');
		$data['priority']            = $this->input->post('priority');
		$data['id']                  = $this->input->post('dataid'); 
		$data['created_by']          = $this->session->username; 

		$id  = $data['id'];
		$name                = $data['name']; 
		$chamber             = $data['chamber']; 


		if(empty($name) && empty($chamber) && empty($id)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Doctor/DoctorUpdate/".$id);
		}else{
			$this->doctor_model->updateDoctorData($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Doctor/DoctorUpdate/".$id);
		}
	}

	public function AccessOn($id){		
		$this->doctor_model->accessOn($id);
		redirect("Doctor/DoctorList");
	}//end# access controls of member... 

	public function AccessOff($id){
		$this->doctor_model->accessOff($id);
		redirect("Doctor/DoctorList");
	}//end# access control of member....
}