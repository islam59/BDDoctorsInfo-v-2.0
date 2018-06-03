<?php
	class Contact_Model extends CI_Model{
		
		public function saveMessage($data){
			$this->db->insert('tbl_contact',$data);
		}

	}
?>