<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["user_types"]["users.type_id"]["edit"] = array("table" => "users", "field" => "type_id", "page" => "edit");
	$lookupTableLinks["find_me_ids"]["users.identifier"]["edit"] = array("table" => "users", "field" => "identifier", "page" => "edit");
	$lookupTableLinks["users"]["user_jobs.user_id"]["edit"] = array("table" => "user_jobs", "field" => "user_id", "page" => "edit");
	$lookupTableLinks["users"]["user_details.user_id"]["edit"] = array("table" => "user_details", "field" => "user_id", "page" => "edit");
	$lookupTableLinks["towns"]["user_details.town_id"]["edit"] = array("table" => "user_details", "field" => "town_id", "page" => "edit");
	$lookupTableLinks["users"]["user_details.verified_by"]["edit"] = array("table" => "user_details", "field" => "verified_by", "page" => "edit");
	$lookupTableLinks["users"]["findme_web_audit.user"]["edit"] = array("table" => "findme web_audit", "field" => "user", "page" => "edit");
	$lookupTableLinks["users"]["find_me_ids.identifier"]["edit"] = array("table" => "find_me_ids", "field" => "identifier", "page" => "edit");
	$lookupTableLinks["polling_stations"]["find_me_ids.polling_station_code"]["edit"] = array("table" => "find_me_ids", "field" => "polling_station_code", "page" => "edit");
	$lookupTableLinks["users"]["verification_ids.user_id"]["edit"] = array("table" => "verification_ids", "field" => "user_id", "page" => "edit");
	$lookupTableLinks["job_categories"]["find_me_jobs.category_id"]["edit"] = array("table" => "find_me_jobs", "field" => "category_id", "page" => "edit");
	$lookupTableLinks["users"]["find_me_jobs.added_by"]["edit"] = array("table" => "find_me_jobs", "field" => "added_by", "page" => "edit");
	$lookupTableLinks["countries"]["regions.country_id"]["edit"] = array("table" => "regions", "field" => "country_id", "page" => "edit");
	$lookupTableLinks["regions"]["districts.region_id"]["edit"] = array("table" => "districts", "field" => "region_id", "page" => "edit");
	$lookupTableLinks["districts"]["towns.district_id"]["edit"] = array("table" => "towns", "field" => "district_id", "page" => "edit");
	$lookupTableLinks["towns"]["polling_stations.town_id"]["edit"] = array("table" => "polling_stations", "field" => "town_id", "page" => "edit");
	$lookupTableLinks["users"]["polling_coordinates.user_id"]["edit"] = array("table" => "polling_coordinates", "field" => "user_id", "page" => "edit");
}

?>