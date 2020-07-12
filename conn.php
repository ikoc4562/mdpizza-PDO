<?php

$servername = "94.73.147.210";
$username = "u8648962_uspizza";
$password = "OUii09I4";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u8648962_vtpizza", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
