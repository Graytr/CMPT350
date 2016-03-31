<!DOCTYPE html>
<html>

	<head>
    	<meta charset="UTF-8">
		<title>Clearly Glasses</title>
		<link href="./Glasses.css" rel="stylesheet" type="text/css" /> <!-- For our future css script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        	</script> <!-- if we want jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> <!-- For Angular Javascript-->
		<script src="./hideAndShow.js"></script> <!-- Used for hiding and showing sections-->
    </head>
    
	<body>
	    
		<div class="sidebar" id="sidebar">
			<p>
			<span id = "header">Clearly Glasses</span>
			<a href="controller-home.php">Home</a>
			<a href="controller-employee.php">Employee</a>					
			<a href="controller-customer.php">Customer</a>					
			<a href="controller-purchase.php">Purchase</a>					
			<a href="controller-login.php">Log Out</a>									
			</p>
		</div>
		
		<!-- CODE FOR THE OPTIONS MENU -->
		<p id="options" onclick="showNew()">Add Employee</p>	
		<p id="options" onclick="showUpdate()">Update Employee</p>
		<p id="options" onclick="showDelete()">Delete Employee</p>
		
		
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
		
		
		
		<!-- CODE FOR ADDING AN EMPLOYEE -->
		<div id="hideNew">
			<!-- CODE FOR THE FORM TO ADD AN EMPLOYEE -->
			<p>To create a new employee in the database, please fill out the below form</p> 
			<div id ="form" >
				<form id="inputs" action="" method="post" >
					<fieldset>
					<legend>Add New Employee</legend>
					<p>Name: <input type ="text" id="newName" name="newName" maxlength="30" value="" required /> </p>
					<p>Wage: <input type="number" id="newWage" name="newWage" value="" min="0" max="999.99" step="0.01" required /></p>
					<p><input type="submit" value="Add"></p> 
				</form>
			</div>
		</div>
		
		
		<!-- CODE FOR UPDATING AN EMPLOYEE -->
		<div id="hideUpdate">
			<p><br>To update an existing employee in the database, please fill out the form below</p>
		
			<!-- CODE FOR THE FORM TO UPDATE AN EMPLOYEE -->
			<div id ="form">
				<form id="inputs" >
					<fieldset>
					<legend>Update Employee</legend>
					<p>Employee Name Currently In Database: <input type ="text" id="curName" name="curName" maxlength="30" value="" required /> </p>
					<p>Updated Employee Name: <input type ="text" id="updateName" name="updateName" maxlength="30" value="" required /> </p>
					<p>Updated Wage: <input type="number" id="updateWage" name="updateWage" value="" min="0" max="999.99" step="0.01" required /></p>
					<p><input type="submit" value="Update"></p> 
				</form>
			</div>
		</div>
    
		<!-- CODE FOR DELETING AN EMPLOYEE -->
		<div id="hideDelete">
			<p><br>To delete an existing employee in the database, please fill out the form below</p>
		
			<!-- CODE FOR THE FORM TO DELETE AN EMPLOYEE -->
			<div id ="form">
				<form id="inputs" >
					<fieldset>
					<legend>Delete Employee</legend>
					<p>Employee Name: <input type ="text" id="deleteName" name="deleteName" maxlength="30" value="" required /> </p>
					<p><input type="submit" value="Delete"></p> 
				</form>
			</div>
		</div>
		
		
		<br>
    
    
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>

	</body>
</html>
