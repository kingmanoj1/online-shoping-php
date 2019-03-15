<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Front Page!</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/s1.css')?>">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">

  </head>
  <body>
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
              <div class="col-sm-2 control">
                <h3 class="m1"><a role="button" href="<?php echo site_url('maincontroller/myaccount'); ?>" style="text-decoration: none;">welcome Lavita Pandey</a>
                 </h3>
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
                        <li><a href="<?php echo site_url('maincontroller/index');?>" style="color:white;">Home</a></li>
                        <li ><a href="<?php echo site_url('maincontroller/myaccount');?>" style="color:white;">My Account</a></li>
                             
                         <li><a href="<?php echo site_url('maincontroller/orders');?>" style="color:white;">My Order</a></li>
               <li><a href="<?php echo site_url('maincontroller/changepass');?>" 
                style="color:white;">Change Password</a></li>
                <li><a href="<?php echo site_url('maincontroller/getfunc');?>" style="color:white;">Feedback</a></li>
                
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Ladies wear</a></li>
                            <li><a href="#">Mens Wear</a></li>
                            <li><a href="#">Kids wear</a></li>
                            <li><a href="#">Foot wear</a></li>
                          </ul>
                        </li> 
                        </ul>
                      
                    </div>
                  </div>
            </nav>
    </div>       
