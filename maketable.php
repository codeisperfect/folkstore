<?php
include "includes/app.php";


//echo $DB->query("DROP TABLE users");
//echo $DB->query("DROP TABLE apply");
//echo $DB->query("DROP TABLE notf");
//echo $DB->query("DROP TABLE products");

echo $DB->query("CREATE TABLE users (id int NOT NULL AUTO_INCREMENT,username varchar(100), password varchar(100) , email varchar(100) ,  name varchar(100) , address varchar(500) , phone varchar(13) , type varchar(3) , create_time int,update_time int , last_login int,last_ip varchar(20),conf varchar(1),econf varchar(1), PRIMARY KEY ( id) ) ");
echo $DB->query("ALTER TABLE users add conf varchar(1) NULL ");
echo $DB->query("ALTER TABLE users add profilepic varchar(100) NULL ");
echo $DB->query("ALTER TABLE users add profilepics varchar(1000) NULL ");
echo $DB->query("ALTER TABLE users add bgprofilepic varchar(1000) NULL ");
echo $DB->query("ALTER TABLE users add bgprofilepics varchar(1000) NULL ");




echo $DB->query("CREATE TABLE subs (id int NOT NULL AUTO_INCREMENT,email varchar(100),  time int,  unsubs char(1) , PRIMARY KEY ( id) ) ");
//unsusb : 't' or 'f'


echo $DB->query("CREATE TABLE products (id int NOT NULL AUTO_INCREMENT,sid int,title varchar(100),abouttext varchar(10000),price int,sale int,images varchar(500),status varchar(1),aclosedate int,addinfo varchar(1000),warranty varchar(1000),deptt int,PRIMARY KEY ( id) ) ");
echo $DB->query("ALTER TABLE products add utime int");
echo $DB->query("ALTER TABLE products add bwimages varchar(500)");
echo $DB->query("ALTER TABLE products add simages varchar(500)");
echo $DB->query("ALTER TABLE products add sbwimages varchar(500)");




echo $DB->query("CREATE TABLE comments (id int NOT NULL AUTO_INCREMENT,uid int,time int,isedited varchar(1),ctext varchar(1000), PRIMARY KEY ( id) ) ");
echo $DB->query("ALTER TABLE comments add pid int");


echo $DB->query("CREATE TABLE likes (pid int,uid int,time int,type varchar(2),UNIQUE (pid,uid,type)) ");

echo $DB->query("CREATE TABLE notf (id int NOT NULL AUTO_INCREMENT, uid int, content varchar(1000),time int,isr varchar(1), url varchar(100), PRIMARY KEY ( id) ) ");
echo $DB->query("ALTER TABLE notf add sid int NULL ");


echo $DB->query("CREATE TABLE tags (id int NOT NULL AUTO_INCREMENT,uid int,sid int,content varchar(1000),time int,conf varchar(1), PRIMARY KEY ( id) ) ");


echo $DB->query("CREATE TABLE stores (sid int,abouttext varchar(1000) ) ");

echo $DB->query("CREATE TABLE requests ( id int NOT NULL AUTO_INCREMENT,content varchar(1000),time int,type varchar(1),PRIMARY KEY ( id) ) ");
echo $DB->query("ALTER TABLE requests add uid int NULL ");






?>
<br>
http://10.192.14.39/ns/maketable.php
10.208.23.143