<?php
function name()
{
 if (isset($_POST['check']))
{
$name=$_POST['card_no'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);


while($row=mysql_fetch_array($result))
{
$flag=1;
if($name==$row['card'])
{
$flag=0;
echo $row['member'];
break;
}
}
if($flag!=0)
{
echo "Not Found";
}

}
}

?>
<?php
function status()
{
 if (isset($_POST['check']))
{
$mun=$_POST['card_no'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);


while($row=mysql_fetch_array($result))
{
$flag=1;
if($mun==$row['card'])
{
$flag=0;
echo $row['status'];
break;
}
}
if($flag!=0)
{
echo "Invalid";
}

}
}
?>
<?php
function card()
{
 if (isset($_POST['check']))
{
$card=$_POST['card_no'];
echo $card;
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
<link rel="stylesheet" type="text/css" href="css/register.css" />
<link rel="stylesheet" type="text/css" href="css/review_card.css" />


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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="hotel.php" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="restaurent.php" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="review40_card.php" style="padding-left:20px;" class="active">Review40 card</a></li>
                        <li><a href="register.php" style="padding-left:20px;">Write a review</a></li>
                    </ul>
                            
                             <div class="register">
                                     
                               <table width="105" border="0">
                                       <tr>
                                         <td width="35"><a href="register.php"><img src="images/register.jpg" title="Register" /></a></td>
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
  <div id="review_card_status">
  <div class="card">Review40 Club Card
  <div class="review40_card"></div>
  </div>
  <div class="status">
    <form id="form1" name="form1" method="post" action="review40_card.php">
      <table width="389" border="0">
      <tr>
          <td height="40px" colspan="2">
       <span id="validate_card"></span>   
          </td>
          </tr>
        <tr>
          <td><label>Card Number</label></td>
          <td height="40px"><input type="text" name="card_no" id="card_no" style="height:26px; width:250px;border:1px solid #CCCCCC; padding-left:10px" value='<?php card(); ?>'/></td>
        </tr>
        <tr>
          <td><label>Card Status</label></td>
          <td height="40px"><input type="text" name="status" id="status" style="height:26px; width:250px;border:1px solid #CCCCCC;padding-left:10px; font-size:16px; font-family:'myriad Pro'" disabled="disabled" value='<?php status(); ?> '/></td>
        </tr>
        <tr>
          <td><label>Card Owner</label></td>
          <td height="40px"><input type="text" name="owner" id="owner" style="height:26px; width:250px; border:1px solid #CCCCCC;padding-left:10px;font-size:16px; font-family:'myriad Pro';" disabled="disabled" value='<?php name(); ?>' /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="40px">
            <input type="submit" name="check" id="check" value="Check Validation" style="height:39px; width:250px; color:#FFFFFF; background-color:#FF3300; font-family:'trajan Pro'; font-size:16px" onclick='send()'/>          </td>
        </tr>
      </table>
      </form>
  </div>
  <div id="review_add">
  
  </div>
  </div>
  <div id="Affiliated_members">
 <div style="height:40px; font-family:'myriad Pro'; color:#FF3300; font-weight:700; font-size:20px">
 Review40 Club Card Affiliated Members:
 </div>
 <!-----------affiliated members---------------->
 <?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 3;
$con=mysql_connect('localhost','root','');
if(!$con)
{
die('error'.mysql_error());
}
$table_name="affiliated_member";
$table_name2="affiliated_member_contact";
mysql_select_db('review40');
$sql="SELECT * FROM $table_name2 LIMIT $start_from, 3";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{

	$name=$row['name'];
	$contact=$row['contact_no'];
	$sql="SELECT *
FROM $table_name
WHERE name='$name'
ORDER BY name ASC
"; 
	$r=mysql_query($sql);
	echo "<p style='font-size:16px;font-weight:700'>".$name."</p>";
	
	
 echo "<table border='1' width='1000px' style='border-collapse:collapse;text-align:center;margin-top:5px'";
			echo "<tr>";
			echo "<th width='100px' style='background-color:#000000;color:#ffffff'>"."Address"."</th>";
			echo "<th width='100px' style='background-color:#000000;color:#ffffff'>"."Contact"."</th>";
			echo "<th width='100px' style='background-color:#000000;color:#ffffff'>"."Description"."</th>";
			echo "<th width='100px' style='background-color:#000000;color:#ffffff'>"."Discount"."</th>";
			echo "<th width='100px' style='background-color:#000000;color:#ffffff'>"."Condition"."</th>";
			echo "</tr>";

	while($row=mysql_fetch_array($r)){
 $city=$row['city'];
 echo $city;
echo "<tr>";
			echo "<td width='100px'>".$row['address']."</td>";
			echo "<td width='100px'>".$contact."</td>";
			echo "<td width='100px'>".$row['description']."</td>";
			echo "<td width='100px'>".$row['discount']."</td>";
			echo "<td width='100px'>".$row['con']."</td>";
			echo "</tr>";
			
}

echo "</table>";
echo "<br /> <br />";

}

?>
<?php
$sql = "SELECT COUNT(name) FROM affiliated_member";
$rs_result = mysql_query($sql,$con);
$row = mysql_fetch_array($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 3);
  
for ($i=1; $i<=$total_pages; $i++) {
            echo "<a href='review40_card.php?page=".$i."'>".$i."</a> ";
};
?>

 
 
 

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
