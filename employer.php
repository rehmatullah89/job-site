<?php session_start(); include("authem.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<title>Welcome to Jobsite</title>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="ie-style.css" />
<![endif]-->

<![if !IE]>
<link href="firefox-style.css" rel="stylesheet" type="text/css" />
<![endif]>
<script language="javascript" src="script.js" type="text/javascript"></script>
<script language="javascript" src="cookie.js" type="text/javascript"></script>


</head>

<body>

<div id="header">
<div style=" width:872px; margin-left:auto; margin-right:auto; padding:4px; margin-bottom:20px;" >
<span id="welcome">Welcome <b>Guest!</b></span>
<span style="float:right; margin-top:-13px;"><a href="#">Login</a>|<a href="#">Register</a></span>
</div>
</div>
<div style=" margin-left:17%;">
<img src="images/logo.jpg" height="74" width="181"  alt=""/>
<br/>
<div align="right" style=" margin-right:19%; margin-top:-15px;">
<IMG SRC="images/digitblank.gif" border=0 name="hourstens"><IMG SRC="images/digitblank.gif" border=0 name="hoursones"><IMG SRC="images/digitblank.gif" border=0 name="colon"><IMG SRC="images/digitblank.gif" border=0 name="minstens"><IMG SRC="images/digitblank.gif" border=0 name="minsones"><IMG SRC="images/digitblank.gif" border=0 name="ampm">
</div>


<SCRIPT LANGUAGE="JavaScript">

  if (document.images) {
    digit1 = new Image;
    digit1.src = "images/digit1.gif";
	digit2 = new Image;
    digit2.src = "images/digit2.gif";
	digit3 = new Image;
    digit3.src = "images/digit3.gif";
	digit4 = new Image;
    digit4.src = "images/digit4.gif";
	digit5 = new Image;
    digit5.src = "images/digit5.gif";
	digit6 = new Image;
    digit6.src = "images/digit6.gif";
	digit7 = new Image;
    digit7.src = "images/digit7.gif";
	digit8 = new Image;
    digit8.src = "images/digit8.gif";
	digit9 = new Image;
    digit9.src = "images/digit9.gif";
	digit0 = new Image;
    digit0.src = "images/digit0.gif";
	digitam = new Image;
    digitam.src = "images/digitam.gif";
	digitpm = new Image;
    digitpm.src = "images/digitpm.gif";
	digitcolon = new Image;
	digitcolon.src = "images/digitcolon.gif";
	digitblank = new Image;
	digitblank.src = "images/digitblank.gif";
	}

function UpdateClock(){
    var time= new Date();
    hours = time.getHours();
    mins = time.getMinutes();
    if (!document.images) return;
	digit = mins % 10;
    document.images.minsones.src=eval("digit"+digit+".src");
	digit = (mins - (mins % 10))/10;
	document.images.minstens.src=eval("digit"+digit+".src");
	if (hours > 12)
	  document.images.ampm.src=digitpm.src;
	else
	  document.images.ampm.src=digitam.src;
	if (hours > 12) hours = hours - 12;
	digit = hours % 10;
	document.images.hoursones.src=eval("digit"+digit+".src");
	digit = (hours - (hours % 10))/10;
	document.images.hourstens.src=eval("digit"+digit+".src");
	document.images.colon.src=digitcolon.src;
	setTimeout("UpdateClock()",30000);

  }

   UpdateClock();
</SCRIPT>
</div>

<div id="buttonbar" align="left" >
<img src="images/bbleft.gif" width="3" height="42" alt="" border="0" style="margin-top:-0.01em;" />
<ul style="margin-top:-42px;">
<li><a href="index.php" >Home</a></li>
<li><a href="myaccount.php">Jobseekers</a></li>
<li><a href="search.php">Search Jobs</a></li>
<li><a href="uploadcv.php">Post a CV</a></li>
<li class="last"><a href="register.php">Register</a></li>
</ul>
<div align="right" style="margin-top:-48px;" >
<ul>
<li class="last"><b><a href="javascript:void();" onmouseover="showdiv()" onmouseout="mclosetime()">Employers</a></b></li>

<div align="left" id="dropdown" onmouseover="cancelclose()"  onmouseout="mclosetime()" >
<a href="employer.php">Home</a>
<a href="addjobs.php">Post Job</a>
<a href="uploadlogo.php">Upload Logo