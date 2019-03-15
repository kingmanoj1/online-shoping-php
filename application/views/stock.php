<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/functions.js"></script>
 
  
  
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Shopping</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mstyle.css')?>">

 
 
  <script language="javascript">
  </script>
</head>
<body class="twoColFixLtHdr">

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
                      
                    </div>
                  </div>
            </nav>
    </div>       
	
	<form method="" post="">

	 <div class="bs-component">
              <table class="table table-hover">
                <thead>
				<hr />
				<div bgcolor="blue">
                  <tr>
                    <th scope="col">product name</th>
                    <th scope="col">product size</th>
                    <th scope="col">Discription.</th>
                  <th scope="col">discount</th>
					         <th scope="col">product cost</th>
                    <th scope="col">product company</th>
                    <th scope="col">Total</th>
                    <th scope="col">Edit</th>
                  </tr>
                  <?php foreach($data as $v) { ?>
                  <tr>
                    <td><?php echo $v->p_name;?></td>
                    <td><?php echo $v->p_size;?></td>
                    <td><?php echo $v->p_discription;?></td>

                    <td><?php echo $v->discount;?></td>
                    <td><?php echo $v->p_cost;?></td>
                    <td><?php echo $v->p_company;?></td>
                     <td><?php echo $v->p_stock;?></td>
                    


                    <td><input type="button" id="cmdAdd" style="float: left" class="btn btn-primary" value="Edit">
                        <input type="button" id="cmdAdd" style="float: left" class="btn btn-danger" value="Delete"></td>


                    <?php } ?>
				  </div>
                </thead>
				</table>
				</div>
				</form>
				
				
				
				
				 <div class="modal fade " data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
      <div class="modal-dialog modal-sm dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">login</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <label for="inputUserName">Username</label>
                <input class="form-control" placeholder="Login Email" type="email" id="inputUserName">
              </div>

              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input class="form-control" placeholder="Login Password" type="password" id="inputPassword">
              </div>
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary">Login</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
            </form>
          </div>
        </div>

      </div>

    </div>
    
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>