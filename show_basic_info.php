
<?php
$card=$_POST['card'];
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="card_member";
 $todays_date = date("Y-m-d");
 $today = strtotime($todays_date);
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name WHERE card='$card'";
$result=mysql_query($sql,$con);
   echo "<table border='1' width='1000px' style='border-collapse:collapse;text-align:center;'";
			echo "<tr>";
			echo "<th width='100px'>"."Card"."</th>";
			echo "<th width='100px'>"."Name"."</th>";
			echo "<th width='100px'>"."Addres"."</th>";
			echo "<th width='100px'>"."Contact NO"."</th>";
			echo "<th width='100px'>"."Email"."</th>";
			echo "<th width='100px'>"."Status"."</th>";
			echo "</tr>";
           while($row = mysql_fetch_array($result)) {
		   $activation=strtotime($row['activation_date']);
		   $expire=strtotime($row['expire_date']);
		   $diff=$expire-$today;
           $expiration_date=(($diff/60)/60)/24;
		    echo "<tr>";
			echo "<td width='100px'>".$row['card']."</td>";
			echo "<td width='100px'>".$row['member']."</td>";
			echo "<td width='100px'>".$row['mem_address']."</td>";
			echo "<td width='100px'>".$row['mem_contact']."</td>";
			echo "<td width='100px'>".$row['mem_email']."</td>";
			if($expiration_date<0)
			{
			echo "<td width='100px'>"."invalid"."</td>";
			$sql="UPDATE $table_name SET status='invalid' WHERE card='$card'";
			mysql_query($sql);
			}
			else
			{
			echo "<td width='100px'>"."valid"."</td>";
			}			
			echo "</tr>";
			echo "</table>";
			$a=$row['card'];
			}
			?>
            <html>
            <body>
            
            <form>
            <button id="update" onClick="load_update_basic_info(this.value)" style="width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; font-weight:bold" value="<?php echo $a;  ?>">UPDATE</button>
			
			<button id="delete" onClick="load_delete_basic_info(this.value)" style="width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; margin-left:15px;font-weight:bold" value="<?php echo $a;  ?>">DELETE</button>
           
            </form>
            </body>
            </html>
           
            
			
