<?php
    include("config.php"); 
    session_start();
    $_SESSION["user"] = $user;
    session_unset("user");
    header("Location: index.php");
?>