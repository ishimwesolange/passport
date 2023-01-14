<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername,$username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create Database
$sql= "CREATE DATABASE passport_db";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error : " . $conn->error;
}


$conn->close();
?>