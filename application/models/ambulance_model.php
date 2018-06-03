<?php
	class Ambulance_Model extends CI_Model{
		
		public function getSomeAmbulanceData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('type','Ambulance Service');
			$this->db->order_by('priority','ASC');
			$this->db->Limit('5');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getTotalAmbulanceData(){ //MODAL FOR HOME PAGE AMBULANCE amount....
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('type','Ambulance Service');

			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllAmbulanceData(){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('type','Ambulance Service');
			$this->db->order_by('priority','ASC');
			//$this->db->Limit('10');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getAllAmbulanceArea($area){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('type','Ambulance Service');
			$this->db->where('division',$area);
			$this->db->like('district',$area);
			$this->db->or_like('address',$area);
			$this->db->order_by('priority','ASC');
			//$this->db->Limit('10');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}
	}
?>