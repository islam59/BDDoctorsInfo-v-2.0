<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct(); 		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('slider_model');
		$this->load->helper(array('form', 'url'));
		$data = array();

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		} 
	}

	public function SliderList(){
		$data['title']      = 'Slider List'; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['sliderdata'] = $this->slider_model->listSlider();
		$data['content']    = $this->load->view('files/sliderlist', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//shows of slider image and details... 

	public function SliderAddForm(){
		$data['title'] = $this->input->post('title');
		$data['body'] = $this->input->post('body');
		$data['images']= $_FILES['images']['name'];
		$data['created_by'] = $this->session->username; //posted by/ updated by....  
		$data['priority'] = '1'; 
		$data['status'] = '1'; 
		
		$images = $data['images']; 

		if(empty($images)){
			$sdata        =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Field Must Not Empty !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Slider/SliderList");

		}else{
			$this->slider_model->saveSlider($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/slider/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/


			$sdata        = array();
			$sdata['msg'] = '<div class="alert alert-success"> Uploaded Successfully !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Slider/SliderList");
		}
	}//end of slider insertion.... 

	public function SliderDelete($id,$img){

	   $file = "Assests/images/slider/".$img;
	   if (file_exists($file)){ unlink($file); }

		$this->slider_model->delSlider($id);
		redirect("Slider/SliderList",$data); 
	}//end# remove memeber...

	public function SliderUpdate($id){
		$data['title']      = 'Slider Update '; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['slider'] = $this->slider_model->getSliderData($id);
		$data['content']    = $this->load->view('files/sliderupdate', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//shows of slider image and details... 

	public function SliderUpdateForm(){

		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['title'] = $this->input->post('title');
		$data['body'] = $this->input->post('body');
		$data['images']= $_FILES['images']['name'];
		$data['created_by'] = $this->session->username; //posted by/ updated by....  

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$images = $data['images']; 



		if(empty($data['images'])){
			$this->slider_model->updateSliderData($data);
			$sdata =  array();
			$sdata['msg'] = '<div class="alert alert-danger"> Updated Successfully !</div>';
			$this->session->set_flashdata($sdata);
			redirect("Slider/SliderUpdate/".$id);
		}else{	
				$this->slider_model->updateSliderDataImage($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/slider/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/slider/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['msg'] = '<div class="alert alert-success"> Successfully Updated !</div>'; 
			$this->session->set_flashdata($sdata);
			redirect("Slider/SliderUpdate/".$id);
		}
	}
//////////////////////////////////////////

}