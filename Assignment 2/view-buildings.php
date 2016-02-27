<!DOCTYPE html>
<html>

	<head>
    	<meta charset="UTF-8">
		<title>Amazing Apartments</title>
		<link href="Apartments.css" rel="stylesheet" type="text/css" /> <!-- For our future css script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        	</script> <!-- if we want jquery -->
		<script src="Apartments.js">
        	</script> <!-- For our future Javascript scripts-->
    </head>
    
    
    <body>
	
		<header id="header">
		<h1>Amazing Apartments</h1>
		</header>
	
		<div class="sidebar" id="sidebar">
			<p>
			<a href="Controller.php">Home</a>
			<a href="controller-cities.php">Cities</a>					
			<a href="controller-buildings.php">Buildings</a>					
			<a href="controller-people.php">People</a>					
			<a href="controller-rooms.php">Rooms</a>					
			<a href="controller-owners.php">Owners</a>					
			</p>
		</div>
	
    	<p>This page is for the buildings table</p>
		
		<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
		<?php echo $database; ?>
		
		<!-- CODE FOR THE FORM TO ADD A BUILDING -->
		<p>To create a new building in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post" >
				<fieldset>
				<legend>Add New Building</legend>
				<p>Building Name: <input type ="text" id="newBuildingName" name="newBuildingName" maxlength="30" value="" required /> </p>
				<p>City: <input type="text" id="newCityName" name="newCityName" value="" maxlength="30" required /></p>
				<p>Address: <input type="text" id="newAddress" name="newAddress" value="" maxlength="30" required/> </p>
				<p>Postal Code: <input type="text" id="newPostalCode" name="newPostalCode" value="" maxlength="7" required/> </p>
				<p>Number of Rooms: <input type="number" id="newNumRooms" name="newNumRooms" value="" min="0" max="9999999" required/> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing building in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE A BUILDING -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update Building</legend>
				<p>Building Name Currently In Database: <input type ="text" id="curBuildingName" name="curBuildingName" maxlength="30" value="" required /> </p>
				<p>Updated Building Name: <input type ="text" id="updateBuildingName" name="updateBuildingName" maxlength="30" value="" required /> </p>
				<p>Updated City: <input type="text" id="updateCityName" name="updateCityName" value="" maxlength="30" required /></p>
				<p>Updated Address: <input type="text" id="updateAddress" name="updateAddress" value="" maxlength="30" required/> </p>
				<p>Updated Postal Code: <input type="text" id="updatePostalCode" name="updatePostalCode" value="" maxlength="7" required/> </p>
				<p>Updated Number of Rooms: <input type="number" id="updateNumRooms" name="updateNumRooms" value="" min="0" max="9999999" required/> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing building in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE A BUILDING -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete Building</legend>
				<p>Building Name: <input type ="text" id="deleteBuildingName" name="deleteBuildingName" maxlength="30" value="" required /> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Delete"></p> 
			</form>
		</div>
		
		<p></p>
	
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>