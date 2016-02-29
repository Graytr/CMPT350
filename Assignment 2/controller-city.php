<?php    

require './MySQLi/create_table_city.php';
$errorMessage = "";

if ( isset($_REQUEST['newCity']) || isset($_REQUEST['curCity']) || isset($_REQUEST['deleteCity']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newCity']) ){
		//Insert a new city table into the database
		$newCityName = $_REQUEST['newCity'];
		$newProvince = $_REQUEST['newProvince'];
		$newCountry = $_REQUEST['newCountry'];
		$sql= " INSERT INTO city(cityName, province, country) 
				VALUES ('$newCityName','$newProvince','$newCountry')";
	} else if ( isset($_REQUEST['curCity']) ) {
		//Update an existing table in the database
		$curCityName = $_REQUEST['curCity'];
		$newCityName = $_REQUEST['updateCity'];
		$newProvince = $_REQUEST['updateProvince'];
		$newCountry = $_REQUEST['updateCountry'];
		$sql= " UPDATE city
				SET cityName = '$newCityName',
					province = '$newProvince',
					country = '$newCountry'
				WHERE cityName = '$curCityName' ";
	} else if ( isset($_REQUEST['deleteCity']) ) {
		//Delete a city table from the database
		$deleteCityName = $_REQUEST['deleteCity'];
		$sql= " DELETE FROM city WHERE cityName = '$deleteCityName' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT cityName, province, country FROM city";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "City Name: " . $row['cityName'] .
				 ", Province: " . $row['province'] .
				 ", Country: " . $row['country'] . "<br>";
		}
	}else{
		$database = "0 results in city table";
	}
						
	$conn->close();
		
	include 'view-city.php';
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
		
		$sql="SELECT cityName, province, country FROM city";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "City Name: " . $row['cityName'] .
					 ", Province: " . $row['province'] .
					 ", Country: " . $row['country'] . "<br>";
			}
			
		}else{
			$database = "0 results in city table";
		}
		
		
	}
	
	include 'view-city.php';

}    

?>