<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

    class Ordercontroller extends CI_Controller{

       public function __construct(){
     	parent:: __construct();
     	$this->load->model('ordermodel','m');
        }
       public function index(){ 
	 	  
     $detail['record']= $this->m->getdetails();
     $this->load->view('header'); 
     $this->load->view('order',$detail);
     $this->load->view('footer');
}



  
}