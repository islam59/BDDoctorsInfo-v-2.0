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

		$this->load->model('institute_model');
		$data = array();
		$this->load->helper(array('form', 'url'));

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		} 
	}

	public function InstituteList(){
		$data['title']      = 'Institute List'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['instituteData'] = $this->institute_model->listInstitute();
		$data['content']    = $this->load->view('files/institutelist', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}


	public function InstituteAdd(){
		$data['title']      = 'Institute Registration'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['content']    = $this->load->view('files/instituteadd', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);

		$this->load->view('home', $data);
	}

	public function InstituteAddForm(){
		
		$data['name'] = $this->input->post('name');
		$data['type'] = $this->input->post('type');
		$data['location'] = $this->input->post('location');
		$data['weblink'] = $this->input->post('weblink');
		$data['images']= $_FILES['images']['name'];
		$data['created_by'] = $this->session->username; //posted by/ updated by....  
		

		$name   = $data['name']; 
		$type   = $data['type']; 
		$images = $data['images']; 

		if(empty($name) && empty($type)){
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Institute/InstituteAdd");

		}else{
			$this->institute_model->saveInstitute($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/institute/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Saved !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Institute/InstituteAdd");
		}
	}//end of institute insertion.... 

	public function InstituteView($id){
		$data['title']      = 'Service Show'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['institute'] = $this->institute_model->getInstituteData($id);
		$data['content']    = $this->load->view('files/instituteview', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);		
	}

	public function InstituteDelete($id,$img){

	   $file = "Assests/images/".$img;
	   if (file_exists($file)){ unlink($file); }

		$this->institute_model->delInstitute($id);
		redirect("Institute/InstituteList",$data); 
	}//end# remove institute...


	public function InstituteUpdate($id){
		$data['title']      = 'Update Institute Information'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['institute'] = $this->institute_model->getInstituteData($id);
		$data['content']    = $this->load->view('files/instituteupdate', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);	
	}

	public function InstituteUpdateForm(){

		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 

		$data['name'] = $this->input->post('name');
		$data['type'] = $this->input->post('type');
		$data['location'] = $this->input->post('location');
		$data['weblink'] = $this->input->post('weblink');
		$data['images']= $_FILES['images']['name'];
		$data['created_by'] = $this->session->username; //posted by/ updated by....  

		$id  = $data['id'];
		$preimage = $data['preimage']; 
		$name = $data['name']; 
		$type = $data['type']; 


		if(empty($name) && empty($type) && empty($id)){
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Institute/InstituteUpdate/".$id);
		}else{	
			if(empty($data['images'])){
				//jemon silo temon thakbe... 
				$this->institute_model->updateInstituteData($data);
			}else{
				$this->institute_model->updateInstituteDataImage($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/institute/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 500;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/institute/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/
			}

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Institute/InstituteUpdate/".$id);
		}
	}

	public function AccessOn($id){		
		$this->institute_model->accessOn($id);
		redirect("Institute/InstituteList");
	}//end# access controls of member... 

	public function AccessOff($id){
		$this->institute_model->accessOff($id);
		redirect("Institute/InstituteList");
	}//end# access control of member....
}