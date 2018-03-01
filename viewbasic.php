<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
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
Card No:
</td>
<td>
<select name="member_info" onChange="load_member_info(this)" style="height:25px; width:200px; font-size:16px">
<option style="font-size:16px">Choose card number</option>
<?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['card']."\" value=\"".$row['card']."\">".$row['card']."</option>";?></select>
</td>
</tr>
</table>
</form>
