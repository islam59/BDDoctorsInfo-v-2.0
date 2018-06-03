<?php
	class Manage_Model extends CI_Model{

		public function getBookByDep($dep){
			$this->db->select('*');
			$this->db->from('tbl_book');
			$this->db->where('dep',$dep);
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function saveIssueData($data){
			$this->db->insert('tbl_issue',$data);
		}

		public function getAllIssuetData(){
			$this->db->select('*');
			$this->db->from('tbl_issue');
			$this->db->order_by('id','desc');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function delStudentById($id){
			$this->db->where('id',$id);
			$this->db->delete('tbl_issue');
		}

		public function getStudentByReg($reg){
			$this->db->select('*');
			$this->db->from('tbl_student');
			$this->db->where('reg',$reg);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

	}//end of manage_model class //
?>