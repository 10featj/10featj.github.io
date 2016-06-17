<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '751235139565-f09p8tqqj4j2k67c35vm3pacrk5iuvj8.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'IvMcj8Xnh8HG0alEEAsrs6Y0'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/JwB/googlelogintests/index.php';  //return url (url to script)
$homeUrl = 'http://localhost/JwB/googlelogintests';  //return to home

/**
 * Google Client Configuration
**/
$gClient = new Google_Client();
$gClient->setApplicationName('Login to codexworld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>