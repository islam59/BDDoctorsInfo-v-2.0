<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Option extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('option_model');
		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}
	}
	public function OptionIndex(){
		$data['title'] = 'Site Options'; 
		$data['header'] = $this->load->view('include/header', $data, TRUE);
		$data['menu'] = $this->load->view('include/menu', '', TRUE);
		
		$data['sitedata'] = $this->option_model->getAllSiteData($data);
		$data['content'] = $this->load->view('files/siteoption', $data, TRUE);

		$data['footer'] = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//end# show all memebr.. 

	public function OptionFacebook(){
		$data['facebook']= $this->input->post('facebook');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$facebook = $data['facebook'];

		if(empty($facebook) && empty($id)){
			$sdata =  array();
			$sdata['msg1'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateFacebook($data);
			$sdata = array();
			$sdata['msg1'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}

	public function Google(){
		$data['google']= $this->input->post('google');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$google = $data['google'];

		if(empty($google) && empty($id)){
			$sdata =  array();
			$sdata['msg2'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateGoogle($data);
			$sdata = array();
			$sdata['msg2'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}

	public function Twitter(){
		$data['twitter']= $this->input->post('twitter');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$twitter = $data['twitter'];

		if(empty($twitter) && empty($id)){
			$sdata =  array();
			$sdata['msg3'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateTwitter($data);
			$sdata = array();
			$sdata['msg3'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//twitter .........
	public function Phone(){
		$data['phone']= $this->input->post('phone');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$phone = $data['phone'];

		if(empty($twitter) && empty($id)){
			$sdata =  array();
			$sdata['msg4'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updatePhone($data);
			$sdata = array();
			$sdata['msg4'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//phone.........

	public function Email(){
		$data['email']= $this->input->post('email');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$email = $data['email'];

		if(empty($email) && empty($id)){
			$sdata =  array();
			$sdata['msg5'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateEmail($data);
			$sdata = array();
			$sdata['msg5'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//email.....

	public function Website(){
		$data['website']= $this->input->post('website');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$website = $data['website'];

		if(empty($website) && empty($id)){
			$sdata =  array();
			$sdata['msg6'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateWebsite($data);
			$sdata = array();
			$sdata['msg6'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//website.....................................

	public function Develpper(){
		$data['developed_by']= $this->input->post('developed_by');
		$data['developed_link'] = $this->input->post('developed_link');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$developed_by = $data['developed_by'];
		$developed_link = $data['developed_link'];

		if(empty($developed_by) && empty($developed_link) && empty($id)){
			$sdata =  array();
			$sdata['msg7'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateDevelopper($data);
			$sdata = array();
			$sdata['msg7'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//develper.....................................
	public function Description(){
		$data['description']= $this->input->post('description');
		$data['id'] = $this->input->post('id'); 

		$id= $data['id']; 
		$description = $data['description'];

		if(empty($description) && empty($id)){
			$sdata =  array();
			$sdata['msg8'] = '<span class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i></span>';
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}else{
			$this->option_model->updateDescription($data);
			$sdata = array();
			$sdata['msg8'] = '<span class="alert alert-xs alert-success"><i class="fa fa-check" aria-hidden="true"></i></span>'; 
			$this->session->set_flashdata($sdata);
			redirect("Option/OptionIndex");
		}
	}//description.....................................
}
