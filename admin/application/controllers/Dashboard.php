<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->home();

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}
	}

	public function home(){
		$this->load->model('dashboard_model');
		$data = array();

		$data['TotalDoctor'] = $this->dashboard_model->doctor($data);
		$data['TotalServices'] = $this->dashboard_model->services($data);
		$data['TotalInstitute'] = $this->dashboard_model->institute($data);
		$data['PageSponsor'] = $this->dashboard_model->pageadd($data);
		$data['SidebarSponsor'] = $this->dashboard_model->sidebaradd($data);
		$data['SliderSponsor'] = $this->dashboard_model->Slider($data);
		$data['MessageAll'] = $this->dashboard_model->message($data);

		$data['title']   = 'Dashboard'; 
		$data['header']  = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		$data['content'] = $this->load->view('files/dashboard', '', TRUE);
		$data['footer']  = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}
}