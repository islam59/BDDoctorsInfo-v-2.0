<?php
	class Slider_Model extends CI_Model{

		public function listSlider(){
			$this->db->select('*');
			$this->db->from('tb_slider');
			$this->db->order_by('id','DESC');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list of slider.. 

		public function saveSlider($data){
			$this->db->insert('tb_slider',$data);
		}//save slider...
		
		public function delSlider($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_slider');
		}//del slider by id

		public function getSliderData($id){
			$this->db->select('*');
			$this->db->from('tb_slider');
			$this->db->where('id',$id);
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}//slider by id 


		public function updateSliderData($data){
			$this->db->set('title',$data['title']);
			$this->db->set('body',$data['body']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_slider');
		}
		public function updateSliderDataImage($data){
			$this->db->set('title',$data['title']);
			$this->db->set('body',$data['body']); 
			$this->db->set('images',$data['images']); 
			$this->db->set('created_by',$data['created_by']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_slider');
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