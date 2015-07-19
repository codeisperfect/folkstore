<?php
include "includes/app.php";

$pid=0+get("pid");
$pinfo=Funs::productinfo($pid);
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
	"Seller"=>"<a href='".(HOST."store.php?sid=".$pinfo["sid"])."' >".$pinfo["sellername"]."</a>",
	"Contact at"=>$pinfo["mobile"],
	"Store Address"=>$pinfo["address"]
);




load_view("product.php",$pageinfo);


closedb();
?>
