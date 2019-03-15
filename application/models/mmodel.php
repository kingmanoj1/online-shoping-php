<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Mmodel extends CI_Model{

	   public function getcandidate(){

		$q= $this->db->get('candidate');
		
         
              return $q->result();
                
}
       public function gethmdata(){
       	$this->db->where('a.a_id','a1');
       $this->db->select('a.c_name,a.mobile,b.votes');
       $this->db->from('candidate a');
       $this->db->join('result b','b.c_id=a.c_id');
       $query=$this->db->get();
       return $query->result();
   }
  public function getkamdata(){
       	$this->db->where('a.a_id','a2');
       $this->db->select('a.c_name,a.mobile,b.votes');
       $this->db->from('candidate a');
       $this->db->join('result b','b.c_id=a.c_id');
       $query=$this->db->get();
       return $query->result();
   }
   public function getklmdata(){
       	$this->db->where('a.a_id','a3');
       $this->db->select('a.c_name,a.mobile,b.votes');
       $this->db->from('candidate a');
       $this->db->join('result b','b.c_id=a.c_id');
       $query=$this->db->get();
       return $query->result();
   } 
   public function getlmdata(){
       	$this->db->where('a.a_id','a4');
       $this->db->select('a.c_name,a.mobile,b.votes');
       $this->db->from('candidate a');
       $this->db->join('result b','b.c_id=a.c_id');
       $query=$this->db->get();
       return $query->result();
   }
}