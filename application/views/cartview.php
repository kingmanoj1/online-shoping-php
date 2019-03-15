<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/s1.css')?>">
 </head>
  
  <body>

 <!-- <div class="outer" style="height:500px;">-->
      <div class="heading" style=" margin-top:10px; width:100%;">
	      <font size="3"> MY SHOPPING CART </font>
	   </div>
	    
	    <table align="Center" style="border: 1px solid #C4165E; margin-top:5px;" cellpadding="5px" width="99%" >
      
	    <tr style="color:white; background-color:#C4165E";>
	    <th> Product Image </th>
		<th> Product Name </th>
		<th> Size</th>
		<th> Price </th>
		<th> Quantity </th>
	    <th> Total Price </th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

		
	   <tbody>
		<?php 
          foreach($detail as $data)
          {
        ?> 
          <tr>
            <td> <img src= "http://localhost/ci/images/<?php echo $data->p_image ?>" style="height:100px; width:100px;"> </td>
               <td><?php echo $data->p_name;?></td>
               <td><?php echo $data->p_size;?></td>
               <td><?php echo $data->p_cost;?></td>
               <script language="JavaScript">
          function func()
           {
            var x= parseInt(document.getElementById("amt").value);
            document.getElementById('price').innerHTML=x*"<?php echo $data->p_cost;?>";
            }
  </script>
     
               <td >&nbsp&nbsp<input type="number" id="amt" style="width:50px;"></td>
               <td><p><span id='price'></span></p></td>
               <td> <input type="submit" class="btn btn-info" onclick="func()"></td>
               <td><a href ="<?php echo site_url('maincontroller/delete/'.$data->p_id);?>"class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a></td>
           
       </tr>
       
     
       <?php 
         }
         ?>
   </tbody>
  </table>
		
	  <div align="center" style="margin-top:5px";>
      <a href ="<?php echo site_url('maincontroller/index');?>"class="btn btn-info";">Continue Shopping</a>
	   <a href ="<?php echo site_url('maincontroller/new');?>"class="btn btn-info";">Check Out</a>
     
      </div> 
  
 </body>
 </html>