<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctorsinfo extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{

		$this->load->model('option_model');/*default for all SiteOption Info*/
		$this->load->model('add_model'); /*default for all page Add*/

		$this->load->model('slider_model');
		$this->load->model('doctor_model');
		$this->load->model('ambulance_model');
		$this->load->model('hospital_model');
		//$this->load->model('survey_model');
		$this->load->model('add_model');
		$this->load->model('institute_model'); 
		$data = array(); 

		$this->home();
	/*	
		if(!$this->session->userdata('userlogin')){
			redirect('admin/login');
		}
	*/
	}	

	public function home(){
		$data = array();

		/*...............*/
		$data['siteoption'] = $this->option_model->getOptionData($data); //Use for header footer data from db.. 
		$data['specialAdd'] = $this->add_model->specialAddS($data); // header, footer & contact page add......
		$data['pageAdds'] = $this->add_model->pageAddsingle($data); 
		$data['sidebarAdds'] = $this->add_model->sidebarAdds($data);
		/*...............*/
		

		$data['title']   = 'Home Page'; 
		$data['header']  = $this->load->view('user/inc/header', $data, TRUE);
		$data['menubar']  = $this->load->view('user/inc/menubar', $data, TRUE);

		$data['sliderdata'] = $this->slider_model->getSliderData($data); //load doctor model & function..
		$data['slider']  = $this->load->view('user/inc/slider', $data, TRUE);

		$data['doctordata'] = $this->doctor_model->getSomeDoctorData($data); //load doctor model & function..
		$data['doctoramount'] = $this->doctor_model->getTotalDoctorData($data); //load doctor amount..

		$data['ambulancedata'] = $this->ambulance_model->getSomeAmbulanceData($data); //load ambulance model & function..
		$data['ambulanceamount'] = $this->ambulance_model->getTotalAmbulanceData($data); //load ambulance amount.

		$data['hospitaldata'] = $this->hospital_model->getSomeHospitalData($data); //load hospital model & function..
		$data['hospitalamount'] = $this->hospital_model->getTotalHospitalData($data); //load hospital amount..

		$data['institutedata'] = $this->institute_model->getSomeInstituteData($data); //load hospital model & function..
		$data['instituteamount'] = $this->institute_model->getTotalInstituteData($data); //load hospital amount..

		//$data['pageaddsdoctor'] = $this->add_model->getPageAddsHomeDoctor($data); //load page adds model & function..
		//$data['pageaddsambulance'] = $this->add_model->getPageAddsHomeAmbulance($data); //load adds model-function..
		//$data['pageaddshospital'] = $this->add_model->getPageAddsHomeHospital($data); //load adds model-function..
		//$data['pageaddsinstitute'] = $this->add_model->getPageAddsHomeInstitute($data); //load adds model-function..

		$data['home'] = $this->load->view('user/home', $data, TRUE);
		
		//$data['sidebaradds'] = $this->add_model->getSidebarAddHome($data); //load page adds model & function..
		$data['sidebar'] = $this->load->view('user/inc/sidebar', $data , TRUE); 

		$data['footer']  = $this->load->view('user/inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

}
