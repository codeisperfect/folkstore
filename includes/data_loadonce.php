<?php


$_ginfo["page"]=curfilename();
$view_default["template/navbar.php"]["islogin"]=User::loginType();
$view_default["template/footer.php"]["islogin"]=User::loginType();


$view_default["check2"] = mergeforce($view_default["check1"], array("class" => "filled-in group", "labattr" => array()));


?>