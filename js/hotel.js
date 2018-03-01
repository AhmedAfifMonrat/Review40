// JavaScript Document
function add_hotel()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("show_add_hotel.php");
}
function add_hotel_form()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("insert_hotel_form.php");
}
function show_hotel()
{
	
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("show_hotel_info.php");
	
}
function view_hotel()
{
	document.getElementById('display').innerHTML='';
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("show_hotel_info.php");
	
}
function add_restaurent()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("show_add_restaurent.php");
}
function add_restaurent_form()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("insert_restaurent_form.php");
}
function show_restaurent()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("show_restaurent_info.php");
}
function view_restaurent()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("show_restaurent_info.php");
}