<?php
	class Institute_Model extends CI_Model{

		public function listInstitute(){
			$this->db->select('*');
			$this->db->from('tb_institute');
			$this->db->order_by('id','DESC');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list show doctor... 

		public function saveInstitute($data){
			$this->db->insert('tb_institute',$data);
		}//save Doctor...

		public function getInstituteData($id){
			$this->db->select('*');
			$this->db->from('tb_institute');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}
		
		public function delInstitute($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_institute');
		}

		public function updateInstituteData($data){
			$this->db->set('name',$data['name']);
			$this->db->set('type',$data['type']); 
			$this->db->set('location',$data['location']); 
			$this->db->set('weblink',$data['weblink']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_institute');
		}
		public function updateInstituteDataImage($data){
			$this->db->set('name',$data['name']);
			$this->db->set('type',$data['type']); 
			$this->db->set('location',$data['location']); 
			$this->db->set('images',$data['images']); 
			$this->db->set('weblink',$data['weblink']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_institute');
		}

		public function accessOn($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tb_institute');
		}
		public function accessOff($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tb_institute');
		}//end# access crontrols model.....
	}