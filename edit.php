<?php
include "includes/app.php";


load_view("template/top.php");


load_view("template/navbar.php");

load_view("edit.php",$pageinfo);

?>


<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);



closedb();
?>
