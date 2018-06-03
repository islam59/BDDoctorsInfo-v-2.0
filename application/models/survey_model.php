<?php
	class Survey_Model extends CI_Model{
		
		public function getSomeSurveyData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_survey');
			$this->db->where('status','1');
			$this->db->order_by('id','ASC');
			$this->db->Limit('12');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getTotalSurveyData(){ //MODAL FOR HOME PAGE AMBULANCE amount....
			$this->db->select('*');
			$this->db->from('tb_survey');
			$this->db->where('status','1');

			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllSurveyData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_survey');
			$this->db->where('status','1');
			$this->db->order_by('id','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}


	}
?>