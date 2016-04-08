function onSuccess(googleUser) {
	document.getElementById('misc').style.display = 'block';
	console.log('FUCK');
	console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
	console.log(googleUser.getBasicProfile().getName() + "\n" + googleUser.getBasicProfile().getEmail());
	//document.getElementById("UserInfo").innerHTML = googleUser.getBasicProfile().getName() + "\n" + googleUser.getBasicProfile().getEmail();
	//document.getElementById("SignOut").innerHTML = "Sign Out";

	/*
	Other options that we can get for googleUser.getBasicProfile():
	.getId()
	.getImageUrl()
	*/
}
function onFailure(error) {
	console.log(error);
}
function renderButton() {
	gapi.signin2.render('SignInButton', {
		'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
	});
	
	//document.getElementByID("misc").style.display = "none";
	
}
function signOut() {
	document.getElementById("UserInfo").innerHTML = "";
	document.getElementById("SignOut").innerHTML = "";

	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function () {
		console.log('User signed out.');
		document.getElementByID("misc").style.display = "none";
	});
}
