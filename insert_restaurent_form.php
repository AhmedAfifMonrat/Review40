
<html>
<head>
<script type="text/javascript" src="javascript.js"></script>
<script type="text/javascript" src="js/hotel.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div style="float:left; padding:0px">


<form id="basic_info" action="adminpanel.php" method="post" enctype="multipart/form-data">
  <table width="auto" border="0">
    <tr>
      <td height="40"><label>Restaurent Name</label></td>
      <td><input name="r_name" type="text" id="r_name" size="40" required="required" style="height:25px">
          <span id="rname_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>City</label></td>
      <td><input name="city" type="text" id="city" size="40" required="required" style="height:25px">
       <span id="city_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
   
   
    <tr>
      <td height="40"><label>Location</label></td>
      <td><input name="location" type="text" id="location" size="40" required="required" style="height:25px">
      
       <span id="location_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Website</label></td>
      <td><input name="web" type="text" id="web" size="40" required="required" style="height:25px">
      
          <span id="web" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Starting Price</label></td>
      <td><input name="price" type="text" id="price" size="40" required="required" style="height:25px">
          <span id="price_validate" style="color:#FF3300"></span>
      </td>
    </tr> 
    <tr>
      <td height="40"><label>Restaurent Details</label></td>
      <td><textarea maxlength="5000" id="details" required="required" style="width:250px" name="details"></textarea>
          <span id="details_validate" style="color:#FF3300"></span>
      </td>
    </tr> 
     <tr>
      <td height="45"><label>Google Map(Restaurent)</label></td>
      <td><input name="hot_map" type="text" id="hot_map" size="40" required="required" style="height:25px">
          <span id="hot_map_validate" style="color:#FF3300"></span>
      </td>
    </tr>
    <tr>
                       <td height="40">Title Image</td>
                       <td>
                         <input type="file" name="title" id="title" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC;" class="btn_dsgn" />
                        
                       </td>
                     </tr>
                      <tr>
                       <td height="40">Slider Image</td>
                       <td>
                         <input type="file" name="slider_image1" id="slider_image1" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC;" class="btn_dsgn"  />                                                  
                       </td>
                     </tr>
                     <td height="40"></td>
                       <td>
                         <input type="file" name="slider_image2" id="slider_image2" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC;" class="btn_dsgn"  />                                                  
                       </td>
                     </tr>
                     <td height="40"></td>
                       <td>
                         <input type="file" name="slider_image3" id="slider_image3" style="height:26px;width:250px; margin-left:5px;border:1px groove #CCCCCC;" class="btn_dsgn"  />                                                  
                       </td>
                     </tr>
   
     
    <tr><td><input type="submit" onClick="" value="Save" name="send_restaurent_info" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>

