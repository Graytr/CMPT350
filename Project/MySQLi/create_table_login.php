<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

//Create first table, login
	$sql= " CREATE TABLE IF NOT EXISTS login(
			username VARCHAR(50) NOT NULL PRIMARY KEY,
			password VARCHAR(200) NOT NULL		
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table login created successfully";
	} else {
		echo "Error creating login table: " . $conn->error;
	}

	$conn->close();
 ?>