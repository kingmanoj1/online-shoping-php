<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Ordermodel extends CI_Model{

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
function getdetails()
{ 
       $this->db->where('o.c_id',1);
       $this->db->select('p.p_name,p.p_size,p.p_cost,o.qty,o.date,o.amt,o.order_address');
       $this->db->from('product p');
       $this->db->join('orders o','o.p_id=p.p_id');
       $query=$this->db->get();
       return $query->result();

}

}