<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsor extends CI_Controller {

	public function __construct(){
		parent::__construct(); 		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('sponsor_model');
		$this->load->helper(array('form', 'url'));
		$data = array();

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		} 
	}

	public function SponsorList(){
		$data['title']      = "Sponsor's"; 
		$data['header']     = $this->load->view('include/header', $data, TRUE);
		$data['menu']       = $this->load->view('include/menu', '', TRUE);
		$data['special'] = $this->sponsor_model->specialSponsorList();
		$data['pageadds'] = $this->sponsor_model->pageAddList(); 
		$data['sidebaradds'] = $this->sponsor_model->sidebarAddList(); 
		$data['content']    = $this->load->view('files/sponsorlist', $data, TRUE);
		$data['footer']     = $this->load->view('include/footer', '', TRUE);
		$this->load->view('home', $data);
	}//shows of slider image and details... 


	public function SponsorHeaderAdd(){
		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['images']= $_FILES['images']['name'];

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$images = $data['images']; 


		if(empty($data['images'])){
			$sdata =  array();
			$sdata['msgHeader'] = '<b style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}else{	
				$this->sponsor_model->updateSponsorHeader($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/specialadds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/specialadds/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['msgHeader'] = '<b style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}
	}//header update end... 

	public function SponsorFooterAdd(){
		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['images']= $_FILES['images']['name'];

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$images = $data['images']; 


		if(empty($data['images'])){
			$sdata =  array();
			$sdata['msgFooter'] = '<b style="color:red;"><i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}else{	
				$this->sponsor_model->updateSponsorFooter($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/specialadds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/specialadds/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['msgFooter'] = '<b style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}
	}//footer update end.....

	public function SponsorContactAdd(){
		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['images']= $_FILES['images']['name'];

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$images = $data['images']; 


		if(empty($data['images'])){
			$sdata =  array();
			$sdata['msgContact'] = '<b style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}else{	
				$this->sponsor_model->updateSponsorContact($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/specialadds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('images')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/specialadds/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['msgContact'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}
	}//footer update end.....
//////////////////////////////////////////


	public function AccessOn($id){		
		$this->sponsor_model->accessOn($id);
		redirect("Sponsor/SponsorList");
	}//end# access controls of member... 

	public function AccessOff($id){
		$this->sponsor_model->accessOff($id);
		redirect("Sponsor/SponsorList");
	}//end# access control of member....

////////////////////////////////////
	public function pOne($id){		
		$this->sponsor_model->pOne($id);
		redirect("Sponsor/SponsorList");
	}//end# pOne... 

	public function pTwo($id){		
		$this->sponsor_model->pTwo($id);
		redirect("Sponsor/SponsorList");
	}//end# pTwo... 

	public function pThree($id){		
		$this->sponsor_model->pThree($id);
		redirect("Sponsor/SponsorList");
	}//end# pThree... 

	public function pFour($id){		
		$this->sponsor_model->pFour($id);
		redirect("Sponsor/SponsorList");
	}//end# pFour... 

	public function pFive($id){		
		$this->sponsor_model->pFive($id);
		redirect("Sponsor/SponsorList");
	}//end# pFive... 
/////////////////////////////////////////////////////////////////////
	public function SponsorDeletePageAdd($id,$img){

	   $file = "Assests/images/pageadds/".$img;
	   if (file_exists($file)){ unlink($file); }
		$this->sponsor_model->delSponsorPageAdd($id);

			$sdata = array();
			$sdata['msgDelPageADDS'] = '<b style="color:red;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");

		redirect("Sponsor/SponsorList",$data); 
	}//end# remove memeber...
///////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function savePageAddForm(){
		$data['weblink'] = $this->input->post('weblink');
		$data['image']= $_FILES['image']['name'];
		$data['priority'] = '0'; 
		$data['status'] = '0'; 
		
		$images = $data['image']; 

		if(empty($images)){
			$sdata        =  array();
			$sdata['msgDelPageADDS'] = '<b style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList");

		}else{
			$this->sponsor_model->savePageAdds($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/pageadds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/


			$sdata        = array();
			$sdata['msgDelPageADDS'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList");
		}
	}//end of slider insertion.... 
/**............................................................................................................................*/
	public function pageAddsUpdate(){
		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['image']= $_FILES['image']['name'];

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$image = $data['image']; 


		if(empty($data['image'])){
			$sdata =  array();
			$sdata['msgDelPageADDS'] = '<b style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}else{	
				$this->sponsor_model->updatePageAdds($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/pageadds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/pageadds/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['msgDelPageADDS'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}
	}//sponsor pageadds. update end.....
/**............................................................................................................................*/
/**............................................................................................................................*/
/**............................................................................................................................*/
/**............................................................................................................................*/
/**............................................................................................................................*/
//////////////////////////////////////////

	public function AccessOnSidebarAdd($id){		
		$this->sponsor_model->AccessOnSidebarAdd($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# access controls of member... 

	public function AccessOffSidebarAdd($id){
		$this->sponsor_model->AccessOffSidebarAdd($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# access control of member....
////////////////////////////////////
	public function pOneSidebar($id){		
		$this->sponsor_model->pOneSidebar($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# pOne... 

	public function pTwoSidebar($id){		
		$this->sponsor_model->pTwoSidebar($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# pTwo... 

	public function pThreeSidebar($id){		
		$this->sponsor_model->pThreeSidebar($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# pThree... 

	public function pFourSidebar($id){		
		$this->sponsor_model->pFourSidebar($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# pFour... 

	public function pFiveSidebar($id){		
		$this->sponsor_model->pFiveSidebar($id);
			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
		redirect("Sponsor/SponsorList");
	}//end# pFive... 
/////////////////////////////////////////////////////////////////////

/**............................................................................................................................*/
	public function sidebarAddsUpdate(){
		$data['id'] = $this->input->post('id'); //id for finding update.. 
		$data['preimage'] =$this->input->post('preimage');//removable image from folder... 
		$data['title'] = $this->input->post('title'); 
		$data['body'] = $this->input->post('body'); 
		$data['weblink'] = $this->input->post('weblink'); 

		$data['image']= $_FILES['image']['name'];

		$id = $data['id']; 
		$preimage = $data['preimage']; 
		$image = $data['image']; 


		if(empty($data['image'])){
			$data['image'] = $data['preimage']; 
			$this->sponsor_model->updateSidebarAdds($data);
			$sdata =  array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}else{	
				$this->sponsor_model->updateSidebarAdds($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/sidebaradds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "Assests/images/sidebaradds/".$preimage;
		   			if (file_exists($file)){ 
		   				unlink($file); 
		   			}
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/

			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");
		}
	}//sponsor pageadds. update end.....

/////////////////////////////////////////////////////////////////////
	public function SidebarDeleteAdd($id,$img){
	   $file = "Assests/images/sidebaradds/".$img;
	   if (file_exists($file)){ unlink($file); }
		$this->sponsor_model->delSidebarAdd($id);

			$sdata = array();
			$sdata['sidebarMsg'] = '<b style="color:red;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList/");

		redirect("Sponsor/SponsorList",$data); 
	}//end# remove memeber...
/**............................................................................................................................*/

	public function saveSidebarAddForm(){
		$data['title'] = $this->input->post('title');
		$data['body'] = $this->input->post('body');
		$data['weblink'] = $this->input->post('weblink');
		$data['image']= $_FILES['image']['name'];
		$data['priority'] = '0'; 
		$data['status'] = '0'; 
		
		$images = $data['image']; 

		if(empty($images)){
			$sdata        =  array();
			$sdata['sidebarMsg'] = '<b style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i> !</b>';
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList");

		}else{
			$this->sponsor_model->saveSidebarAdds($data);
				/*image uploads...*/
                $config['upload_path']          = './Assests/images/sidebaradds/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
		   			$data = array('upload_data' => $this->upload->data());
		   		}
                /*End# image uploads...*/


			$sdata        = array();
			$sdata['sidebarMsg'] = '<b style="color:green;"><i class="fa fa-check" aria-hidden="true"></i> </b>'; 
			$this->session->set_flashdata($sdata);
			redirect("Sponsor/SponsorList");
		}
	}//end of slider insertion.... 
/**............................................................................................................................*/
}