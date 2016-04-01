<!DOCTYPE html>
<html>

	<head>
		<title>Clearly Glasses</title>
		
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">

		<link href="Glasses.css" rel="stylesheet" type="text/css" /> <!-- For our future css script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        	</script> <!-- if we want jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> <!-- For Angular Javascript-->
    </head>
    
	<body>
	 	<div class="sidebar" id="sidebar">
			<p>
			<span id = "header">Clearly Glasses</span>
			<a href="controller-home.php">Home</a>
			<a href="controller-employee.php">Employee</a>					
			<a href="controller-customer.php">Customer</a>					
			<a href="controller-purchase.php">Purchase</a>					
			<a href="view-login.php">Log Out</a>									
			</p>
		</div>
		
    	<p>This site was created and made so glasses store owners could manage their employees, customers, and purchases.</p>
				
<!-- ===============================================GOOGLE MAP API ======================================================== -->
				
		<p><div id="map"></div></p>
		<script>
			// Script taken from https://developers.google.com/maps/documentation/javascript/examples/map-geolocation
		
			// Note: This example requires that you consent to location sharing when
			// prompted by your browser. If you see the error "The Geolocation service
			// failed.", it means you probably did not give permission for the browser to
			// locate you.

			function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: -34.397, lng: 150.644},
					zoom: 6
				});
				var infoWindow = new google.maps.InfoWindow({map: map});

				// Try HTML5 geolocation.
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
						var pos = {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						};

						infoWindow.setPosition(pos);
						infoWindow.setContent('Location found.');
						map.setCenter(pos);
					}, function() {
						handleLocationError(true, infoWindow, map.getCenter());
					});
				} else {
					// Browser doesn't support Geolocation
					handleLocationError(false, infoWindow, map.getCenter());
				}
			}

			function handleLocationError(browserHasGeolocation, infoWindow, pos) {
				infoWindow.setPosition(pos);
				infoWindow.setContent(browserHasGeolocation ?
							'Error: The Geolocation service failed.' :
							'Error: Your browser doesn\'t support geolocation.');
			}
		</script> 
				
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWBzxQ0jyeWyLm-Wb0LCikofUWuvVhUaU&callback=initMap">
		</script>
<!-- ===============================================GOOGLE MAP API ======================================================== -->
    
	<br>
	
    <footer id="footer">
    	2016 (c) Travis Gray, Halle Jackson
    </footer>
	</body> 
</html>