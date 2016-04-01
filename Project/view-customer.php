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
		
		<script>
			function loginFunction() {
				alert("You are not logged in");

				do {
					var username = prompt("Please enter your username", "").toLowercase();
					var password = prompt("Please enter your password", "");
					
				} while(!this.validUsernameAndPassword(username, password));
			}
			
			function validUsernameAndPassword(username, password){
				return true;
			}
		</script>
		<p id="options" onclick="loginFunction()">Log In</p>
		
		<!-- CODE FOR THE OPTIONS MENU -->
		<p id="options" onclick="showNew()">Add Customer</p>	
		<p id="options" onclick="showUpdate()">Update Customer</p>
		<p id="options" onclick="showDelete()">Delete Customer</p>
	
		<!--CODE FOR THE GRID LAYOUT -->
		<div id="grid">
			<!-- CODE FOR THE FIRST ROW OF THE GRID -->
			<div id = "grid-row">
				<!-- CODE FOR THE FIRST COLUMN OF THE GRID. THIS IS WHERE THE DATABASE WILL BE SHOWN! -->
				<div id = "grid-column">
					<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
					<div id="form">
						<form id="output">
							<?php echo $database; ?>
						</form>
					</div>
				</div>
				<!-- CODE FOR THE SECOND COLUMN OF THE GRID. THIS IS WHERE THE FORMS WILL BE SHOWN! -->
				<div id = "grid-column">
					<!-- CODE FOR ADDING A CUSTOMER -->
					<div id="hideNew">
						<!-- CODE FOR THE FORM TO ADD A CUSTOMER -->
						<p>To create a new customer in the database, please fill out the below form</p> 
						
						<div id ="form">
							<form id="inputs" action="" method="post" >
								<fieldset>
								<legend>Add New Customer</legend>
								<!-- GRID FOR THE NEW CUSTOMER FORM -->
								<div id ="grid">
									<div id="grid-row">
										<div id="grid-column">
											<p>Customer Name:</p>
											<p>Address:</p>
											<p>Postal Code:</p>
											<p>City:</p>
											<p>Telephone Number:</p>
											<p>Email:</p>
										</div>
										<div id="grid-column">
											<p><input type ="text" id="newCustomerName" name="newCustomerName" maxlength="50" value="" required /></p>
											<p><input type="text" id="newAddress" name="newAddress" value="" maxlength="30" required/></p>
											<p><input type="text" id="newPostalCode" name="newPostalCode" value="" maxlength="7" required/></p>
											<p><input type="text" id="newCityName" name="newCityName" value="" maxlength="30" required /></p>
											<p><input type="tel" id="newTel" name="newTel" value="" maxlength="30" required /></p>
											<p><input type="email" id="newEmail" name="newEmail" value="" required /></p>
										</div>
									</div>
								</div>								
								<p id="center"><input type="submit" value="Add"></p> 
							</form>
						</div>
					</div>
				

					<!-- CODE FOR UPDATING A PURCHASE -->
					<div id="hideUpdate">
						<p><br>To update an existing customer in the database, please fill out the form below</p>
						
						<!-- CODE FOR THE FORM TO UPDATE A CUSTOMER -->
						<div id ="form">
							<form id="inputs" >
								<fieldset>
								<legend>Update Customer</legend>
								
								
								
								<!-- GRID FOR THE UPDATE CUSTOMER FORM -->
								<div id ="grid">
									<div id="grid-row">
										<div id="grid-column">
											<p>Customer Name Currently In Database</p>
											<p>Updated Customer Name:</p>
											<p>Updated Address:</p>
											<p>Updated Postal Code:</p>
											<p>Updated City:</p>
											<p>Updated Telephone Number:</p>
											<p>Updated Email:</p>
										</div>
										<div id="grid-column">
											<p><input type ="text" id="curCustomerName" name="curCustomerName" maxlength="50" value="" required /> </p>
											<p><input type ="text" id="updateCustomerName" name="updateCustomerName" maxlength="50" value="" required /> </p>
											<p><input type="text" id="updateAddress" name="updateAddress" value="" maxlength="30" required/> </p>
											<p><input type="text" id="updatePostalCode" name="updatePostalCode" value="" maxlength="7" required/> </p>
											<p><input type="text" id="updateCityName" name="updateCityName" value="" maxlength="30" required /></p>
											<p><input type="tel" id="updateTel" name="updateTel" value="" maxlength="30" required /></p>
											<p><input type="email" id="updateEmail" name="updateEmail" value="" required /></p>
										</div>
									</div>
								</div>	
								<p id="center"><input type="submit" value="Update"></p> 
							</form>
						</div>
					</div>
					
					<!-- CODE FOR DELETING A PURCHASE -->
					<div id="hideDelete">
						<p><br>To delete an existing customer in the database, please fill out the form below</p>
						
						<!-- CODE FOR THE FORM TO DELETE A CUSTOMER -->
						<div id ="form">
							<form id="inputs" >
								<fieldset>
								<legend>Delete Customer</legend>
								
								<!-- GRID FOR THE DELETE CUSTOMER FORM -->
								<div id ="grid">
									<div id="grid-row">
									</div>
									<div id="grid-row">
										<div id="grid-column">
											<p>Customer Name:</p>
										</div>
										<div id="grid-column">
											<p><input type ="text" id="deleteCustomerName" name="deleteCustomerName" maxlength="50" value="" required /></p>
										</div>
									</div>
								</div>	
								<p id="center"><input type="submit" value="Delete"></p> 
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<!-- CODE FOR THE SECOND ROW OF THE GRID. THIS IS WHERE ANY ERROR INFORMATION WILL BE DISPLAYED! -->
			<div id="grid-row">
				<div id="form">
					<form id="output">
						<?php echo $errorMessage; ?>
					</form>
				</div>
			</div>
		</div>
	
		<footer id="footer">
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>
