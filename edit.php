<?php
include "includes/app.php";


$sid=0+get("sid",User::loginId());

$sinfo = Funs::storeinfo($sid);
Fun::redirectinv($sinfo==null );

$sinfo["city"]=$sinfo["cityname"];
$sinfo["state"]=$sinfo["statename"];
$sinfo["country"]=$sinfo["countryname"];
$sinfo["estd"]="";
$sinfo["mobile2"]=$sinfo["phone"];

$pageinfo["sinfo"]=$sinfo;



load_view("edit.php",$pageinfo);



closedb();
?>
