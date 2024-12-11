// JavaScript Document
window.onload=getcookie;

function getcookie()
{
	var num;
	if(document.cookie != "")
	{
		num = parseInt(document.cookie.split("=")[1]);	
		num++;
		document.getElementById('welcome').innerHTML="Welcome Back! this is your<b> " + num + " </b>visit.";
		setcookie(num);
	}
	else
	{
		setcookie(1);
	}
}

function setcookie(num)
{
	var number=num;
	var expiredate= new Date();	
	expiredate.setMonth(expiredate.getMonth() +  12);
	document.cookie= "num=" + number +";path=/;expires=" + expiredate.toGMTString();
}
