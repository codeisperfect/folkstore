<?php
include "includes/app.php";
load_view("template/top.php");


?>
<div align=center  >
	<div style='width:600px;border:solid #dddddd 1px;padding:10px;margin:10px;' >
	<?php
	load_view("template/uploadproduct.php");
	?>
	</div>
</div>
<?php
load_view("template/bottom.php");
closedb();
?>