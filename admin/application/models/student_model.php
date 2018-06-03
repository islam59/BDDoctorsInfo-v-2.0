<?php
	class Student_Model extends CI_Model{

		public function saveStudent($data){
			$this->db->insert('tbl_student',$data);
		}
		
		public function getAllStudentData(){
			$this->db->select('*');
			$this->db->from('tbl_student');
			$this->db->order_by('sid','asc');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getStudentById($sid){
			$this->db->select('*');
			$this->db->from('tbl_student');
			$this->db->where('sid',$sid);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}


		public function updateStudentData($data){
			$this->db->set('name',$data['name']);
			$this->db->set('dep',$data['dep']);
			$this->db->set('roll',$data['roll']);
			$this->db->set('reg',$data['reg']);
			$this->db->set('phone',$data['phone']);
			$this->db->where('sid',$data['sid']);
			$this->db->update('tbl_student');
		}

		public function delStudentById($sid){
			$this->db->where('sid',$sid);
			$this->db->delete('tbl_student');
		}

	}
?>