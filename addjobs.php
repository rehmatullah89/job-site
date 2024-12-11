<?php session_start();
include("authem.php");
?>
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
<div style="margin-left:17%;">
<img src="images/logo.jpg" height="74" width="181"  alt="" />
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
<div id="list">
<form action=" " method="post"  align="left">
  <table width=100% align=center cellpadding="4" cellspacing=0>
    <tr>
      <td width="18%" valign="top"> position`s Title : <font color=red>*</font>
      </td>
      <td width="82%"> <input name='position_title' type=text id="position_title" size=23 maxlength=40 value="">


    </tr>
     <tr>
      <td width="18%" valign="top"> Industry : <font color=red>*</font>
      </td>
      <td width="82%"> <input name=industry type=text id="position_title" size=23 maxlength=40 value="">


    </tr>
      <tr>
      <td width="18%" valign="top"> Role : <font color=red>*</font>
      </td>
      <td width="82%"> <input name=role type=text id="position_title" size=23 maxlength=40 value="">


    </tr>
      <tr>
      <td width="18%" valign="top"> Location : <font color=red>*</font>
      </td>
      <td width="82%"> <input name=location type=text id="position_title" size=23 maxlength=40 value="">


    </tr>
      <tr>
      <td width="18%" valign="top"> Career Level : <font color=red>*</font>
      </td>
      <td width="82%"> <input name=career type=text id="position_title" size=23 maxlength=40 value="">


    </tr>
    
    <tr>
      <td valign="top"> Description : <font color=red>*</font></td>
      <td> <textarea name="description" cols="30" rows="3" id="summary"></textarea> </td>
    </tr>
   
   <tr>
      <td align=center><br>
	  	<input type=hidden name=hidden value=demo align=left>
        <input type=submit name=submit value="Add job" align=left>
      </td>
    </tr>
  </table>

</form>
<?php
include ("dbconnect.php");



if(isset($_POST['position_title']) && isset($_POST['description']))
{
    $title=addslashes($_POST['position_title']);
    $description=addslashes($_POST['description']);
    $industry=addslashes($_POST['industry']);
    $Role=addslashes($_POST['role']);
    $Location=addslashes($_POST['location']);
    $level=addslashes($_POST['career']);

    $connection = new db();
    $connection->connect();

    $result = mysql_query("INS