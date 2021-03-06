<?php

$_ginfo=array();

$_ginfo["default_user_type"]='s';



$view_default=array(
	'template/top.php'=>array(
		"title"=>"FolkStore",
		),
	'template/bottom.php'=>array(
		"needpopup"=>true,
		"dispbody"=>true
		),
	'template/login.php'=>array(
		"msg"=>"",
		"defval"=>null,
		"defopen"=>"login"
		),
	"template/mselect.php"=>array(
		"name"=>"",
		"data"=>"all",
		"divstyle"=>"",
		"blocked"=>array(),
		"selectall"=>true,
		"selectallselected"=>true,
		"label"=>""
		),
	"template/select.php"=>array(
		"name"=>"",
		"label"=>"",
		"selectval"=>"",
		"dc"=>"simple",
		"onchange"=>""
		),
	"template/select_bool.php"=>array(
		"label"=>"",
		"name"=>"",
		"options"=>array("Yes","No")
		),
	"template/popup.php"=>array(
		"title"=>"this popup is made in India",
		"body"=>"",
		"bodyinfo"=>array(),
		"footer"=>"",
		"footerinfo"=>array(),
		"name"=>"",
		'stylebody'=>'',
		'stylemain'=>'min-width:200px;',
		'defaultfooter'=>true
		),
	"popup.php"=>array(
		"title"=>"This popup is made in India",
		"body"=>"",
		"bodyinfo"=>array(),
		"footer"=>"",
		"footerinfo"=>array(),
		"name"=>"",
		'stylebody'=>'',
		'stylemain'=>'min-width:200px;'
	),
	"template/input.php"=>array(
		"inpattr"=>array(),
		"divattr"=>array(),
		"label"=>"Enter",
		"name"=>"",
		"type"=>"",
		"closediv"=>true
		),
	"input2"=>array(
		"inpattr"=>array("style" => "border-radius:2px;"),
		"divattr"=>array(),
		"label"=>"",
		"name"=>"",
		"type"=>"",
		"closediv"=>true,
		"dc"=>"simple",
		"icon"=>"",
		"ph"=>"",
		"id"=>"",
		"data"=>null
		),
	"check1"=>array(
		"onchange"=>"",
		"id"=>"",
		"label"=>"Check",
		"class"=>"mycheckbox",
		"inpattr"=>array(),
		"divattr"=>array("style"=>"margin-top:10px;"),
		"checked"=>null,
		"indiv"=>true,
		"value"=>"",
		"data" => null
		),
	);


$_ginfo["attributes"]=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href","value","src","selected","target","for","checked", "width", "height");



$_ginfo["attrs_shortcut"]=array("ph"=>"placeholder","dc"=>"data-condition");
$_ginfo["shoudnotnull"]=array("id","name", "style","class","type");


$_ginfo["action_constrain"]=array(
	"signup"=>array("need"=>array("name", "email1", "password1", "phone") ),
	"login"=>array("need"=>array("email","password")),
	"logout"=>array(),
	"uploadproduct"=>array("need"=>array("title","abouttext","price","sale","addinfo")),
	"savedetails"=>array("need" => array('name', 'address', 'city', 'state', 'zipcode', 'landmark', 'country', 'lat', 'lan', 'mobile', 'mobile2', 'whatsapp', 'ownername', 'shopcatg', 'pan', 'tin', 'stex', 'stype', 'cstno', 'vatno', 'excisereg', 'aboutstore', 'industorytext') ),
	"searchrefine" => array("need" => array())
);


 

$_ginfo["autoinsert"]=array(
);


$_ginfo["error"]=array(
	"-1"=>"Session expired",
	"-2"=>"You are not right person to perform this action.",
	"-3"=>"Incorrect formate of input",
	"-4"=>"Password incorrect",
	"-5"=>"Username doesn't exist",
	"-6"=>"Email id not registered",
	"-7"=>"Action handler not defined",
	"-8"=>"Session expired or You are not right person to perform this action.",
	"-9"=>"Not sufficient arguments.",
	"-16"=>"This email id used Already",
	"-17"=>"OTP is incorrect",
	"-18"=>"Some unknown error while creating account.",
	"-19"=>"You cannot choose slot of past.",
	"-20"=>"You Cannot generate link",
	"-21"=>"Your account deactivated",
	"-22"=>"Nobody is login",
	"-23"=>"File not uploaded",
	"1"=>"Positive"
);

$_ginfo["sorting"]=array(
	"Sort by price [ low to high ]"=>"",
	"Sort by price [ high to low ]"=>"",
	"Sort by vender rating"=>"",
	"Sort by last uploaded"=>"",
	);


$_ginfo["searchimg_size"]=400;
$_ginfo["productimg_size"]=600;


$_ginfo["pricefilter"] = array(
		array('<1000','price<1000'),
		array('1000-2000','1000<=price AND price<=2000'),
		array('>2000','2000<=price'),
);


$_ginfo["salefilter"] = array(
		array('< 20% ','sale<20'),
		array('20% - 50%','sale>=20 AND sale<=50'),
		array('> 50%','sale>50'),
);


?>