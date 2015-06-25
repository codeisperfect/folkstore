<?php
abstract class Funs{
	public static function loginaction(){
		$login=array("loginec"=>1, "signupec"=>1);
		if(ispost("login") || ispost("signup") ){
			$reqtype=ispost("login") ? "login" : "signup" ;
			$login=handle_request( Fun::setifunset( $_POST, "action", $reqtype) );
			if($login["ec"] > 0)
				Fun::redirect("store.php");
			$login[$reqtype."ec"]=$login["ec"];
		}
		return $login;
	}
	public static function biggestimg($imgarr){
		global $_ginfo;
		$outp=array();
		foreach($imgarr as $i=>$val){
			$ext=pathinfo($val,PATHINFO_EXTENSION);
			$imginfo=getimagesize($val);
			list($w,$h)=$imginfo;
			$ewh=min($w,$h);
			if($ewh>$_ginfo["productimg_size"]){
				$fn="data/files/".Fun::getuploadfilename($ext,'biggest'.$i);
				resizeimg($val,$fn, $ewh, $ewh);
				$outp[]=$fn;
			}
			else
				$outp[]=$val;
		}
		return $outp;
	}
}
?>