<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create third table, person
	$sql= " CREATE TABLE IF NOT EXISTS person(
			name VARCHAR(30) NOT NULL PRIMARY KEY,
			phone Int(10) NOT NULL,
			age Int(3) NOT NULL
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table person created successfully";
	} else {
		echo "Error creating person table: " . $conn->error;
	}

	$conn->close();
 ?>