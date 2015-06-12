<?php
include "includes/app.php";


$data=(array)json_decode(file_get_contents("data/tmp/json_data.json"));




if(true){
	$names=array("city","state","country","companytype","shopcatgs","brands");
	foreach($names as $i=>$val){
		$query="insert into ".$val." select * from (".Fun::makeDummyTableColumns($data[$val],null,'is').")temp ";
		echo Sql::query($query);
	}
}

$alls=$data["stores"];
foreach($alls as $i=>$val){
	$pass=rand(1000000,9999999);
	$sh=handle_request(array("email"=>$val[1],"name"=>$val[0],"password"=>$pass,"action"=>"signup"));
	$sa=array_slice($val,2,34);
	$sa[0]=strtotime($sa[0]);
	echo $sh["ec"]."<br>";
	if($sh["ec"]>0){
		array_unshift($sa,$sh["data"]["id"]);
		$query="insert into stores select * from (".Fun::makeDummyTableColumns(array($sa),null,'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss')." ) temp";
		echo $query;
		echo Sql::query($query);
	}
}

Sql::query("update users set password='p'");


closedb();
?>