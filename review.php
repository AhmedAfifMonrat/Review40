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
<link rel="stylesheet" type="text/css" href="css/hotel_review.css" />
<link rel="stylesheet" type="text/css" href="ratings/rating.css" />
<link rel="stylesheet" type="text/css" href="css/review.css" />
<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
  <link rel="stylesheet" type="text/css" href="datepicker/lightbox.css" />
  <link rel="stylesheet" href="datepicker/demos.css" type="text/css" media="all">
<link rel="stylesheet" href="datepicker/jquery.ui.theme.css" type="text/css" media="all">
<link rel="stylesheet" href="datepicker/jquery.ui.all.css" type="text/css" media="all">
<link rel="stylesheet" href="datepicker/jquery.ui.button.css" type="text/css" media="all">
<script type="text/javascript" src="datepicker/jquery-1.6.js" ></script>
<script type="text/javascript" src="datepicker/cufon-yui.js"></script>
<script type="text/javascript" src="datepicker/cufon-replace.js"></script>  
<script type="text/javascript" src="datepicker/Forum_400.font.js"></script>
<script type="text/javascript" src="datepicker/atooltip.jquery.js"></script>
<script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
<script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script> 

  <script>
	$(function() {
		$( "#datepicker" ).datepicker({
			altField: "#alternate",
			altFormat: "DD, d MM, yy"
		});
	});
	</script>
    <script>
 function showHint(str)
{
var xmlhttp;
if(document.getElementById('radio1').checked==true)
var str2=document.getElementById('radio1').value;
else if(document.getElementById('radio2').checked==true)
var str2=document.getElementById('radio2').value;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  $("#txtHint").css("border","0px");
  
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethint.php?q="+str+"&y="+str2,true);
xmlhttp.send();
$("#txtHint").show();
$("#txtHint").css("border","1px");
$("#txtHint").css("border-color","#009900");
$("#txtHint").css("border-style","solid");
}
</script>
</head>

<body>
<div id="review_wrapper">
 <div id="header">
   <div class="logo"></div>
     
      <ul class="menu">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="#" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="#" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="#" style="padding-left:20px;">Review40 card</a></li>
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
  <div id="review_panel">
  <form id="hotel" style="padding-left:5px; padding-top:5px;" action="hotel_review.php" method="post" enctype="multipart/form-data">
  <input type="radio" id="radio1" name="check1" value="hotel" /><label style="padding-left:3px;font-size:21px;font-family:'myriad Pro'; font-weight:500">Hotels</label>

  <input type="radio" id="radio2" name="check1" value="restaurent" /><label style="padding-left:3px;font-size:21px;font-family:'myriad Pro';font-weight:500">Restaurants</label><br  />
   


  <input name="search" id="search" type="text" value="Find Hotel or Restaurant"  size="30" style="height:21px;  border:1px solid #C2C2C2; color:#999999; padding-left:5px; margin-top:5px; margin-left:15px" onfocus="if(this.value!='')this.value=''"  onBlur="if(this.value=='') this.value='Find Hotels & Restaurants'" onKeyUp="showHint(this.value)"  />
    <input type="submit" id="srch1" value="Search" style="height:25px; width:150px; cursor:pointer; margin-left:20px; margin-top:7px; background-color:#FF3300; color:#FFFFFF" name="srch1" />
    <div id="txtHint" onClick="a()" onmouseout="if(this.value!='')this.value=''"></div> 

  </form>

  

  
       </div>
  <div id="hrbf_black_bottom_border"></div>
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