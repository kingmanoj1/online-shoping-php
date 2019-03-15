<form action="<?php echo site_url('maincontroller/insertdata');?>" method="post">
<div style="border: 1px solid #C4165E; margin-left: 300px;margin-right: 300px;">	
<h3 align="center" style="border-radius:2px;   margin-top: 0px; background-color: rgb(24, 51, 64); border: 2px solid #C4165E; color: white;"> FEEDBACK </h3>
     <marquee style="background-color: #C4165E; color:white; ">Previously Asked Questions..</marquee>
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
   <marquee style="background-color: #C4165E; color:white;">Ask Your Questions Here..</marquee>
    
    <div class="row" style="margin-left:50px; margin-top: 10px;">
    <font> Question-</font>	
       <textarea rows="2" cols="70"  name="ques"> </textarea>
       <input type="submit" name="submit" value="send" style="margin-bottom:5px">
   </div>
     <!-- <div style="margin-left:50px; margin-top: 10px;">
    <font >Reply-&nbsp&nbsp&nbsp&nbsp&nbsp</font>	
      <textarea rows="2" cols="70" style:> </textarea>
       </div> -->
   
    
    

</div>
</form>