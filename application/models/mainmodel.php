<?php 
defined('BASEPATH') OR exit ('No direct script access allowed' ); 

Class Mainmodel extends CI_Model{

function can_login($emailid,$password)
{ 
   $q=$this->db->get('customer');
   $r=$q->row();
   if($r->c_id=='1')
   {

   $this->db->where('c_email',$emailid);
   $this->db->where('c_pass',$password);

   $query= $this->db->get('customer');

   //echo $this->db->last_query();

   //die();
   if($query->num_rows()>0)
   {
     $row = $query->row();
     $this->session->set_userdata('Cid',$row->c_id);
     return $query->row();
   }                   
   }
   $qu=$this->db->get('admin');
   $re=$qu->row();
   if($re->a_id=='51')
   { 
    $this->db->where('a_email',$emailid);
   $this->db->where('a_pass',$password);

   $quer= $this->db->get('admin');

   
   if($quer->num_rows()>0)
   {
     
     return $quer->row();
   }
      

   }
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
function getdetails()
{ 
       $this->db->where('o.c_id',1);
       $this->db->select('p.p_name,p.p_size,p.p_cost,o.qty,o.date,o.amt,o.order_address');
       $this->db->from('product p');
       $this->db->join('orders o','o.p_id=p.p_id');
       $query=$this->db->get();
       return $query->result();

}
public function getdata1(){
 
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
  public function getproduct()
 {
  
   $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->result();
    }
    else{
      return false;      
 }
}
 public function cartdata($pid)
 {
   $query=$this->db->get('cart1');
   $r=$query->result();
   foreach ($r as $ro) {
     if($ro->c_id!=1)//session
     {  
        $field = array(
       'c_id'=>1//session
        );
    $this->db->insert('cart1',$field);
      }     
     }
     $this->db->where('c_id',1); //session
     $q=$this->db->get('cart1');
     $re=$q->row();
     
     
     $f = array(
       'cart_id'=>$re->cart_id,
       'p_id'=>$pid
       
        );
     $this->db->insert('cart2',$f);
    }
  public function cart()
  {
    $this->db->where('c.cart_id',1);
    $this->db->select('p.*');
    $this->db->from('product p');
    $this->db->join('cart2 c','c.p_id=p.P_id');
    $query=$this->db->get();
    return $query->result();
  }
 public function pdetail($pid)
 { 
   $this->db->where('p_id',$pid);
   $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->row();
    }
    else{
      return false;
   } 
}
  public function delete_data($pid){
   $this->db->where('p_id',$pid);
   $this->db->delete('cart2');
   if($this->db->affected_rows()>0){
     return true;
   }
     else{
       return false;
     }
  }

  public function add_admin()
    {
      $add=array(


          'a_name'=>$this->input->post('username'),
          'a_pass'=>$this->input->post('password'),
          'a_email'=>$this->input->post('email'),
          
    );
    $bool=$this->db->insert('admin',$add);
      return $bool;


      

  }

    public function t_fetch($a)
    {
      $r=$this->db->get($a);
      return $r->result();
    }

      public function getpass()
      {
        $this->db->where('a_id',1);
        $query=$this->db->get('admin');
        if($query->num_rows()>0)
        {
          return $query->row();
        }
        else{
          return false;
        } 
                      
      }

      function updatepassword1($new)
      {
        $data=array('a_pass'=>$new);
        return $this->db->where('a_id',1)
                ->update('admin',$data);

      }

      function getpro()
      {

        $this->db->where('a_id',1);
        $this->db->select('a_name','a_pass','a_email');

        $this->db->from('admin');
      

        $query=$this->db->get();
        

        return $query->row();
        

      }
      function update1()
      {
        $field=array(
          'a_name'=>$this->input->post('email'),
          'a_pass'=>$this->input->post('username'),
          'a_email'=>$this->input->post('password')
        );
        $this->db->where('a_id',1);
        $this->db->update('admin',$field);
        if($this->db->affected_rows()>0)
        {
          return true;
        }
        else
        {
          return false;
        }

      }
   function getlwear()
   { $this->db->where('category_id',1);
     $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->result();
    }
    else{
      return false;      
 }

   }

function getswear()
   { $this->db->where('category_id',2);
     $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->result();
    }
    else{
      return false;      
 }

   }
   function getgwear()
   { $this->db->where('category_id',3);
     $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->result();
    }
    else{
      return false;      
 }

   }
   function getkwear()
   { $this->db->where('category_id',4);
     $query=$this->db->get('product'); 
   if($query->num_rows()>0)
    {
     return $query->result();
    }
    else{
      return false;      
 }

   }
}