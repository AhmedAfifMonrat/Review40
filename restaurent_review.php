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
<link rel="stylesheet" type="text/css" href="css/restaurent_review.css" />
<link rel="stylesheet" type="text/css" href="ratings/rating.css" />
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
 
</head>

<body>
<div id="reataurent_wrapper">
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
  <div id="srch_black_bottom_border"></div>
  <div id="restaurent_name">
  <div id="restaurent_pic"></div>
  <div id="restaurent_title">
  <h2>Name</h2>
  <p style="font-size:14px">Location</p>
  <p style="font-size:14px">Website</p>
  </div>
  
  </div>
  
  <div id="restaurent_review_form">
  <form>
  <p style="font-size:18px; padding-bottom:5px">Title of your review</p>
  <input type="text" id="title_review_restaurent" name="title_review_restaurent" style="height:30px; width:624px; border:1px solid #CCCCCC; margin-bottom:15px;" />
  <p style="font-size:18px; padding-bottom:5px">Your Review</p>
  <textarea name="restaurent_review" id="restaurent_review" cols="45" rows="5" style="height:146px; width:624px;margin-bottom:10px;"></textarea>
  <p style="font-size:18px; margin-bottom:20px">When did you travel? <input type="text" id="datepicker" name="date" style="height:26px; width:250px; background-color:#000000; color:#FFFFFF; font-family:'myriad Pro'">
      </p>
  <p style="font-size:18px; padding-bottom:10px">What sort of trip was this?</p>    
                      
  <label>
  <input type="button" name="button" id="button" value="Business" style="height:58px; width:99px" />
  </label>
  <label>
  <input type="button" name="button2" id="button2" value="Couples" style="height:58px; width:99px" />
  </label>
  <label>
  <input type="button" name="button3" id="button3" value="Family" style="height:58px; width:99px" />
  </label>
  <label>
  <input type="button" name="button4" id="button4" value="Friends" style="height:58px; width:99px"/>
  </label>
  <label>
  <input type="button" name="button5" id="button5" value="Solo" style="height:58px; width:99px" />
  </label>
  <p style="font-size:18px; padding-top:10px">Click to select a rating</p>
  <div id="rating_panel">
  <div class="part1">
    <table width="295" border="0">
      <tr>
        <td width="102">
        <ul class='star-rating' id="star-rating">
  <li><a href='#' title='Rate this 1 star out of 5' class='one-star' onclick='send(1)'>1</a></li>
  <li><a href='#' title='Rate this 2 stars out of 5' class='two-stars' onclick='send(2)'>2</a></li>
  <li><a href='#' title='Rate this 3 stars out of 5' class='three-stars' onclick='send(3)'>3</a></li>
  <li><a href='#' title='Rate this 4 stars out of 5' class='four-stars' onclick='send(4)'>4</a></li>
  <li><a href='#' title='Rate this 5 stars out of 5' class='five-stars' onclick='send(5)'>5</a></li>
       </ul>
        </td>
        <td width="177">Food</td>
      </tr>
      <tr>
        <td>
        <ul class='star-rating'>
  <li><a href='#' title='Rate this 1 star out of 5' class='one-star' onclick='send(1)'>1</a></li>
  <li><a href='#' title='Rate this 2 stars out of 5' class='two-stars' onclick='send(2)'>2</a></li>
  <li><a href='#' title='Rate this 3 stars out of 5' class='three-stars' onclick='send(3)'>3</a></li>
  <li><a href='#' title='Rate this 4 stars out of 5' class='four-stars' onclick='send(4)'>4</a></li>
  <li><a href='#' title='Rate this 5 stars out of 5' class='five-stars' onclick='send(5)'>5</a></li>
  </ul>
  </td>
        <td>Value</td>
      </tr>
    
    </table>
  </div>
  <div class="part2">
    <table width="297" border="0">
      <tr>
        <td width="102">
        <ul class='star-rating'>
  <li><a href='#' title='Rate this 1 star out of 5' class='one-star' onclick='send(1)'>1</a></li>
  <li><a href='#' title='Rate this 2 stars out of 5' class='two-stars' onclick='send(2)'>2</a></li>
  <li><a href='#' title='Rate this 3 stars out of 5' class='three-stars' onclick='send(3)'>3</a></li>
  <li><a href='#' title='Rate this 4 stars out of 5' class='four-stars' onclick='send(4)'>4</a></li>
  <li><a href='#' title='Rate this 5 stars out of 5' class='five-stars' onclick='send(5)'>5</a></li>
  </ul>
  </td>
        <td width="179">Service</td>
      </tr>
      <tr>
        <td>
        <ul class='star-rating'>
  <li><a href='#' title='Rate this 1 star out of 5' class='one-star' onclick='send(1)'>1</a></li>
  <li><a href='#' title='Rate this 2 stars out of 5' class='two-stars' onclick='send(2)'>2</a></li>
  <li><a href='#' title='Rate this 3 stars out of 5' class='three-stars' onclick='send(3)'>3</a></li>
  <li><a href='#' title='Rate this 4 stars out of 5' class='four-stars' onclick='send(4)'>4</a></li>
  <li><a href='#' title='Rate this 5 stars out of 5' class='five-stars' onclick='send(5)'>5</a></li>
  </ul>
  </td>
        <td>Atmosphere</td>
      </tr>
     
    </table>
  </div>
  </div>
  Submit your review
  <p style="font-size:14px; margin-left:10px">
  <input type="checkbox" name="agree" id="agree" />
  I certify that this review is based on my own experience and my genuine opinion of this restaurent and that I have no personal and business relationship with this </p>
  <p style="font-size:14px;margin-left:30px">establishment,and have not been offered any incentive or payment originating from the establishment to write this review.I understand that Review40 has a zero-tolerance policy on fake reviews.</p>
  <input type="submit" name="submit_review" id="submit_review" value="Submit Your Review" style="height:30px;width:250px; background-color:#FF3300; color:#FFFFFF; font-family:'trajan Pro'; margin-top:10px" />

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