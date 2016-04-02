<!DOCTYPE html>
<html>

	<head>
    	<meta charset="UTF-8">
		<title>Clearly Glasses</title>
		<link href="Glasses.css" rel="stylesheet" type="text/css" /> <!-- For our future css script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        	</script> <!-- if we want jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> <!-- For Angular Javascript-->
		<script src="hideAndShow.js"></script> <!-- Used for hiding and showing sections-->
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
		<p id="options" onclick="showNew()">Add Purchase</p>	
		<p id="options" onclick="showUpdate()">Update Purchase</p>
		<p id="options" onclick="showDelete()">Delete Purchase</p>
		
		 <!-- CODE FOR THE GRID -->
		<div id="grid">
			<!-- CODE FOR THE FIRST ROW OF THE GRID -->
			<div id = "grid-row">
				<!--CODE FOR THE FIRST COLUMN OF THE GRID. THIS IS WHERE THE DATABASE WILL BE SHOWN! -->
				<div id = "grid-column">
					<!--THIS CODE SHOULD OUTPUT THE DATABASE TABLE GIVEN TO IT FROM THE CONTROLLER-->
					<div id="form">
						<form id="output">
							<?php echo $database; ?>
						</form>
					</div>
				</div>
				
				<!-- CODE FOR THE SECOND COLUMN OF THE GRID. THIS IS WHERE THE FORMS WILL BE SHOWN! -->
				<div id="grid-column">
		
					<!-- CODE FOR ADDING A PURCHASE -->
					<div id="hideNew">
					
						<!-- CODE FOR THE FORM TO ADD A PURCHASE -->
						<p>To create a new purchase in the database, please fill out the below form</p> 
					
						<div id ="form">
							<form id="inputs" action="" method="post" >
								<fieldset>
								<legend>Add New Purchase</legend>
								
								<!-- GRID FOR THE ADD PURCHASE FORM -->
								<div id ="grid">
									<div id="grid-row">
										<div id="grid-column">
											<p>Customer Name:</p>
											<p>Date:</p>
											<p>Cost:</p>
											<p>Frame:</p>
										</div>
										<div id="grid-column">
											<p><input type ="text" id="newCustomerName" name="newCustomerName" maxlength="50" value="" required /> </p>
											<p><input type="date" id="newDate" name="newDate" required /></p>
											<p><input type="number" id="newCost" name="newCost" value="" min="0" max="9999.99" step="0.01" required /></p>
											<p><input type ="text" id="newFrame" name="newFrame" maxlength="60" value="" required /> </p>
										</div>
									</div>
									<div id="grid-row">
										<p id="center">Lens Information<p>
									</div>
									<div id="grid-row">
										<div id="grid-column">
											<div id="grid">
												<div id="grid-row">
														<p id="center">Left</p>
												</div>
												<div id="grid-row">
													<div id="grid-column">
														<p>Sphere:</p>
														<p>Cyl:</p>
														<p>Axis:</p>
														<p>Dist:</p>
														<p>Near:</p>
														<p>IO:</p>
														<p>UD:</p>
													</div>
													<div id="grid-column">
														<p><input type="number" id="newLSphere" name="newLSphere" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLCyl" name="newLCyl" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLAxis" name="newLAxis" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLDist" name="newLDist" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLNear" name="newLNear" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLIO" name="newLIO" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newLUD" name="newLUD" value="" min="0" max="99.99" step="0.01"/></p>	
													</div>
												</div>
											</div>
										</div>
										<div id="grid-column">
											<div id="grid">
												<div id="grid-row">
														<p id="center">Right</p>
												</div>
												<div id="grid-row">
													<div id="grid-column">
														<p>Sphere:</p>
														<p>Cyl:</p>
														<p>Axis:</p>
														<p>Dist:</p>
														<p>Near:</p>
														<p>IO:</p>
														<p>UD:</p>
													</div>
													<div id="grid-column">
														<p><input type="number" id="newRSphere" name="newRSphere" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRCyl" name="newRCyl" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRAxis" name="newRAxis" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRDist" name="newRDist" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRNear" name="newRNear" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRIO" name="newRIO" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="newRUD" name="newRUD" value="" min="0" max="99.99" step="0.01"/></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
																
								<p id="center"><input type="submit" value="Add"></p> 
							</form>
						</div>
					</div>
			
					<!-- CODE FOR UPDATING A PURCHASE -->
					<div id="hideUpdate">
						<p><br>To update an existing purchase in the database, please fill out the form below</p>
						
						<!-- CODE FOR THE FORM TO UPDATE A PURCHASE -->
						<div id ="form">
							<form id="inputs" >
								<fieldset>
								<legend>Update Purchase</legend>
								<!-- GRID FOR THE UPDATE PURCHASE FORM -->
								<div id ="grid">
									<div id="grid-row">
										<div id="grid-column">
											<p>Purchase ID:</p>
											<p>Customer Name:</p>
											<p>Date:</p>
											<p>Cost:</p>
											<p>Frame:</p>
										</div>
										<div id="grid-column">
											<p><input type ="number" id="curID" name="curID" min="0" value="" required /> </p>
											<p><input type ="text" id="updateCustomerName" name="updateCustomerName" maxlength="50" value="" required /> </p>
											<p><input type="date" id="updateDate" name="updateDate" required /></p>
											<p><input type="number" id="updateCost" name="updateCost" value="" min="0" max="9999.99" step="0.01" required /></p>
											<p><input type ="text" id="updateFrame" name="updateFrame" maxlength="60" value="" required /> </p>
										</div>
									</div>
									<div id="grid-row">
										<p id="center">Lens Information<p>
									</div>
									<div id="grid-row">
										<div id="grid-column">
											<div id="grid">
												<div id="grid-row">
														<p id="center">Left</p>
												</div>
												<div id="grid-row">
													<div id="grid-column">
														<p>Sphere:</p>
														<p>Cyl:</p>
														<p>Axis:</p>
														<p>Dist:</p>
														<p>Near:</p>
														<p>IO:</p>
														<p>UD:</p>
													</div>
													<div id="grid-column">
														<p><input type="number" id="updateLSphere" name="updateLSphere" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateLCyl" name="updateLCyl" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateLAxis" name="updateLAxis" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateLDist" name="updateLDist" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateLNear" name="updateLNear" value="" min="0" max="99.99" step="0.01"></p>
														<p><input type="number" id="updateLIO" name="updateLIO" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateLUD" name="updateLUD" value="" min="0" max="99.99" step="0.01"/></p>	
													</div>
												</div>
											</div>
										</div>
										<div id="grid-column">
											<div id="grid">
												<div id="grid-row">
														<p id="center">Right</p>
												</div>
												<div id="grid-row">
													<div id="grid-column">
														<p>Sphere:</p>
														<p>Cyl:</p>
														<p>Axis:</p>
														<p>Dist:</p>
														<p>Near:</p>
														<p>IO:</p>
														<p>UD:</p>
													</div>
													<div id="grid-column">
														<p><input type="number" id="updateRSphere" name="updateRSphere" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRCyl" name="updateRCyl" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRAxis" name="updateRAxis" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRDist" name="updateRDist" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRNear" name="updateRNear" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRIO" name="updateRIO" value="" min="0" max="99.99" step="0.01"/></p>
														<p><input type="number" id="updateRUD" name="updateRUD" value="" min="0" max="99.99" step="0.01"/></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<p id="center"><input type="submit" value="Update"></p> 
							</form>
						</div>
					</div>
    
	
					<!-- CODE FOR DELETING A PURCHASE -->
					<div id="hideDelete">
						<p><br>To delete an existing purchase in the database, please fill out the form below</p>
						
						<!-- CODE FOR THE FORM TO DELETE A PURCHASE -->
						<div id ="form">
							<form id="inputs" >
								<fieldset>
								<legend>Delete Purchase</legend>
								
								<!-- GRID FOR THE DELETE PURCHASE FORM -->
								<div id ="grid">
									<div id="grid-row">
										<div id="grid-column">
											<p>Purchase ID:</p>
										</div>
										<div id="grid-column">
											<p><input type ="number" id="deleteID" name="deleteID" min="0" value="" required /> </p>
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