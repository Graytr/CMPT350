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
		<p id="options" onclick="showNew()">Add Customer</p>	
		<p id="options" onclick="showUpdate()">Update Customer</p>
		<p id="options" onclick="showDelete()">Delete Customer</p>
	
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
		
		
		<!-- CODE FOR ADDING A CUSTOMER -->
		<div id="hideNew">
			<!-- CODE FOR THE FORM TO ADD A CUSTOMER -->
			<p>To create a new customer in the database, please fill out the below form</p> 
			
			<div id ="form">
				<form id="inputs" action="controller-customer.php" method="post" >
					<fieldset>
					<legend>Add New Customer</legend>
					<p>Customer Name: <input type ="text" id="newCustomerName" name="newCustomerName" maxlength="50" value="" required /> </p>
					<p>Address: <input type="text" id="newAddress" name="newAddress" value="" maxlength="30" required/> </p>
					<p>Postal Code: <input type="text" id="newPostalCode" name="newPostalCode" value="" maxlength="7" required/> </p>
					<p>City: <input type="text" id="newCityName" name="newCityName" value="" maxlength="30" required /></p>
					<p>Telephone Number: <input type="tel" id="newTel" name="newTel" value="" maxlength="30" required /></p>
					<p>Email: <input type="email" id="newEmail" name="newEmail" value="" required /></p>
					<p><input type="submit" value="Add"></p> 
				</form>
			</div>
		</div>

		
		<!-- CODE FOR UPDATING A PURCHASE -->
		<div id="hideUpdate">
			<p><br>To update an existing customer in the database, please fill out the form below</p>
			
			<!-- CODE FOR THE FORM TO UPDATE A CUSTOMER -->
			<div id ="form">
				<form id="inputs" action="controller-customer.php" method="post" >
					<fieldset>
					<legend>Update Customer</legend>
					<p>Customer Name Currently In Database: <input type ="text" id="curCustomerName" name="curCustomerName" maxlength="50" value="" required /> </p>
					<p>Updated Customer Name: <input type ="text" id="updateCustomerName" name="updateCustomerName" maxlength="50" value="" required /> </p>
					<p>Updated Address: <input type="text" id="updateAddress" name="updateAddress" value="" maxlength="30" required/> </p>
					<p>Updated Postal Code: <input type="text" id="updatePostalCode" name="updatePostalCode" value="" maxlength="7" required/> </p>
					<p>Updated City: <input type="text" id="updateCityName" name="updateCityName" value="" maxlength="30" required /></p>
					<p>Updated Telephone Number: <input type="tel" id="updateTel" name="updateTel" value="" maxlength="30" required /></p>
					<p>Updated Email: <input type="email" id="updateEmail" name="updateEmail" value="" required /></p>
					<p><input type="submit" value="Update"></p> 
				</form>
			</div>
		</div>
		
		
		<!-- CODE FOR DELETING A PURCHASE -->
		<div id="hideDelete">
			<p><br>To delete an existing customer in the database, please fill out the form below</p>
			
			<!-- CODE FOR THE FORM TO DELETE A CUSTOMER -->
			<div id ="form">
				<form id="inputs" action="controller-customer.php" method="post" >
					<fieldset>
					<legend>Delete Customer</legend>
					<p>Customer Name: <input type ="text" id="deleteCustomerName" name="deleteCustomerName" maxlength="50" value="" required /> </p>
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
