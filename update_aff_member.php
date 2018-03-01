<?php 
session_start();
?>
<?php
if(isset($_SESSION['update_aff_mem']))
{
$update_name=$_SESSION['update_aff_mem'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member";
$table_name2="affiliated_member_contact";
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['add'];
$desc=$_POST['desc'];
$dis=$_POST['dis'];
$contact=$_POST['contact'];
$condition=$_POST['con'];

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$see="UPDATE $table_name2 SET name='$name',contact_no='$contact' WHERE name='$update_name'";
mysql_query($see);
$sql="UPDATE $table_name SET city='$city',address='$address',description='$desc',discount='$dis',con='$condition' WHERE name='$name'";
if(mysql_query($sql))
echo "true";
else echo "false";
}
?>