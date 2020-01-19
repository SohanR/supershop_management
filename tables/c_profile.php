<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE c_profile (
name varchar (20),
age numeric (30,2),
total_order numeric(12,2),
primary key (total_order))";

if ($conn->query($sql) === TRUE) {
    echo "Table c_profle created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>