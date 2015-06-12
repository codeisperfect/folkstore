<?php
class Store{
	function uploadproduct($data){
		$outp=array("ec"=>1,"data"=>0);
		if( isset($_FILES["uploadpics"])){
			$temp=Fun::getflds(getmyneed("uploadproduct"),$data);
			$temp['sid']=User::loginId();
			$temp['utime']=time();

			$ufiles=Fun::uploadfiles($_FILES["uploadpics"],array( ) );
			print_r($ufiles);

			if($ufiles["ec"]>0)
				$temp["images"]=implode(",",$ufiles["outp"]);
			$odata=Sqle::insertVal("products",$temp);
		}
		else
			$outp["ec"]=-23;
		return $outp;
	}
}
?>
