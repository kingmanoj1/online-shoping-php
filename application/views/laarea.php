<! DOCTYPE html>
<html>
 <head>
   <title> Monitoring </title>
 </head>
 <body>
    <table align="Center" style="border: 2px solid purple; margin-top:5px; " cellpadding="5px" width="99%" >
	     <tr align="center" style="background-color:purple; color:white; height:10px; "><td colspan="5"><font size="5px"> LALKUAN</font> </td></tr>
		 <tr style="background-color:white;"><td colspan="5"></tr>
		 
		 <tr style="background-color:#C4165E; color:white;" >
	 	 <th> Candidate Name </th>
		 <th> Mobile No. </th>
		<th>  Total Votes </th>
		<th> Male Votes </th>
		<th> Female Votes </th>
		</tr>
		<?php 
          foreach($record as $detail)
          {
        ?> 
          <tr>
            
               <td align="center"><?php echo $detail->c_name;?></td>
               <td align="center"><?php echo $detail->mobile;?></td>
               <td align="center"><?php echo $detail->votes;?></td>
               <td align="center">100</td>
               <td align="center">100</td>
               
                          
       
       <?php 
         }
         ?>
           
      

		
		</table>
  
		
  </body>
 </html>
