<?php
	class Option_Model extends CI_Model{


		public function getAllSiteData(){
			$this->db->select('*');
			$this->db->from('tb_siteoption');
			$this->db->where('id', '1');
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}

		public function updateFacebook($data){
			$this->db->set('facebook',$data['facebook']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//facebook..

		public function updateGoogle($data){
			$this->db->set('google',$data['google']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//google...........................

		public function updateTwitter($data){
			$this->db->set('twitter',$data['twitter']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//google..............................................

		public function updatePhone($data){
			$this->db->set('phone',$data['phone']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//phone................................................

		public function updateEmail($data){
			$this->db->set('email',$data['email']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//google............................................

		public function updateWebsite($data){
			$this->db->set('website',$data['website']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//google................................................

		public function updateDevelopper($data){
			$this->db->set('developed_by',$data['developed_by']);
			$this->db->set('developed_link',$data['developed_link']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//google................
		
		public function updateDescription($data){
			$this->db->set('description',$data['description']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_siteoption');
		}//description................................................
		
	}//end of siteoption_model class //

?>