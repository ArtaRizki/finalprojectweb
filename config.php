<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tokohapedia";

try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$db_name, $username, $password);
    // set the PDO error mode to exception
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
