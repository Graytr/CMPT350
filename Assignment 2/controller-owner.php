<?php    


if ( isset($_REQUEST['newOwner']) || isset($_REQUEST['curOwner']) || isset($_REQUEST['deleteOwner']) ){ 
	//Update the database here with new information

	if ( isset($_REQUEST['newCity']) ) {
		//Creates the table for a new city
		include './MySQLi/create_table_owner.php';
		$sql= " INSERT INTO owner(ownerName, buildingName) VALUES ('h','h')";
	
		//Connects to mySQLi program
		$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		// Check connection to MySQLi
		if ($conn->connect_error) {
			//If failed to connect
			$database = "";
			die("Unable to connect to the database server: " . $conn->connect_error);
		}
						
		$database = 'We all good fam';				
		
  		$conn->close();
	}
	
	if ( isset($_REQUEST['curOwner']) ) {
	}
	
	if ( isset($_REQUEST['deleteOwner']) ) {
	}
		
  	include 'view-owner.php';
	exit();
	
} else {    
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
		
	$link = new mysqli('localhost', 'root', '');
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
	}
	
  	include 'view-owner.php';

}    

?>