<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE store_products (
product_name varchar (20),
brand varchar (30),
product_id numeric(12,2),
primary key (product_id))";

if ($conn->query($sql) === TRUE) {
    echo "Table store_products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>