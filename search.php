<?php
include "includes/app.php";
$pageinfo=array();

$pageinfo["login"]=Funs::loginaction();

$pageinfo["dispbody"]=false;

$sresults=Sql::getArray("select * from products ");
foreach($sresults as $i=>$row){
	$row["images"]=myexplode(",",$row["images"]);
	$row["simages"]=myexplode(",",$row["simages"]);
	$row["abouttext_short"]=Fun::maxspace($row["abouttext"],70);

	$need_to_conv=array("title","abouttext","abouttext_short");
	foreach($need_to_conv as $j){
		$row[$j]=smilymsg($row[$j]);
	}
	$sresults[$i]=$row;
}
$pageinfo["sresults"]=$sresults;


load_view("template/top.php");


load_view("template/navbar.php");

load_view("search.php",$pageinfo);

?>



<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);



closedb();
?>

<script type="text/javascript">
</script>
</body>
</html>
