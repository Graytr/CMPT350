<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create second table, building
	$sql= " CREATE TABLE IF NOT EXISTS room(
			id Int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			roomNum Int(10) NOT NULL,
			tenantName VARCHAR(30),
			buildingName VARCHAR(30) NOT NULL,
			rent Int(5) NOT NULL
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
		echo "Error creating room table: " . $conn->error;
	}

	$conn->close();
 ?>