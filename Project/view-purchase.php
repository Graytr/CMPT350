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
	
		<div id="misc">
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
									
									<!-- MAIN GRID FOR THE ADD PURCHASE FORM -->
									<div id ="grid">
										<!-- FIRST ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Customer Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="newCustomerName" maxlength="50" value="" required /> </p>
											</div>
										</div>
										
										<!-- SECOND ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Date:</p>
											</div>
											<div id="grid-column">
												<p><input type="date" name="newDate" required /></p>
											</div>
										</div>
										
										<!-- THIRD ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Cost:</p>
											</div>
											<div id="grid-column">
												<p><input type="number" name="newCost" value="" min="0" max="9999.99" step="0.01" required /></p>
											</div>
										</div>
										
										<!-- FOURTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Frame:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="newFrame" maxlength="60" value="" required /> </p>
											</div>
										</div>
										
										<!-- FIFTH ROW -->
										<div id="grid-row">
											<p id="center">Lens Information<p>
										</div>
									
										<!-- SIXTH ROW (FINAL ROW OF MAIN GRID) -->
										<div id="grid-row">
											<div id="grid-column">
												<!--START OF LEFT GRID-->
												<div id="grid">
													<!-- FIRST ROW OF LEFT GRID-->
													<div id="grid-row">
															<p id="center">Left</p>
													</div>
													
													<!-- SECOND ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Sphere:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLSphere" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- THIRD ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Cyl:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLCyl" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FOURTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Axis:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLAxis" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FIFTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Dist:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLDist" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SIXTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Near:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLNear" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SEVENTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>IO:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLIO" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- EIGTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>UD:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newLUD" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
												<!--END OF LEFT GRID-->
												</div>
											</div>
											<div id="grid-column">
												<!--START OF RIGHT GRID-->
												<div id="grid">
													<!-- FIRST ROW OF RIGHT GRID-->
													<div id="grid-row">
															<p id="center">Right</p>
													</div>
													
													<!-- SECOND ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Sphere:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRSphere" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- THIRD ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Cyl:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRCyl" value="" min="0" max="99.99" step="0.01"/></p>
															
														</div>
													</div>
													
													<!-- FOURTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Axis:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRAxis" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FIFTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Dist:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRDist" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SIXTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Near:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRNear" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SEVENTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>IO:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRIO" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- EIGTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>UD:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="newRUD" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													<!--END OF RIGHT GRID-->
												</div>
											
											</div>
										</div>
									<!--END OF MAIN GRID-->
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
									<!-- MAIN GRID FOR THE UPDATE PURCHASE FORM -->
									<div id ="grid">
										<!-- FIRST ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Purchase ID:</p>
											</div>
											<div id="grid-column">
												<p><input type ="number" name="curID" min="0" value="" required /> </p>
											</div>
										</div>
										
										<!-- SECOND ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Customer Name:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="updateCustomerName" maxlength="50" value="" required /> </p>
											</div>
										</div>
										
										<!-- THIRD ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Date:</p>
											</div>
											<div id="grid-column">
												<p><input type="date" name="updateDate" required /></p>
											</div>
										</div>
										
										<!-- FOURTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Cost:</p>
											</div>
											<div id="grid-column">
												<p><input type="number" name="updateCost" value="" min="0" max="9999.99" step="0.01" required /></p>
											</div>
										</div>
										
										<!-- FIFTH ROW-->
										<div id="grid-row">
											<div id="grid-column">
												<p>Frame:</p>
											</div>
											<div id="grid-column">
												<p><input type ="text" name="updateFrame" maxlength="60" value="" required /> </p>
											</div>
										</div>
										
										<!-- SIXTH ROW-->
										<div id="grid-row">
											<p id="center">Lens Information<p>
										</div>
										
										<!-- SEVENTH ROW (FINAL ROW OF MAIN GRID)-->
										<div id="grid-row">
											<div id="grid-column">
												<!--START OF LEFT GRID-->
												<div id="grid">
													<!-- FIRST ROW OF LEFT GRID-->
													<div id="grid-row">
															<p id="center">Left</p>
													</div>
													
													<!-- SECOND ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Sphere:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLSphere" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- THIRD ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Cyl:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLCyl" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FOURTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Axis:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLAxis" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FIFTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Dist:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLDist" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SIXTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Near:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLNear" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SEVENTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>IO:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLIO" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- EIGTH ROW OF LEFT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>UD:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateLUD" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
												<!--END OF LEFT GRID-->
												</div>
											</div>
											<div id="grid-column">
												<!--START OF RIGHT GRID-->
												<div id="grid">
													<!-- FIRST ROW OF RIGHT GRID-->
													<div id="grid-row">
															<p id="center">Right</p>
													</div>
													
													<!-- SECOND ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Sphere:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRSphere" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- THIRD ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Cyl:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRCyl" value="" min="0" max="99.99" step="0.01"/></p>
															
														</div>
													</div>
													
													<!-- FOURTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Axis:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRAxis" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- FIFTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Dist:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRDist" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SIXTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>Near:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRNear" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- SEVENTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>IO:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRIO" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
													
													<!-- EIGTH ROW OF RIGHT GRID-->
													<div id="grid-row">
														<div id="grid-column">
															<p>UD:</p>
														</div>
														<div id="grid-column">
															<p><input type="number" name="updateRUD" value="" min="0" max="99.99" step="0.01"/></p>
														</div>
													</div>
												<!--END OF RIGHT GRID-->
												</div>
											</div>
										</div>
									<!--END OF MAIN GRID-->
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
												<p><input type ="number" name="deleteID" min="0" value="" required /> </p>
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
			2016 (c) Travis Gray, Halle Jackson
		</footer>
	</body>
</html>