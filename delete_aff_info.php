
<?php
$delete_basic_info=$_POST['name'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member_contact";
$con=mysql_connect("localhost","root","");
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="DELETE from $table_name WHERE name='$delete_basic_info'";
mysql_query($sql,$con);
echo "Delete Record Successfully";




?>