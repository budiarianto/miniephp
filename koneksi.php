<?php
$servername = "localhost";
$username = "root";
$password = "yanni";
$code = "mahasiswa";
$dbname = "db_yanni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { 
	$code = "listMahasiswa";
    die("Connection failed: " . $conn->connect_error);
} 
	
	echo "<strong> Connected successful: </strong>";	
?>
	