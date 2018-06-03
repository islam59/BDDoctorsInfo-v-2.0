<?php
	class Message_Model extends CI_Model{

		public function getAllMessage($data){
			$this->db->select('*');
			$this->db->from('tbl_contact');
			$this->db->order_by('id','asc');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//end# all member showwing model..... 
		
		public function accessOn($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tbl_contact');
		}
		public function accessOff($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tbl_contact');
		}//end# access crontrols model.....

		public function MessageShow($id){
			$this->db->select('*');
			$this->db->from('tbl_contact');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}//end# Member information showing model... 

		public function delMessage($id){
			$this->db->where('id',$id);
			$this->db->delete('tbl_contact');
		}//delete member model....


		public function getTotalMessage(){ //MODAL FOR HOME PAGE doctor amount....
			$this->db->select('*');
			$this->db->from('tbl_contact');
			$this->db->where('status','1');

			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

	}
?>