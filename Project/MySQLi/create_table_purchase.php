<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDatabase";

	//Create third table, purchase
	$sql= " CREATE TABLE IF NOT EXISTS purchase(
			id Int(10) AUTO INCREMENT PRIMARY KEY,
			customerName VARCHAR (50) NOT NULL,
			date VARCHAR (30) NOT NULL,
			cost DOUBLE PRECISION(6,2) NOT NULL,
			frame VARCHAR (30) NOT NULL,
			rightSphere DOUBLE PRECISION(4,2),
			leftSphere DOUBLE PRECISION(4,2),
			rightCyl DOUBLE PRECISION(4,2),
			leftCyl DOUBLE PRECISION(4,2),
			rightAxis DOUBLE PRECISION(4,2),
			leftAxis DOUBLE PRECISION(4,2),
			rightDist DOUBLE PRECISION(4,2),
			leftDist DOUBLE PRECISION(4,2),
			rightNear DOUBLE PRECISION(4,2),
			leftNear DOUBLE PRECISION(4,2),
			rightIO DOUBLE PRECISION(4,2),
			leftIO DOUBLE PRECISION(4,2),
			rightUD DOUBLE PRECISION(4,2),
			leftUD DOUBLE PRECISION(4,2)			
		)";
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create Table
	if ($conn->query($sql) === TRUE) {
		//In for testing purposes
		//echo "Table purchase created successfully";
	} else {
		echo "Error creating purchase table: " . $conn->error;
	}

	$conn->close();
 ?>