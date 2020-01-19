<?php
$servername = "localhost";
$username = "super_shop";
$password = "1234";
$dbname = "super_shop";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$coupon_code = mysqli_real_escape_string($conn, $_REQUEST['coupon_code']);
$coupon_id = mysqli_real_escape_string($conn, $_REQUEST['coupon_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO coupon (coupon_code, coupon_id) VALUES ('$coupon_code', '$coupon_id')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>