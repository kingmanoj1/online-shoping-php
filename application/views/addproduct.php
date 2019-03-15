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
              <div class="col-sm-2" >9639110419
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


<body>
			<div class="container">
				<div class="row"><br/>
					<div class="col-lg-1"></div>
					<div class="col=lg-6">
						<h1>PRODUCT DETAILS</h1>
					</div>
				</div>
				<div class="row" style="background-color: pink"><br/><br/><br/>
					<div class="col-lg-2"></div>
					<div class="col-lg-8"><br/>
						<form name="form2" action="#" method="post">
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Name
								</div>
								<div class="col-lg-4">
									<input type="text" name="proname" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Size
								</div>
								<div class="col-lg-4">
									<input type="text" name="prosize" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Recoder
								</div>
								<div class="col-lg-4">
									<input type="text" name="recode" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Description
								</div>
								<div class="col-lg-4">
									<input type="text" name="desciri" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Discount
								</div>
								<div class="col-lg-4">
									<input type="text" name="discount" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Maximum
								</div>
								<div class="col-lg-4">
									<input type="text" name="promax" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Cost
								</div>
								<div class="col-lg-4">
									<input type="text" name="procost" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Photo
								</div>
								<div class="col-lg-4">
									<input type="file" name="img" id="fileToUpload"><br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Company
								</div>
								<div class="col-lg-4">
									<input type="text" name="procomp" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									Product Stock
								</div>
								<div class="col-lg-4">
									<input type="text" name="prostock" class="form-control"><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-3">
									<input type ="submit" name="submit3" value="Add Details" class="btn btn-primary">
								</div>
								<!--<div class=col-lg-1></div>
								<div class="col-lg-2">
									<input type="submit" name="submit3" value="Registration Here" class="btn btn-Primary">
								</div>-->
							</div>
						</form>
					</div>
				</div>
			</div>
