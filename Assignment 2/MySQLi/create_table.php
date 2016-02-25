<?php 
	$servername="localhost";
	$username="root";
	$password="";

	$sql= " CREATE TABLE posts(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			comment VARCHAR(50),
			reg_date TIMESTAMP
		)";
	$conn= new mysqli($servername,$username,$password,"dbli");
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
// Create Table
	if ($conn->query($sql) === TRUE) {
		echo "Table posts created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
		}
	$conn->close();
 ?>