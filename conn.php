<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="demo";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn) {
    // echo "connected successfully";

}
else{
    die("connection failed:" .mysqli_connect_error());
} 

?>