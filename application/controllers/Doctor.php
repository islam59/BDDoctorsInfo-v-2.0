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

		$this->load->model('option_model');/*default for all controller*/
		$this->load->model('add_model'); /*default add model for all page..*/

		$this->load->model('doctor_model');
		
		$data = array(); 

	}

	public function doctorlist(){
		$data = array();	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); //Use for header footer data from db.. 
		$data['specialAdd'] = $this->add_model->specialAddS($data); // header, footer & contact page add......
		$data['sidebarAdds'] = $this->add_model->sidebarAdds($data); //sidebar adds 
		/*...............*/
		
		$data['title']   = 'Doctor List'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);
		
		$data['doctordata'] = $this->doctor_model->getAllDoctorData($data); //load doctor model & function..
		$data['doctoramount'] = $this->doctor_model->getTotalDoctorData($data); //load doctor amount..
		
		//$data['addHeader'] = $this->add_model->getPageAddsHeader($data); //load header adds model & function..
		$data['doctor'] = $this->load->view('user/doctor', $data, TRUE);
		
		//$data['sidebaradds'] = $this->add_model->getSidebarAdd($data); //load page adds model & function..
		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 

		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}


	public function doctorlistArea($area){
		$data = array();	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); 
		/*...............*/

		$data['title']   = 'Doctor List'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);
		
		$data['doctordata'] = $this->doctor_model->getAllDoctorArea($area); //load doctorArea model & function..
		$data['doctoramount'] = $this->doctor_model->getTotalDoctorData($data); //load doctor amount..

		$data['addHeader'] = $this->add_model->getPageAddsHeader($data); //load header adds model & function..
		$data['doctor'] = $this->load->view('user/doctor', $data, TRUE);

		$data['sidebaradds'] = $this->add_model->getSidebarAdd($data); //load page adds model & function..
		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 

		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

}