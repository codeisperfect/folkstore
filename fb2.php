<?php
include "includes/app.php";


include ( 'Facebook/FacebookSession.php' );
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
 
// init app with app id (APPID) and secret (SECRET)
FacebookSession::setDefaultApplication('457445971082606','b1ad6a0427a41fe42195da22797b91ac');
 
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper( 'http://getiitians.com/folkstore/fb2.php' );
 
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
 
if ( isset( $session ) ) {
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
    Fun::redirect($helper->getLoginUrl());
}

closedb();
?>