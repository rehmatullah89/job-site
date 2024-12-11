<?php
    if(!isset($_SESSION['logged_in_employer']))
    {
   

        header("Location:index.php");
        exit;
    }
?>
