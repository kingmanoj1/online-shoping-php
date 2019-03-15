<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Ccpmodel extends CI_Model{

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

public function getcurpass()
 {
   $this->db->where('c_id',1);
   $query=$this->db->get('customer'); 
   if($query->num_rows()>0)
    {
     return $query->row();
    }
    else{
      return false;
    }
 }
function updatepassword($new_pass){
   
   $data = array(
     'c_pass' => $new_pass
   );
     return $this->db->where('c_id',1)
                     ->update('customer',$data);
      
    }    

}
?>