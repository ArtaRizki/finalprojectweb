<?php
$servername = "localhost:3306";
$username = "rootid9815401_root";
$password = "12345678";
$db_name = "id9815401_tokohapedia";

try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$db_name, $username, $password);
    // set the PDO error mode to exception
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
