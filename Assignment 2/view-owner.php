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
			<a href="controller.php">Home</a>
			<a href="controller-city.php">City</a>					
			<a href="controller-building.php">Building</a>					
			<a href="controller-tenant.php">Tenant</a>					
			<a href="controller-room.php">Room</a>					
			<a href="controller-owner.php">Owner</a>					
			</p>
		</div>
	
    	<p>This page is for the owners table</p>
		
		<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
		<?php echo $database; ?>
		
		<!-- CODE FOR THE FORM TO ADD AN OWNER -->
		<p>To create a new owner in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post" >
				<fieldset>
				<legend>Add New Owner</legend>
				<p>Owner Name: <input type ="text" id="newOwner" name="newOwner" maxlength="30" value="" required /> </p>
				<p>Building: <input type="text" id="newBuilding" name="newBuilding" value="" maxlength="30" required /></p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing owner in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE AN OWNER -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update Owner</legend>
				<p>Owner Name Currently In Database: <input type ="text" id="curOwner" name="curOwner" maxlength="30" value="" required /> </p>
				<p>Building Name Currently In Database: <input type="text" id="curBuilding" name="curBuilding" maxlength="30" value="" required /> </p>
				<p>Updated Owner Name: <input type ="text" id="updateOwner" name="updateOwner" maxlength="30" value="" required /> </p>
				<p>Updated Building: <input type="text" id="updateBuilding" name="updateBuilding" value="" maxlength="30" required /></p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing owner in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE AN OWNER -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete Owner</legend>
				<p>Owner Name: <input type ="text" id="deleteOwner" name="deleteOwner" maxlength="30" value="" required /> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Delete"></p> 
			</form>
		</div>
		
		<p></p>
    
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>