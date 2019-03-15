<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Shopping</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

 
	

</head>

<body bgcolor="#fff">


<div class="container-fluid">
        <div class="row header1">
              <div class="col-sm-2" >
                  <center><img class="img-responsive" src="http://localhost/ci/images/logo.png" alt="No Logo"></center>
              </div>

              <div class="col-sm-8 cmd" >
              
                  <div class="row control" style=" padding-top:2.5%;">
                    <div class="col-sm-8 col-xs-8 cmd" style=" padding-right:0px;">
                        <input type="text" name="txt1" class="form-control col-sm-6"/>
                        
                    </div>
                    <div class="col-sm-4 col-xs-4 cmd" style="padding-left:0px;">
                        <a href="#" class="btn btn-primary btn-block " role="button">Search</a>
                    </div>
                  </div>
              </div>
           </div>
   <nav class="navbar navbar-inverse control" id= "navigation" style="padding-bottom:-15px" >
                  <div class="container-fluid" >
                    <div class="navbar-header" >
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('maincontroller/index');?>" >Home</a></li>
                        
                        <li><a href="<?php echo site_url('maincontroller/a'); ?>">add admin</a></li>
                        <li><a href="<?php echo site_url('maincontroller/resetp'); ?>">Reset password</a></li>
                        <li><a href="<?php echo site_url('maincontroller/stock'); ?>">view stock</a></li>
                        <li><a href="<?php echo site_url('maincontroller/edit'); ?>"">Edit Profile</a></li>
                        <li><a href="<?php echo site_url('maincontroller/orderdetail'); ?>"">View Order</a></li>
                        <li><a href="<?php echo site_url('maincontroller/addproduct'); ?>">add product</a></li>
                        <li><a href="<?php echo site_url('maincontroller/reorder'); ?>">reorder-level<span class="badge">4</span></a></li>
                        
                        
                        </ul>
                      
                          
                    <div>
                      <a href="<?php echo base_url();?>cntrl/index"><h4>LogOut</h4>
                      </a>
                    </div>
                       


                  </div>

      </div>
            </nav>
          </div>
        </div>
    </div>

 <form action="<?php echo site_url('maincontroller/update1');?>" method="post">
  <h1 style="margin-top:40px;">Edit Profile</h1>
	   
     <div>
      <table  cellpadding="10px" style="margin-top:20px;">
			 
       



		<tr>
			
            <td> <font color="blue">Email : </font></td>
		
            <td>  <?php echo form_input(array('type' =>'text', 'name'=>'email', 'class'=>'input', 'placeholder'=>'email-id')); ?>
              
         <div>
          <?php echo form_error('email');?>
        </div>
        </td>
         </tr>
         <tr>
           <td colspan="2" style="height:10px;"></td>
         </tr>

         
		 
		<tr>
            <td> <font color="blue"> Username : </font></td>
			
            <td> <?php echo form_input(array('type' =>'text', 'name'=>'username', 'class'=>'input', 'placeholder'=>'name','value'=>set_value('name'))); ?>
                <div>
          <?php echo form_error('username');?>
        </div>
        </td>
         </tr>
          <tr>
           <td colspan="2" style="height:10px;"></td>
         </tr> 
       

		  <div class="col-lg-5">
         <tr>
            <td> <font color="blue">Password : </font></td>
            <td> <?php echo form_input(array('type' =>'password', 'name'=>'password', 'class'=>'input', 'placeholder'=>'password')); ?>
                <div>
          <?php echo form_error('password');?>
        </div>

            </td>
         </tr>
       </div>
       <div  class="col-lg-5">
          <tr>
           <td colspan="2" style="height:10px;"></td>
          
         </tr>
       </div>

          
		 
		  </table>
	</div>
		
      <div align="center" style="margin-top:10px;">
	     <input type="submit" class="btn" name="submit" class="btn" value="Update Details">
      </div>
       	  
     	  
  
  
   </form>
   
   
   
   <div class="modal fade " data-keyboard="false" data-backdrop="static" id="registrationModal" tabindex="-1">
      <div class="modal-dialog modal-sm ">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">registration</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <label for="inputUserName">Username</label>
                <input class="form-control" placeholder="User full name" type="text" id="inputUserName">
              </div>

              <div class="form-group">
                <label for="inputaddress">address</label>
                <textarea class="form-control" placeholder="your formal address" id="inputaddress"></textarea>
              </div>

              <div class="form-group">
                <label for="inputState">state</label>
                <select class="form-control"  name="state" id="inputState" onchange="">
                  <option value="">--SELECT VALUE--</option>
                  <option value=""></option>
       
                </select>
              </div>

              <div class="form-group">
                <label for="inputCity">city</label>
                <select class="form-control"  name="city" id="inputState" onchange="">
                  <option value="">--SELECT VALUE--</option>
                  <option value=""></option>
       
                </select>
              </div>

              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input class="form-control" placeholder="current email-id" type="email" id="inputEmail">
              </div>

              <div class="form-group">
                <label for="inputPassword">password</label>
                <input class="form-control" placeholder="Login Password" type="password" id="inputPassword">
              </div>
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary">Register</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
            </form>
          </div>
        </div>

      </div>

    </div>

<script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
        
   </body>
   </html>