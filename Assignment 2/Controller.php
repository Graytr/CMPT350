<?php    


if ( isset($_REQUEST['newCity']) || isset($_REQUEST['curCity']) || isset($_REQUEST['deleteCity']) ){ 
	//update the database here with new information
	 
	/*$link = mysqli_connect('localhost', 'root', ''); //Connect to mySQL
	
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.' . mysql_error(); 
	} else {
		//$database = the database
		
 		//Set the character encoding to utf8 and kill myself if otherwise
		if (!mysql_set_charset('utf8')){
			$database = 'Unable to establish database encoding' . mysql_error();
			include 'view-buildings.php';
			exit();
		}
		
		//Grab the actual database
		/*if( !mysql_select_db('myDatabase') ){
			//Kill myself if I cant actually grab the database
			$database = 'Unable to locate the database: ' . mysql_error();
			include 'view-buildings.php';
			exit();
		} 
		
		
	}*/
		
		
		
		
	//Creates the table for a new city
	include './MySQLi/create_table_city.php';
	$sql= " INSERT INTO city(cityName, province, country) VALUES ('h','h','h')";

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

	
	include 'view-cities.php';
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
	
	include 'view-cities.php';

}    

?>