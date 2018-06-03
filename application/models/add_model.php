<?php
	class Add_Model extends CI_Model{
		
		public function specialAddS(){
			$this->db->select('*');
			$this->db->from('tb_specialsadd');
			$this->db->where('id','1');
			$qresult = $this->db->get();
			$result  = $qresult->row(); 
			return $result; 
		}

		public function pageAddsingle(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_pageadds');
			$this->db->where('status','1');
			$this->db->order_by('priority','DESC');
			$this->db->order_by('rand()');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function sidebarAdds(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_sidebaradd');
			$this->db->where('status','1');
			$this->db->order_by('rand()');
			$this->db->order_by('priority','DESC');
			

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

	}
?>