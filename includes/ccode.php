<?php

if(User::isloginas("s")){
	$uploadproduct=handle_request(Fun::mergeifunset($_POST,array("action"=>"uploadproduct")));
}

?>