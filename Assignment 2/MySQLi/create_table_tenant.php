<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create third table, tenant
	$sql= " CREATE TABLE IF NOT EXISTS tenant(
			tenantName VARCHAR(30) NOT NULL PRIMARY KEY,
			telNum Int(10) NOT NULL,
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
		//echo "Table tenant created successfully";
	} else {
		echo "Error creating tenant table: " . $conn->error;
	}

	$conn->close();
 ?>