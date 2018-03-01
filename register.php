<?php
if (isset($_POST['registration']))
{
$email=strip_tags($_POST['email']);
$fname=strip_tags($_POST['fname']);
$lname=strip_tags($_POST['lname']);
$dname=strip_tags($_POST['dname']);
$password=strip_tags($_POST['pass']);
$city=strip_tags($_POST['city']);
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
if((($_FILES["file"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["file"]["type"]=="image/jpeg")
|| ($_FILES["file"]["type"]=="image/pjpeg"))
&& ($_FILES["file"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["file"]["error"]>0 || $_FILES["file"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["file"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["file"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);//move the file to the upload folder.
$image_name="upload/".$_FILES["file"]["name"];//set the image name.
}
}
}
$name=$_FILES["file"]["name"];
$url="upload/".$name;
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="subscribed_member";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="insert into $table_name VALUES('$email','$fname','$lname','$password','$dname','$city','$name','$url')";
mysql_query($sql);
$to = $email;
$subject = "Subscription Confirmation";
$message = "This message serves as confirmation that you are now successfully registered in our support center.";
$from = "service@review40.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo '<script type="text/javascript">alert("Your registration is completed.");
window.location="index.php";
 </script>';
}
else
echo '<script type="text/javascript">alert("invalid email"); </script>';
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review40</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/search.css" />
<link rel="stylesheet" type="text/css" href="css/register.css" />
<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
 
</head>

<body>
<div id="register_wrap">
 <div id="header">
   <div class="logo"></div>
     
      <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="#" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="review40_card.php" style="padding-left:20px;">Review40 card</a></li>
                        <li><a href="#" style="padding-left:20px;">Write a review</a></li>
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
   <div id="register_details">
        <div id="sign_up_details">
          <div class="sign_up_note">Not registered?Sign up for FREE</div>
               <div class="sign_up_info">
                 <form action="register.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                   <table width="431" border="0" style="margin-left:200px">
                     <tr>
                       <td height="50"><label style="float:right">E-mail address
                         
                       </label></td>
            <td><input type="text" name="email" id="email" style="height:26px;width:250px; margin-left:5px; border:1px groove #CCCCCC" required="required" /></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr style="margin-top:15px;">
                       <td height="50"><label style="float:right">First name</label></td>
             <td><input type="text" name="fname" id="fname" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC" required="required" /></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr>
                       <td height="50"><label style="float:right">Last name</label></td>
             <td><input type="text" name="lname" id="lname" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC" required="required" /></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr>
                      <tr>
                       <td height="50"><label style="float:right">Password</label></td>
             <td><input type="password" name="pass" id="pass" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC"  required="required"/></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr>
                       <td height="50"><label>Your name display as</label></td>
             <td><input type="text" name="dname" id="dname" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC" required="required" /></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr>
                       <td height="50"><label style="float:right">Current city</label></td>
             <td><input type="text" name="city" id="city" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC" required="required" /></td>
                       <td><span style="color:#FF0000;">&#9733</span></td>
                     </tr>
                     <tr>
                       <td><label style="float:right">Upload Image</label></td>
                       <td><label>
                         <input type="file" name="file" id="file" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC;" class="btn_dsgn" required="required" />
                       </label></td>
                     </tr>
                   </table>
                   <input type="submit" id="registration" name="registration" style="width:250px; height:39px; margin-left:367px; color:#FFFFFF; background-color:#FF3300; text-transform:uppercase; font-family:'myriad Pro'; font-size:14px; font-weight:bold; margin-top:50px; cursor:pointer" value="SIGN UP" onClick="registration()" />
                 </form>
    <p style="font-size:11px; padding-left:130px; padding-top:60px; font-weight:700">WE're commited to protecting your privacy and will not rent or sell your e-mail address. By proceeding,</p>
    <p style="font-size:11px; padding-left:130px; font-weight:700">you agree to our Privacy Policy and Terms of Use.
               </div>
        
        
        </div>
   
   <div id="register_adds_1"></div>
   <div id="register_adds_2"></div>
   
   
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
   <input name="email" id="email" type="text" value="Enter your Email"  size="35" style="height:19px;  border:1px solid #C2C2C2; color:#999999;" onFocus="if(this.value!='')this.value=''"  onBlur="if(this.value=='') this.value='Enter your Email'" />
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
