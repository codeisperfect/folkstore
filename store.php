<?php
include "includes/app.php";
load_view("template/top.php");

load_view("template/navbar.php");

load_view("store.php");

?>



<?php
load_view("template/footer.php");
load_view("template/bottom.php");


closedb();
?>