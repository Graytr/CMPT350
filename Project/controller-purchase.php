<?php    

require 'MySQLi/create_table_purchase.php';
$errorMessage = "";

if ( isset($_REQUEST['newCustomerName']) || isset($_REQUEST['curID']) || isset($_REQUEST['deleteID']) ){ 
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
		//Insert a new purchase table into the database
		$newCustomerName= $_REQUEST['newCustomerName'];
		$newDate = $_REQUEST['newDate'];
		$newCost = $_REQUEST['newCost'];
		$newFrame = $_REQUEST['newFrame'];
		$newRSphere = $_REQUEST['newRSphere'];
		$newLSphere = $_REQUEST['newLSphere'];
		$newRCyl = $_REQUEST['newRCyl'];
		$newLCyl = $_REQUEST['newLCyl'];
		$newRAxis = $_REQUEST['newRAxis'];
		$newLAxis = $_REQUEST['newLAxis'];
		$newRDist = $_REQUEST['newRDist'];
		$newLDist = $_REQUEST['newLDist'];
		$newRNear = $_REQUEST['newRNear'];
		$newLNear = $_REQUEST['newLNear'];
		$newRIO = $_REQUEST['newRIO'];
		$newLIO = $_REQUEST['newLIO'];
		$newRUD = $_REQUEST['newRUD'];
		$newLUD = $_REQUEST['newLUD'];
		$sql= " INSERT INTO purchase (customerName, date, cost, frame, rightSphere, leftSphere, rightCyl, leftCyl, rightAxis, leftAxis, rightDist, leftDist, rightNear, leftNear, rightIO, leftIO, rightUD, leftUD) 
				VALUES ('$newCustomerName','$newDate','$newCost','$newFrame', '$newRSphere','$newLSphere','$newRCyl','$newLCyl','$newRAxis','$newLAxis','$newRDist','$newLDist','$newRNear','$newLNear','$newRIO','$newLIO','$newRUD','$newLUD')";
				
	} else if ( isset($_REQUEST['curID']) ) {
		//Update an existing table in the database
		$curID = $_REQUEST['curID'];
		$updateCustomerName = $_REQUEST['updateCustomerName'];
		$newDate = $_REQUEST['updateDate'];
		$newCost = $_REQUEST['updateCost'];
		$newFrame = $_REQUEST['updateFrame'];
		$newRSphere = $_REQUEST['updateRSphere'];
		$newLSphere = $_REQUEST['updateLSphere'];
		$newRCyl = $_REQUEST['updateRCyl'];
		$newLCyl = $_REQUEST['updateLCyl'];
		$newRAxis = $_REQUEST['updateRAxis'];
		$newLAxis = $_REQUEST['updateLAxis'];
		$newRDist = $_REQUEST['updateRDist'];
		$newLDist = $_REQUEST['updateLDist'];
		$newRNear = $_REQUEST['updateRNear'];
		$newLNear = $_REQUEST['updateLNear'];
		$newRIO = $_REQUEST['updateRIO'];
		$newLIO = $_REQUEST['updateLIO'];
		$newRUD = $_REQUEST['updateRUD'];
		$newLUD = $_REQUEST['updateLUD'];
		$sql= " UPDATE purchase
				SET customerName = '$updateCustomerName',
					date = '$newDate',
					cost = '$newCost',
					frame = '$newFrame',
					rightSphere = '$newRSphere',
					leftSphere = '$newLSphere',
					rightCyl = '$newRCyl',
					leftCyl = '$newLCyl',
					rightAxis = '$newRAxis',
					leftAxis = '$newLAxis',
					rightDist = '$newRDist',
					leftDist = '$newLDist',
					rightNear = '$newRNear',
					leftNear = '$newLNear',
					rightIO = '$newRIO',
					leftIO = '$newLIO',
					rightUD = '$newRUD',
					leftUD = '$newLUD'
				WHERE id = '$curID'";
	} else if ( isset($_REQUEST['deleteID']) ) {
		//Delete a building table from the database
		$deleteID = $_REQUEST['deleteID'];
		$sql= " DELETE FROM purchase WHERE id = '$deleteID' ";
	} else {
		$errorMessage .= "OOPS: child died\n";
	}
	
	
	
	
	// Check if insert worked 
	if ($conn->query($sql) == TRUE) {
		//"New record created successfully";
	} else {
		$errorMessage .= "Error updating database: " . $conn->error . "\n";
	}
		
	$sql="SELECT * FROM purchase";
	$results=$conn->query($sql);
	$database = "";
	if($results->num_rows >0){
		while($row=$results->fetch_assoc()){
			$database = "id: " . $row['id'] .
					 ", Purchased By: " . $row['customerName'] .
					 ", For: $" . $row['cost'] .
					 ", Date: " . $row['date'] .
					 ", Frame: " . $row['frame'] . 
					 ", Right Sphere: " . $row['rightSphere'] .
					 ", Left Sphere: " . $row['leftSphere'] .
					 ", Right Cyl: " . $row['rightCyl'] .
					 ", Left Cyl: " . $row['leftCyl'] .
					 ", Right Axis: " . $row['rightAxis'] .
					 ", Left Axis: " . $row['leftAxis'] .
					 ", Right Dist: " . $row['rightDist'] .
					 ", Left Dist: " . $row['leftDist'] .
					 ", Right Near: " . $row['rightNear'] .
					 ", Left Near: " . $row['leftNear'] .
					 ", Right IO: " . $row['rightIO'] .
					 ", Left IO: " . $row['leftIO'] .
					 ", Right UD: " . $row['rightUD'] .
					 ", Left UD: " . $row['leftUD'] . "<br>" . "<br>" . $database;
		}
	}else{
		$database = "0 results in purchase table";
	}
						
	$conn->close();

		
  	include 'view-purchase.php';
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
		
		$sql="SELECT * FROM purchase";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database = "id: " . $row['id'] .
					 ", Purchased By: " . $row['customerName'] .
					 ", For: $" . $row['cost'] .
					 ", Date: " . $row['date'] .
					 ", Frame: " . $row['frame'] . 
					 ", Right Sphere: " . $row['rightSphere'] .
					 ", Left Sphere: " . $row['leftSphere'] .
					 ", Right Cyl: " . $row['rightCyl'] .
					 ", Left Cyl: " . $row['leftCyl'] .
					 ", Right Axis: " . $row['rightAxis'] .
					 ", Left Axis: " . $row['leftAxis'] .
					 ", Right Dist: " . $row['rightDist'] .
					 ", Left Dist: " . $row['leftDist'] .
					 ", Right Near: " . $row['rightNear'] .
					 ", Left Near: " . $row['leftNear'] .
					 ", Right IO: " . $row['rightIO'] .
					 ", Left IO: " . $row['leftIO'] .
					 ", Right UD: " . $row['rightUD'] .
					 ", Left UD: " . $row['leftUD'] . "<br>" . "<br>" . $database;
			}	
		}else{
			$database = "0 results in purchase table";
		}
		
		
		
		
		
	}
	
  	include 'view-purchase.php';

}    

?>
