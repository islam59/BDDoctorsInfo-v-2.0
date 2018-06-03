<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {

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
	
		$this->load->model('medicine_model');

		$data = array(); 

	}

	public function medicine(){
		$data = array();	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); //Use for header footer data from db.. 
		$data['specialAdd'] = $this->add_model->specialAddS($data); // header, footer & contact page add......
		$data['sidebarAdds'] = $this->add_model->sidebarAdds($data); //sidebar adds 
		/*...............*/

		$data['title']   = 'Medicine Shop List'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);

		$data['medicinedata'] = $this->medicine_model->getAllMedicineData($data); //load doctor model & function..
		$data['medicineamount'] = $this->medicine_model->getTotalMedicineData($data); //load hospital amount..

		$data['hospital'] = $this->load->view('user/medicine', $data, TRUE);

		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 

		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function MedicineArea($area){
		$data = array();	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); 
		/*...............*/

		$data['title']   = 'Medicine Shop List'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);

		$data['medicinedata'] = $this->medicine_model->getAllMedicineArea($area); //load doctor model & function..
		$data['medicineamount'] = $this->medicine_model->getTotalMedicineData($data); //load hospital amount..

		$data['addHeader'] = $this->add_model->getPageAddsHeader($data); //load header adds model & function..		
		$data['hospital'] = $this->load->view('user/medicine', $data, TRUE);

		$data['sidebaradds'] = $this->add_model->getSidebarAdd($data); //load page adds model & function..
		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 

		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

}