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
	
    	<p>This page is for the tenant table</p>
		
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
		
		<!-- CODE FOR THE FORM TO ADD A TENANT -->
		<p>To create a new Tenant in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post">
				<fieldset>
				<legend>Add New Tenant</legend>
				<p>Name: <input type ="text" id="newTenant" name="newTenant" maxlength="30" value="" required /> </p>
				<p>Telephone Number: <input type="tel" id="newTel" name="newTel" value="" maxlength="30" required /></p>
				<p>Age: <input type="number" id="newAge" name="newAge" value="" max="999" min="0" required/> </p>
				<p><input type="submit" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing tenant in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE A TENANT -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update Tenant</legend>
				<p>Tenant Name Currently In Database: <input type ="text" id="curTenant" name="curTenant" maxlength="30" value="" required /> </p>
				<p>Updated Name: <input type ="text" id="updateTenant" name="updateTenant" maxlength="30" value="" required /> </p>
				<p>Updated Telephone Number: <input type="tel" id="updateTel" name="updateTel" value="" maxlength="30" required /></p>
				<p>Updated Age: <input type="number" id="updateAge" name="updateAge" value="" max="999" min="0" required/> </p>
				<p><input type="submit" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing tenant in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE A TENANT -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete Tenant</legend>
				<p>Tenant Name: <input type ="text" id="deleteTenant" name="deleteTenant" maxlength="30" value="" required /> </p>
				<p><input type="submit" value="Delete"></p> 
			</form>
		</div>
    
        <br>
		
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>