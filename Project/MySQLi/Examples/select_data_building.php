<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDatabase";
	$conn = new mysqli($servername, $username, $password,$dbname);

	$sql="SELECT buildingName, cityName, address, postalCode, numberRooms FROM building";
	$results=$conn->query($sql);
	if($results->num_rows >0){
		while($row=$result->fetch_assoc()){
			echo "This ran";
			$buildingTable = "Building Name: " . $row['buildingName'] .
				 ", City Name: " . $row['cityName'] .
				 ", Address: " . $row['address'] .
				 ", Postal Code: " . $row['postalCode'] .
				 ", Number of Rooms: " . $row['numberRooms'] . "<br>";
		}
	}else{
		$buildingTable = "0 results in building table";
	}
?>