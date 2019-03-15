<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
	<form  method="post" action="<?php echo site_url('cpcontroller/changepass');?>">
  <div align="center">
     <div style="margin-bottom:10px;">
	    <label for="userid">Email id</label>
	     <input type="text" name="cemail"> 
	 </div>
	 <div>
	    <label for="password">Password</label>
	     <input type="text" name="pass"> 
	 </div>
	 <div>
	   <input type="submit" value="log in" name="submit1">
  </div>	   
</body>
</html>