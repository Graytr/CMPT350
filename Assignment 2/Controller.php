<?php    


if (!isset($_REQUEST['newBuilding'])){ 
	//If the variables are all empty -> ie) this is the first call to the
	//this file and we need to set up the forms to view the databases
	 
	$link = mysqli_connect('localhost', 'root', ''); //Connect to the database
	
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.'; 
	} else {
		//$database = the database
		
		//Set the character encoding to utf8 and kill myself if otherwise
		if (!mysql_set_charset($link, 'utf8')){
			$database = 'Unable to establish database encoding';
			include 'view-buildings.php'
			exit();
		}
		
		//Grab the actual database
		if( !mysql_select_db($link, 'database') ){
			//Kill myself
			$database = 'Unable to locate the database';
			include 'view-buildings.php';
			exit();
		}
		
		
		$database = 'We all good fam';
		
		
	}  
	
	include 'view-buildings.php';
	exit();
} else {    

	//Update database here with information
	
	$link = mysqli_connect('localhost', 'root', ''); 
	if (!$link)	{ 
		$database = 'Unable to connect to the database server.'; 
		exit(); 
	} else {
		//$database = the database using $_REQUEST['newBuilding'] and etc
		exit();
	}

	include 'view-buildings.php';

}    

?>