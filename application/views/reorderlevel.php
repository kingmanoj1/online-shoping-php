<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style2.css')?>">
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


	<form action="reorder_level.php" method="post">

	 <div class="2div">
	  <th align="center"><font size="10"><font color="green"><center>REORDER LEVEL</center></font></font></th>
	 </div>
	 
	   
			<div style="font-size: 25px; color:green; text-transform: capitalize;">
				search<input type="text" name="searchq" placeholder="value for the search">
				<input type="submit" name="search" value="filter"><br><br>
	   		</div>

	 
			
		   
		   <table border="1" width="100%" height="50px" class="tabl">
	 
				<tr>
			
					<th> RE.NO</th>
					<th> PRODUCT NAME</th>
					<th> PRODUCT PRICE </th>
					<th> PRODUCT STOCK</th>
					<th> CATEGORY</th>
					<th> PRODUCT COST</th>
					<th> REORDER</th>
					
				</tr>
		
						
				
		   		<tr>
		   			<td>r_1</td>
		   			<td>shirt</td>
		   			<td>400</td>
		   			<td>40</td>
		   			<td>Mens</td>
		   			<td>400</td>
		   			<td>10</td>
					
				</tr>
        <tr>
            <td>r_1</td>
            <td>shirt</td>
            <td>400</td>
            <td>40</td>
            <td>Mens</td>
            <td>400</td>
            <td>10</td>
          
        </tr>
        <tr>
            <td>r_1</td>
            <td>shirt</td>
            <td>400</td>
            <td>40</td>
            <td>Mens</td>
            <td>400</td>
            <td>10</td>
          
        </tr>
        <tr>
            <td>r_1</td>
            <td>shirt</td>
            <td>400</td>
            <td>40</td>
            <td>Mens</td>
            <td>400</td>
            <td>10</td>
          
        </tr>

			</table>
	</form>
		

		<script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

</body>
</html>
			
