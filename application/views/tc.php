<! DOCTYPE html>
<html>
 <head>
   <title> Monitoring </title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   
 </head>
 <body>
  <div style="margin-right:250px; margin-left:250px; margin-top:180px; border: 2px solid purple;">
   <h2 align="center" style="background-color: Purple; color: white; margin-top:0px;" > Total Candidates </h2>
   <table align="center" >
     <tr>
     	
	   <th style="background-color: #C4165E ; color:White";><font size="5px">&nbsp&nbsp&nbsp&nbsp&nbsp Male Candidates&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font> </th>
	   <th style="background-color: #C4165E ; color:White";><font size="5px"> &nbsp&nbsp&nbsp&nbspFemale Candidates &nbsp&nbsp&nbsp&nbsp</font></th>
     </tr>
      <?php
     
     foreach($detail as $data)
         {
         if($data->gender=='male')
         {
         ?>	


      <tr>
     	<td>
     	<table align="center">
     		<tr>
     			<td><?php echo $data->c_name; ?></td>

     		</tr>
     	</table>
     </td>
      
      <?php 
       }
        else
        {
        	?>
     <td>
     	<table align="center">
     		<tr>
     		 <td><?php echo $data->c_name; ?></td>

     		</tr>
     	</table>
     </td>
     </tr>
     <?php 
        }
       }
       ?>
   </table>


     
     
   <form>   
	  <marquee style="background-color: Purple; color: white; margin-top:15px;"> Check Area Wise Details Here...</marquee> <!-- to be changed -->
	  <div  align ="center" style="margin-top:40px;">
	  <!-- <label style="color: purple ";> Enter Area </label>
	   <input type="text" name="area"> -->
	   <a href="<?php echo site_url('mcontroller/gethdata'); ?>" style="color:black;"" class="btn btn-info" >HALDWANI</a>
	   <a href="<?php echo site_url('mcontroller/getkadata'); ?>"style="color:black;"" class="btn btn-info" >KATHGODAM</a>
	   <a href="<?php echo site_url('mcontroller/getkldata'); ?>"style="color:black;"" class="btn btn-info" >KALADHUNGI</a>
	   <a href="<?php echo site_url('mcontroller/getldata'); ?>"style="color:black;"" class="btn btn-info" >LALKUAN</a>
	   </div>
     </form> 
</div> 	 
 </body>
 </html>