<form action="<?php echo site_url('maincontroller/update');?>" method="post">
  <div class="outer">
      <div class="heading">
         <font size="3"> PROFILE </font>
      </div>
      <table align="center" border="0" style="margin-top:20px;" >
         <tr>
            <td> <font color="rgb(24, 51, 64);">Name : </font></td>
            <td>  <input type="text" name="cname" value="<?php echo $records->c_name; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
         <tr>
            <td> <font color="rgb(24, 51, 64);"> Address : </font></td>
            <td> <textarea name="address"><?php echo $records->c_address; ?></textarea></td>
         </tr> 
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
         <tr>
            <td> <font color="rgb(24, 51, 64);">City : </font></td>
            <td> <input type="text" name="city" value="<?php echo $records->city_name; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <tr>
            <td> <font color="rgb(24, 51, 64);">State : </font></td>
            <td> <input type="text" name="state" value="<?php echo $records->state_name; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <tr>
            <td> <font color="rgb(24, 51, 64);"> Email : </font></td>
            <td> <input type="text" name="email" value="<?php echo $records->c_email; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <!--<tr>
            <td> <font color="rgb(24, 51, 64);"> Password : </font></td>
            <td> <input type="password" name="pass"></td>
         </tr> -->
      </table>
      <div align="center" style="margin-top:10px;">
        <input type="submit" name="submit" class="btn" value="Update Details">
      </div>     
        
  
   </div>
    </form> 
  