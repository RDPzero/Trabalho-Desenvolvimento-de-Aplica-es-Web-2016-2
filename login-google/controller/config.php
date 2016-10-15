<?php
session_start();
include_once("../src/Google_Client.php");
include_once("../src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '321817717343-mh5tv5gk3blgcrp7rpd1ld6unmkjlrjp.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'Hr14x5R7-HzevKZr9QyaDlGR'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/login-google/view/login.php';  //return url (url to script)
$homeUrl = 'http://localhost/login-google/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login with google');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>