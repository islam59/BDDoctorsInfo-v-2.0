<?php
	class Option_Model extends CI_Model{
		//public $area; 

		public function getOptionData(){ //MODAL FOR doctor PAGE..
			$this->db->select('*');
			$this->db->from('tb_siteoption');
			$this->db->where('id','1');
			//$this->db->Limit('10');

			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

	}
?>