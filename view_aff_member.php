
<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member";
$table_name2="affiliated_member_contact";

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT $table_name.name,$table_name.city,$table_name.address,$table_name.description,$table_name.discount,$table_name.con,$table_name2.contact_no
FROM $table_name
INNER JOIN $table_name2
ON $table_name.name=$table_name2.name
";
$result=mysql_query($sql,$con);
   echo "<table border='1' width='1000px' style='border-collapse:collapse;text-align:center;'";
			echo "<tr>";
			echo "<th width='100px'>"."Name"."</th>";
			echo "<th width='100px'>"."City"."</th>";
			echo "<th width='100px'>"."Address"."</th>";
			echo "<th width='100px'>"."Contact"."</th>";
			echo "<th width='100px'>"."Description"."</th>";
			echo "<th width='100px'>"."Discount"."</th>";
			echo "<th width='100px'>"."Condition"."</th>";
			echo "</tr>";
           while($row = mysql_fetch_array($result)) {
		    echo "<tr>";
			echo "<td width='100px'>".$row['name']."</td>";
			echo "<td width='100px'>".$row['city']."</td>";
			echo "<td width='100px'>".$row['address']."</td>";
			echo "<td width='100px'>".$row['contact_no']."</td>";
			echo "<td width='100px'>".$row['description']."</td>";
			echo "<td width='100px'>".$row['discount']."</td>";
			echo "<td width='100px'>".$row['con']."</td>";
			echo "</tr>";
			
			
			}
			echo "</table>";
			?>
            <html>
            <body>
            
            <form>
            <button id="update" onClick="view_aff_member()" style="width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; font-weight:bold">UPDATE</button>
			
			<button id="delete" onClick="view_delete_member()" style="width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; margin-left:15px;font-weight:bold">DELETE</button>
           
            </form>
            </body>
            </html>
           
            
			
