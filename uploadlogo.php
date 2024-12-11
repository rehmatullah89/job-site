<?php session_start();include("authem.php"); ?>
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
<div id="register">
<?php
if(isset($_SESSION['logged_in_employer']))
{
?>
    <form id="form1" enctype="multipart/form-data" name="form1" method="POST" action="uploadlogo.php">
     <input type='hidden' value='3000000' name='MAX_FILE_SIZE' />
    <fieldset>
    <legend>Upload logo</legend>

    <p>Upload Logo: <input type="file" name="imgfile" /><br/></p>
    <font size="1">Click browse to upload a local file.</font><br/>
    <br/>
    <input class='button' type='submit' value='Upload Logo' />
    </fieldset>
<?php
}
else
{
    echo "<div style='margin-left:15px;margin-top:30px;float:left;color:red;font-weight:bold;'>You are not logged in.</div>";
    exit;

 }

if(isset($_FILES['imgfile']))
{

    $upload_dir="logos/";
    $upload_file=$upload_dir.$_SESSION['logged_in_employer'].".jpg";

        if($_FILES['imgfile']['type']=='image/jpeg')
        {
            if(copy($_FILES['imgfile']['tmp_name'],$upload_file))
            {
                echo "<div style='color:red;font-weight:bold;'>Resume was uploaded successfully.</div>";
            }
            else
            {
                print_r ($_FILES);
            }
        }
        else
        {
            echo "<div style='color:red;font-weight:bold;'>Wrong file type, only Msword files are allowed.</div>";
        }
}
?>


    </form>
</div>
</div>
<div id="column-right" style="float:right;">
<h2 class="Box">Jobseekers Menu <img align="right" onclick="hNsdiv('navlist','navimage')" name="navimage" hspace="10" src="images/mini-minus.gif" height="10" width="10" alt="" /> </h2>
<div id="navlist" class="navlist">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="editresume.php">Post Resume</a></li>
<li><a href="uploadloho.php">Upload CV</a></li>
<li><a href="search.php">Search Jobs</a></li>
<li class="last"><a href="emlogout.php">Logout</a></li>
</ul>
</div>
<h2 class="title-bar">Featured Employers <img align="right" onclick="hNsdiv('emp_logo','Limage')" name="Limage" hspace="10" src="images/mini-minus.gif" height="10" width="10" alt="" /></h2>
<div class="emp_lo