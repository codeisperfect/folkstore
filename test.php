<?php
include "includes/app.php";
load_view("template/top.php");


echo Fun::timetostr(strtotime("2015-6-1 19:49:38"));


?>

<?php

load_view("template/bottom.php");
closedb();
?>