<?php
$dalTablecountries = array();
$dalTablecountries["country_id"] = array("type"=>3,"varname"=>"country_id");
$dalTablecountries["country_code"] = array("type"=>200,"varname"=>"country_code");
$dalTablecountries["country_name"] = array("type"=>200,"varname"=>"country_name");
$dalTablecountries["activated"] = array("type"=>16,"varname"=>"activated");
$dalTablecountries["currency"] = array("type"=>200,"varname"=>"currency");
$dalTablecountries["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTablecountries["updated_at"] = array("type"=>135,"varname"=>"updated_at");
	$dalTablecountries["country_id"]["key"]=true;
$dal_info["countries"]=&$dalTablecountries;

?>