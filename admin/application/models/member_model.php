<?php
	class Member_Model extends CI_Model{

		public function getAllMember($data){
			$this->db->select('*');
			$this->db->from('tb_user');
				$cond = "id != ".$data['id'];//set condition for selfRemove... 
			$this->db->where($cond);
			$this->db->order_by('id','asc');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//end# all member showwing model..... 
		
		public function accessOn($id){
			$this->db->set('useraccess','1');
			$this->db->where('id',$id);
			$this->db->update('tb_user');
		}
		public function accessOff($id){
			$this->db->set('useraccess','0');
			$this->db->where('id',$id);
			$this->db->update('tb_user');
		}//end# access crontrols model.....

		public function MemberShow($id){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}//end# Member information showing model... 

		public function delMember($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_user');
		}//delete member model....


		public function saveMember($data){
			$this->db->insert('tb_user',$data);
		}//insert member like admin/moderator,editor etc. 
		

		public function getMemberData($id){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}


		public function updateMember($data){
			$this->db->set('username',$data['username']);
			$this->db->set('email',$data['email']);
			$this->db->set('phonenumber',$data['phonenumber']);
			$this->db->set('address',$data['address']);
			$this->db->set('userrole',$data['userrole']);
			$this->db->set('password',$data['password']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_user');
		}



	}
?>