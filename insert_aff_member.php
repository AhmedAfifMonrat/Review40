<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member";
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['add'];
$desc=$_POST['desc'];
$dis=$_POST['dis'];
$condition=$_POST['con'];
$contact=$_POST['contact'];

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$see="INSERT INTO affiliated_member_contact VALUES('$name','$contact')";
mysql_query($see);

$sql="INSERT INTO $table_name VALUES('$name','$city','$address','$desc','$dis','$condition')";
if(mysql_query($sql))
echo "true";
else echo "false";

?>

