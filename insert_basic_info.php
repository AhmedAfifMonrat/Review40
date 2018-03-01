<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
$start=date("Y/m/d");
$next_year = mktime(0,0,0,date("m"),date("d"),date("Y")+1);
$end=date("Y/m/d", $next_year);
$status="valid";

$card=$_POST['card'];
$name=$_POST['member'];
$cadd=$_POST['cadd'];
$cnum=$_POST['cnum'];
$email=$_POST['email'];

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$card','$name','$cadd','$cnum','$email','$start','$end','$status')";
if(mysql_query($sql))
echo "true";
else echo "false";

?>
