<?php
// Fill up array with names
/*
$a[]="Agrabad Hotel , Chittagong";
$a[]="Peninsula , Chittagong";
$a[]="Peninsula , Chittagong";
$a[]="Peninsula , Chittagong";
$a[]="Peninsula , Chittagong";
$a[]="Peninsula , Chittagong";
$a[]="Papparika , Chittagong";

$a[]="Radisson , Dhaka";
$a[]="Long Beach Hotel , Cox's Bazar";
$a[]="Meridian hotel , Chittagong";
$a[]="The Pavillion , Chittagong";
$a[]="Wellpark , Chittagong";
*/
$server="localhost";
$uname="root";
$pass="";
$database="test";
$table_name="member";
$y=$_GET["y"];
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name where genre='$y'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$a[]=$row['name'];
}
$q=$_GET["q"];



//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  $id=1;
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint="<div style='cursor:pointer;' id='$id' onclick='a($id);' >".$a[$i]."</div>";
        }
      else
        {
        $hint=$hint." "."<span style='cursor:pointer;' id='$id' onclick='a($id);' >".$a[$i]."</span><br />";
        }
        $id =$id+1;
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>