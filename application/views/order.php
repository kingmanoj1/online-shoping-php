<form>
  <div class="outer" style="height:460px;margin-top:10px;">
      <div class="heading">
	      <font size="3"> VIEW ORDER </font>
	   </div>	 
	  <table align="Center" style="border: 1px solid #C4165E; margin-top:5px;" cellpadding="5px" width="99%" >
	  <thead>
	    <tr style="color:white; background-color:#C4165E" ;>	
	    <th> Product Image </th>
		<th>  Product Name </th>
		<th> Address </th>
	    <th> Date </th>
		<th> Size</th>
		<th> Qty</th>
		<th> Price </th>
		<th> T_Price </th>
	    </tr>
	  </thead>  
		
	   <tbody>
		<?php 
          foreach($record as $detail)
          {
        ?> 
          <tr>
               <td> <img src= "http://localhost/ci/images/image5.jpg" style="height:100px; width:100px;"> </td>

               <td><?php echo $detail->p_name;?></td>
               <td><?php echo $detail->order_address;?></td>
               <td><?php echo $detail->date;?></td>
               <td><?php echo $detail->p_size;?></td>
               <td><?php echo $detail->qty;?></td>
               <td><?php echo $detail->p_cost;?></td>
               <td><?php echo $detail->amt;?></td>
           
       </tr>
       <?php 
         }
         ?>
   </tbody>
  </table>
 </div>
</form>