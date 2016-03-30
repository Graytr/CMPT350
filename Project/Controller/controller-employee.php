<?php    

require './MySQLi/create_table_room.php';
$errorMessage = "";

if ( isset($_REQUEST['newRoomNum']) || isset($_REQUEST['curRoomID']) || isset($_REQUEST['deleteRoomID']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newRoomNum']) ){
		//Insert a new room table into the database
		$newRoomNum= $_REQUEST['newRoomNum'];
		$newBuildingName = $_REQUEST['newBuildingName'];
		$newTenantName= $_REQUEST['newTenantName'];
		$newRent = $_REQUEST['newRent'];
		$sql= " INSERT INTO room (roomNum, tenantName, buildingName, rent) 
				VALUES ('$newRoomNum','$newTenantName','$newBuildingName','$newRent')";
				
	} else if ( isset($_REQUEST['curRoomID']) ) {
		//Update an existing table in the database
		$curRoomID = $_REQUEST['curRoomID'];
		$newRoomNum = $_REQUEST['updateRoomNum'];
		$newBuildingName = $_REQUEST['updateBuildingName'];
		$newTenantName = $_REQUEST['updateTenantName'];
		$newRent = $_REQUEST['updateRent'];
		$sql= " UPDATE room
				SET roomNum = '$newRoomNum',
					tenantName = '$newTenantName',
					buildingName = '$newBuildingName',
					rent = '$newRent',
				WHERE id = '$curRoomID'";
	} else if ( isset($_REQUEST['deleteRoomID']) ) {
		//Delete a building table from the database
		$deleteRoomID = $_REQUEST['deleteRoomID'];
		$sql= " DELETE FROM room WHERE id = '$deleteRoomID' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT * FROM room";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "id: " . $row['id'] .
				 ", Room Number: " . $row['roomNum'] .
				 ", Building Name: " . $row['buildingName'] .
				 ", Tenant Name: " . $row['tenantName'] .
				 ", Rent: " . $row['rent'] . "<br>";
		}
	}else{
		$database = "0 results in room table";
	}
						
	$conn->close();

		
  	include 'view-room.php';
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
		
		$sql="SELECT * FROM room";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "id: " . $row['id'] .
					 ", Room Number: " . $row['roomNum'] .
					 ", Building Name: " . $row['buildingName'] .
					 ", Tenant Name: " . $row['tenantName'] .
					 ", Rent: " . $row['rent'] . "<br>";
			}
		}else{
			$database = "0 results in room table";
		}
		
		
		
		
		
	}
	
  	include 'view-room.php';

}    

?>