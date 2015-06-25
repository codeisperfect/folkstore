<?php

$pageinfo=array();

if(User::isloginas("s")){
	$uploadproduct=handle_request(Fun::mergeifunset($_POST,array("action"=>"uploadproduct")));
}
if(!User::islogin()){
	$pageinfo["login"]=Funs::loginaction();	
}

$pageinfo["shopcatgs"]=Fun::dbarrtooption(Sqle::selectVal("shopcatgs", "*", array()), "id", "name");


?>