<?php
include "includes/app.php";

$pageinfo["dispbody"]=false;

$sresults=Sql::getArray("select * from products ");
foreach($sresults as $i=>$row){
	$row["images"]=myexplode(",",$row["images"]);
	$row["simages"]=myexplode(",",$row["simages"]);
	$row["abouttext_short"]=Fun::maxspace($row["abouttext"],80);

	$need_to_conv=array("title","abouttext","abouttext_short");
	foreach($need_to_conv as $j){
		$row[$j]=smilymsg($row[$j]);
	}
	$row["dispimg"]=count($row['simages'])>0?$row["simages"][0]:"photo/noimg.jpg";


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
