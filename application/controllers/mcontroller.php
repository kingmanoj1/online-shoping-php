<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

    class Mcontroller extends CI_Controller{

       public function __construct(){
     	parent:: __construct();
     	$this->load->model('mmodel','m');
        }
        public function index(){ 
         $record['detail']=$this->m->getcandidate();
         $this->load->view('tc',$record);
         }
         public function gethdata(){
         $detail['record']=$this->m->gethmdata();
         $this->load->view('harea',$detail);

       }  
         public function getkadata(){
         $detail['record']=$this->m->getkamdata();
         $this->load->view('kgarea',$detail);
           } 
        public function getkldata(){
         $detail['record']=$this->m->getklmdata();
         $this->load->view('kaarea',$detail);
         } 
        public function getldata(){
         $detail['record']=$this->m->getlmdata();
         $this->load->view('laarea',$detail);

       } 
}