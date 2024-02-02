<?php
$server = "localhost";
$user = "root";
$pass="";
$dbname = "myappdb";
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="";
$conn->close();
?>