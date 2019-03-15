<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

class Cpcontroller extends CI_Controller{

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
                      redirect('cpcontroller/myaccount');
          	       }
                    

      	        else
      	         {
      		        $this->session->set_flashdata('error','Invalid Username and Password');
      		        redirect('cpcontroller/index');
      	         }
            }
        else { 
     	        redirect('cpcontroller/index');

             }
      } 
     public function myaccount(){
          
         $data['records'] = $this->m->getData();
         $this->load->view('header');
         $this->load->view('cpview',$data);
         $this->load->view('footer');
        
      }
      
     public function update(){

        $result=$this->m->update();
        if($result){
              $this->session->set_flashdata('success_msg','Record updated successfully');
             
            }
        else {
            $this->session->set_flashdata('error_msg','Fail to update records');
              
             }
           redirect('cpcontroller/myaccount');
      }          


  

   }


     


     




