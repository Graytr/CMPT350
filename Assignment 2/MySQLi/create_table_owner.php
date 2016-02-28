<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";


	//Create fifth table, owner
	$sql= " CREATE TABLE IF NOT EXISTS owner(
			ownerName VARCHAR(30) NOT NULL PRIMARY KEY,
			buildingName VARCHAR(30) NOT NULL
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);	
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table owner created successfully";
	} else {
		echo "Error creating owner table: " . $conn->error;
	}

	$conn->close();
 ?>