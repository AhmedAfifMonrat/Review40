// JavaScript Document
function a(id)
{
document.getElementById('search').value=document.getElementById(id).innerHTML;
$("#txtHint").hide();
$("#srch").show();
}

function show1()
{
	$("#btn1").css("background-color","#C64A03");
	$("#btn2").css("background-color","#FF3300");
	document.getElementById("btn1").checked=true;
	document.getElementById("btn2").checked=false;
}
function show2()
{
	$("#btn2").css("background-color","#C64A03");
	$("#btn1").css("background-color","#FF3300");
	document.getElementById("btn2").checked=true;
	document.getElementById("btn1").checked=false;
}
/*function check_null()
{
if(document.getElementById("btn1").checked==true)
{
var str2="hotel";

}
else if(document.getElementById("btn1").checked==false)
{
var str2="restaurent";
}
else
{
	var str2=" ";
}

alert(str2);
	
	
	
}*/

function find_hotels()
{
	document.getElementById("btn1").checked=true;
}
function find_restaurents()
{
	document.getElementById("btn1").checked=false;
}
function member_info()
{
	$("#solutions").slideToggle("slow");
	
}
function hotel_info()
{
	$("#solutions1").slideToggle("slow");
}
function restaurent_info()
{
	$("#solutions2").slideToggle("slow");
}
function bus_info()
{
	$("#solutions3").slideToggle("slow");
}
function flight_info()
{
	$("#solutions4").slideToggle("slow");
}
function user_info()
{
	$("#solutions5").slideToggle("slow");
}
//insert Member
function add_member()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("show_add.php");
}
function add_member_form()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("basic_info_form.php");
}
function send_basic_info()
{
	var card=document.getElementById('card').value;
	var member=document.getElementById('mem_name').value;
	var cadd=document.getElementById('cadd').value;
	var cnum=document.getElementById('cnum').value;
	var email=document.getElementById('email').value;
	if(NotEmpty(card,member,cadd,cnum,email,"Please fill the required field"))
	{
		if(cardID(card,"Invalid ID"))
		{
			if(isAlpha(member,"Please enter only letters for these field"))
			{
				if(PhoneValidator(cnum,"Invalid Number"))
				{
					if(emailValidator(email,"Invalid Email"))
					{
		
	$.post("insert_basic_info.php",{card:card,member:member,cadd:cadd,cnum:cnum,email:email},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + card + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	}
				}
				}
			}
		}
	
	
}
function PhoneValidator(elem,helperMsg){
    var phoneExp = /^[0]+[1]+[5-9]+[0-9]{8,8}$/;
    if(elem.match(phoneExp)){
    document.getElementById('cnum_validate').innerHTML=" ";
	
    return true;
    }
    else{
       document.getElementById('cnum_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	   }
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.match(emailExp)){
    document.getElementById('email_validate').innerHTML=" ";
	
    return true;
	}
	else{
		document.getElementById('email_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	}
}



function NotEmpty(elem1,elem2,elem3,elem4,elem5,helperMsg)
{
	if(elem1.length==0)
	{
	document.getElementById('card_validate').innerHTML=helperMsg;
	elem1.focus();
	return false;
	}
	else if(elem2.length==0)
	{
	document.getElementById('card_validate').innerHTML="";
	document.getElementById('mem_validate').innerHTML=helperMsg;
	elem2.focus();
	
	return false;
	}
	
	else if(elem3.length==0)
	{
	document.getElementById('mem_validate').innerHTML="";
	document.getElementById('cadd_validate').innerHTML=helperMsg;
	elem3.focus();
	
	return false;
	}
	else if(elem4.length==0)
	{
	document.getElementById('cadd_validate').innerHTML="";
	document.getElementById('cnum_validate').innerHTML=helperMsg;
	elem4.focus();
	
	return false;
	}
	else if(elem5.length==0)
	{
	document.getElementById('cnum_validate').innerHTML="";
	document.getElementById('email_validate').innerHTML=helperMsg;
	elem5.focus();
	
	return false;
	}
	else
	return true;
	
}
function cardID(elem, helperMsg)
{
	var idExp = /^[0-9]+[0-9]{14,14}$/;
	if(elem.match(idExp)){
    document.getElementById('card_validate').innerHTML=" ";
	document.getElementById('email_validate').innerHTML=" ";
    return true;
	}else{
		document.getElementById('card_validate').innerHTML=helperMsg;
		document.getElementById('email_validate').innerHTML=" ";
       elem.focus();
       return false;
	}
}
function isAlpha(elem1,helperMsg)
{ 
	var alphaExp=/^[a-zA-Z\ \.]+$/;
	if(elem1.match(alphaExp)){
		return true;
	}
	else
	{
		alert(helperMsg);
		return false;
	}
	
}
//Show Member
function show_member(){
    document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("viewbasic.php");
}
function load_member_info(object)
{
	 var objcard=object.value;
    document.getElementById('show').innerHTML='';
    $("#show").load("show_basic_info.php",{card:objcard});
}
//Update Member
function load_update_basic_info(a)
{
	var card_no=a;
	document.getElementById('show').innerHTML='';
    $("#show").load("update_basic_info_form.php",{card:card_no});
	
}
function send_update_basic_info()
{
	var card=document.getElementById('card').value;
	var member=document.getElementById('mem_name').value;
	var cadd=document.getElementById('cadd').value;
	var cnum=document.getElementById('cnum').value;
	var email=document.getElementById('email').value;
if(NotEmpty(card,member,cadd,cnum,email,"Please fill the required field"))
	{
		
		if(cardID(card,"Invalid ID"))
		{
			if(isAlpha(member,"Please enter only letters for these field"))
			{
				if(PhoneValidator(cnum,"Invalid Number"))
				{
					if(emailValidator(email,"Invalid Email"))
					{
		
	$.post("update_basic_info.php",{card:card,member:member,cadd:cadd,cnum:cnum,email:email},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + card + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
			   document.getElementById('show').innerHTML='';
			   
               
	}
		   
		   );
	}
				}
				}
			}
		}
	
	
}
//Delete Member
function load_delete_basic_info(a)
{
	var card_no=a;
	document.getElementById('show').innerHTML='';
    $("#show").load("delete_basic_info.php",{card:card_no});
	
}