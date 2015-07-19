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
		$login["signupmsg"] = errormsg($login["signupec"]);
		$login["loginmsg"] = errormsg($login["loginec"]);
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
	public static function storeinfo($sid){
		return Sqle::getRow("select shopcatgs.name as shopcatgname, users.phone, users.name,users.email,stores.*,city.name as cityname,state.name as statename,country.name as countryname from stores left join users on users.id=stores.sid left join city on city.id=stores.cityid left join state on state.id=stores.stateid left join country on stores.countryid=country.id left join shopcatgs on shopcatgs.id=stores.shopcatg where stores.sid=? limit 1",'i',array(&$sid));
	}
	public static function productinfo($pid){
		return Sqle::getRow("select users.name as sellername, stores.address, stores.mobile, products.* from products left join users on users.id=products.sid left join stores on stores.sid=products.sid where products.id=? limit 1", 'i', array(&$pid),$pid==0);
	}

	public static function dispproductinfo($sresults) {
		foreach($sresults as $i=>$row){
			$row["images"]=myexplode(",",$row["images"]);
			$row["simages"]=myexplode(",",$row["simages"]);
			$row["abouttext_short"]=Fun::maxspace($row["abouttext"],80);

			$need_to_conv=array("title","abouttext","abouttext_short");
			foreach($need_to_conv as $j){
				$row[$j]=smilymsg($row[$j]);
			}
			$row["dispimg"]=count($row['simages'])>0?$row["simages"][0]:"photo/noimg.jpg";


			$sresults[$i]=$row;
		}
		return $sresults;
	}
}
?>