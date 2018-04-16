<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "wdv341";


try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Connected successfully</p>";

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
