<?php    

require './MySQLi/create_table_building.php';
$errorMessage = "";

if ( isset($_REQUEST['newBuildingName']) || isset($_REQUEST['curBuildingName']) || isset($_REQUEST['deleteBuildingName']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newBuildingName']) ){
		//Insert a new building table into the database
		$newBuildingName = $_REQUEST['newBuildingName'];
		$newCityName = $_REQUEST['newCityName'];
		$newAddress = $_REQUEST['newAddress'];
		$newPostalCode = $_REQUEST['newPostalCode'];
		$newNumRooms = $_REQUEST['newNumRooms'];
		$sql= " INSERT INTO building(buildingName, cityName, address, postalCode, numberRooms) 
				VALUES ('$newBuildingName','$newCityName','$newAddress','$newPostalCode','$newNumRooms')";
	} else if ( isset($_REQUEST['curBuildingName']) ) {
		//Update an existing table in the database
		$curBuildingName = $_REQUEST['curBuildingName'];
		$newBuildingName = $_REQUEST['updateBuildingName'];
		$newCityName = $_REQUEST['updateCityName'];
		$newAddress = $_REQUEST['updateAddress'];
		$newPostalCode = $_REQUEST['updatePostalCode'];
		$newNumRooms = $_REQUEST['updateNumRooms'];
		$sql= " UPDATE building
				SET buildingName = '$newBuildingName',
					cityName = '$newCityName',
					address = '$newAddress',
					postalCode = '$newPostalCode',
					numberRooms = '$newNumRooms'
				WHERE buildingName = '$curBuildingName' ";
	} else if ( isset($_REQUEST['deleteBuildingName']) ) {
		//Delete a building table from the database
		$deleteBuildingName = $_REQUEST['deleteBuildingName'];
		$sql= " DELETE FROM building WHERE buildingName = '$deleteBuildingName' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT buildingName, cityName, address, postalCode, numberRooms FROM building";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "Building Name: " . $row['buildingName'] .
				 ", City Name: " . $row['cityName'] .
				 ", Address: " . $row['address'] .
				 ", Postal Code: " . $row['postalCode'] .
				 ", Number of Rooms: " . $row['numberRooms'] . "<br>";
		}
	}else{
		$database = "0 results in building table";
	}
						
	$conn->close();

		
  	include 'view-building.php';
	exit();
	
} else {    
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
		
	$link = new mysqli($servername, $username, $password,"myDatabase");
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.' . mysql_error(); 
	} else {
		include './MySQLi/createDB.php';
		include './MySQLi/create_table_building.php';
		include './MySQLi/create_table_city.php';
		include './MySQLi/create_table_owner.php';
		include './MySQLi/create_table_tenant.php';
		include './MySQLi/create_table_room.php';
		$database = "";
		
		$sql="SELECT buildingName, cityName, address, postalCode, numberRooms FROM building";
		$results=$link->query($sql);
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "Building Name: " . $row['buildingName'] .
					 ", City Name: " . $row['cityName'] .
					 ", Address: " . $row['address'] .
					 ", Postal Code: " . $row['postalCode'] .
					 ", Number of Rooms: " . $row['numberRooms'] . "<br>";
			}
		}else{
			$database = "0 results in building table";
		}
	}
	
  	include 'view-building.php';

}    

?>