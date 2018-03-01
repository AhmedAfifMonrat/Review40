/*function load_db()
{
	document.getElementById('info').innerHTML="";
	 $("#info").load("database.php");	
}
function load_display()
{
	document.getElementById('display').innerHTML="";
	 $("#display").load("display.php");	
}*/
function validate()
{
	var date=document.getElementById('datepicker').value;
	if(date.length==0)
	{
		document.getElementById('validate').innerHTML="please select a date";
		return false;
	}
	else
	{
		document.getElementById('validate').innerHTML=" ";
		document.getElementById('info').innerHTML="";
	    $("#info").load("database.php");
		var party=document.getElementById('party').value;
		var date=document.getElementById('datepicker').value;
		var time=document.getElementById('time').value;
		var day=document.getElementById('alternate').value;
		document.getElementById('display').innerHTML="";
	    $("#display").load("display.php",{db_party:party,db_date:date,db_time:time,db_day:day});
	}
}
function reserve_validate()
{
var dname=document.getElementById('dname');
var phone=document.getElementById('phone');
var email=document.getElementById('email');
var check=document.getElementById('check');
var radio1=document.getElementById('radio1');
var radio2=document.getElementById('radio2');
var name=dname.value;
if(NotEmpty(dname,phone,email,"Please fill the required field"))
  {
  if(isAlphabet(dname, "Please enter only letters for your name"))
    {
	if(PhoneValidator(phone, "Invalid Number"))
	  {
		  if(emailValidator(email, "Invalid Email"))
		    {
			  if(radioValidator(radio1,radio2,"Please select any option"))
			  {
				if(checkValidator(check,"Please accept Open table user agreement"))
				{
				document.getElementById('display').innerHTML="";
	            $("#display").load("confirm.php",{name:name});
				
				}
			  }
				
			}
	  }
		   
	}
}

}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		document.getElementById('dname_validate').innerHTML=" ";
		return true;
	}else{
		document.getElementById('dname_validate').innerHTML=helperMsg;
		elem.focus();
		return false;
	}
}
function PhoneValidator(elem,helperMsg){
    var phoneExp = /^[0]+[1]+[5-9]+[0-9]{8,8}$/;
    if(elem.value.match(phoneExp)){
    document.getElementById('phone_validate').innerHTML=" ";
	elem.focus();
    return true;
    }
    else{
       document.getElementById('phone_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	   }
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
    document.getElementById('email_validate').innerHTML=" ";
	elem.focus();
    return true;
	}else{
		document.getElementById('email_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	}
}

function checkValidator(elem,helperMsg)
{
	if(elem.checked==0)
	{
    alert(helperMsg);
	return false;
	}
	else
	return true;
	
	
}
function radioValidator(elem1,elem2,helperMsg)
{
	if(elem1.checked==0 && elem2.checked==0 )
	{
	alert(helperMsg);
	return false;
	}
	else
	return true;
}
function NotEmpty(elem1,elem2,elem3,helperMsg)
{
	if(elem1.value.length==0 || elem2.value.length==0 || elem3.value.length==0)
	{
		alert(helperMsg);
		return false;
	}
	else 
	return true;
}





