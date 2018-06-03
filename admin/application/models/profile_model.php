<?php
	class Profile_Model extends CI_Model{



		public function checkOldPassword($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id',$data['userid']);
			$this->db->where('password',md5($data['oldpassword']));
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}

		public function updatePassword($data){
			$this->db->set('password',md5($data['newpassword']));
			$this->db->where('id',$data['userid']);
			$this->db->update('tb_user');
		}

		public function getUserData($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id',$data['id']);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

		public function updateInfo($data){
			$this->db->set('username', $data['username']);
			$this->db->set('email', $data['email']);
			$this->db->set('phonenumber', $data['phonenumber']);
			$this->db->set('address', $data['address']);
			$this->db->where('id', $data['userid']);
			$this->db->update('tb_user');
		}


	}
?>