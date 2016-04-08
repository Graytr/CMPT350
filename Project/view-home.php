<!DOCTYPE html>
<html>

	<head>
		<title>Clearly Glasses</title>
		
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<meta name="google-signin-client_id" content="407820756770-1lfil5lrikof16pool20ssccsur83oav.apps.googleusercontent.com">

		<link href="Glasses.css" rel="stylesheet" type="text/css" />
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- if we want jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> <!-- For Angular Javascript-->

    	<meta name="google-signin-client_id" content="407820756770-1lfil5lrikof16pool20ssccsur83oav.apps.googleusercontent.com">

		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
		<script>
			function onSuccess(googleUser) {
			  console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
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
	<span id="my-signin2"></span>	
    	2016 (c) Travis Gray, Halle Jackson
    </footer>
	</body> 
</html>
