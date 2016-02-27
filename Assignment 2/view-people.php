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
	
    	<p>This page is for the person table</p>
		
		<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
		<?php echo $database; ?>
		
		<!-- CODE FOR THE FORM TO ADD A PERSON -->
		<p>To create a new person in the database, please fill out the below form</p> 
		
		<div id ="form">
			<form id="inputs" action="" method="post">
				<fieldset>
				<legend>Add New Person</legend>
				<p>Name: <input type ="text" id="newPerson" name="newPerson" maxlength="30" value="" required /> </p>
				<p>Telephone Number: <input type="tel" id="newTel" name="newTel" value="" maxlength="30" required /></p>
				<p>Age: <input type="number" id="newAge" name="newAge" value="" max="999" min="0" required/> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Add"></p> 
			</form>
		</div>

		<p><br>To update an existing person in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO UPDATE A PERSON -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Update Person</legend>
				<p>Person Name Currently In Database: <input type ="text" id="curName" name="curName" maxlength="30" value="" required /> </p>
				<p>Updated Name: <input type ="text" id="updatePerson" name="updatePerson" maxlength="30" value="" required /> </p>
				<p>Updated Telephone Number: <input type="tel" id="updateTel" name="updateTel" value="" maxlength="30" required /></p>
				<p>Updated Age: <input type="number" id="updateAge" name="updateAge" value="" max="999" min="0" required/> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Update"></p> 
			</form>
		</div>
    
		<p><br>To delete an existing person in the database, please fill out the form below</p>
		
		<!-- CODE FOR THE FORM TO DELETE A PERSON -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Delete Person</legend>
				<p>Person Name: <input type ="text" id="deletePerson" name="deletePerson" maxlength="30" value="" required /> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Delete"></p> 
			</form>
		</div>
    
        <p></p>
		
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>