<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review40</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/search.css" />
<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
    <script type="text/javascript" src="js/register.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
</head>

<body>
<div id="search_wrap">
 <div id="header">
   <div class="logo"></div>
     
      <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="hotel.php" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="restaurent.php" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="review40_card.php" style="padding-left:20px;">Review40 card</a></li>
                        <li><a href="register.php" style="padding-left:20px;">Write a review</a></li>
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
  <div id="search_part">
 <p style="padding-left:30px; color:#FF3300; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:700 ">Refine search</p>
 <div id="refine_search1">
 <p style="padding-left:20px; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px;font-weight:700 ">Price Per Night</p>
 <form style="padding-left:5px; padding-top:0px; font-family:'Open Sans';">
   <table width="138" border="0" style="font-size:13px">
     <tr>
       <td width="18"><input type="checkbox" name="p1" id="p1" /></td>
       <td width="110"><label>
 All</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p2" id="p2" /></td>
       <td><label>
 0-3000 BDT</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p3" id="p3" /></td>
       <td><label>
 4000-6000 BDT</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td>7000-10,000 BDT</td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><label>
 10,000+</label></td>
     </tr>
   </table>
 </form>
 </div>
 <div id="refine_search2">
 <p style="padding-left:20px; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:700 ">Traveler Rating</p>
 <form style="padding-left:5px; padding-top:0px;">
   <table width="138" border="0" style="font-size:14px">
     <tr>
       <td width="18"><input type="checkbox" name="p1" id="p1" /></td>
       <td width="110">
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       
       </td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p2" id="p2" /></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p3" id="p3" /></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
   </table>
 </form>
 </div>
 <div id="refine_search3">
 <p style="padding-left:20px; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px;font-weight:700 ">Hotel Class</p>
 <form style="padding-left:5px; padding-top:0px;">
   <table width="138" border="0" style="font-size:14px">
     <tr>
       <td width="18"><input type="checkbox" name="p1" id="p1" /></td>
       <td width="110"><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p2" id="p2" /></td>
       <td><label><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p3" id="p3" /></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#C3C3C3; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       <span style="color:#FF3300; font-weight:bolder; font-size:14px"> &#9733 </span>
       </td>
     </tr>
   </table>
 </form>
 </div>
 <div id="refine_search4">
 <p style="padding-left:20px; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px;font-weight:700 ">Amenities</p>
 <form style="padding-left:5px; padding-top:0px; font-family:'Open Sans'">
   <table width="168" border="0" style="font-size:13px">
     <tr>
       <td width="18"><input type="checkbox" name="p1" id="p1" /></td>
       <td width="140"><label>
 All</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p2" id="p2" /></td>
       <td><label>
 Bar/Lounge</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p3" id="p3" /></td>
       <td><label>
 Bussiness Center</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td>Fitness Center</td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><label>
 Free Breakfast</label></td>
     </tr>
     <tr>
       <td width="18"><input type="checkbox" name="p1" id="p1" /></td>
       <td width="140"><label>
 High Speed Internet</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p2" id="p2" /></td>
       <td><label>
 Free Parking</label></td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p3" id="p3" /></td>
       <td><label>
 Kichenette</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td>Restaurent</td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><label>
 Room Service</label></td>
     </tr>
      <tr>
       <td><label>
         <input type="checkbox" name="p4" id="p4" />
       </label></td>
       <td>Suites</td>
     </tr>
     <tr>
       <td><input type="checkbox" name="p5" id="p5" /></td>
       <td><label>
 Swimming Pool</label></td>
     </tr>
   </table>
 </form>
 </div>
 

 </div>
 <div id="straight_line"></div>
 <div id="search_display">
  <div id="hotel_city">
 
  </div>

 
 <?php
 if(isset($_POST['srch']))
 {
 $name=$_POST['search'];
 if($name=="Find Hotel or Restaurant")
 {
 echo "<span style='padding:20px;font-family:myriad Pro;font-size:20px'>Not Found Anything.</span>";
 }
 else
 {
 $server="localhost";
 $uname="root";
 $pass="";
 $database="review40";
 $table_name="review_categories";
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
 $price=$row['price'];
 $t_img=$row['title_image'];
 $s1=$row['slider_1'];
 $s2=$row['slider_2'];
 $s3=$row['slider_3'];
  }
  include('search_item.php');
  }

 }
  ?>
  

  
 

<!--------------------end------------>
 
 

 </div>
 <div id="black_bottom_border"></div>
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
<script type="text/javascript">
		//<![CDATA[
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
        </script><script type="text/javascript">
		//<![CDATA[
        var pageTracker = _gat._getTracker("UA-4446117-1");
        pageTracker._initData();
        pageTracker._trackPageview();
        //]]>
        </script>
 </body>
 </html>
