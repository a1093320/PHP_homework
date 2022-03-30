<?php
    session_start();
    session_destroy();
    //setcookie("user",$user,time()-3600);
    header("Location:login.php");
?>