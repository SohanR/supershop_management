<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$dateandtime = mysqli_real_escape_string($conn, $_REQUEST['dateandtime']);
$area = mysqli_real_escape_string($conn, $_REQUEST['area']);
$pickup_id = mysqli_real_escape_string($conn, $_REQUEST['pickup_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO pickuppoint (dateandtime, area, pickup_id) VALUES ('$dateandtime', '$area', '$pickup_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>