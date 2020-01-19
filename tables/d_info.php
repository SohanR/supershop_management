<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE d_info (
dateandtime varchar (20),
c_id numeric (30,2),
dman_id numeric(12,2),
primary key (dman_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table d_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>