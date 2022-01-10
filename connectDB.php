<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingonline";
$port = "3306";
// Create connection
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>