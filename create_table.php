<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "passport_db";

// Create connection
$conn = new mysqli($servername,$username, $password , $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE citizens 
(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    id_number VARCHAR(30) NOT NULL,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    telephone VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    birthdate DATE NOT NULL,
    civil_state VARCHAR(10) NOT NULL,
    father_name VARCHAR(30) NOT NULL,
    mother_name VARCHAR(30) NOT NULL,
    province VARCHAR(20) NOT NULL,
    district VARCHAR(20) NOT NULL,
    sector VARCHAR(20) NOT NULL,
    cell VARCHAR(20) NOT NULL,
    village VARCHAR(20) NOT NULL,
    street_number VARCHAR(20) NOT NULL,
    house_number VARCHAR(20) NOT NULL,
    creation_date VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>