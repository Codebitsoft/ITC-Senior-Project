<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="itc400";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo("Connected \n");
}
?>