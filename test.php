<?php
include "includes/app.php";
load_view("template/top.php");

$a=Sqle::getArray("show columns from stores");
$b=array();

foreach($a as $i=>$row){
	$b[]=array($row["Field"]);
}

Disp::disp_table($b);


?>
<div align=center  >
	<div style='width:600px;border:solid #dddddd 1px;padding:10px;margin:10px;' >
	<?php
	load_view("template/login.php",array("msg"=>""));
	?>
	</div>
</div>
<?php
load_view("template/bottom.php");
closedb();
?>