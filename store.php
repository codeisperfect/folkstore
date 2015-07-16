<?php
include "includes/app.php";

$sid=0+get("sid",User::loginId());

$savedetails=handle_request(Fun::setifunset($_POST, "action", "savedetails"));
$pageinfo["savedetails"] = $savedetails;

$sinfo = Funs::storeinfo($sid);
// select sid,brand2wheel,group_concat(brands.name) from stores left join brands on ( concat(",",brand2wheel,",") like concat("%,",brands.id,",%") ) group by sid;

Fun::redirectinv($sinfo==null || ($sinfo["sdate"]==null && $sid!=User::loginId()) );
Fun::redirect(HOST."edit.php", ($sinfo["sdate"]==null && $sid==User::loginId()) );

$needtoconv=array('name', 'address', 'cityname', 'statename', 'zipcode', 'landmark', 'countryname', 'lat', 'lan', 'mobile', 'phone', 'whatsapp', 'comptype', 'ownername', 'shopcatg', 'pan', 'tin', 'stex', 'stype', 'cstno', 'vatno', 'excisereg', 'aboutstore', 'industorytext');

foreach($needtoconv as $i=>$val) {
	$sinfo[$val] = convchars($sinfo[$val]);
}



if($sinfo["address2"]!="")
	$sinfo["address"].=("<br>".$sinfo["address2"]);
$sinfo["lat"]=number_format($sinfo["lat"],3);
$sinfo["lan"]=number_format($sinfo["lan"],3);



$sinfo["pan_details"]=dict2keyval(array(
	"Pan No."=>$sinfo["pan"],
	"Tin No."=>$sinfo["tin"],
	"Service Tax No."=>$sinfo["stex"],
	"Service Type"=>$sinfo["stype"],
	"CST No." => $sinfo["cstno"] ,
	"VAT No."=>$sinfo["vatno"] ,
	"Excise Registration No."=>$sinfo["excisereg"],
	"Adhar Card"=>$sinfo["acard"],
	"Licence"=>$sinfo["licence"],
	));

$pageinfo["sinfo"]=$sinfo;


load_view("store.php",$pageinfo);

closedb();
?>