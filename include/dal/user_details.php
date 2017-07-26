<?php
$dalTableuser_details = array();
$dalTableuser_details["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableuser_details["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser_details["town_id"] = array("type"=>3,"varname"=>"town_id");
$dalTableuser_details["verified"] = array("type"=>129,"varname"=>"verified");
$dalTableuser_details["verified_by"] = array("type"=>3,"varname"=>"verified_by");
$dalTableuser_details["photo"] = array("type"=>200,"varname"=>"photo");
$dalTableuser_details["latitude"] = array("type"=>200,"varname"=>"latitude");
$dalTableuser_details["longitude"] = array("type"=>200,"varname"=>"longitude");
$dalTableuser_details["find_me_code"] = array("type"=>200,"varname"=>"find_me_code");
$dalTableuser_details["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTableuser_details["updated_at"] = array("type"=>135,"varname"=>"updated_at");
	$dalTableuser_details["user_id"]["key"]=true;
$dal_info["user_details"]=&$dalTableuser_details;

?>