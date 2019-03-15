<!DOCTYPE html>
<html >
<head>
  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add admin</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <script type="text/javascript">
        function forAdd(){
            document.frm1.action = "<?php echo site_url('maincontroller/add');?>";
            document.frm1.submit();
        }
        function forQuit(){
            document.frm1.action = "<?php echo site_url('maincontroller/index');?>"; 
            document.frm1.submit();
        }
    </script>
  
</head>

<body  bgcolor="#fff">

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
                        <li><a href="<?php echo site_url('maincontroller/reorder'); ?>">reorder-level<span class="badge">56</span></a></li>
                        
                        
                        </ul>
                      
                    </div>
                  </div>
            </nav>
    </div>       
	
	<li><a href="<?php base_url('maincontroller/logout') ?>">logout</a></li>
    <div>
                      <a href="<?php echo base_url();?>maincontroller/logout"><h4>LogOut now</h4>
                      </a>
                    </div>

  <div class="login">
  <br/>
  <br/>
  <br/>
	<tr><font color="black"><h1>Add Admin</h1></tr>
  <form   <form action="<?php echo site_url('maincontroller/add');?>" method="post" name="frm1">
    	
		
<div class="form-row">
            <div>
                <label>
                    <span>Name</span>
                     
                   <?php echo form_input(array('type' =>'text', 'name'=>'username', 'class'=>'input', 'placeholder'=>'name','value'=>set_value('name'))); ?>
        
                </label>
            </div>>    

        <div class="col-lg-9">
          <?php echo form_error('username');?>
        </div>

        <div>
				 <label>
                    <span>Email</span>
                    <?php echo form_input(array('type' =>'text', 'name'=>'email', 'class'=>'input', 'placeholder'=>'E-mail')); ?>
         </label>
         
</div>
        <div class="col-lg-9">
          <?php echo form_error('email');?>
        </div>
				<div>
				 <label>
                    <span>Password</span>
                      <?php echo form_input(array('type' =>'password', 'name'=>'password', 'class'=>'input', 'placeholder'=>'Password','data-type'=>'password')); ?>
  </label>
  
</div>
        <div class="col-lg-9">
          <?php echo form_error('password');?>
        </div>
			
    
    <input type="button" id="cmdAdd" style="float: left" class="btn btn-primary" value="Add" onclick="forAdd();">
    <input type="button" id="cmdQuit" style="float: left" class="btn btn-danger" value="Quit" onclick="forQuit();">
		</form>
</div>
    
	
	
	
	
	
	
    


       <script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
