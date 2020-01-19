<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$brand_name = mysqli_real_escape_string($conn, $_REQUEST['brand_name']);
$brand_id = mysqli_real_escape_string($conn, $_REQUEST['brand_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO brand (brand_name, brand_id) VALUES ('$brand_name', '$brand_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>