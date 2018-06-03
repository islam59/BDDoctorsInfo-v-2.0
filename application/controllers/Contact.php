<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	
		$this->load->model('contact_model');

		$data = array(); 
	}

	public function contactForm(){
		$data = array(); 	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); //Use for header footer data from db.. 
		$data['specialAdd'] = $this->add_model->specialAddS($data); // header, footer & contact page add......
		$data['pageAdds'] = $this->add_model->pageAddsingle($data); 
		$data['sidebarAdds'] = $this->add_model->sidebarAdds($data);
		/*...............*/

		$data['title']   = 'Contact with Author'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);

		//$data['surveydata'] = $this->survey_model->getAllSurveyData($data); //load survey model & function..
		//$data['surveyamount'] = $this->survey_model->getTotalSurveyData($data); //load survey amount..

		$data['contact'] = $this->load->view('user/contact', $data, TRUE);

		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 
		
		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function contact(){
		$data['name']    = $this->input->post('name');
		$data['email']   = $this->input->post('email');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');
		$data['status']  = '1'; 

		$name = $data['name'];
		$email = $data['email'];
		$subject = $data['subject'];
		$message = $data['message'];

		if(empty($name) OR empty($email) OR empty($subject) OR empty($message)){
			$sdata =  array();
			$sdata['msg'] = '<span style="color:red;">Field Must Not Be Empty</span>';
			$this->session->set_flashdata($sdata);
			redirect("index.php/contact/contactForm");
		}else{
			$this->contact_model->saveMessage($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:green;">Data Added Successfully !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect("index.php/contact/contactForm");
		}
	}

}