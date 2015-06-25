<?php
include "includes/app.php";

Fun::issetlogout();

$pageinfo["topcity"]=array("Delhi","Jaipur","Mumbai");

//print_r($pageinfo["login"]);


load_view("template/top.php");

load_view("template/navbar.php");

load_view("index.php",$pageinfo);

?>



<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);


closedb();
?>