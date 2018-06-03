<?php
	class Hospital_Model extends CI_Model{
		
		public function getSomeHospitalData(){ //MODAL FOR HOME PAGE hospital data fetch....
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Hospital');
			$this->db->or_like('type','Clinic'); 
			$this->db->or_like('type', 'Diagnostic Center');
			$this->db->order_by('rand()');
			$this->db->Limit('5');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getTotalHospitalData(){ //MODAL FOR HOME PAGE total hospital amount fetch....
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Hospital');
			$this->db->or_like('type','Clinic'); 
			$this->db->or_like('type', 'Diagnostic Center');
			$this->db->order_by('rand()');
			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllHospitalData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Hospital');
			$this->db->or_like('type','Clinic'); 
			$this->db->or_like('type', 'Diagnostic Center');
			$this->db->order_by('rand()');
		//	$this->db->Limit('5');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getAllHospitalArea($area){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Hospital');
			$this->db->or_like('type','Clinic'); 
			$this->db->or_like('type', 'Diagnostic Center');

			$this->db->where('division',$area);
			$this->db->or_where('district',$area);
			$this->db->or_where('address',$area); 
			$this->db->order_by('rand()');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}


	}
?>