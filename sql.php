<?php
$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "restaurant";

$conn = mysqli_connect($servername,$uname,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

?>