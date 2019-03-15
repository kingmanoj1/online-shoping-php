<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Fdmodel extends CI_Model{

function can_login($emailid,$password)
{
   $this->db->where('c_email',$emailid);
   $this->db->where('c_pass',$password);

   $query= $this->db->get('customer');

   //echo $this->db->last_query();

   //die();
   if($query->num_rows()>0)
   {
     $row = $query->row();
      $bool = true;
      $this->session->set_userdata('Cid',$row->c_id);
   }                   
   else
   {
    $bool = false;
   }
   return $bool;
}
public function getdata(){
 
  $this->db->select('s.answer,q.queries');
  $this->db->from('query q');
  $this->db->join('solution s','s.q_id=q.q_id');
  $query=$this->db->get();
  return $query->result();
  }
  public function insertdata()
  {

    $field = array(
       'queries'=>$this->input->post('ques')
        );
    $this->db->insert('query',$field);
    if($this->db->affected_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }
}