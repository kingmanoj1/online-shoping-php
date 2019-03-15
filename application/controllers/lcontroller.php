<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

class Lcontroller extends CI_Controller{
  
  public function __construct(){
      parent:: __construct();
      $this->load->model('cpmodel','m');     

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
                      $this->load->view('mainview');
          	       }
                    

      	        else
      	         {
      		        $this->session->set_flashdata('error','Invalid Username and Password');
      		        //redirect('lcontroller/index');
      	         }
            }
        else { 
     	        //redirect('lcontroller/index');

             }
      } 
}