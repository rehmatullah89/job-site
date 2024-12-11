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

<div id="searchtable" >

<h2>Search Jobs</h2>
<hr style="height:1px; margin-top:-5px;color:#e2e2e2;" width="95%"  noshade="noshade"/>
<p id="searchDesc">Put Job Titles, Location, Company Name, Skills, Industry, etc. </p>
<input type="text" value="" size="70" /><input type="button" class="button" value="Find Jobs" />
</div>

<div id="list">

<h2 class="title-bar"> Job Description </h2>
<?php
include ("dbconnect.php");

$title=$_GET['title'];
$username=$_GET['username'];

$connection = new db();
$connection->connect();

$result=mysql_query("Select * from mobagi_jobs where title='".$title."' and username='".$username."' ") or die(mysql_error());
if(mysql_num_rows($result)>0)
{
    $row=mysql_fetch_assoc($result);
    $connection->close();

?>

<h2 class="job-name"> <?php echo $row['title']; ?></h2><h5 class="job-date" align="right">Date posted: 15/11/2008</h5>

<hr style="height:1px; margin-top:-5px;color:#e2e2e2;" width="95%"  noshade="noshade"/><img src="images/employers/<?php echo rawurlencode($row['username']); ?>.gif" align="left" height="40" width="90" border="0" alt=""  vspace="5" hspace="10"/>

<p>
<br/>
<?php echo $row['description'];?></p>
<hr style="height:1px;color:#e2e2e2;" width="95%"  noshade="noshade"/>
<h4 class="addinfo">Additional Information</h4>
<table cellpadding="0" cellspacing="0" border="" style="width:95%; margin:auto; margin-bottom:10px;" >
<tr>
<td><b>Industry: </b><?php echo $row['industry'];?></td>
</tr>
<tr><td><b>Job Role/Department: </b><?php echo $row['role'];?></td></tr>
<tr><td><b>Job Location: </b><?php echo $row['location'];?></td></tr>
<tr><td><b>Career Level: </b><?php echo $row['career'];?></td></tr>
</table>
<?php
}

?>
</div>

</div>

<div id="column-right" style="float:right; margin-top:-110px">
<h2 class="Box">Jobseekers Login <img align="right" onclick="hNsdiv('BoxLogin','Loginimg')" hspace="10"src="images/mini-minus.gif" name="Loginimg" height="10" width="10" alt="" /></h2>
<div class="BoxLogin">
<?php include ("includes/_loginbox.php"); ?>
</div>
<h2 class="title-bar">Featured Employers  <img align="right" 