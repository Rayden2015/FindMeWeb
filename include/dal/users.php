<?php
$dalTableusers = array();
$dalTableusers["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableusers["name"] = array("type"=>200,"varname"=>"name");
$dalTableusers["phone"] = array("type"=>200,"varname"=>"phone");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password");
$dalTableusers["verification_code"] = array("type"=>200,"varname"=>"verification_code");
$dalTableusers["phone_verified"] = array("type"=>16,"varname"=>"phone_verified");
$dalTableusers["active"] = array("type"=>16,"varname"=>"active");
$dalTableusers["added_by"] = array("type"=>3,"varname"=>"added_by");
$dalTableusers["type_id"] = array("type"=>3,"varname"=>"type_id");
$dalTableusers["remember_token"] = array("type"=>200,"varname"=>"remember_token");
$dalTableusers["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTableusers["updated_at"] = array("type"=>135,"varname"=>"updated_at");
$dalTableusers["identifier"] = array("type"=>200,"varname"=>"identifier");
	$dalTableusers["user_id"]["key"]=true;
$dal_info["users"]=&$dalTableusers;

?>