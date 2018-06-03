<?php
	class Doctor_Model extends CI_Model{
		//public $area; 

		public function getSomeDoctorData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->order_by('priority','ASC');
			$this->db->Limit('10');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getTotalDoctorData(){ //MODAL FOR HOME PAGE doctor amount....
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->order_by('priority','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllDoctorData(){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->order_by('priority','ASC');
			//$this->db->Limit('10');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}
		
		public function getAllDoctorArea($area){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->where('division',$area);
			$this->db->or_where('district',$area);
			$this->db->or_like('chamber',$area); 
			$this->db->order_by('priority','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

	}
?>