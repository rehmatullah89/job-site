<?php
session_start();
session_regenerate_id ();

include ("dbconnect.php");

$user=$_POST['user'];
$pass=$_POST['pass'];
$title=$_POST['title'];

if(isset($user) && isset($pass))
{
		if (isset($_SESSION["logged_in_".$title]) && $_SESSION["logged_in_".$title] == $user) {
			echo $user.", you are already logged in.<BR><BR>";
			exit;
		}

    $connection = new db();
    $connection->connect();

    $result = mysql_query("SELECT username,password FROM mobagi_".$title." WHERE username='".$user."' AND
                          password=sha1('".$pass."') ");
  if(!$result)
  {
      echo "An error occured while querying database";
      exit;
  }
  if(mysql_num_rows($result)>0)
  {
      $_SESSION["logged_in_".$title]=$user;
      session_register("logged_in_".$title);
      header("Location:index.php");

  }
  else
  {
      header("Location:index.php");
  }

    $connection->close();
}
else if ($user || $pass)
{
    echo "Please fill in both fields.";
}
?>
