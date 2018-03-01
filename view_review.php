<?php
if(isset($_POST['view']))
{
 $name=$_POST['obj'];
  $server="localhost";
 $uname="root";
 $pass="";
 $database="review40";
 $table_name="review_categories";
 $table_name1="user_review";
 $con=mysql_connect("$server","$uname","$pass");
 if(!$con)
 {
 die("server not connected".mysql_error());
 }
 mysql_select_db($database,$con);
 $sql="select * FROM $table_name WHERE name='$name'";
 $result=mysql_query($sql);
 while($row=mysql_fetch_array($result))
 {
 $hotel_name=$row['name'];
 $location=$row['location'];
 $city=$row['city'];
 $t_img=$row['title_image'];
 $web=$row['website'];
 $map=$row['map'];
 $details=$row['details'];
 $price=$row['price'];
 }
 $sqe="select * FROM $table_name1 WHERE review_item='$name'";
 $resul=mysql_query($sqe);
 while($row1=mysql_fetch_array($resul))
 {
 $title=$row1['review_title'];
 $review=$row1['review'];
 }
 }
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review40</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/search.css" />
<link rel="stylesheet" type="text/css" href="css/view_review.css" />
<link rel="stylesheet" type="text/css" href="css/register.css" />

<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
</head>

<body>
<div id="search_wrap">
 <div id="header">
   <div class="logo"></div>
     
      <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="#" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="review40_card.php" style="padding-left:20px;">Review40 card</a></li>
                        <li><a href="review.php" style="padding-left:20px;">Write a review</a></li>
                    </ul>
                            
                             <div class="register">
                                     
                               <table width="105" border="0">
                                       <tr>
                                         <td width="35"><img src="images/register.jpg" title="Register" /></td>
                                         <td width="35"><img src="images/sign_up.jpg" title="Log in" /></td>
                                         <td width="35"><img src="images/contact.jpg"  title="Contact"/></td>
                                       </tr>
                                     </table>
                    </div>
     
                </div>
                
                            <div id="black_border"></div>
  <div id="srch_1">
  <img src="images/plus-ad-en.jpg" />
  </div>
   <div id="srch_2"><img src="images/best-new-contest.jpg" /></div>
  <div id="srch_3"><img src="images/magazine-tile-399.jpg" /></div>
  <div id="srch_4"><img src="images/en-great-deals-small.jpg" /></div>
  <div id="srch_black_bottom_border"></div>
  <div id="view_title">
    <h2><?php echo $hotel_name; ?></h2>
  <p style="font-size:14px"><?php echo $location.",".$city; ?></p>
  <p style="font-size:14px"><?php echo $web ; ?></p>
  </div>
  <div id="view_main">
  <div id="view_main_part1">
  <?php echo "<img src=\"$t_img\" height=\"338px\" width=\"499px\" />"; ?>
  </div>
  <div id="view_main_part2">
  <span style="padding-left:40px;padding-top:5px">Review score</span>
  <span id="ratings" style="padding-left:20px; padding-top:5px;">
  <span>&#9733</span><span>&#9733</span><span>&#9733</span><span>&#9733</span><span>&#9733</span>
  </span><br />
  <span id="rank" style="padding-left:40px; padding-top:10px;">3#</span><br /><br />
  <span id="rank" style="padding-left:40px; padding-top:10px;">Starting at</span><br  />
  <span id="rank" style="padding-left:40px; padding-top:10px;">BDT <span style="color:#FF0000"><?php echo $price; ?></span></span>
  <form id="form1" name="form1" method="post" action="https://www.bookit.com">
    <label>
      <input type="submit" name="book" id="book" value="BOOK" style="background-color:#000000;color:#FFFFFF; font-family:'trajan Pro';height:39px; width:250px; margin-left:40px; margin-top:20px" />
      </label>
  </form>
  <div id="rank" style="margin-left:40px; margin-top:20px; height:150px; width:400px; border:1px solid #CCCCCC">
  <?php echo $map;?>
  
  </div>
       </div>
  </div>
 <div id="view_details">
    <div class="view_about">
        <div style="height:40px;width:500px">
        <table border="0">
        <tr>
        <td>
          <a href="https://www.facebook.com/pages/Review40/179248765553315?ref=ts&fref=ts"><img src="images/images.jpg"  /></a>
        <a href=""><img src="images/images2.jpg"/></a></td>
        <td>
        <form action="hotel_review.php" method="post" >
        <input type="hidden" name="search" value="<?php echo $hotel_name; ?>" />
        <input type="submit" name="srch1" id="write_review" value="Write a Review" style="margin-left:320px;height:24px;width:116px; background-color:#FF3300; color:#FFFFFF; font-family:'myriad Pro'; font-size:16px" /></form></td></tr></table>
        </div>
      <div style="height:30px;width:500px; color:#FF3300; font-size:24px">About us</div>
       <div></div>
     <?php echo $details; ?>
        
    </div>
  <div class="view_amenities"></div>
    
 
 </div>
 <div id="reviews">
