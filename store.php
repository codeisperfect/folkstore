<?php
include "includes/app.php";

$sid=0+get("sid",User::loginId());



$sinfo=Sqle::getRow("select shopcatgs.name as shopcatgname,  users.name,users.email,stores.*,city.name as cityname,state.name as statename,country.name as countryname from stores left join users on users.id=stores.sid left join city on city.id=stores.cityid left join state on state.id=stores.stateid left join country on stores.countryid=country.id left join shopcatgs on shopcatgs.id=stores.shopcatg where stores.sid=? limit 1",'i',array(&$sid));

// select sid,brand2wheel,group_concat(brands.name) from stores left join brands on ( concat(",",brand2wheel,",") like concat("%,",brands.id,",%") ) group by sid;
Fun::redirectinv($sinfo==null);





$pageinfo=array();
$pageinfo["login"]=Funs::loginaction();
if($sinfo["address2"]!="")
	$sinfo["address"].=("<br>".$sinfo["address2"]);
$sinfo["lat"]=number_format($sinfo["lat"],3);
$sinfo["lan"]=number_format($sinfo["lan"],3);

$sinfo["pan_details"]=dict2keyval(array(
	"Pan No."=>$sinfo["pan"],
	"Tin No."=>$sinfo["tin"],
	"Service Tax No."=>$sinfo["stex"],
	"Service Type"=>$sinfo["stype"],
	"CST No."=>$sinfo["cstno"],
	"VAT No."=>$sinfo["vatno"],
	"Excise Registration No."=>$sinfo["excisereg"],
	"Adhar Card"=>$sinfo["acard"],
	"Licence"=>$sinfo["licence"],
	));

$pageinfo["sinfo"]=$sinfo;

load_view("template/top.php");
load_view("template/navbar.php");

load_view("store.php",$pageinfo);

?>



<?php
load_view("template/footer.php",$pageinfo);
load_view("template/bottom.php",$pageinfo);


closedb();
?>