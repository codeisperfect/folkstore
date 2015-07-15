<?php
load_view("template/top.php");
load_view("template/navbarnew.php");

?>
<?php
	load_view("template/login.php", $inp);
?>
<?php
load_view("template/footer.php", $inp);
load_view("template/bottom.php");
?>