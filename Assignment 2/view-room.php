<!DOCTYPE html>
<html>

	<head>
    	<meta charset="UTF-8">
		<title>Amazing Apartments</title>
		<link href="Apartments.css" rel="stylesheet" type="text/css" />
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
			<a href="controller.php">Home</a>
			<a href="controller-city.php">City</a>					
			<a href="controller-building.php">Building</a>					
			<a href="controller-tenant.php">Tenant</a>					
			<a href="controller-room.php">Room</a>					
			<a href="controller-owner.php">Owner</a>					
			</p>
		</div>
	
    	<p>This page is for the rooms table</p>
		
		<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
		<div id="form">
			<form id="output">
				<?php echo $database; ?>
			</form>
		</div>
		
		<br>
		
		<div id="form">
			<form id="output">
				<?php echo $errorMessage; ?>
			<form>
		</div>
		
		<!-- CODE FOR THE FORM TO ADD A ROOM -->
		<p>To create a new room in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post">
				<fieldset>
				<legend>Add New Room</legend>
				<p>Room Number: <input type ="number" id="newRoomNum" name="newRoomNum" min="0" value="" required /> </p>
				<p>Building Name: <input type="text" id="newBuildingName" name="newBuildingName" value="" required /> </p>
				<p>Tenant Name: <input type="text" id="newTenantName" name="newTenantName" value="" /> </p>
				<p>Rent: <input type="number" id="newRent" name="newRent" value="" max="99999" min="0" required/> </p>
				<p><input type="submit" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing room in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE A ROOM -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update Room</legend>
				<p>Room Number Currently In Database: <input type ="number" id="curRoomNum" name="curRoomNum" value="" min="0" required /> </p>
				<p>Building Name Currently In Database: <input type="text" id="curBuilding" name="curBuilding" value="" maxlength="30" required /> </p>
				<p>Updated Room Number: <input type ="number" id="updateRoomNum" name="updateRoomNum" min="0" value="" required /> </p>
				<p>Updated Building Name: <input type="text" id="updateBuildingName" name="updateBuildingName" value="" required /> </p>
				<p>Updated Tenant Name: <input type="text" id="updateTenantName" name="updateTenantName" value="" /> </p>
				<p>Updated Rent: <input type="number" id="updateRent" name="updateRent" value="" max="99999" min="0" required/> </p>
				<p><input type="submit" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing room in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE A ROOM-->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete Room</legend>
				<p>Room Number: <input type ="number" id="deleteRoomNum" name="deleteRoomNum" value="" min="0" required /> </p>
				<p>Building Name: <input type="text" id="deleteBuilding" name="deleteBuilding" value="" maxlength="30" required /> </p>
				<p><input type="submit" value="Delete"></p> 
			</form>
		</div>
    
		<br>
		
    
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>

</html>