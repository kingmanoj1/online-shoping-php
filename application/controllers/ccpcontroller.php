<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

    class Ccpcontroller extends CI_Controller{

       public function __construct(){
     	parent:: __construct();
     	$this->load->model('ccpmodel','m');
        }


	   public function index(){ 
	 	  $this->load->view('login');
           }
      
      public function login_validation()
        {
      	  $this->load->library('form_validation');
      	  $this->form_validation->set_rules('cemail','Emailid','required');
      	 $this->form_validation->set_rules('pass','Password','required');
      	 if($this->form_validation->run()==TRUE)
      	   {
                $emailid= $this->input->post('cemail');
                $password=$this->input->post('pass');
           
                $result=$this->m->can_login($emailid,$password);

                
                if($result==true)   
                    {  
                       

                      redirect('ccpcontroller/changepass');
          	       }
                    

      	        else
      	         {
      		        $this->session->set_flashdata('error','Invalid Username and Password');
      		        redirect('ccpcontroller/index');
      	         }
            }
        else { 
     	        redirect('ccpcontroller/index');

             }
        } 
      public function changepass(){
         $this->load->view('header');
         $this->load->view('ccpview');
         $this->load->view('footer');
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
                     redirect('ccpcontroller/changepass');
                    }
                  else {
                             
                    $this->session->set_flashdata('error_msg','Failed to change Password');
                        redirect('ccpcontroller/changepass');
                      }
                    
                    }   
                 else{
                     
                 	$this->session->set_flashdata('error_msg','New Password and Confim Password is not matching');
                 	    redirect('ccpcontroller/changepass');
                     } 
                   }  
             else{
                      
            	  $this->session->set_flashdata('error_msg','Current Password is not matching');
             	  redirect('ccpcontroller/changepass'); 
                  } 
             
             }
         }     
              

          
         
     

 