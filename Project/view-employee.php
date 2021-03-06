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
			<span id="SignOut" onClick="signOut()">Log Out</span>				

			</p>
		</div>
		
		<div id="misc">
			<!-- CODE FOR THE OPTIONS MENU -->
			<p id="options" onclick="showNew()">Add Employee</p>	
			<p id="options" onclick="showUpdate()">Update Employee</p>
			<p id="options" onclick="showDelete()">Delete Employee</p>
			
			
			<!-- CODE FOR THE GRID -->
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
						<!-- CODE FOR ADDING AN EMPLOYEE -->
						<div id="hideNew">
						
						
							<!-- CODE FOR THE FORM TO ADD AN EMPLOYEE -->
							<p>To create a new employee in the database, please fill out the below form</p> 
							<div id ="form" >
								<form id="inputs" action="" method="post" >
									<fieldset>
									<legend>Add New Employee</legend>
									<!-- GRID FOR THE NEW EMPLOYEE FORM -->
									<div id ="grid">
									
										<!--FIRST ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="newName" maxlength="30" value="" required /> </p>
											</div>
										</div>
										
										<!--SECOND ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Wage:</p>
											</div>
											<div id="grid-column">
												<p><input type="number" name="newWage" value="" min="0" max="999.99" step="0.01" required /></p>
											</div>
										</div>
									</div>
									<p id="center"><input type="submit" value="Add"></p> 
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
									
									<!-- GRID FOR THE UPDATE EMPLOYEE FORM -->
									<div id ="grid">
										<!-- FIRST ROW -->
										<div id="grid-row">
											<div id="grid-column">
												<p>Current Employee Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="curName" maxlength="30" value="" required /> </p>
											</div>
										</div>
										
										<!-- SECOND ROW -->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Employee Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="updateName" maxlength="30" value="" required /> </p>
											</div>
										</div>
										
										<!-- THIRD ROW -->
										<div id="grid-row">
											<div id="grid-column">
												<p>Updated Wage:</p>
											</div>
											<div id="grid-column">
												<p><input type="number" name="updateWage" value="" min="0" max="999.99" step="0.01" required /></p>
											</div>
										</div>
									<!--END OF GRID -->
									</div>
									<p id="center"><input type="submit" value="Update"></p> 
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
									
									<!-- GRID FOR THE DELETE EMPLOYEE FORM -->
									<div id ="grid">
										<div id="grid-row">
											<div id="grid-column">
												<p>Employee Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="deleteName" maxlength="30" value="" required /> </p>
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
