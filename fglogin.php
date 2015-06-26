<?php
include "includes/app.php";

require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/FacebookHttpable.php' );
require_once( 'Facebook/FacebookCurl.php' );
require_once( 'Facebook/FacebookCurlHttpClient.php' );

 
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;


if(isget("fblogin")){
		 
	 
	// init app with app id (APPID) and secret (SECRET)
	FacebookSession::setDefaultApplication('1002370053127010','c0ce96e351a4f9c702cda90139970975');
	 
	// login helper with redirect_uri
	$helper = new FacebookRedirectLoginHelper( 'http://getiitians.com/folkstore/fglogin.php?fbogin' );
	 
	try {
		$session = $helper->getSessionFromRedirect();
	} catch( FacebookRequestException $ex ) {
		// When Facebook returns an error
	} catch( Exception $ex ) {
		// When validation fails or other local issues
	}
	 
	// see if we have a session
	if ( isset( $session ) ) {
		echo 'mohit';
		// graph api request for user data
		$request = new FacebookRequest( $session, 'GET', '/me' );
		$response = $request->execute();
		// get response
		$graphObject = $response->getGraphObject();
		 
		$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
		$fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
		$fbemail = $graphObject->getProperty('email');

		echo $fbid;
		echo $fbfullname;
		echo $fbemail;
		 
	} else {
		echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
	}
}
else if(isget("googlelogin")){

	require_once 'Google/google-api-php-client/src/Google/autoload.php';

	 $client_id = '61668863490-vbrmmltmvjeqkmkmd2r1ntac91e8kliq.apps.googleusercontent.com';
	 $client_secret = '5vGnL-JhT1DinYVDSggeOdif';
	 $redirect_uri = 'http://getiitians.com/folkstore/fglogin.php?googlelogin';
	 $simple_api_key = 'AIzaSyBJofNDlKImQgIq_eGx0IruHsp2JdnTriY';
	 
	//Create Client Request to access Google API
	$client = new Google_Client();
	$client->setApplicationName("FolksStore");
	$client->setClientId($client_id);
	$client->setClientSecret($client_secret);
	$client->setRedirectUri($redirect_uri);
	$client->setDeveloperKey($simple_api_key);
	$client->addScope("https://www.googleapis.com/auth/userinfo.email");

	//Send Client Request
	$objOAuthService = new Google_Service_Oauth2($client);

	//Logout
	if (isset($_REQUEST['logout'])) {
	  unset($_SESSION['access_token']);
	  $client->revokeToken();
	  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL)); //redirect user back to page
	}

	//Authenticate code from Google OAuth Flow
	//Add Access Token to Session
	if (isset($_GET['code'])) {
	  $client->authenticate($_GET['code']);
	  $_SESSION['access_token'] = $client->getAccessToken();
	  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
	}

	//Set Access Token to make Request
	if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
	  $client->setAccessToken($_SESSION['access_token']);
	}

	//Get User Data from Google Plus
	if ($client->getAccessToken()) {
	  $userData = $objOAuthService->userinfo->get();
	 // print_r($userData);
	  $gemail=$userData['email'];
	  $gname=$userData['name'];
	  echo $gemail;
	  //echo $gname;
	  $_SESSION['access_token'] = $client->getAccessToken();
	} else {
	  $authUrl = $client->createAuthUrl();
	}
	
}
else
 echo "No Args";


closedb();
?>