<h1> User Reviews</h1>
 <table border="1" width="600" style="border-collapse:collapse;" >
 <tr>
 <td height="50" style="padding-left:10px; color:#FFFFFF; background-color:#FF6600">
 <?php
echo $title;
 ?>
 
 </td>
 </tr>
 <tr>
 <td height="300" valign="top" style="padding-left:10px; padding-top:10px; background-color:#FFFFCC">
 <?php
echo $review;
 ?>
 </td>
 </tr>
 </table>
 
 </div>
 <div id="register_black_bottom_border"></div>
 <div id="footer">
  <div id="foot1">
  <p style="font-family:Francois One,sans-serif;color:#000000;font-size:11px;font-weight:bold">HELP</p>
   <ul id="f1">
   <a href="#"><li>Customer</li></a>
   <a href="#"><li>Service</li></a>
   <a href="#"><li>Contact Us</li></a>
   <a href="#"><li>FAQS</li></a>
   <a href="#"><li>Site Map</li></a>
   <a href="#"><li>Privacy</li></a>
   </ul>
  </div>
  <div id="foot1">
  <p style="font-family:Francois One,sans-serif;color:#000000;font-size:11px;font-weight:bold">REVIEW40</p>
   <ul id="f1">
   <a href="#">
   <li>About us</li>
   </a>
   <a href="#">
   <li>careers</li>
   </a>
   <a href="#">
   <li>affiliates</li>
   </a>
   <a href="#">
   <li>Hotelier</li>
   </a>
   
   </ul>
  </div>
  <div id="foot2">
   <p style="font-family:Francois One,sans-serif;color:#000000;font-size:11px;font-weight:bold; margin-bottom:5px;">SIGN UP FOR OUR NEWSLETTER</p>
   <input name="email" id="email" type="text" value="Enter your Email"  size="35" style="height:19px;  border:1px solid #C2C2C2; color:#999999;" onfocus="if(this.value!='')this.value=''"  onBlur="if(this.value=='') this.value='Enter your Email'" />
   <p style="font-family:Francois One,sans-serif;color:#000000;font-size:16px;font-weight:bold; padding-top:5px; padding-bottom:5px;">Follow us on:</p>
    <a href="https://www.facebook.com/pages/Review40/179248765553315?ref=ts&fref=ts"><img src="images/images.jpg"  /></a>
    <a href=""><img src="images/images2.jpg"/></a>
    
  </div>
  <div id="foot_border"> <p style="font-family:'Open Sans'; font-size:11px; color:#000000; padding-top:5px; font-weight:bold">Copyright © Review40 is a trademark of Arcantron Inc. 2012-2013.All rights reserved. </p>
<p style="font-family:'Open Sans'; font-size:11px; color:#000000; padding-top:5px; font-weight:bold">TERMS OF USE EU-US SAFE HARBOR COMPLIANT 2012.</p>  
  </div>
  
  </div>

  
 
 
  
  </div>
  </body>
  </html>
