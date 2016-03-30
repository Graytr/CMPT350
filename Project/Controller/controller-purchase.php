<?php    

require './../MySQLi/create_table_purchase.php';
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
		//Insert a new room table into the database
		$newCustomerName= $_REQUEST['newCustomerName'];
		$newDate = $_REQUEST['newDate'];
		$newCost = $_REQUEST['newCost'];
		$newFrame = $_REQUEST['newFrame'];
		$sql= " INSERT INTO purchase (customerName, date, cost, frame) 
				VALUES ('$newCustomerName','$newDate','$newCost','$newFrame')";
				
	} else if ( isset($_REQUEST['curID']) ) {
		//Update an existing table in the database
		$curID = $_REQUEST['curID'];
		$curCustomerName = $_REQUEST['curCustomerName'];
		$curDate = $_REQUEST['curDate'];
		$curCost = $_REQUEST['curCost'];
		$curFrame = $_REQUEST['curFrame'];
		$updateCustomerName = $_REQUEST['updateCustomerName'];
		$updateDate = $_REQUEST['updateDate'];
		$updateCost = $_REQUEST['updateCost'];
		$updateFrame = $_REQUEST['updateFrame'];
		$sql= " UPDATE purchase
				SET customerName = '$updateCustomerName',
					date = '$updateDate',
					cost = '$updateCost',
					frame = '$updateFrame',
				WHERE id = '$curID'";
	} else if ( isset($_REQUEST['deleteID']) ) {
		//Delete a building table from the database
		$deleteRoomID = $_REQUEST['deleteID'];
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
			$database .= "id: " . $row['id'] .
				 ", Purchased By: " . $row['customerName'] .
				 ", For: $" . $row['cost'] .
				 ", Date: " . $row['date'] .
				 ", frame: " . $row['frame'] . "<br>";
		}
	}else{
		$database = "0 results in purchase table";
	}
						
	$conn->close();

		
  	include './../View/view-purchase.php';
	exit();
	
} else {    
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
		
	$link = new mysqli($servername, $username, $password,"myDatabase");
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.' . mysql_error(); 
	} else {
		include './../MySQLi/createDB.php';
		include './../MySQLi/create_table_customer.php';
		include './../MySQLi/create_table_employee.php';
		include './../MySQLi/create_table_purchase.php';
		$database = "";
		
		$sql="SELECT * FROM purchase";
		$results=$link->query($sql);
		$database = "";
		if($results->num_rows >0){
			while($row=$results->fetch_assoc()){
				$database .= "id: " . $row['id'] .
					 ", Purchased By: " . $row['customerName'] .
					 ", For: $" . $row['cost'] .
					 ", Date: " . $row['date'] .
					 ", frame: " . $row['frame'] . "<br>";
			}	
		}else{
			$database = "0 results in purchase table";
		}
		
		
		
		
		
	}
	
  	include './../View/view-purchase.php';

}    

?>