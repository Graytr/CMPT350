<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

//Create first table, employee
	$sql= " CREATE TABLE IF NOT EXISTS employee(
			name VARCHAR(30) NOT NULL PRIMARY KEY,
			wage DOUBLE PRECISION(5,2) NOT NULL		
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table employee created successfully";
	} else {
		echo "Error creating employee table: " . $conn->error;
	}

	$conn->close();
 ?>