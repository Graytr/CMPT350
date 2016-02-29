<?php    

require './MySQLi/create_table_owner.php';
$errorMessage = "";

if ( isset($_REQUEST['newOwner']) || isset($_REQUEST['curOwner']) || isset($_REQUEST['deleteOwner']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newOwner']) ){
		//Insert a new building table into the database
		$newOwnerName = $_REQUEST['newOwner'];
		$newBuilding = $_REQUEST['newBuilding'];
		$sql= " INSERT INTO owner(ownerName, buildingName) 
				VALUES ('$newOwnerName','$newBuilding')";
	} else if ( isset($_REQUEST['curOwner']) ) {
		//Update an existing table in the database
		$curOwnerName = $_REQUEST['curOwner'];
		$newOwnerName = $_REQUEST['updateOwner'];
		$newBuildingName = $_REQUEST['updateBuilding'];
		$sql= " UPDATE owner
				SET ownerName = '$newOwnerName',
					buildingName = '$newBuildingName'
				WHERE ownerName = '$curOwnerName' ";
	} else if ( isset($_REQUEST['deleteOwner']) ) {
		//Delete a building table from the database
		$deleteOwnerName = $_REQUEST['deleteOwner'];
		$sql= " DELETE FROM owner WHERE ownerName = '$deleteOwnerName' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT * FROM owner";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "Owner Name: " . $row['ownerName'] .
				 ", Building Name: " . $row['buildingName'] . "<br>";
		}
	}else{
		$database = "0 results in owner table";
	}
		
	$sql = "DESCRIBE owner";
	$results = $conn->query($sql);
	$conn->close();
	
		
  	include 'view-owner.php';
	exit();
	
} else {    
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
		
	$link = new mysqli($servername, $username, $password, "myDatabase");
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
		
		$sql="SELECT ownerName, buildingName FROM owner";
		$results = $link->query($sql);
		echo $link->error;
		$database = "";
		if($results->num_rows > 0){
			while($row=$results->fetch_assoc()){
				$database .= "Owner Name: " . $row['ownerName'] .
					 ", Building: " . $row['buildingName'] . "<br>";
			}
			
		}else{
			$database = "0 results in owner table";
		}
		
		
	}
	
  	include 'view-owner.php';

}    

?>