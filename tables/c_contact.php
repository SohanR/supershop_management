<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE c_contact (
cname varchar (20),
email varchar (30),
phone numeric(20,2),
primary key (cname))";

if ($conn->query($sql) === TRUE) {
    echo "Table c_contact created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>