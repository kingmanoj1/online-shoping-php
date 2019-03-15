<?php echo $this->session->userdata('Cid');?>
<?php 
   if($this->session->flashdata('success_msg')){
 ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('success_msg');?>  
     </div>
 <?php 
    }  
  ?>
<?php 
   if($this->session->flashdata('error_msg')){
 ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('error_msg'); ?>  
     </div>
 <?php
   }   
  ?>
<form method="post" action="<?php echo site_url('maincontroller/updatepass');?>">
  <div class="outer">
      <div class="heading">
	      <font size="3"> CHANGE PASSWORD </font>
	   </div>
      <table align="center"  style="margin-top:40px;">
         <tr>
            <td> <font color="rgb(24, 51, 64);">Old Password : </font></td>
            <td>  <input type="text" name="oldpass"></td>
         </tr>
         <tr>
            <td  colspan="2" class="myspace"></td>
         </tr> 
         <tr>
            <td> <font color="rgb(24, 51, 64);"> New Password : </font></td>
            <td> <input type="text" name="newpass"></td>
             <tr>
            <td  colspan="2" class="myspace"></td>
         </tr> 
          </div>
         <tr>
            <td> <font color="rgb(24, 51, 64);">Confirm Password : </font></td>
            <td> <input type="text" name="confirmpass"></td>
         </tr>
          <tr>
            <td  colspan="2" class="myspace"></td>
         </tr> 
      </table>
      <div align="center" style="margin-top:20px;">
	     <input type="submit" name="Changepass" class="btn" value="Change password" style="color:white;">
      </div>  	  
     	  
  
   </div>
  </form> 