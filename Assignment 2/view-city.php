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
	
    	<p>This page is for the cities table</p>
		
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
		
		<!-- CODE FOR THE FORM TO ADD A CITY -->
		<p>To create a new city in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post" >
				<fieldset>
				<legend>Add New City</legend>
				<p>City Name: <input type ="text" id="newCity" name="newCity" maxlength="30" value="" required /> </p>
				<p>Province: <input type="text" id="newProvince" name="newProvince" value="" maxlength="30" required /></p>
				<p>Country: <input type="text" id="newCountry" name="newCountry" value="" maxlength="30" required/> </p>
				<p><input type="submit" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing city in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE A City -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update City</legend>
				<p>City Name Currently In Database: <input type ="text" id="curCity" name="curCity" maxlength="30" value="" required /> </p>
				<p>Updated City Name: <input type ="text" id="updateCity" name="updateCity" maxlength="30" value="" required /> </p>
				<p>Updated Province: <input type="text" id="updateProvince" name="updateProvince" value="" maxlength="30" required /></p>
				<p>Updated Country: <input type="text" id="updateCountry" name="updateCountry" value="" maxlength="30" required/> </p>
				<p><input type="submit" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing city in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE A CITY -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete City</legend>
				<p>City Name: <input type ="text" id="deleteCity" name="deleteCity" maxlength="30" value="" required /> </p>
				<p><input type="submit" value="Delete"></p> 
			</form>
		</div>
		
		<br>
    
    
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>

	</body>
</html>