<?php
	class Dashboard_Model extends CI_Model{

		public function doctor($data){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function services($data){
			$this->db->select('*');
			$this->db->from('tb_organization');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function institute($data){
			$this->db->select('*');
			$this->db->from('tb_institute');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function pageadd($data){
			$this->db->select('*');
			$this->db->from('tb_pageadds');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function sidebaradd($data){
			$this->db->select('*');
			$this->db->from('tb_sidebaradd');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function Slider($data){
			$this->db->select('*');
			$this->db->from('tb_slider');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}
		public function message($data){
			$this->db->select('*');
			$this->db->from('tbl_contact');
			$qresult = $this->db->get(); 
			$result  = $qresult->num_rows(); 
			
			return $result; 
		}

	}