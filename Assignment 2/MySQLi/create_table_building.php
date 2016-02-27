<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create second table, building
	$sql= " CREATE TABLE IF NOT EXISTS building(
			buildingName VARCHAR(30) NOT NULL PRIMARY KEY,
			cityName VARCHAR(30) NOT NULL,
			address VARCHAR(30) NOT NULL,
			postalCode VARCHAR(7) NOT NULL,
			numberRooms Int(4)
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table building created successfully";
	} else {
		echo "Error creating building table: " . $conn->error;
	}

	$conn->close();
 ?>