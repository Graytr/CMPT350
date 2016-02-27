<?php    


if ( isset($_REQUEST['newPerson']) || isset($_REQUEST['curName']) || isset($_REQUEST['deletePerson']) ){ 
	//Update the database here with new information

	if ( isset($_REQUEST['newPerson']) {
		//Creates the table for a new city
		include './MySQLi/create_table_building.php';
		$sql= " INSERT INTO person(name, phone, age) VALUES ('h','h', '2')";
	
		//Connects to mySQLi program
		$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		// Check connection to MySQLi
		if ($conn->connect_error) {
			//If failed to connect
			$database = "";
			die("Unable to connect to the database server: " . $conn->connect_error);
		}
						
  		$conn->close();
	}
	
	if ( isset($_REQUEST['curName'] ) {
	}
	
	if ( isset($_REQUEST['deletePerson'] ) {
	}
		
  	include 'view-people.php';
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
		include './MySQLi/create_table_person.php';
		include './MySQLi/create_table_room.php';
		$database = "";
	}
	
  	include 'view-people.php';

}    

?>