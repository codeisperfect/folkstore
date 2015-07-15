<?php
include "includes/app.php";
load_view("template/top.php");

?>
<div style='border:solid gray 1px;margin:50px;' >
<?php
	$login["signupmsg"] = 1;
	$login["loginmsg"] = 1;
	load_view("template/login.php", $login);
?>
</div>

<?php

load_view("template/bottom.php");
closedb();
?>


