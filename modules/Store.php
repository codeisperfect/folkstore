<?php
class Store{
	function uploadproduct($data){
		$outp=array("ec"=>1,"data"=>0);
		if( isset($_FILES["uploadpics"])){
			$temp=Fun::getflds(getmyneed("uploadproduct"),$data);
			$temp['sid']=User::loginId();
			$temp['utime']=time();

			$ufiles=Fun::uploadfiles($_FILES["uploadpics"],array( ) );
			if($ufiles["ec"]>0){
				$temp["images"]=implode(",",$ufiles["outp"]);
				$temp["simages"]=implode(",",Fun::smallimg( Fun::myexplode(",",$temp["images"]), 300, 300));
				$temp["mimages"]=implode(",",Fun::smallimg( Fun::myexplode(",",$temp["images"]), 600, 600,'big'));
			}
			$odata=Sqle::insertVal("products",$temp);
		}
		else
			$outp["ec"]=-23;
		return $outp;
	}
}
?>