<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Cpmodel extends CI_Model{

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
     $this->db->where('a.c_id',1);
       $this->db->select('a.*,b.city_name,c.state_name');
       $this->db->from('customer a');
       $this->db->join('city b','b.city_id=a.city_id');
       $this->db->join('state c','c.state_id=b.state_id');
       $query=$this->db->get();
       
       return $query->row();
  }

public function update(){
            
            $this->db->where('city_name',$this->input->post('city'));
            $query= $this->db->get('city');
            $row= $query->row();
            

            $this->db->where('state_name',$this->input->post('state'));
            $query= $this->db->get('state');
            $r= $query->row();
   
            $field=array(
          'c_name'=>$this->input->post('cname'),
          'c_address'=>$this->input->post('address'),
          'city_id'=> $row->city_id,
          'state_id'=> $r->state_id,
          'c_email'=>$this->input->post('email')
          ); 
        $this->db->where('c_id',1);    
        $this->db->update('Customer',$field);
      if($this->db->affected_rows()>0){
        return true;
      }
      else
      {
        return false;
      }
  }   

}