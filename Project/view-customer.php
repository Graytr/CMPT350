<!DOCTYPE html>
<html>

	<head>
    	<meta charset="UTF-8">
    	<meta name="google-signin-client_id" content="407820756770-1lfil5lrikof16pool20ssccsur83oav.apps.googleusercontent.com">
		<title>Clearly Glasses</title>
		<link href="./Glasses.css" rel="stylesheet" type="text/css" /> <!-- For our future css script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        	</script> <!-- if we want jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> <!-- For Angular Javascript-->
		<script src="./hideAndShow.js"></script> <!-- Used for hiding and showing sections-->
		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

		<script>
			function onSuccess(googleUser) {
			  console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
			  document.getElementById('misc').style.display = 'block';
			  document.getElementById("SignOut").innerHTML = "Log Out";
			}
			function onFailure(error) {
			  console.log(error);
			}
			function renderButton() {
			  gapi.signin2.render('my-signin2', {
				'scope': 'profile email',
				'width': 240,
				'height': 50,
				'longtitle': true,
				'theme': 'dark',
				'onsuccess': onSuccess,
				'onfailure': onFailure
			  });
			}
			function signOut() {
				document.getElementById("SignOut").innerHTML = "";

				var auth2 = gapi.auth2.getAuthInstance();
				auth2.signOut().then(function () {
					console.log('User signed out.');
					document.getElementById("misc").style.display = "none";
				});
			}
		</script>

    </head>
    
	<body>

		<div class="sidebar" id="sidebar">
			<p>
			<span id = "header">Clearly Glasses</span>
			<a href="controller-home.php">Home</a>
			<a href="controller-employee.php">Employee</a>					
			<a href="controller-customer.php">Customer</a>					
			<a href="controller-purchase.php">Purchase</a>
			<span id="SignOut" onClick="signOut()">Log out</span>

			</p>
		</div>



		<div id="misc">	
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
										<!--FIRST ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Customer Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="newCustomerName" maxlength="50" value="" required /></p>
											</div>
										</div>
										
										<!--SECOND ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Address:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="newAddress" value="" maxlength="30" required/></p>
											</div>
										</div>
										
										<!--THIRD ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Postal Code:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="newPostalCode" value="" maxlength="7" required/></p>
											</div>
										</div>
										
										<!-- FOURTH ROW -->
										<div id="grid-row">
											<div id="grid-column">
												<p>City:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="newCityName" value="" maxlength="30" required /></p>
											</div>
										</div>
										
										<!--FIFTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Telephone Number:</p>
											</div>
											<div id="grid-column">
												<p><input type="tel" name="newTel" value="" maxlength="30" required /></p>
											</div>
										</div>
										
										<!--SIXTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Email:</p>
											</div>
											<div id="grid-column">
												<p><input type="email" name="newEmail" value="" required /></p>
											</div>
										</div>
									<!--END OF THE GRID-->
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
										<!--FIRST ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Customer Name Currently In Database</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="curCustomerName" maxlength="50" value="" required /> </p>
											</div>
										</div>
										
										<!--SECOND ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Customer Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="updateCustomerName" maxlength="50" value="" required /> </p>
											</div>
										</div>
										
										<!--THIRD ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Address:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="updateAddress" value="" maxlength="30" required/> </p>
											</div>
										</div>
										
										<!-- FOURTH ROW -->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Postal Code:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="updatePostalCode" value="" maxlength="7" required/> </p>
											</div>
										</div>
										
										<!--FIFTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated City:</p>
											</div>
											<div id="grid-column">
												<p><input type="text" name="updateCityName" value="" maxlength="30" required /></p>
											</div>
										</div>
										
										<!--SIXTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Telephone Number:</p>
											</div>
											<div id="grid-column">
												<p><input type="tel" name="updateTel" value="" maxlength="30" required /></p>
											</div>
										</div>
										
										<!--SEVENTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Email:</p>
											</div>
											<div id="grid-column">
												<p><input type="email" name="updateEmail" value="" required /></p>
											</div>
										</div>
									<!--END OF GRID-->
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
												<p><input type ="text" name="deleteCustomerName" maxlength="50" value="" required /></p>
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
		
		</div>
	
		<footer id="footer">
			<span id="my-signin2"></span>	
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>
