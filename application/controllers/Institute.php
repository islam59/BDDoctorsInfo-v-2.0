<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {

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
	
		$this->load->model('institute_model');
		$data = array(); 
		

	}

	public function instituteList(){
		$data = array(); 	
		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); //Use for header footer data from db.. 
		$data['specialAdd'] = $this->add_model->specialAddS($data); // header, footer & contact page add......
		$data['sidebarAdds'] = $this->add_model->sidebarAdds($data);
		/*...............*/

		$data['title']   = 'Medical College & Hospital'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);

		$data['institutedata'] = $this->institute_model->getAllInstituteData($data); //load institute model & function..
		$data['instituteamount'] = $this->institute_model->getTotalInstituteData($data); //load institute amount..

		$data['institute'] = $this->load->view('user/institute', $data, TRUE);
		//$data['sidebar'] = $this->load->view('user/inc/sidebar', '', TRUE);
		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}


}