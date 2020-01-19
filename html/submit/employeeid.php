<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$e_name = mysqli_real_escape_string($conn, $_REQUEST['e_name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$e_id = mysqli_real_escape_string($conn, $_REQUEST['e_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee_id (e_name, age, e_id) VALUES ('$e_name', '$age', '$e_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>