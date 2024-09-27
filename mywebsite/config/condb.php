<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $condb = new PDO("mysql:host=$servername;dbname=db_website;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $condb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
