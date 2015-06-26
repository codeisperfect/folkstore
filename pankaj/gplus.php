<?php
session_start();

//ini_set('include_path', '/var/www/html/folkstore/pankaj/Google/');

//Google API PHP Library includes
//require_once 'Google/Client.php';
//require_once 'Google/Service/Oauth2.php';
// Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
require_once 'Google/google-api-php-client/src/Google/autoload.php';

 $client_id = '61668863490-vbrmmltmvjeqkmkmd2r1ntac91e8kliq.apps.googleusercontent.com';
 $client_secret = '5vGnL-JhT1DinYVDSggeOdif';
 $redirect_uri = 'http://getiitians.com/folkstore/pankaj/gplus.php';
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
?>

<a href="<?php echo $authUrl; ?>">Gplus login</a>