<form action="#" method="post">

  <div class="outer" style="border: 2px solid #C4165E; ">
      <div class="heading" style="border: 2px solid #C4165E; background: #C4165E; ">
         <font size="3"> PRODUCT&nbsp&nbsp&nbsp DETAILS </font>
      </div>
      <table align="center" border="0" style="margin-top:20px;" >
        
         
            <td rowspan ="8"><img src="http://localhost/ci/images/<?php echo $detail->p_image ?>" height="250px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td> <font color="#C4165E;">Product : </font></td>
            <td>  <input type="text" name="pname" value="<?php echo $detail->p_name; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
         
         <tr>
            <td> <font color="#C4165E;">Size : </font></td>
            <td> <input type="text" name="size" value="<?php echo $detail->p_size; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <tr>
            <td> <font color="#C4165E;">Price: </font></td>
            <td> <input type="text" name="price" value="<?php echo $detail->p_cost; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <tr>
            <td> <font color="#C4165E;"> Description: </font></td>
            <td> <input type="text" name="desc" value="<?php echo $detail->p_discription; ?>"></td>
         </tr>
       <tr>
         <td colspan="2" class="myspace"></td>
       </tr>
       <!--<tr>
            <td> <font color="rgb(24, 51, 64);"> Password : </font></td>
            <td> <input type="password" name="pass"></td>
         </tr> -->
      </table>
      
      <div align="center" style="margin-top: 10px;" >
         <a href="<?php echo site_url('maincontroller/cartdetails/' .$detail->p_id);?>" class="btn btn-info" style="background-color: red; color: white;"> Add To Cart </a>&nbsp&nbsp&nbsp&nbsp
         <a href="<?php echo site_url('maincontroller/new');?>" class="btn btn-info" style="background-color: red; color: white;"> Buy Now </a>
      </div>
        
  
   </div>
    </form> 
