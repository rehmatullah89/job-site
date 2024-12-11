<?php
    if(!isset($_SESSION['logged_in_jobseeker']))
    {

        header("Location:index.php");
        exit;
    }

?>
