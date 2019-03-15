<?php
  defined('BASEPATH') OR exit ('No direct script access allowed' ); 

    class Icontroller extends CI_Controller{

     /*  public function __construct(){
     	parent:: __construct();
     	$this->load->model('imodel','m');
        }*/
       /* public function index(){ 
	 	     $this->load->view('imageview');
          }*/
        public function index()
         {  $con= array(
         	             'upload_path'=>'upload/',
         	             'allowed_types'=>'jpg|jpeg|png',
         	             'filename'=>url_title($this->input->post('file'))
                       ); 
          $this->load->library('upload',$con);
          if($this->upload->do_upload('file'))
          {
            $this->db->insert('images',array('p_image'=>$this->upload->file_name));
            echo("saved");

          }
            $this->load->view('imageview');
         }  
}