<?php
	class Doctor_Model extends CI_Model{

		public function listDoctor(){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->order_by('id','DESC');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list show doctor... 

		public function saveDoctor($data){
			$this->db->insert('tb_doctor',$data);
		}//save Doctor...

		public function getDoctorData($id){
			$this->db->select('*');
			$this->db->from('tb_doctor');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}
		
		public function delDoctor($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_doctor');
		}

		public function updateDoctorData($data){
			$this->db->set('division',$data['division']);
			$this->db->set('district',$data['district']);
			$this->db->set('name',$data['name']);
			$this->db->set('degree',$data['degree']); 
			$this->db->set('designationtitle',$data['designationtitle']); 
			$this->db->set('designationdetails',$data['designationdetails']); 
			$this->db->set('chamber',$data['chamber']); 
			$this->db->set('gender',$data['gender']); 
			$this->db->set('priority',$data['priority']); 
			//$this->db->set('status',$data['status']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_doctor');
		}

		public function accessOn($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tb_doctor');
		}
		public function accessOff($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tb_doctor');
		}//end# access crontrols model.....
	}