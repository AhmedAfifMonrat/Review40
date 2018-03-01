<?php 
session_start();
?>
<?php
if(isset($_SESSION['update_basic_info']))
{
$update_basic_info=$_SESSION['update_basic_info'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
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
$ssql="SELECT * FROM $table_name WHERE card=$card";
$result=mysql_query($ssql);
while($row=mysql_fetch_array($result))
{
$start=$row['activation_date'];
$end=$row['expire_date'];
}
$sql="UPDATE $table_name SET card='$card',member='$name',mem_address='$cadd',mem_contact='$cnum',mem_email='$email',activation_date='$start',expire_date='$end',
status='$status' WHERE card='$card'";
if(mysql_query($sql))
echo "true";
else echo "false";

}

?>