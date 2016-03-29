<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDatabase";
	$conn = new mysqli($servername, $username, $password,$dbname);

	$sql="SELECT * FROM owner";
	$results=$conn->query($sql);
	if($results->num_rows >0){
		while($row=$result->fetch_assoc()){

		}
	}else{
		echo "0 results in owner table";
	}
?>