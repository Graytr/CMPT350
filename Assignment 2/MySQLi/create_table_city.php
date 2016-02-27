<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

//Create first table, city
	$sql= " CREATE TABLE IF NOT EXISTS city(
			cityName VARCHAR(30) NOT NULL PRIMARY KEY,
			province VARCHAR(30) NOT NULL,
			country VARCHAR(30) NOT NULL,
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