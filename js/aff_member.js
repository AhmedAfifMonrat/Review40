// JavaScript Document
function add_aff_member()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("show_aff_member.php");
}
function add_aff_form()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("aff_mem_form.php");
}
function send_aff_info()
{
	var name=document.getElementById('name').value;
	var city=document.getElementById('city').value;
	var add=document.getElementById('address').value;
	var desc=document.getElementById('desc').value;
	var dis=document.getElementById('discount').value;
	var con=document.getElementById('condition').value;
	var contact=document.getElementById('contact').value;
	if(NotEmpty(name,city,add,contact,desc,dis,con,"Please fill the required field"))
	{
		
		
		
	$.post("insert_aff_member.php",{name:name,city:city,add:add,desc:desc,dis:dis,con:con,contact:contact},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + card + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	}
	
}

function NotEmpty(elem1,elem2,elem3,elem4,elem5,elem6,elem7,helperMsg)
{
	if(elem1.length==0)
	{
	document.getElementById('aff_name_validate').innerHTML=helperMsg;
	elem1.focus();
	return false;
	}
	else if(elem2.length==0)
	{
	document.getElementById('aff_name_validate').innerHTML="";
	document.getElementById('city_validate').innerHTML=helperMsg;
	elem2.focus();
	
	return false;
	}
	
	else if(elem3.length==0)
	{
	document.getElementById('city_validate').innerHTML="";
	document.getElementById('address_validate').innerHTML=helperMsg;
	elem3.focus();
	
	return false;
	}
	else if(elem4.length==0)
	{
	document.getElementById('address_validate').innerHTML="";
	document.getElementById('contact_validate').innerHTML=helperMsg;
	elem4.focus();
	
	return false;
	}
	else if(elem5.length==0)
	{
	document.getElementById('contact_validate').innerHTML="";
	document.getElementById('desc_validate').innerHTML=helperMsg;
	elem5.focus();
	
	return false;
	}
	else if(elem6.length==0)
	{
	document.getElementById('desc_validate').innerHTML="";
	document.getElementById('discount_validate').innerHTML=helperMsg;
	elem5.focus();
	
	return false;
	}
	else if(elem7.length==0)
	{
	document.getElementById('discount_validate').innerHTML="";
	document.getElementById('condition_validate').innerHTML=helperMsg;
	elem5.focus();
	
	return false;
	}
	else
	return true;
	
}
function show_aff_member()
{
	 document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("view_aff_member.php");
}
function view_aff_member()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("view_aff.php");
}
function load_member_aff(object)
{
	var objcard=object.value;
    document.getElementById('show').innerHTML='';
    $("#show").load("update_aff_form.php",{name:objcard});
}
function update_aff_info()
{
	var name=document.getElementById('name').value;
	var city=document.getElementById('city').value;
	var add=document.getElementById('address').value;
	var desc=document.getElementById('desc').value;
	var dis=document.getElementById('discount').value;
	var con=document.getElementById('condition').value;
	var contact=document.getElementById('contact').value;
	if(NotEmpty(name,city,add,contact,desc,dis,con,"Please fill the required field"))
	{	
	$.post("update_aff_member.php",{name:name,city:city,add:add,desc:desc,dis:dis,con:con,contact:contact},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Record doesn't added successfully");
		 else
		       document.getElementById('show').innerHTML='';
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	}
	
}
function view_delete_member()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("show_aff.php");
	
}
function show_member_aff(object)
{
	var objcard=object.value;
    document.getElementById('show').innerHTML='';
    $("#show").load("delete_aff_mem.php",{name:objcard});
}
function load_delete_aff_info(a)
{
	
	var name=a;
	document.getElementById('show').innerHTML='';
    $("#show").load("delete_aff_info.php",{name:name});
	
}