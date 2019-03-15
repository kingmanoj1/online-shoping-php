<! DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php 
      echo form_open_multipart();
      echo form_upload('file');
      echo form_submit('upload','upload');
      echo form_close();
    ?>
  </body>

<?php foreach ($record as $detail)
    {
   	?>
    
    <div style="margin-left:50px; margin-top: 10px;">
    <font> Question-</font>	
       <label rows="1" cols="70" ><?php echo $detail->queries ?> </label>
   </div>
      <div style="margin-left:50px; margin-top: 10px;">
    <font >Answer-&nbsp&nbsp&nbsp</font>	
      <label rows="1" cols="70" style:><?php echo $detail->answer ?></label>
       </div>
       <?php } ?>