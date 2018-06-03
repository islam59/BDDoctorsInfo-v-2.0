<?php
	class Medicine_Model extends CI_Model{
		


		public function getTotalMedicineData(){ //MODAL FOR HOME PAGE total hospital amount fetch....
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Pharmacy or Medicine Shop');
			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllMedicineData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->like('type','Pharmacy or Medicine Shop');
			$this->db->order_by('priority','ASC');
		//	$this->db->Limit('5');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getAllMedicineArea($area){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('type','Medicine Shop');
			$this->db->like('division',$area);
			$this->db->or_like('district',$area);
			$this->db->or_like('address',$area); 
			$this->db->order_by('priority','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}


	}
?>