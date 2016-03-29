<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="myDatabase";

	$firstname="Mayra";
	$lastname="Samaniego";
	$email="mas696@mail.usask.ca";
	$comment="Whatever comment n";
	$sql= " INSERT INTO posts(firstname, lastname,email,comment) VALUES ('$firstname','$lastname','$email','$comment')";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
// Create database
	if ($conn->query($sql) === TRUE) {
		$last_id=$conn->insert_id;
		echo "New record created successfully <br>";
		echo "Last ID is: ".$last_id;
	} else {
		echo "Error creating database: " . $conn->error;
		}
	$conn->close();
?>