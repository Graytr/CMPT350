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
			<a href="view.php">Home</a>
			<a href="view-cities.php">Cities</a>					
			<a href="view-buildings.php">Buildings</a>					
			<a href="view-people.php">People</a>					
			<a href="view-rooms.php">Rooms</a>					
			<a href="view-owners.php">Owners</a>					
			</p>
		</div>
	
    	<p>This page is for the buildings table</p>
		
		<p>Insert code to show the buildings table here</p>
		
		<!-- CODE FOR THE FORM TO ADD A BUILDING -->
		<div id ="form">
			<form id="inputs" >
				<fieldset>
				<legend>Add New Building</legend>
				<p>Building Name: <input type ="text" id="buildingName" name="buildingName" maxlength="30" value="" required="true" /> </p>
				<p>City: <input type="text" id="cityName" name="cityName" value="" maxlength="30" required /></p>
				<p>Address: <input type="text" id="address" name="address" value="" maxlength="30" required/> </p>
				<p>Postal Code: <input type="text" id="postalCode" name="postalCode" value="" maxlength="7" required/> </p>
				<p>Number of Rooms: <input type="number" id="numRooms" name="numRooms" value="" min="0" max="9999999" required/> </p>
				<p><input type="submit" onclick="alert('INSERT SCRIPT HERE')" value="Add"></p> 
			</form>
		</div>

    
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>