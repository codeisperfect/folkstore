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
}
?>