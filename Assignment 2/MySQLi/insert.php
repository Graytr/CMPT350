<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$firstname="Mayra";
	$lastname="Samaniego";
	$email="mas696@mail.usask.ca";
	$comment="Whatever comment n";
	$sql= " INSERT INTO posts(firstname, lastname,email,comment) VALUES ('$firstname','$lastname','$email','$comment')";

	// Create connection
	$conn = new mysqli($servername, $username, $password,"myDatabase");
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create database
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error inserting: " . $conn->error;
		}
	$conn->close();
?>