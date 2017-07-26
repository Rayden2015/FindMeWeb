<?php
$dalTablepolling_stations = array();
$dalTablepolling_stations["polling_station_id"] = array("type"=>3,"varname"=>"polling_station_id");
$dalTablepolling_stations["polling_station_name"] = array("type"=>200,"varname"=>"polling_station_name");
$dalTablepolling_stations["polling_station_code"] = array("type"=>200,"varname"=>"polling_station_code");
$dalTablepolling_stations["town_id"] = array("type"=>3,"varname"=>"town_id");
$dalTablepolling_stations["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTablepolling_stations["updated_at"] = array("type"=>135,"varname"=>"updated_at");
	$dalTablepolling_stations["polling_station_id"]["key"]=true;
$dal_info["polling_stations"]=&$dalTablepolling_stations;

?>