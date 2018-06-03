<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct(){
		parent::__construct(); 		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('service_model');
		$data = array();

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		} 
	}

	public function ServiceList(){
		$data['title']      = 'Service List'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['servicedata'] = $this->service_model->listService();
		$data['content']    = $this->load->view('files/servicelist', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}


	public function ServiceAdd(){
		$data['title']      = 'Service Registration'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['content']    = $this->load->view('files/serviceadd', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function ServiceAddForm(){
		
		$data['name'] = $this->input->post('name');
		$data['division'] = $this->input->post('division');
		$data['district'] = $this->input->post('district');
		$data['type'] = $this->input->post('type');
		$data['address'] = $this->input->post('address');
		$data['contact'] = $this->input->post('contact');
		$data['priority'] = $this->input->post('priority');
		$data['status'] = '1'; 
		$data['created_by'] = $this->session->username; 

		
		$name = $data['name']; 
		$contact = $data['contact']; 


		if(empty($name) && empty($contact)){

			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Service/ServiceAdd");

		}else{
			$this->service_model->saveService($data);
			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Saved !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Service/ServiceAdd");
		}
	}//end of doctor insertion.... 

	public function ServiceView($id){
		$data['title']      = 'Service Show'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['service'] = $this->service_model->getServiceData($id);
		$data['content']    = $this->load->view('files/serviceview', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);		
	}

	public function ServiceDelete($id){
		$this->service_model->delService($id);
		redirect("Service/ServiceList"); 
	}//end# remove memeber...


	public function ServiceUpdate($id){
		$data['title']      = 'Update Service'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['service'] = $this->service_model->getServiceData($id);
		$data['content']    = $this->load->view('files/serviceupdate', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function ServiceUpdateForm(){

		$data['id'] = $this->input->post('sid'); 
		$data['name'] = $this->input->post('name');
		$data['division'] = $this->input->post('division');
		$data['district'] = $this->input->post('district');
		$data['type'] = $this->input->post('type');
		$data['address'] = $this->input->post('address');
		$data['contact'] = $this->input->post('contact');
		$data['priority'] = $this->input->post('priority');
		$data['status'] = '1'; 
		$data['created_by'] = $this->session->username; 


		$id  = $data['id'];
		$name = $data['name']; 
		$type = $data['type']; 


		if(empty($name) && empty($type) && empty($id)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Service/ServiceUpdate/".$id);
		}else{
			$this->service_model->updateServiceData($data);
			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Service/ServiceUpdate/".$id);
		}
	}

	public function AccessOn($id){		
		$this->service_model->accessOn($id);
		redirect("Service/ServiceList");
	}//end# access controls of member... 

	public function AccessOff($id){
		$this->service_model->accessOff($id);
		redirect("Service/ServiceList");
	}//end# access control of member....
}