<?php
include "includes/app.php";



function dt($tn){
	echo Sql::query("drop table ".$tn);
}


function drop_tables(){
	$tl=array("users","stores","city","state","country","companytype","shopcatgs","brands","products");
//	$tl=array("users","stores");
	foreach($tl as $i=>$val){
		dt($val);
	}
}

function drop_all(){
	$allt=Sql::getArray("show tables");
	foreach($allt as $i=>$val){
		dt($val["Tables_in_mohit"]);
	}
}

function make_table(){
	echo Sql::query("CREATE TABLE users (id int NOT NULL AUTO_INCREMENT,username varchar(100), password varchar(100) , email varchar(100) ,  name varchar(100) , address varchar(500) , phone varchar(13) , type varchar(3) , create_time int,update_time int , last_login int,last_ip varchar(20),conf varchar(1),econf varchar(1), PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE users add profilepic varchar(100) NULL ");
	echo Sql::query("ALTER TABLE users add dob int NULL ");



	echo Sql::query("CREATE TABLE city (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE state (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE country (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE companytype (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE shopcatgs (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE brands (id int NOT NULL AUTO_INCREMENT, name varchar(100), PRIMARY KEY ( id) ) ");


	echo Sql::query("CREATE TABLE stores (sid int, sdate int, address varchar(1000), address2 varchar(100), cityid int, stateid int, zipcode varchar(10), countryid int, landmark varchar(100), lat float, lan float, mobile varchar(20), whatsapp varchar(20), comptype int, ssaf varchar(100), ownername varchar(100), year int, shopcatg int, servrange varchar(100), dealsin varchar(200), brand2wheel varchar(100), brand3wheel varchar(100), brand4wheel varchar(100), bustruckaxel varchar(100), servicedelarea varchar(100), pan varchar(100), tin varchar(100), stex varchar(100), stype varchar(100), cstno varchar(100), vatno varchar(100), excisereg varchar(100), acard varchar(100), licence varchar(100), photo varchar(100)  ) ");


	echo Sql::query("CREATE TABLE msg (id int NOT NULL AUTO_INCREMENT, sid int, rid int, aid int, msgid int, isseen varchar(1), PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE msgdata (id int NOT NULL AUTO_INCREMENT, msg varchar(1000), type varchar(1), formid int, time int, PRIMARY KEY ( id) ) ");

	echo Sql::query("CREATE TABLE products (id int NOT NULL AUTO_INCREMENT,sid int,title varchar(100),abouttext varchar(10000),price int,sale int,images varchar(500),status varchar(1),aclosedate int,addinfo varchar(1000),warranty varchar(1000),deptt int,PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE products add utime int");
	echo Sql::query("ALTER TABLE products add bwimages varchar(500)");
	echo Sql::query("ALTER TABLE products add simages varchar(500)");
	echo Sql::query("ALTER TABLE products add mimages varchar(500)");
	echo Sql::query("ALTER TABLE products add sbwimages varchar(500)");
}




//drop_tables();
make_table();

closedb();

?>
<br>