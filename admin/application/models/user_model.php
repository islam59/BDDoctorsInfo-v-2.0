<?php
	class User_Model extends CI_Model{

		public function checkUser($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('username',$data['username']);
			$this->db->where('password',md5($data['password']));
			$this->db->where('useraccess','1');
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}

		}

		public function getUserById($userid){
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('userid',$userid);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

	}
?>