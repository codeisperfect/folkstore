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
	"template/input.php"=>array(
		"inpattr"=>array(),
		"divattr"=>array(),
		"label"=>"Enter",
		"name"=>"",
		"type"=>"",
		"closediv"=>true
		)
	);


$_ginfo["attributes"]=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href","value","src","height","width");
$_ginfo["attrs_shortcut"]=array("ph"=>"placeholder","dc"=>"data-condition");
$_ginfo["shoudnotnull"]=array("id","name","value","style","class","type");


$_ginfo["action_constrain"]=array(
	"signup"=>array("need"=>array("name","email","password")),
	"login"=>array("need"=>array("email","password")),
	"logout"=>array("need"=>array()),
	"sendmsg"=>array("need"=>array("msg","rid","type","formid"),"users"=>"au","isfilter"=>"sisi"),
	"loadmsg"=>array("need"=>array("uid","num_msg","minid","maxid","is_load_newer"),"users"=>"au","isfilter"=>""),
	"uploadproduct"=>array("need"=>array("title","abouttext","price","sale","addinfo"))
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


$_ginfo["searchimg_size"]=300;
$_ginfo["productimg_size"]=600;


?>
