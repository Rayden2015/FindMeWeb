<?php
$dalTableregions = array();
$dalTableregions["region_id"] = array("type"=>3,"varname"=>"region_id");
$dalTableregions["region_name"] = array("type"=>200,"varname"=>"region_name");
$dalTableregions["country_id"] = array("type"=>3,"varname"=>"country_id");
$dalTableregions["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTableregions["updated_at"] = array("type"=>135,"varname"=>"updated_at");
	$dalTableregions["region_id"]["key"]=true;
$dal_info["regions"]=&$dalTableregions;

?>