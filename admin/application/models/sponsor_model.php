<?php
	class Sponsor_Model extends CI_Model{
/*--------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------*/
		public function specialSponsorList(){
			$this->db->select('*');
			$this->db->from('tb_specialsadd');
			$this->db->where('id','1');
			$qresult  = $this->db->get();
			$result   = $qresult->row(); 
			return $result;
		}//list of slider.. 

		public function updateSponsorHeader($data){
			$this->db->set('header',$data['images']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_specialsadd');
		}

		public function updateSponsorFooter($data){
			$this->db->set('footer',$data['images']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_specialsadd');
		}
		public function updateSponsorContact($data){
			$this->db->set('contact',$data['images']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_specialsadd');
		}


/*--------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------*/
		public function pageAddList(){
			$this->db->select('*');
			$this->db->from('tb_pageadds');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list of slider.. 

		public function accessOn($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
		public function accessOff($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}//end# access crontrols model.....
/*..........................................................................................*/
		public function pOne($id){
			$this->db->set('priority','1');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
		public function pTwo($id){
			$this->db->set('priority','2');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
		public function pThree($id){
			$this->db->set('priority','3');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
		public function pFour($id){
			$this->db->set('priority','4');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
		public function pFive($id){
			$this->db->set('priority','5');
			$this->db->where('id',$id);
			$this->db->update('tb_pageadds');
		}
/*........................................................................................*/
		public function delSponsorPageAdd($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_pageadds');
		}//del sponsor pageadds.. by id

		public function savePageAdds($data){
			$this->db->insert('tb_pageadds',$data);
		}//save sponsor pageAdds...

		public function updatePageAdds($data){
			$this->db->set('image',$data['image']);
			$this->db->set('weblink',$data['weblink']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_pageadds');
		}
/*........................................................................................*/
/*........................................................................................*/
/*........................................................................................*/
/*........................................................................................*/

		public function sidebarAddList(){
			$this->db->select('*');
			$this->db->from('tb_sidebaradd');
			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}//list of slider.. 

		public function AccessOnSidebarAdd($id){
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
		public function AccessOffSidebarAdd($id){
			$this->db->set('status','0');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}//end# access crontrols model.....
/*..........................................................................................*/
		public function pOneSidebar($id){
			$this->db->set('priority','1');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
		public function pTwoSidebar($id){
			$this->db->set('priority','2');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
		public function pThreeSidebar($id){
			$this->db->set('priority','3');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
		public function pFourSidebar($id){
			$this->db->set('priority','4');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
		public function pFiveSidebar($id){
			$this->db->set('priority','5');
			$this->db->where('id',$id);
			$this->db->update('tb_sidebaradd');
		}
/*........................................................................................*/
		public function updateSidebarAdds($data){
			$this->db->set('title', $data['title']);
			$this->db->set('body', $data['body']);
			$this->db->set('weblink', $data['weblink']);
			$this->db->set('image', $data['image']);
			$this->db->set('weblink', $data['weblink']);
			$this->db->where('id', $data['id']);
			$this->db->update('tb_sidebaradd');
		}
/*-------------------------------------------------------------------------------------------*/
		public function delSidebarAdd($id){
			$this->db->where('id',$id);
			$this->db->delete('tb_sidebaradd');
		}//del sponsor pageadds.. by id
/*--------------------------------------------------------------------------------------------*/
		public function saveSidebarAdds($data){
			$this->db->insert('tb_sidebaradd',$data);
		}//save sponsor pageAdds...
	}