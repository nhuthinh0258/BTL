<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "vk_com";


$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>