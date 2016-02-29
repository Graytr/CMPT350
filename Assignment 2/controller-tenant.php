<?php    

require './MySQLi/create_table_tenant.php';
$errorMessage = "";

if ( isset($_REQUEST['newTenant']) || isset($_REQUEST['curTenant']) || isset($_REQUEST['deleteTenant']) ){ 
	//Update the database here with new information

	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newTenant']) ){
		//Insert a new building table into the database
		$newTenant = $_REQUEST['newTenant'];
		$newTelNum = $_REQUEST['newTel'];
		$newAge = $_REQUEST['newAge'];
		$sql= " INSERT INTO tenant(tenantName, telNum, age) 
				VALUES ('$newTenant','$newTelNum','$newAge')";
	} else if ( isset($_REQUEST['curTenant']) ) {
		//Update an existing table in the database
		$curTenant = $_REQUEST['curTenant'];
		$newTenant = $_REQUEST['updateTenant'];
		$newTelNum = $_REQUEST['updateTel'];
		$newAge = $_REQUEST['updateAge'];
		$sql= " UPDATE tenant
				SET tenantName = '$newTenant',
					telNum = '$newTelNum',
					age = '$newAge'
				WHERE tenantName = '$curTenant' ";
	} else if ( isset($_REQUEST['deleteTenant']) ) {
		//Delete a building table from the database
		$deleteTenant = $_REQUEST['deleteTenant'];
		$sql= " DELETE FROM tenant WHERE tenantName = '$deleteTenant' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT * FROM tenant";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "Tenant Name: " . $row['tenantName'] .
				 ", Telephone Number: " . $row['telNum'] .
				 ", Ages: " . $row['age'] . "<br>";
		}
	}else{
		$database = "0 results in tenant table";
	}
						
	$conn->close();
		
  	include 'view-tenant.php';
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
		
		$sql="SELECT * FROM tenant";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "Tenant Name: " . $row['tenantName'] .
					 ", Telephone Number: " . $row['telNum'] .
					 ", Ages: " . $row['age'] . "<br>";
			}
		}else{
			$database = "0 results in tenant table";
		}
		
		
	}
	
  	include 'view-tenant.php';

}    

?>