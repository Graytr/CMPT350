<?php    

require 'MySQLi/create_table_employee.php';
$errorMessage = "";

if ( isset($_REQUEST['newName']) || isset($_REQUEST['curName']) || isset($_REQUEST['deleteName']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newName']) ){
		//Insert a new room table into the database
		$newName= $_REQUEST['newName'];
		$newWage = $_REQUEST['newWage'];
		$sql= " INSERT INTO employee (name, wage) 
				VALUES ('$newName','$newWage')";
				
	} else if ( isset($_REQUEST['curName']) ) {
		//Update an existing table in the database
		$curName = $_REQUEST['curName'];
		$updateName = $_REQUEST['updateName'];
		$updateWage = $_REQUEST['updateWage'];
		$sql= " UPDATE employee
				SET name = '$updateName',
					wage = '$updateWage'
				WHERE name = '$curName'";
	} else if ( isset($_REQUEST['deleteName']) ) {
		//Delete a building table from the database
		$deleteName = $_REQUEST['deleteName'];
		$sql= " DELETE FROM employee WHERE name = '$deleteName' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT * FROM employee";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "Name: " . $row['name'] .
				 ", Wage: " . $row['wage'] . "<br>";
		}
	}else{
		$database = "0 results in employee table";
	}
						
	$conn->close();

		
  	include 'view-employee.php';
	exit();
	
} else {    
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
		
	$link = new mysqli($servername, $username, $password,"myDatabase");
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.' . mysql_error(); 
	} else {
		include 'MySQLi/createDB.php';
		include 'MySQLi/create_table_customer.php';
		include 'MySQLi/create_table_employee.php';
		include 'MySQLi/create_table_purchase.php';
		$database = "";
		
		$sql="SELECT * FROM employee";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "Name: " . $row['name'] .
				 ", Wage: " . $row['wage'] . "<br>";
			}
		}else{
			$database = "0 results in room table";
		}
		
		
		
		
		
	}
	
  	include 'view-employee.php';

}    

?>
