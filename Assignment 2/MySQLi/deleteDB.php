<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
// Create database


	$sql = "DROP DATABASE IF NOT EXISTS myDatabase";
	if ($conn->query($sql) === TRUE) {
		//TESTING PURPOSES V
		echo "Database deleted successfully";
	} else {
		//TESTING PURPOSES V
		echo "Error creating database: " . $conn->error;
	}
	$conn->close();
?>