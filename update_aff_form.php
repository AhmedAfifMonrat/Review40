<?php
session_start();
?>
<?php
if(isset($_POST['name']))
{
$update_name=$_POST['name'];
$_SESSION['update_aff_mem']=$update_name;
}
?>
<?php
$server="localhost";
$uname="root";
$pass="";
$database="review40";
$table_name="affiliated_member";
$table_name2="affiliated_member_contact";
$affiliated_company=$_POST['name'];


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
WHERE $table_name2.name='$affiliated_company'
";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$name=$row['name'];
$city=$row['city'];
$address=$row['address'];
$description=$row['description'];
$discount=$row['discount'];
$condition=$row['con'];
$contact=$row['contact_no'];
}
?>
<html>
<head>
<script type="text/javascript" src="js/aff_member.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div style="float:left; padding:0px">


<form id="basic_info">
  <table width="100%" border="0">
    <tr>
      <td height="40"><label>Name</label></td>
      <td><input name="name" type="text" id="name" size="40" required="required" style="height:25px" value="<?php echo $name ?>">
          <span id="aff_name_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>City</label></td>
      <td><input name="city" type="text" id="city" size="40" required="required" style="height:25px" value="<?php echo $city ?>">
      
       <span id="city_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Address</label></td>
      <td><input name="address" type="text" id="address" size="40" required="required" style="height:25px" value="<?php echo $address ?>">
      
       <span id="address_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Contact</label></td>
      <td><input name="contact" type="text" id="contact" size="40" required="required" style="height:25px" value="<?php echo $contact ?>">
      
       <span id="contact_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
   
    <tr>
      <td height="40"><label>Description</label></td>
      <td><input name="desc" type="text" id="desc" size="40" required="required" style="height:25px" value="<?php echo $description ?>">
      
       <span id="desc_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Discount</label></td>
      <td><input name="discount" type="text" id="discount" size="40" required="required" style="height:25px" value="<?php echo $discount ?>">
      
          <span id="discount_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Condition</label></td>
      <td><input name="condition" type="text" id="condition" size="40" required="required" style="height:25px" value="<?php echo $condition ?>">
          <span id="condition_validate" style="color:#FF3300"></span>
      </td>
    </tr>
   
     
    <tr><td><input name="save" type="button" onClick="update_aff_info();" value="Save" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>
