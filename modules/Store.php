<?php
class Store{
	function uploadproduct($data){
		global $_ginfo;
		$outp=array("ec"=>1,"data"=>0);
		if( isset($_FILES["uploadpics"])){
			$temp=Fun::getflds(getmyneed("uploadproduct"),$data);
			$temp['sid']=User::loginId();
			$temp['utime']=time();

			$ufiles=Fun::uploadfiles($_FILES["uploadpics"],array( ) );
			if($ufiles["ec"]>0){
				$temp["images"]=implode(",",$ufiles["outp"]);
				$temp["simages"]=implode(",",Fun::smallimg( Fun::myexplode(",",$temp["images"]), $_ginfo["searchimg_size"], $_ginfo["searchimg_size"]));
				$temp["mimages"]=implode(",",Fun::smallimg( Fun::myexplode(",",$temp["images"]),$_ginfo["productimg_size"] , $_ginfo["productimg_size"] ,'big'));
				$temp["bigimages"]=implode(",",Funs::biggestimg( Fun::myexplode(",",$temp["images"])  ));
			}
			$odata=Sqle::insertVal("products",$temp);
		}
		else
			$outp["ec"]=-23;
		return $outp;
	}
	function savedetails($data){
		$outp=array("ec" => 1, "data" => 0);
		$direct=array('address', 'zipcode', 'landmark', 'lat', 'lan', 'mobile', 'whatsapp', 'comptype', 'ownername', 'shopcatg', 'pan', 'tin', 'stex', 'stype', 'cstno', 'vatno', 'excisereg', 'aboutstore', 'industorytext');
		$insert_info=Fun::getflds($direct, $data);
		$insert_info["cityid"] = Sqle::insertValUniq( "city", array("name" => $data["city"]), "id" );
		$insert_info["stateid"] = Sqle::insertValUniq( "state", array("name" => $data["state"]), "id" );
		$insert_info["countryid"] = Sqle::insertValUniq( "country", array("name" => $data["country"]), "id" );
		$insert_info["sdate"]=time();
		Sqle::updateVal("stores", $insert_info, array("sid" => User::loginId() ));

		Sqle::updateVal("users", array("name" => $data["name"], "phone" => $data["mobile2"] ) ,array("id" => User::loginId()));
	}
}
?>