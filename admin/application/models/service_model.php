<?php
	class Service_Model extends CI_Model{

		public function listService(){
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->order_by('id','DESC');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list show doctor... 

		public function saveService($data){
			$this->db->insert('tb_organization',$data);
		}//save Doctor...

		public function getServiceData($id){
			$this->db->select('*');
			$this->db->from('tb_organization');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}
		
		public function delService($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_organization');
		}

		public function updateServiceData($data){
			$this->db->set('division',$data['division']);
			$this->db->set('district',$data['district']);
			$this->db->set('name',$data['name']);
			$this->db->set('type',$data['type']); 
			$this->db->set('contact',$data['contact']); 
			$this->db->set('address',$data['address']); 
			$this->db->set('priority',$data['priority']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_organization');
		}

		public function accessOn($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tb_organization');
		}
		public function accessOff($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tb_organization');
		}//end# access crontrols model.....
	}