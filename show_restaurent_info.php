<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="review_panel";
$table_name2="review_categories";

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT $table_name2.name,$table_name2.city,$table_name2.location,$table_name2.website,$table_name2.price,$table_name2.details,$table_name2.title_image,
$table_name2.slider_1,$table_name2.slider_2,$table_name2.slider_3,$table_name.genre
FROM $table_name2
INNER JOIN $table_name
ON $table_name2.name=$table_name.name
where genre='restaurent'
";
$result=mysql_query($sql,$con);
echo "<table border='1' width='1000px' style='border-collapse:collapse;text-align:center;'";
			echo "<tr>";
			echo "<th width='100px'>"."Name"."</th>";
			echo "<th width='100px'>"."City"."</th>";
			echo "<th width='100px'>"."Location"."</th>";
			echo "<th width='100px'>"."Website"."</th>";
			echo "<th width='100px'>"."Price"."</th>";
			echo "<th width='100px'>"."Details"."</th>";
			echo "</tr>";
           while($row = mysql_fetch_array($result)) {
		    echo "<tr>";
			echo "<td width='100px'>".$row['name']."</td>";
			echo "<td width='100px'>".$row['city']."</td>";
			echo "<td width='100px'>".$row['location']."</td>";
			echo "<td width='100px'>".$row['website']."</td>";
			echo "<td width='100px'>".$row['price']."</td>";
			echo "<td width='100px'>".$row['details']."</td>";
			echo "</tr>";
			
			
			}
			echo "</table>";
?>