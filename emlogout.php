<?php
session_start();

if(isset($_SESSION['logged_in_employer']))
    {
        session_unregister("logged_in_employer");
        session_destroy();
        header("Location:index.php");
    }

?>
