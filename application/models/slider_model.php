<?php
	class Slider_Model extends CI_Model{

		public function getSliderData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_slider');
			$this->db->where('status','1');
			$this->db->order_by('id','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}


	}
?>