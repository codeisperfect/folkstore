<?php
include "includes/app.php";

Fun::issetlogout();

$pageinfo["topcity"]=array("Delhi","Jaipur","Mumbai");

//print_r($pageinfo["login"]);



load_view("index1.php",$pageinfo);




closedb();
?>