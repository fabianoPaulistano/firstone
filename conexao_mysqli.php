<?php
$servername = "localhost";
$database = "primeiro";
$username = "";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, '', '');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>