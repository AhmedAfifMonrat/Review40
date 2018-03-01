<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review40</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/slider1.css" />

<script type="text/javascript">
function try1()
{
document.getElementById("btn1").checked=true;
}
function try2()
{
document.getElementById("btn1").checked=false;
}
function show()
{
$("#srch").show();
}

</script>



<script>
function showHint(str)
{
var xmlhttp;
if(document.getElementById("btn1").checked==true)
{
var str2="hotel";
}
else if(document.getElementById("btn2").checked==true)
{
var str2="restaurent";
}
else
var str2=" ";


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
$("#srch").hide();
$("#txtHint").show();
$("#txtHint").css("border","1px");
$("#txtHint").css("border-color","#009900");
$("#txtHint").css("border-style","solid");
}
</script>


 <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>     
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
    <script src="js/jcarousellite_1.0.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript">
		$(document).ready(function() { 
			$('.carousel .jCarouselLite').jCarouselLite({ 
				btnNext: '.carousel .next',
				btnPrev: '.carousel .prev',
				speed: 600,
				easing: 'easeOutQuart',
				vertical: false,
				circular: false,
				visible: 4,
				start: 0,
				scroll: 1
			}); 
		}); 
	</script>
</head>

<body>
<div id="wrapper">
 <div id="header">
   <div class="logo"></div>
     
      <ul class="menu">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="hotel.php" style="padding-left:20px;">Hotels</a></li>
                        <li><a href="restaurent.php" style="padding-left:20px;">Restaurents</a></li>
                        <li><a href="#" style="padding-left:20px;">Flights</a></li>
                        <li><a href="#" style="padding-left:20px;">Buses</a></li>
                        <li><a href="review40_card.php" style="padding-left:20px;">Review40 card</a></li>
                        <li><a href="review.php" style="padding-left:20px;">Write a review</a></li>
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
      <div id="search_box">
        <div class="search_text">
        know where you're going?
        </div>
       <div class="search_btn">
       <form id="form" action="search_hotel.php" method="post" enctype="multipart/form-data"> 
       <input type="button" style="width:250px; height:26px; margin-left:20px; color:#FFFFFF; background-color:#FF3300; text-transform:uppercase; font-family:'Myriad Pro'; font-size:14px; font-weight:bold; margin-bottom:10px; text-transform:uppercase" value="hotel" onclick="try1();show1()" id="btn1" name="btn1" /><br />
          <input type="button" style="width:250px; height:26px; margin-left:20px; color:#FFFFFF; background-color:#FF3300; text-transform:uppercase; font-family:'Myriad Pro'; font-size:14px; font-weight:bold; margin-bottom:10px;text-transform:uppercase" value="restaurent" onclick="try2();show2()" id="btn2" name="btn2" /><br />
          <input name="search" id="search" type="text" value="Find Hotel or Restaurant" style="height:26px; width:240px;  border:1px solid #333333; color:#333333; margin-left:20px; font-weight:bold; font-size:15px; font-family:'Myriad Pro'; padding-left:10px"    onKeyUp="showHint(this.value)"  onfocus="if(this.value!='')this.value='';check_null()"  onBlur="if(this.value=='') this.value='Find Hotels & Restaurants';show()"  />
          <div id="txtHint" onClick="a()" onmouseout="if(this.value!='')this.value=''"></div>
          <br />
        <input type="submit" style="width:250px; height:39px; margin-left:20px; color:#FFFFFF; background-color:#000000; text-transform:uppercase; font-family:'Myriad Pro'; font-size:14px; font-weight:bold; margin-top:120px; cursor:pointer" value="SEARCH" id="srch" name="srch"/></form><br />  
       </div>
      
      
      </div>
  <div id="slide_show">
    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                              <li>
                              <img src="images/slide1.jpg" alt=""> </li>
                                <li>   
                                    <img src="images/slide2.jpg" alt="" /></li>
                               
                            </ul>
                        </div>
	</div>
      
      <!----slider ends------>             
  </div>          
  <div id="black_border_bottom"></div>
  <div id="Add_1">
  <img src="images/plus-ad-en.jpg" />
  </div>
  <div id="Add_2"><img src="images/best-new-contest.jpg" /></div>
  <div id="Add_3"><img src="images/magazine-tile-399.jpg" /></div>
  <div id="Add_4"><img src="images/en-great-deals-small.jpg" /></div>
  <div id="Add_5"><img src="images/best-new-contest.jpg" /></div>
  <div id="Add_6"><img src="images/magazine-tile-399.jpg" /></div>
  <div id="Add_7"><img src="images/en-great-deals-small.jpg" /></div>
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
 
   <script type="text/javascript"> Cufon.now(); </script>
  <script type="text/javascript">
		$(window).load(function(){
			$('.slider')._TMS({
				duration:800,
				easing:'easeOutQuad',
				preset:'diagonalExpand',
				slideshow:5000
			})
		})
	</script>
    
</div>
</body>
</html>
