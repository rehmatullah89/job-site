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
</head>

<body>
<div id="header">
<div style=" width:872px; margin-left:auto; margin-right:auto; padding:4px; margin-bottom:20px;" >
<span>Welcome <b>Guest!</b></span>
<span style="float:right; margin-top:-13px;"><a href="#">Login</a>|<a href="#">Register</a></span>
</div>
</div>
<div style=" margin-left:17%;">
<img src="images/logo.jpg" height="74" width="181"  alt=""/>
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
<a href="uploadlogo.php">Upload Logo</a>
<a href="emlogout.php">Logout</a>
</div>
</ul>

</div>
</div>

<div id="content" >

<div id="contentdiv">
<h2 class="title">About Us</h2>
<div id="list2">
 <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque nisl. Integer dapibus nulla ut ipsum. Morbi in felis. Etiam lorem nunc, accumsan vitae, commodo at, tempus commodo, nulla. Suspendisse potenti. Suspendisse eu metus. Quisque pretium purus. Donec aliquam libero id augue. Donec a augue. Cras tincidunt aliquet mi. Mauris vitae nunc a ligula dignissim vestibulum.
<br/><br/>
Cras semper quam non dolor. Pellentesque porta, tellus nec vulputate consectetuer, nisi diam auctor velit, non laoreet nibh eros vel nisl. Sed eu justo tempus felis varius fringilla. Morbi sem. Pellentesque laoreet tincidunt odio. Mauris pharetra, leo a sagittis iaculis, purus tortor semper lectus, nec elementum nibh libero eget odio. Mauris vulputate. Praesent mattis. Ut at mauris. Aenean non odio vel elit pulvinar fringilla. Vivamus commodo dui at magna. Aliquam erat volutpat.

 </p>
 
 </div>
</div>
<div id="column-right" style="float:right; margin-top:-46px;">
<h2 class="Box">Jobseekers Login <img align="right" onclick="hNsdiv('BoxLogin','JLimage')" name="JLimage" hspace="10" src="images/mini-minus.gif" height="10" width="10" alt="" /> </h2>
<div class="BoxLogin">
<?php include ("includes/_loginbox.php"); ?>
</div>
<h2 class="title-bar">Featured Employers<img align="right" onclick="hNsdiv('emp_logo','emplogos')" hspace="10"src="images/mini-minus.gif" name="emplogos" height="10" width="10" alt="" /></h2>
<div class="emp_logo">
<img src="images/employers/alfara.gif" width="90" height="40" border="0" alt="" />
<img src="images/employers/alkhalili.gif" width="90" height="40" border="0" alt="" />
<img src="images/employers/al-tuwairqi.gif" width="90" height="40" border="0" alt="" />
<img src="images/employers/ezalsahralogo.gif" width="90" height="40" border="0" alt="" />
<img src="images/employers/ssa_90x40.gif" width="90" height="40" border="0" alt="" />
<img src="images/employers/symbiosis_90x40.gif" width="90" height="40" border="0" alt="" />
</div>
</div>
</div>

<!-- WHITE BACKGROUND BOTTOM IMAGE -->
<div id="backbottom">
<br/>
</div>
<!-- WHITE BACKGROUND BOTTOM IM