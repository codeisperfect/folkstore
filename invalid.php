<?php
include "includes/app.php";
$pageinfo["login"]=Funs::loginaction();

load_view("template/top.php");
load_view("template/navbar.php");


?>

<div style="height:300px;padding:100px;" >
	Hey guys, This page is invalid.
</div>

<?php
load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);
closedb();
?>