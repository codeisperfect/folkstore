<?php
abstract class Funs{
	public static function loginaction(){
		$login=array("ec"=>1);
		if(ispost("login")){
			$login=handle_request(Fun::setifunset($_POST,"action","login"));
			if($login["ec"]>0){
				Fun::redirect("store.php");
			}
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