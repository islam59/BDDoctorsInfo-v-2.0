<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/
		$this->load->model('dep_model');
		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('user/login');
		}
	}

	public function adddepartment(){
		$data['title']   = 'Add Department Name'; 
		$data['header']  = $this->load->view('inc/header', $data, TRUE);
		$data['sidebar'] = $this->load->view('inc/sidebar', '', TRUE);
		$data['content'] = $this->load->view('inc/departmentadd', '', TRUE);
		$data['footer']  = $this->load->view('inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function addDepartmentForm(){
		$data['depname']  = $this->input->post('depname');
		$depname = $data['depname'];
		if(empty($depname)){
			$sdata =  array();
			$sdata['msg'] = '<span style="color:red;">Field Must Not Be Empty</span>';
			$this->session->set_flashdata($sdata);
			redirect("department/adddepartment");
		}else{
			$this->dep_model->saveDepartment($data);
			$sdata = array();
			$sdata['msg'] = '<span style="color:green;">Data Added Successfully !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect("department/adddepartment");
		}
	}

	public function departmentlist(){
		$data['title'] = 'Department List'; 
		$data['header'] = $this->load->view('inc/header', $data, TRUE);
		$data['sidebar'] = $this->load->view('inc/sidebar', '', TRUE);
		$data['depdata'] = $this->dep_model->getAllDeptData($data);
		$data['content'] = $this->load->view('inc/listdep', $data, TRUE);
		$data['footer'] = $this->load->view('inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function editdepartment($depid){
		$data['title'] = 'Update Department'; 
		$data['header'] = $this->load->view('inc/header', $data, TRUE);
		$data['sidebar'] = $this->load->view('inc/sidebar', '', TRUE);
		$data['depById'] = $this->dep_model->getDepById($depid);
		$data['content'] = $this->load->view('inc/depedit', $data, TRUE);
		$data['footer'] = $this->load->view('inc/footer', '', TRUE);
		$this->load->view('home', $data);
	}

	public function updateDepartment(){
		$data['depid'] = $this->input->post('depid');
		$data['depname']  = $this->input->post('depname');

		$depid  = $data['depid']; 
		$depname = $data['depname'];

		if(empty($depid) && empty($depname)){
			$ddata =  array();
			$ddata['msg'] = '<span style="color:red;">Field Must Not Be Empty</span>';
			$this->session->set_flashdata($ddata);
			redirect("department/editdepartment/".$depid);
		}else{
			$this->dep_model->updateDepData($data);
			$data = array();
			$data['msg'] = '<span style="color:green;">Data Updated Successfully !</span>'; 
			$this->session->set_flashdata($data);
			redirect("department/editdepartment/".$depid);
		}
	}

	public function deldep($depid){
		$this->dep_model->delDepById($depid);
		$ddata = array();
		$ddata['msg'] = '<span style="color:green;">Data Deleted Successfully !</span>'; 
		$this->session->set_flashdata($ddata);
		redirect("department/departmentlist"); 
	}



}

?>