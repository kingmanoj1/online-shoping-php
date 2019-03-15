<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Front Page!</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
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
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="">Category<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('maincontroller/getlwear');?>">Ladies wear</a></li>
                            <li><a href="<?php echo site_url('maincontroller/getgwear');?>">Mens Wear</a></li>
                            <li><a href="<?php echo site_url('maincontroller/getkwear');?>">Kids wear</a></li>
                            <li><a href="<?php echo site_url('maincontroller/getswear');?>">Foot wear</a></li>
                          </ul>
                        </li>
                          </ul>
                        </li>
                            
                          </ul>
                        </li>


                                              </ul>
                      <ul class="nav navbar-nav navbar-right">
                         <li><a href="<?php echo site_url('maincontroller/acart');?>"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge">56</span></a></li>
                        <li><a href="#" data-target="#registrationModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#" data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      </ul>
                    </div>
                  </div>
            </nav>
    </div>
       <div class="container-fluid">
          <div class="row " id="gallery">
            <div class="col-xs-12">
              <?php 
                foreach($detail as $data)
                {
                  if($data->discount==0)
                  {
                    ?>
              <div class="col-xs-6 col-sm-3 boad">
               <a href="<?php echo site_url('maincontroller/productdetail/'.$data->p_id); ?>" class="thumbnail">
                <p><?php echo $data->p_name ?></p>
                <img src= "http://localhost/ci/images/<?php echo $data->p_image ?>" class="img-thumbnail img-responsive imager" alt="no pics uploaded"/>
                <p><b>size:</b><?php echo $data->p_size ?><span></p>
                <p><b>cost:</b><span><?php echo $data->p_cost ?></span></p>
                
                 </a>
              </div>
              <?php 
                }
           else{   
               ?>            
            <div class="col-xs-6 col-sm-3 boad">
               <a href="<?php echo site_url('maincontroller/productdetail/'.$data->p_id); ?>" class="thumbnail">
                <p><?php echo $data->p_name ?></p>
                <img src= "http://localhost/ci/images/<?php echo $data->p_image ?>" class="img-thumbnail img-responsive imager" alt="no pics uploaded"/>
                <p><b>size:</b> <?php echo $data->p_size ?> </p>
                <p><b>cost:</b><span style="text-decoration: line-through;"><?php echo $data->a_cost ?></span>-> <?php echo $data->p_cost ?><span> &nbsp &nbsp<b>discount:</b><?php echo $data->discount ?>%</p>

                                </button>
                </a>
                
                 
              </div>
              <?php }
                }
                ?>
              

            </div>
          </div>
        </div>
    <div class="modal fade " data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
      <div class="modal-dialog modal-sm dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">login</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo site_url('maincontroller/login_validation');?>">
              <div class="form-group">
                <label for="inputUserName">Username</label>
                <input class="form-control" placeholder="Login Email" name="cemail" type="email" id="inputUserName">
              </div>

              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input class="form-control" placeholder="Login Password" name="pass" type="password" id="inputPassword">
              </div>
            
          
              <div class="modal-footer">
                <button class="btn btn-primary">Login</button>
                <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
    
   <div class="modal fade" data-keyboard="false" data-backdrop="static" id="registrationModal" tabindex="-1">
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
            
          
              <div class="modal-footer">
                <button class="btn btn-primary">Register</button>
                <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
                </form>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>


    <div class="container-fluid footer">
      <div class="row ad">
          <div class="col-xs-6 text-center">
            Designed by: 
          <div class="col-xs-6 text-center">
            mobile:+91-
          </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>