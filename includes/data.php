<?php
$_ginfo=array();

$_ginfo["default_user_type"]='u';


$view_default=array(
	'template/top.php'=>array(
		"title"=>"FolkStore",
		),
	'template/bottom.php'=>array(
		"needpopup"=>true,
		"dispbody"=>true
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
		'stylemain'=>'min-width:200px;'
		)
	);


$_ginfo["attributes"]=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href","value","src");
$_ginfo["attrs_shortcut"]=array("ph"=>"placeholder","dc"=>"data-condition");

$_ginfo["action_constrain"]=array(
	"signup"=>array("need"=>array("name","email","password")),
	"login"=>array("need"=>array("email","password")),
	"logout"=>array("need"=>array()),
	"sendmsg"=>array("need"=>array("msg","rid","type","formid"),"users"=>"au","isfilter"=>"sisi"),
	"loadmsg"=>array("need"=>array("uid","num_msg","minid","maxid","is_load_newer"),"users"=>"au","isfilter"=>""),
	"addcontent"=>array("need"=>array("title","data","catg"),"isfilter"=>"ssi"),
	"addform"=>array("need"=>array("formjson","title","catg"),"isfilter"=>"ssi"),
	"addingroup"=>array("need"=>array("gid","uids")),
	"creategroup"=>array("need"=>array("uids","name")),
	"addgoal"=>array("need"=>array("title","expiredate","type")),
	"set_goalstatus"=>array("need"=>array("gid","status")),
	"get_goals"=>array("need"=>array("type")),
	"get_allpastgoals"=>array(),
	"addexercise"=>array("needs"=>array("title","content"))
);


$_ginfo["autoinsert"]=array(
	"addcontent"=>array("fixed"=>array("time","uid"),"table"=>"content"),
	"addform"=>array("fixed"=>array("time"),"table"=>"forms"),
	"addexercise"=>array("fixed"=>array("time","uid"),"table"=>"exercise")
);


?>