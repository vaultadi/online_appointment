<?php
$dbhost = "localhost";
$username   = "root";
$password   = "";
$dbname     = "OnlineMgmt";
 
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Creating Users table
$sql1 = "create table Users (
id INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30),middlename VARCHAR(30),lastname VARCHAR(30),
DOB VARCHAR(50),mob_number VARCHAR(30),email VARCHAR(255),pass1 VARCHAR(255),pass2 VARCHAR(30),
blood_group VARCHAR(30),height VARCHAR(30),weight VARCHAR(30))";

if (mysqli_query($conn, $sql1)) {
    //echo "Users Table created successfully";
} else {
    //echo '<br>';
    //echo ("Users Table not created " . mysqli_error($conn));
}

// Creating Session table
$sql2 = "create table Session (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(50) NOT NULL,pass1 VARCHAR(30) NOT NULL)";

if (mysqli_query($conn, $sql2)) {
    //echo "Session Table created";
} else {
    //echo '<br>';
    //echo ("Session Table not created" . mysqli_error($conn));
}

mysqli_close($conn);
?>