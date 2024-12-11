<?php session_start(); ?>
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
<div id="register">
<?php

if(isset($_SESSION['logged_in_jobseeker']) || isset($_SESSION['logged_in_employer']))
{
    header("Location:index.php");
}
else{
?>
<form id="form1" name="form1" method="POST" action="includes/reg.php">
    <fieldset>
    <legend>Personal information</legend>
    <div class="fm-req">
<label>Title:</label>
<select name="title" id="select1"><option value="employer">Employer</option><option value="jobseeker">Jobseeker</option></select>
</div>
    <div class="fm-req">
      <label for="fm-firstname">First name:</label>
      <input name="firstname" id="fm-firstname" type="text" />
    </div>
    <div class="fm-opt">

      <label for="fm-middlename">Middle name:</label>
      <input id="middlename" name="middlename" type="text" />
    </div>
    <div class="fm-req">
      <label for="fm-lastname">Last name:</label>
      <input name="lastname" id="fm-lastname" type="text" />
    </div>
    </fieldset>

        <fieldset>
    <legend>Address </legend>
    <div class="fm-opt">
      <label for="fm-addr">Address:</label>
      <input id="address" name="address" type="text" />
    </div>
    <div class="fm-opt">
      <label for="fm-city">City or Town:</label>
      <input id="city" name="city" type="text" />
    </div>
</fieldset>
  <fieldset>
    <legend>Account Information</legend>
        <div class="fm-req">
<label>Username:</label>
<input name="user" type="text" value="" size="20" maxlength="30" />
</div>
  <div class="fm-req">
<label>Password:</label>
<input name="user_password" type="password" size="20" maxlength="30" />
</div>
  <div class="fm-req">
<label>Retype Password:</label>
<input name="user_password2" type="password" size="20" maxlength="30" />
</div><br/>

  <div class="fm-req">
<label>Email:</label>
<input name="email" type="text" size="20" maxlength="30" />
</div>
</fieldset>
<hr style="color:#FFFFFF;border-top:1px solid #CCCCCC;" noshade="noshade"/>
   <div id="fm-submit" class="fm-req" >
      <input name="Submit" value="Register" type="submit" />
    </div>
    <br/>


<?php }?>

</form>
</div>
<