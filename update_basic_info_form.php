<?php
session_start();
?>
<?php
if(isset($_POST['card']))
{
$card=$_POST['card'];
$_SESSION['delete_basic_info']=$card;
$_SESSION['update_basic_info']=$card;
}
?>
<html>
<head>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div style="float:left; padding:0px">


<form id="basic_info">
  <table width="100%" border="0">
    <tr>
      <td height="40"><label>Card number</label></td>
      <td><input name="card" type="text" id="card" size="40" required="required" style="height:25px" value="<?php echo $card; ?>" disabled > 
      <span id="card_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Name:</label></td>
      <td><input name="mem_name" type="text" id="mem_name" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
       <span id="mem_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
   
   
    <tr>
      <td height="40"><label>Contact Address</label></td>
      <td><input name="cadd" type="text" id="cadd" size="40" required="required" style="height:25px">
       <span id="cadd_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Contact Number</label></td>
      <td><input name="cnum" type="text" id="cnum" size="40" required="required" style="height:25px">
      
          <span id="cnum_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Email</label></td>
      <td><input name="email" type="text" id="email" size="40" required="required" style="height:25px">
          <span id="email_validate" style="color:#FF3300"></span>
      </td>
    </tr>
   
     
    <tr><td><input name="update" type="button" onClick="send_update_basic_info();" value="UPDATE" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px; text-align:center; font-family:'myriad Pro'"/></td></tr>
  </table>
</form>
</div>
</body>
</html>
