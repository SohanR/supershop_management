<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE store_info (
store_name varchar (20),
owner varchar (30),
store_id numeric(12,2),
primary key (store_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table store_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>