<?php
include "includes/app.php";


$data=(array)json_decode(file_get_contents("data/tmp/json_data.json"));



$names=array("city","state","country","companyname","shopcatgs","brands");

foreach($names as $i=>$val){
	$query="insert into ".$val." select * from (".Fun::makeDummyTableColumns($data[$val],null,'is').")temp ";
	echo Sql::query($query);
}





closedb();
?>