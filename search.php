<?php
include "includes/app.php";


$search = get("search");
$locsearch = get("locsearch");
$sresults=Sql::getArray("select * from products ");

foreach($sresults as $i=>$row){
	$row["images"]=myexplode(",",$row["images"]);
	$row["simages"]=myexplode(",",$row["simages"]);
	$row["title_short"]=Fun::maxspace($row["title"],25);
	$row["abouttext_short"]=Fun::maxspace($row["abouttext"],25);

	$need_to_conv=array("title","abouttext","abouttext_short", "title_short");
	foreach($need_to_conv as $j){
		$row[$j]=smilymsg($row[$j]);
	}
	$row["dispimg"]=count($row['simages'])>0?$row["simages"][0]:"photo/noimg.jpg";


	$sresults[$i]=$row;
}
$pageinfo["sresults"]=$sresults;


$pageinfo["search"] = $search;
$pageinfo["catgs"] = Fun::idtovalarr(Sqle::getA("select * from shopcatgs"), "id", "name");
load_view("search.php",$pageinfo);



closedb();
?>

<script type="text/javascript">
</script>
</body>
</html>
