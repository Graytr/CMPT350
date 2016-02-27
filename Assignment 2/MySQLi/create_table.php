<?php 
	$servername="localhost";
	$username="root";
	$password="";

//Create first table, city
	$sql= " CREATE TABLE city(
			cityName VARCHAR(30) NOT NULL PRIMARY KEY,
			province VARCHAR(30) NOT NULL,
			country VARCHAR(30) NOT NULL,
		)";
	$conn= new mysqli($servername,$username,$password,"database");
	
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

//========================================================================

	//Create second table, building
	$sql= " CREATE TABLE building(
			buildingName VARCHAR(30) NOT NULL PRIMARY KEY,
			cityName VARCHAR(30) NOT NULL,
			address VARCHAR(30) NOT NULL,
			postalCode VARCHAR(7) NOT NULL,
			numberRooms Int(4),
		)";
	$conn= new mysqli($servername,$username,$password,"database");
	
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

//========================================================================

	//Create third table, person
	$sql= " CREATE TABLE person(
			name VARCHAR(30) NOT NULL PRIMARY KEY,
			phone Int(10) NOT NULL,
			age Int(3) NOT NULL
		)";
	$conn= new mysqli($servername,$username,$password,"database");
	
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

//========================================================================

	//Create fourth table, room
	$sql= " CREATE TABLE room(
			id Int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			tenantName VARCHAR(30),
			buildingName VARCHAR(30) NOT NULL,
			rent Int(5) NOT NULL
		)";
	$conn= new mysqli($servername,$username,$password,"database");
	
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

//========================================================================

	//Create fifth table, buildingOwners
	$sql= " CREATE TABLE buildingOwners(
			name VARCHAR(30) NOT NULL PRIMARY KEY,
			buildingName VARCHAR(30) NOT NULL,
		)";
	$conn= new mysqli($servername,$username,$password,"database");
	
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

//========================================================================
	$conn->close();
 ?>