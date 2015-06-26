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

load_view("template/top.php");


load_view("template/navbar.php");

load_view("edit.php",$pageinfo);

?>


<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);



closedb();
?>
