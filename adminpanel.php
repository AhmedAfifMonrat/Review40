<?php
session_start();
$ses_id=session_id();
?>
<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="review_admin";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
else
{
mysql_select_db($database,$con);
$sql="SELECT current_session FROM $table_name";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$session=$row['current_session'];
}
}
if(isset($_SESSION['user']) and $_SESSION['user']!="loged in" or $ses_id!=$session)
{
echo "<script type='text/javascript'>window.location='admin.php';</script>";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>review40 admin</title>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css" />
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/hotel.js"></script>
<script type="text/javascript" src="js/aff_member.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
 <div id="sign"><a href="signout.php">sign out</a></div>
 <div id="header"><h3>Admin Panel</h3></div>
 <div id="main">
 <div id="content1">
  <div id="leftbar">
                               <p id="Categories">CATEGORIES</p>
                               <p id="solution1" onClick="hotel_info()">Hotel</p>
                               <ul id="solutions1">
                               <span onClick="add_hotel()"><li>Add Hotel</li></span>
                               <span onClick="view_hotel()"><li>View Hotel</li></span>
                               </ul>
                               <p id="solution2" onClick="restaurent_info()">Restaurent</p>
                               <ul id="solutions2">
                               <span onClick="add_restaurent()"><li>Add Restaurent</li></span>
                               <span onClick="view_restaurent()"><li>View Restaurent</li></span>
                               </ul>
                               <p id="solution3" onClick="bus_info()">Bus</p>
                               <ul id="solutions3">
                               <span onClick="add_bus()"><li>Add Bus</li></span>
                               <span onClick="view_bus()"><li>View Bus</li></span>
                               </ul>
                               <p id="solution4" onClick="flight_info()">Flight</p>
                               <ul id="solutions4">
                               <span onClick="add_flight()"><li>Add Flight</li></span>
                               <span onClick="view_flight()"><li>View Flight</li></span>
                               </ul>
                                 <p id="solution5" onClick="user_info()">User</p>
                               <ul id="solutions5">
                               <span onClick="add_suser()"><li>Subscribed User</li></span>
                               <span onClick="view_ruser()"><li>Registered User</li></span>
                              </ul>
                               <p id="solution" onClick="member_info()">Member</p>
                               <ul id="solutions">
                               <span onClick="add_member()"><li>Add Member</li></span>
                               <span onClick="view_member()"><li>View Member</li></span>
                               <span onClick="add_aff_member()"><li>Add Affiliated Member</li></span>
                              </ul>
                              
                              </div>
 </div>
 <div id="content2">
 <span id="display"><h3>Information will show here</h3></span>
 
 <div id="content3">
 <!----------------------------hotel info insertion----------------------------->
<?php
if(isset($_POST['send_hotel_info']))
{
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="review_categories";
$tab_name="review_panel";
$hotel=$_POST['h_name'];
$city=$_POST['city'];
$location=$_POST['location'];
$website=$_POST['web'];
$price=$_POST['price'];
$details=$_POST['details'];
$map=$_POST['hot_map'];
//Title Image Upload
if((($_FILES["title"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["title"]["type"]=="image/jpeg")
|| ($_FILES["title"]["type"]=="image/pjpeg"))
&& ($_FILES["title"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["title"]["error"]>0 || $_FILES["title"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["title"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["title"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["title"]["tmp_name"],"upload/".$_FILES["title"]["name"]);//move the file to the upload folder.
$hotel_title_image="upload/".$_FILES["title"]["name"];//set the image name.
}
}
}
else
{
$hotel_title_image=" ";
}
//Slider1 Image Upload
if((($_FILES["slider_image1"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image1"]["type"]=="image/jpeg")
|| ($_FILES["slider_image1"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image1"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image1"]["error"]>0 || $_FILES["slider_image1"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image1"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image1"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image1"]["tmp_name"],"upload/".$_FILES["slider_image1"]["name"]);//move the file to the upload folder.
$hotel_slider_image1="upload/".$_FILES["slider_image1"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image1=" ";
}
//Slider2 Image Upload
if((($_FILES["slider_image2"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image2"]["type"]=="image/jpeg")
|| ($_FILES["slider_image2"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image2"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image2"]["error"]>0 || $_FILES["slider_image2"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image2"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image2"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image2"]["tmp_name"],"upload/".$_FILES["slider_image2"]["name"]);//move the file to the upload folder.
$hotel_slider_image2="upload/".$_FILES["slider_image2"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image2=" ";
}
//Slider3 Image Upload
if((($_FILES["slider_image3"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image3"]["type"]=="image/jpeg")
|| ($_FILES["slider_image3"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image3"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image3"]["error"]>0 || $_FILES["slider_image3"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image3"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image3"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image3"]["tmp_name"],"upload/".$_FILES["slider_image3"]["name"]);//move the file to the upload folder.
$hotel_slider_image3="upload/".$_FILES["slider_image3"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image3=" ";
}
echo "<script type='text/javascript'>
	document.getElementById('display').innerHTML='';
	document.getElementById('show').innerHTML='';
	
	</script>
";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="insert into $table_name(name,city,location,website,price,details,map,title_image,slider_1,slider_2,slider_3) VALUES('$hotel','$city','$location','$website','$price','$details','$map','$hotel_title_image','$hotel_slider_image1','$hotel_slider_image2','$hotel_slider_image3')";
if(mysql_query($sql))
{
echo "<script type='text/javascript'>
	document.getElementById('content3').innerHTML='Record Added Successfully';	
	</script>
";
$sqe="insert into $tab_name VALUES('$hotel','hotel')";
mysql_query($sqe);
}
else
{
echo "<script type='text/javascript'>
	document.getElementById('content3').innerHTML='Record Doesn't Added Successfully';	
	</script>
";
}

}

//Restaurent Info Insertion

if(isset($_POST['send_restaurent_info']))
{
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="review_categories";
$tab_name="review_panel";
$restaurent=$_POST['r_name'];
$city=$_POST['city'];
$location=$_POST['location'];
$website=$_POST['web'];
$price=$_POST['price'];
$details=$_POST['details'];
$map=$_POST['hot_map'];
//Title Image Upload
if((($_FILES["title"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["title"]["type"]=="image/jpeg")
|| ($_FILES["title"]["type"]=="image/pjpeg"))
&& ($_FILES["title"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["title"]["error"]>0 || $_FILES["title"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["title"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["title"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["title"]["tmp_name"],"upload/".$_FILES["title"]["name"]);//move the file to the upload folder.
$hotel_title_image="upload/".$_FILES["title"]["name"];//set the image name.
}
}
}
else
{
$hotel_title_image=" ";
}
//Slider1 Image Upload
if((($_FILES["slider_image1"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image1"]["type"]=="image/jpeg")
|| ($_FILES["slider_image1"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image1"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image1"]["error"]>0 || $_FILES["slider_image1"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image1"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image1"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image1"]["tmp_name"],"upload/".$_FILES["slider_image1"]["name"]);//move the file to the upload folder.
$hotel_slider_image1="upload/".$_FILES["slider_image1"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image1=" ";
}
//Slider2 Image Upload
if((($_FILES["slider_image2"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image2"]["type"]=="image/jpeg")
|| ($_FILES["slider_image2"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image2"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image2"]["error"]>0 || $_FILES["slider_image2"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image2"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image2"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image2"]["tmp_name"],"upload/".$_FILES["slider_image2"]["name"]);//move the file to the upload folder.
$hotel_slider_image2="upload/".$_FILES["slider_image2"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image2=" ";
}
//Slider3 Image Upload
if((($_FILES["slider_image3"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["slider_image3"]["type"]=="image/jpeg")
|| ($_FILES["slider_image3"]["type"]=="image/pjpeg"))
&& ($_FILES["slider_image3"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["slider_image3"]["error"]>0 || $_FILES["slider_image3"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["slider_image3"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["slider_image3"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["slider_image3"]["tmp_name"],"upload/".$_FILES["slider_image3"]["name"]);//move the file to the upload folder.
$hotel_slider_image3="upload/".$_FILES["slider_image3"]["name"];//set the image name.
}
}
}
else
{
$hotel_slider_image3=" ";
}
echo "<script type='text/javascript'>
	document.getElementById('display').innerHTML='';
	document.getElementById('show').innerHTML='';
	
	</script>
";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="insert into $table_name(name,city,location,website,price,details,map,title_image,slider_1,slider_2,slider_3) VALUES('$restaurent','$city','$location','$website','$price','$details','$map','$hotel_title_image','$hotel_slider_image1','$hotel_slider_image2','$hotel_slider_image3')";
if(mysql_query($sql))
{
echo "<script type='text/javascript'>
	document.getElementById('content3').innerHTML='Record Added Successfully';	
	</script>
";
$sqe="insert into $tab_name VALUES('$restaurent','restaurent')";
mysql_query($sqe);
}
else
{
echo "<script type='text/javascript'>
	document.getElementById('content3').innerHTML='Record Doesn't Added Successfully';	
	</script>
";
}

}



?>
 </div>
 <div id="show"></div>
 </div>
 </div>
</body>

</html>
