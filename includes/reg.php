<?php
include ("../dbconnect.php");

    $user=addslashes($_POST['user']);
    $pass=addslashes($_POST['user_password']);
    $email=$_POST['email'];
    $pass2=addslashes($_POST['user_password2']);
    $firstname=addslashes($_POST['firstname']);
    $lastname=addslashes($_POST['lastname']);
    $middlename=addslashes($_POST['middlename']);
    $title=addslashes($_POST['title']);
    $address=addslashes($_POST['address']);
    $city=addslashes($_POST['city']);

    if(isset($user) && isset($pass))
    {


    $email=addslashes($email);
    if($pass2!=$pass)
    {
        echo "<script type='text/javascript'>javascript:alert('Passwords doesnt match.');</script>";
        exit;
    }
    $connection = new db();
    $connection->connect();

       $result = mysql_query("SELECT username FROM mobagi_".$title." WHERE username='".$user."' ")or die (mysql_error());

    if(!$result){echo "An error occured while querying database";
        exit;}

    if(mysql_num_rows($result)>0)
     {
        echo "<script type='text/javascript'>javascript:alert('username is already in use, please choose another one.');</script>";
       

     }
     else
     {
         $register=mysql_query("INSERT INTO mobagi_".$title." values(null,'".$user."'
                                ,sha1('".$pass."'),'".$email."','".$firstname."','".$lastname."','".$middlename."',
                                '".$title."','".$address."','".$city."')") or die (mysql_error());
         if($register)
         {
             $logged_in_user=$user;
             session_register("logged_in_".$title);
             header("Location:../index.php");
             exit;
         }
     }
     $connection->close();
    }
?>