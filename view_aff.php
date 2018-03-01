<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member_contact";

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);
?>
<form>
<table border="0">
<tr>
<td>
Affiliated Member:
</td>
<td>
<select name="member_info" onChange="load_member_aff(this)" style="height:25px; width:200px; font-size:16px">
<option style="font-size:16px">Choose Anyone</option>
<?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['name']."\" value=\"".$row['name']."\">".$row['name']."</option>";?></select>
</td>
</tr>
</table>
</form>
