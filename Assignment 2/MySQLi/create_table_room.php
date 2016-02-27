<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create fourth table, room
	$sql= " CREATE TABLE IF NOT EXISTS room(
			id Int(10) NOT NULL PRIMARY KEY,
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
		echo "Table posts created successfully";
	} else {
		echo "Error creating city table: " . $conn->error;
		}

	$conn->close();
 ?>