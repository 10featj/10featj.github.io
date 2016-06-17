<html>
<head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="751235139565-f09p8tqqj4j2k67c35vm3pacrk5iuvj8.apps.googleusercontent.com">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  document.write('Name: ' + profile.getName());
  var $email = profile.getEmail();
  var $proimage = profile.getImageUrl();
  var id_token = googleUser.getAuthResponse().id_token;
  var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token='+ id_token);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		console.log('Signed in as: ' + xhr.responseText);
	};	
xhr.send('idtoken=' + id_token);
$.ajax({
			type: "POST",
			url: "gdu.php",
			dataType: 'html',
			data: {email: $email,},
			success: function(){
						/* Remove the alert when you got it working they where just for tests */			
				}
			});
}




</script>


<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

</script>
</body>
</html>