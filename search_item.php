 <div id="hotel_box">
 <div id="search_details_part">
<table width='345' border='0'>
    <tr>
      <td style="padding-left:15px; height:20px">
      <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
      </td>
    </tr>
    <tr>
      <td style="font-family:'myriad Pro'; font-size:16px; font-weight:700; padding-left:15px; height:30px"><?php echo $hotel_name ?></td>
    </tr>
    <tr>
      <td style="font-family:'Open Sans'; font-size:13px; font-weight:500; padding-left:15px; height:50px">
      <?php echo $location."<br />".$city; ?>
      </td>
    </tr>
    <tr> 
       <td style="padding-left:15px; height:40px">
      <p style="font-family:'Open Sans'; font-size:13px; font-weight:700;color:#666666">Starting at:</p>
      <p style="font-family:'Open Sans'; font-size:13px; font-weight:700;color:#FF3300">BDT <?php echo $price; ?></p>
      </td>
    </tr>
  </table>
  <form name="form1" action="view_review.php" method="post" enctype="multipart/form-data">
  <input type="submit" style="width:150px; height:26px; margin-left:15px; color:#FFFFFF; background-color:#FF3300; text-transform:uppercase; font-family:'Myriad Pro'; font-size:14px; font-weight:bold; margin-top:5px; text-transform:uppercase" value="see review" name="view" />
  <input type="hidden" id="obj" name="obj" value="<?php echo $hotel_name; ?>" />
  
  </form>
</div>
<div id="search_image_part">
  <table width="300" border="0">
    <tr>
      <td style="height:140px; padding-left:55px"><?php echo "<img src=\"$t_img\" height=\"136\" width=\"210\" />"; ?></td>
    </tr>
    <tr>
      <td style="height:60px">
      <div class="section">

           
            <ul>
                
                <li>
                    <a rel="lightbox-tour" href="<?php echo $s1; ?>"  title=" "><img src="<?php echo $s1; ?>" alt="" height="40" width="70" /></a></li>
				<li>
                    <a rel="lightbox-tour" href="<?php echo $s2; ?>" title=" "><img src="<?php echo $s2; ?>" alt="" height="40" width="70"/></a></li>
				<li>
                    <a rel="lightbox-tour" href="<?php echo $s3; ?>" title=" "><img src="<?php echo $s3; ?>" alt="" height="40" width="70" /></a></li>
				
               
               
            </ul>
            <div class="clear"></div>
        </div>
      
      
      </td>
    </tr>
  </table>
 </div>     
 </div>