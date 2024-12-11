<?php
include ("dbconnect.php");
    $title=addslashes($_POST['resume_title']);
    $resume=addslashes($_POST['resumetxt']);
    $skills=addslashes($_POST['skills']);
    $exp=addslashes($_POST['workex']);
    $edu=addslashes($_POST['edu']);
    $language=addslashes($_POST['languages[]']);
    $salary=addslashes($_POST['salary']);
    $degree=addslashes($_POST['degree']);
    $joblocation=addslashes($_POST['joblocation']);

if(isset($title) && isset($resume))
{

    $connection = new db();
    $connection->connect();
    if(isset($_SESSION['logged_in_jobseeker']))
    {
         $user=$_SESSION['logged_in_jobseeker'];
    }
    else
    {
        header("Location:index.php");
        exit;
    }

    $result=mysql_query("SELECT * from mobagi_resume where username='".$user."' ") or die (mysql_error());

    if(mysql_num_rows($result)>0)
     {
         mysql_query("UPDATE mobagi_resume SET title='".$title."', resume='".$resume."', skills='".$skills."',
                                               experience='".$exp."',education='".$edu."',language='".$language."',
                                               salary='".$salary."',degree='".$degree."',location='".$joblocation."' WHERE username='".$user."' ") or die (mysql_error());


     echo "<script type='text/javascript'>javascript:alert('Resume have been created successfully.');</script>";

    }
     else
     {
        mysql_query("INSERT INTO mobagi_resume VALUES('".$user."','".$title."','".$resume."','".$skills."'
                                                        ,'".$exp."','".$edu."','".$language."','".$salary."','".$degree."','".$joblocation."')")or die (mysql_error());

     echo "<script type='text/javascript'>javascript:alert('Resume have been updated successfully');</script>";

    }
    $connection->close();
}

?>