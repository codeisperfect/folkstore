<?php
include "includes/app.php";

Fun::issetlogout();

$pageinfo=array();
$pageinfo["login"]=Funs::loginaction();


load_view("template/top.php");

load_view("template/navbar.php");

load_view("index.php");

?>



<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);


closedb();
?>