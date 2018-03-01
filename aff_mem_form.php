
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
      <td><input name="name" type="text" id="name" size="40" required="required" style="height:25px">
          <span id="aff_name_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>City</label></td>
      <td><input name="city" type="text" id="city" size="40" required="required" style="height:25px">
      
       <span id="city_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Address</label></td>
      <td><input name="address" type="text" id="address" size="40" required="required" style="height:25px">
      
       <span id="address_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Contact</label></td>
      <td><input name="contact" type="text" id="contact" size="40" required="required" style="height:25px">
      
       <span id="contact_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
   
    <tr>
      <td height="40"><label>Description</label></td>
      <td><input name="desc" type="text" id="desc" size="40" required="required" style="height:25px">
      
       <span id="desc_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Discount</label></td>
      <td><input name="discount" type="text" id="discount" size="40" required="required" style="height:25px">
      
          <span id="discount_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Condition</label></td>
      <td><input name="condition" type="text" id="condition" size="40" required="required" style="height:25px">
          <span id="condition_validate" style="color:#FF3300"></span>
      </td>
    </tr>
   
     
    <tr><td><input name="save" type="button" onClick="send_aff_info();" value="Save" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>
