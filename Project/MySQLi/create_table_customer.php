<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create second table, customer
	$sql= " CREATE TABLE IF NOT EXISTS customer(
			customerName VARCHAR(50) NOT NULL PRIMARY KEY,
			address VARCHAR(30) NOT NULL,
			postalCode VARCHAR(7) NOT NULL,
			city VARCHAR (30) NOT NULL,
			telNum Int(10) NOT NULL,
			email VARCHAR (30) NOT NULL
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table customer created successfully";
	} else {
		echo "Error creating customer table: " . $conn->error;
	}

	$conn->close();
 ?>