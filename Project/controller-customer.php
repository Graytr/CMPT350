<?php    

require 'MySQLi/create_table_customer.php';
$errorMessage = "";

if ( isset($_REQUEST['newCustomerName']) || isset($_REQUEST['curCustomerName']) || isset($_REQUEST['deleteCustomerName']) ){ 
	//Update the database here with new information
	//Connects to mySQLi program
	$conn = new mysqli($servername, $username, $password,"myDatabase");
		
		
		
	// Check connection to MySQLi
	if ($conn->connect_error) {
		//If failed to connect
		$database = "";
		die("Unable to connect to the database server: " . $conn->connect_error);
	}
		
		
	if( isset($_REQUEST['newCustomerName']) ){
		//Insert a new room table into the database
		$newCustomerName = $_REQUEST['newCustomerName'];
		$newAddress = $_REQUEST['newAddress'];
		$newPostalCode = $_REQUEST['newPostalCode'];
		$newCity = $_REQUEST['newCityName'];
		$newTel = $_REQUEST['newTel'];
		$newEmail = $_REQUEST['newEmail'];
		$sql= " INSERT INTO customer (customerName, address, postalCode, city, telNum, email) 
				VALUES ('$newCustomerName','$newAddress','$newPostalCode','$newCity','$newTel','$newEmail')";
				
	} else if ( isset($_REQUEST['curCustomerName']) ) {
		//Update an existing table in the database
		$curCustomerName = $_REQUEST['curCustomerName'];
		$curAddress = $_REQUEST['curAddress'];
		$curPostalCode = $_REQUEST['curPostalCode'];
		$curCity = $_REQUEST['curCity'];
		$curTel = $_REQUEST['curTel'];
		$curEmail = $_REQUEST['curEmail'];
		$sql= " UPDATE customer
				SET customerName = '$curCustomerName',
					address = '$curAddress',
					postalCode = '$curPostalCode',
					city = '$curCity',
					telNum = '$curTel',
					email = '$email',
				WHERE id = '$curCustomerName'";
	} else if ( isset($_REQUEST['deleteCustomerName']) ) {
		//Delete a building table from the database
		$deleteCustomerName = $_REQUEST['deleteCustomerName'];
		$sql= " DELETE FROM customer WHERE customerName = '$deleteCustomerName' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	//This loop is for printing it out
	$sql="SELECT * FROM customer";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database .= "Name: " . $row['customerName'] .
				 ", Address: " . $row['address'] .
				 ", Postal Code" . $row['postalCode'] .
				 ", City: " . $row['city'] .
				 ", Telephone: " . $row['telNum'] . 
				 ", Email: " . $row['email'] . "<br>";
		}
	}else{
		$database = "0 results in customer table *cough*";
	}
						
	$conn->close();

		
  	include 'view-customer.php';
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
		
		$sql="SELECT * FROM customer";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "Name: " . $row['customerName'] .
					 ", Address: " . $row['address'] .
					 ", Postal Code" . $row['postalCode'] .
					 ", City: " . $row['city'] .
					 ", Telephone: " . $row['telNum'] . 
					 ", Email: " . $row['email'] . "<br>";
			}
		}else{
			$database = "0 results in customer table";
		}
		
		
		
		
		
	}
	
  	include 'view-customer.php';

}    

?>