<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE brand (
brand_name varchar (20),
brand_id numeric(12,2),
primary key (brand_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table brand created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>