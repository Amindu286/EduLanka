<?php
$hostname = "localhost";
$username = "virantha";
$password = "12345678";
$database = "edulanka";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
