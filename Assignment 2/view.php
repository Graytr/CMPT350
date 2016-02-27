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
	
    	<p>This site was created and made so apartment managers could manage their buildings, cities, tentants, rooms, and themselves</p>
		
		<?php 
			echo "This is  a php command";
			echo "hello world";
		?>
    

    
    <footer id="footer">
    	2016 (c) Travis Gray, Halle Jackson
    </footer>
	</body>
</html>