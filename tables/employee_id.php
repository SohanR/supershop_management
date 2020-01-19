<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE employee_id (
e_name varchar (20),
age numeric (30,2),
e_id numeric(12,2),
primary key (e_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table employee_id created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>