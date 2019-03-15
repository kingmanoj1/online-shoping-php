<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

    class Maincontroller extends CI_Controller{
      public function __construct(){
     	parent:: __construct();
     	$this->load->model('mainmodel','m');
        }
        public function index(){ 
         $record['detail']=$this->m->getproduct();
         $this->load->view('main',$record);
         }
      
      public function login_validation()
      {
      	$this->load->library('form_validation');
      	$this->form_validation->set_rules('cemail','Emailid','required');
      	$this->form_validation->set_rules('pass','Password','required');
      	if($this->form_validation->run()==True)
      	   {
                $emailid= $this->input->post('cemail');
                $password=$this->input->post('pass');
           
                $result['data']=$this->m->can_login($emailid,$password);

                
                if($result['data']->c_id=='1')   
                    {  
                      redirect('maincontroller/viewc');
          	       }
                    

      	        else if($result['data']->a_id=='51')
      	         {
      		          redirect('maincontroller/viewa');
      	         }
          }  
        else { 
     	        redirect('maincontroller/index');

             }
      }


      public function viewc(){
        $record['detail']=$this->m->getproduct();
        $this->load->view('cheader',$record);
        $this->load->view('footer2');
       
      }
       public function viewa(){

       $record['detail']=$this->m->getproduct();
        $this->load->view('aheader',$record);
        $this->load->view('footer2');

       }

      public function myaccount(){
          
         $data['records'] = $this->m->getData();
         $this->load->view('header2');
         $this->load->view('cpview',$data);
         $this->load->view('footer2');
        
      }
      
     public function update(){

        $result=$this->m->update();
        if($result){
              $this->session->set_flashdata('success_msg','Record updated successfully');
             echo"updated";
            }
        else {
            $this->session->set_flashdata('error_msg','Fail to update records');
              echo "error occured";
             }
           redirect('maincontroller/myaccount');
      }          
    public function changepass(){
         $this->load->view('header2');
         $this->load->view('ccpview');
         $this->load->view('footer2');
     }
     public function updatepass()
     {
        
        $this->form_validation->set_rules('oldpass','Current Password','required');
        $this->form_validation->set_rules('newpass','New Password','required');
        $this->form_validation->set_rules('oldpass','Confirm Password','required');
        if($this->form_validation->run()){
          $cur_pass=$this->input->post('oldpass');
          $new_pass=$this->input->post('newpass');
          $confirm_pass=$this->input->post('confirmpass');
          }
           $password= $this->m->getcurpass();
           if($password->c_pass==$cur_pass){
              if($new_pass == $confirm_pass){
                 if($this->m->updatepassword($new_pass))
                    { 
                      
                    $this->session->set_flashdata('success_msg','Password changed successfully');
                     redirect('maincontroller/changepass');
                    }
                  else {
                             
                    $this->session->set_flashdata('error_msg','Failed to change Password');
                        redirect('maincontroller/changepass');
                      }
                    
                    }   
                 else{
                     
                  $this->session->set_flashdata('error_msg','New Password and Confim Password is not matching');
                      redirect('maincontroller/changepass');
                     } 
                   }  
             else{
                      
                $this->session->set_flashdata('error_msg','Current Password is not matching');
                redirect('maincontroller/changepass'); 
                  } 
             
             }
      
public function orders(){ 
      
     $detail['record']= $this->m->getdetails();
     $this->load->view('header2'); 
     $this->load->view('order',$detail);
     $this->load->view('footer2');
}

public function getfunc(){
      $data['record']=$this->m->getdata1();
      $this->load->view('header2');
      $this->load->view('feedback',$data);
      $this->load->view('footer2');

   }  
   public function inserdata(){

    $result=$this->m->insertdata();
    if($result){
      echo "inserted successfully";
    }
  } 


   public function productdetail($pid)
   {
      $record['detail']=$this->m->pdetail($pid);
      $this->load->view('header');
      $this->load->view('productdesc',$record);
      $this->load->view('footer');

   }
   public function cartdetails($pid){
   $this->m->cartdata($pid);
   redirect('/');
   
 }

 public function acart(){
   $record['detail']=$this->m->cart();

   $this->load->view('cartview',$record);
   

 }
 public function new(){
  echo" Under Construction.. ";
}
   public function delete($pid){
      $result=$this->m->delete_data($pid);
      redirect('maincontroller/acart');
      
  }
 public function edt()
  {
    $this->load->view('edit_profile');
}

public function stk()
  {
    $this->load->view('stock');
}

  
public function a()
  {
        $this->load->view('add_admin');
    
  }

public function resetp()
  {
    $this->load->view('resetpass');
  }

              

public function add()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('email', 'email', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
            
      if($this->form_validation->run())
      {
        
        
          $mb_= $this->m->add_admin();
        if($mb_==true)
        {
      
          echo"saved";
        }
        
      }
      else{
        echo "not done";
        $this->load->view('add_admin');
      }
    }


    public function edit()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('id', 'ID', 'required');
      $this->form_validation->set_rules('email', 'email', 'required');
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      

      
      if($this->form_validation->run())
      {
        $id=$this->input->post('id');
        $this->load->model('mainmodel');
        $result=$this->mainmodel->edit_pro($id);
      
      }
      else{
        echo "not done";
        $this->load->view('edit_profile');
      }
    }


    public function reset()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('o_password', 'Old Password', 'required');
      $this->form_validation->set_rules('n_password', 'new password', 'required');
      $this->form_validation->set_rules('c_confirm', 'confirm password', 'required');
    if($this->form_validation->run())
      {
        
        $old=$this->input->post('o_password');
        $new=$this->input->post('n_password');
        $confirm=$this->input->post('c_confirm');
    } else {
        $this->load->view('resetpass');
      }

            
              
      
        $password=$this->m->getpass();
        if($password->a_pass==$old)
        {
          if($new==$confirm)
          {
            if($this->m->updatepassword($new))
            {
              echo"updated";
              //redirect('maincontroller/resetp');
            }
            else{
              echo"failed";
            }
          }
          else{
          echo "password is not match";
       // redirect('maincontroller/resetp');
        }
        }
        else{
        echo"current password not match";
        //redirect('maincontroller/resetp');
        //$this->load->view('reset_pass');
      }

    }
  
    public function stock()
    {
      
      $a['data']=$this->m->t_fetch("product");
      $this->load->view('stock',$a);
    }

    public function myprofile()
    {
      
      
      $data['record']=$this->m->getpro();
      
      $this->load->view('edit_profile',$data);
    }
    function mupdate()
    {
      
      $result=$this->m->update();
      if($result)
      {
        echo"updated";
      }
      else
      {
        echo"error";
      }
      //redirect('m_cntrl/myprofile');
    }

   public function addproduct(){
    
       $this->load->view('addproduct');
       $this->load->view('footer2');
   }
   public function orderdetail(){
     
     $this->load->view('orderdetail');
   } 
   
  public function reorder(){
    
    $this->load->view('reorderlevel');
    
  } 
  public function getlwear(){
    $record['detail']=$this->m->getlwear();
    $this->load->view('getlwear',$record);
    $this->load->view('footer2');


  }
  public function getgwear(){
    $record['detail']=$this->m->getgwear();
    $this->load->view('getgwear',$record);
    $this->load->view('footer2');


  }
  public function getkwear(){
    $record['detail']=$this->m->getkwear();
    $this->load->view('getkwear',$record);
    $this->load->view('footer2');


  }
  public function getswear(){
    $record['detail']=$this->m->getswear();
    $this->load->view('getswear',$record);
    $this->load->view('footer2');


  }
 
 }

