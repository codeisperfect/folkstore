<?php
include "includes/app.php";

$pid=0+get("pid");
$pinfo=Sqle::getRow("select * from products where id=? limit 1", 'i', array(&$pid),$pid==0);
Fun::redirectinv($pinfo==null);

$pinfo["images"]=myexplode(",",$pinfo["images"]);
$pinfo["simages"]=myexplode(",",$pinfo["simages"]);
$pinfo["mimages"]=myexplode(",",$pinfo["mimages"]);
$pinfo["abouttext_short"]=Fun::maxspace($pinfo["abouttext"],70);

$need_to_conv=array("title","abouttext","abouttext_short");
foreach($need_to_conv as $j){
	$pinfo[$j]=smilymsg($pinfo[$j]);
}
$pinfo["dispimg"]=count($pinfo['mimages'])>0?$pinfo["mimages"][0]:"photo/noimg.jpg";

$pageinfo["pinfo"]=$pinfo;
$pageinfo["pid"]=$pid;
$pageinfo["dispinfo"]=array(
	"Price"=>$pinfo["price"]." Rs.",
	"Sale"=>$pinfo["sale"]." %",
	"Price to paid"=>ceil($pinfo['price']*(100-$pinfo['sale'])/100.0)." Rs.",
	"Category"=>"Automobiles",
	"Seller"=>"<a href='' >Seller Name</a>",
	"Contact at"=>"",
	"Store Address"=>""
);


load_view("template/top.php");


load_view("template/navbar.php");

load_view("product.php",$pageinfo);

?>



<?php


load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);



closedb();
?>
