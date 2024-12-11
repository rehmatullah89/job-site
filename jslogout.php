<?php
session_start();

if(isset($_SESSION['logged_in_jobseeker']))
    {
        session_unregister("logged_in_jobseeker");
        session_destroy();
        header("Location:index.php");
    }

?>
