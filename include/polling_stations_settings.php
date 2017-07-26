<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_stations = array();	
	$tdatapolling_stations[".truncateText"] = true;
	$tdatapolling_stations[".NumberOfChars"] = 80; 
	$tdatapolling_stations[".ShortName"] = "polling_stations";
	$tdatapolling_stations[".OwnerID"] = "";
	$tdatapolling_stations[".OriginalTable"] = "polling_stations";

//	field labels
$fieldLabelspolling_stations = array();
$fieldToolTipspolling_stations = array();
$pageTitlespolling_stations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_stations["English"] = array();
	$fieldToolTipspolling_stations["English"] = array();
	$pageTitlespolling_stations["English"] = array();
	$fieldLabelspolling_stations["English"]["polling_station_id"] = "Polling Station Id";
	$fieldToolTipspolling_stations["English"]["polling_station_id"] = "";
	$fieldLabelspolling_stations["English"]["polling_station_name"] = "Polling Station Name";
	$fieldToolTipspolling_stations["English"]["polling_station_name"] = "";
	$fieldLabelspolling_stations["English"]["polling_station_code"] = "Polling Station Code";
	$fieldToolTipspolling_stations["English"]["polling_station_code"] = "";
	$fieldLabelspolling_stations["English"]["town_id"] = "Town Id";
	$fieldToolTipspolling_stations["English"]["town_id"] = "";
	$fieldLabelspolling_stations["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_stations["English"]["created_at"] = "";
	$fieldLabelspolling_stations["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_stations["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_stations["English"]))
		$tdatapolling_stations[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_stations[""] = array();
	$fieldToolTipspolling_stations[""] = array();
	$pageTitlespolling_stations[""] = array();
	$fieldLabelspolling_stations[""]["polling_station_id"] = "Polling Station Id";
	$fieldToolTipspolling_stations[""]["polling_station_id"] = "";
	$fieldLabelspolling_stations[""]["polling_station_name"] = "Polling Station Name";
	$fieldToolTipspolling_stations[""]["polling_station_name"] = "";
	$fieldLabelspolling_stations[""]["polling_station_code"] = "Polling Station Code";
	$fieldToolTipspolling_stations[""]["polling_station_code"] = "";
	$fieldLabelspolling_stations[""]["town_id"] = "Town Id";
	$fieldToolTipspolling_stations[""]["town_id"] = "";
	$fieldLabelspolling_stations[""]["created_at"] = "Created At";
	$fieldToolTipspolling_stations[""]["created_at"] = "";
	$fieldLabelspolling_stations[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_stations[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_stations[""]))
		$tdatapolling_stations[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_stations[".NCSearch"] = true;



$tdatapolling_stations[".shortTableName"] = "polling_stations";
$tdatapolling_stations[".nSecOptions"] = 0;
$tdatapolling_stations[".recsPerRowList"] = 1;
$tdatapolling_stations[".mainTableOwnerID"] = "";
$tdatapolling_stations[".moveNext"] = 1;
$tdatapolling_stations[".nType"] = 0;

$tdatapolling_stations[".strOriginalTableName"] = "polling_stations";




$tdatapolling_stations[".showAddInPopup"] = false;

$tdatapolling_stations[".showEditInPopup"] = false;

$tdatapolling_stations[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_stations[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_stations[".fieldsForRegister"] = array();

$tdatapolling_stations[".listAjax"] = false;

	$tdatapolling_stations[".audit"] = true;

	$tdatapolling_stations[".locking"] = false;

$tdatapolling_stations[".edit"] = true;

$tdatapolling_stations[".list"] = true;

$tdatapolling_stations[".inlineEdit"] = true;
$tdatapolling_stations[".inlineAdd"] = true;
$tdatapolling_stations[".view"] = true;

$tdatapolling_stations[".import"] = true;

$tdatapolling_stations[".exportTo"] = true;

$tdatapolling_stations[".printFriendly"] = true;

$tdatapolling_stations[".delete"] = true;

$tdatapolling_stations[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_stations[".searchSaving"] = false;
//

$tdatapolling_stations[".showSearchPanel"] = true;
		$tdatapolling_stations[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_stations[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_stations[".isUseAjaxSuggest"] = true;

$tdatapolling_stations[".rowHighlite"] = true;



$tdatapolling_stations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_stations[".isUseTimeForSearch"] = false;





$tdatapolling_stations[".allSearchFields"] = array();
$tdatapolling_stations[".filterFields"] = array();
$tdatapolling_stations[".requiredSearchFields"] = array();

$tdatapolling_stations[".allSearchFields"][] = "polling_station_id";
	$tdatapolling_stations[".allSearchFields"][] = "polling_station_name";
	$tdatapolling_stations[".allSearchFields"][] = "polling_station_code";
	$tdatapolling_stations[".allSearchFields"][] = "town_id";
	$tdatapolling_stations[".allSearchFields"][] = "created_at";
	$tdatapolling_stations[".allSearchFields"][] = "updated_at";
	

$tdatapolling_stations[".googleLikeFields"] = array();
$tdatapolling_stations[".googleLikeFields"][] = "polling_station_id";
$tdatapolling_stations[".googleLikeFields"][] = "polling_station_name";
$tdatapolling_stations[".googleLikeFields"][] = "polling_station_code";
$tdatapolling_stations[".googleLikeFields"][] = "town_id";
$tdatapolling_stations[".googleLikeFields"][] = "created_at";
$tdatapolling_stations[".googleLikeFields"][] = "updated_at";


$tdatapolling_stations[".advSearchFields"] = array();
$tdatapolling_stations[".advSearchFields"][] = "polling_station_id";
$tdatapolling_stations[".advSearchFields"][] = "polling_station_name";
$tdatapolling_stations[".advSearchFields"][] = "polling_station_code";
$tdatapolling_stations[".advSearchFields"][] = "town_id";
$tdatapolling_stations[".advSearchFields"][] = "created_at";
$tdatapolling_stations[".advSearchFields"][] = "updated_at";

$tdatapolling_stations[".tableType"] = "list";

$tdatapolling_stations[".printerPageOrientation"] = 0;
$tdatapolling_stations[".nPrinterPageScale"] = 100;

$tdatapolling_stations[".nPrinterSplitRecords"] = 40;

$tdatapolling_stations[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_stations[".pageSize"] = 20;

$tdatapolling_stations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_stations[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_stations[".orderindexes"] = array();

$tdatapolling_stations[".sqlHead"] = "SELECT polling_station_id,  polling_station_name,  polling_station_code,  town_id,  created_at,  updated_at";
$tdatapolling_stations[".sqlFrom"] = "FROM polling_stations";
$tdatapolling_stations[".sqlWhereExpr"] = "";
$tdatapolling_stations[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_stations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_stations[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_stations[".highlightSearchResults"] = true;

$tableKeyspolling_stations = array();
$tableKeyspolling_stations[] = "polling_station_id";
$tdatapolling_stations[".Keys"] = $tableKeyspolling_stations;

$tdatapolling_stations[".listFields"] = array();
$tdatapolling_stations[".listFields"][] = "polling_station_id";
$tdatapolling_stations[".listFields"][] = "polling_station_name";
$tdatapolling_stations[".listFields"][] = "polling_station_code";
$tdatapolling_stations[".listFields"][] = "town_id";
$tdatapolling_stations[".listFields"][] = "created_at";
$tdatapolling_stations[".listFields"][] = "updated_at";

$tdatapolling_stations[".hideMobileList"] = array();


$tdatapolling_stations[".viewFields"] = array();
$tdatapolling_stations[".viewFields"][] = "polling_station_id";
$tdatapolling_stations[".viewFields"][] = "polling_station_name";
$tdatapolling_stations[".viewFields"][] = "polling_station_code";
$tdatapolling_stations[".viewFields"][] = "town_id";
$tdatapolling_stations[".viewFields"][] = "created_at";
$tdatapolling_stations[".viewFields"][] = "updated_at";

$tdatapolling_stations[".addFields"] = array();
$tdatapolling_stations[".addFields"][] = "polling_station_name";
$tdatapolling_stations[".addFields"][] = "polling_station_code";
$tdatapolling_stations[".addFields"][] = "town_id";
$tdatapolling_stations[".addFields"][] = "created_at";
$tdatapolling_stations[".addFields"][] = "updated_at";

$tdatapolling_stations[".inlineAddFields"] = array();
$tdatapolling_stations[".inlineAddFields"][] = "polling_station_name";
$tdatapolling_stations[".inlineAddFields"][] = "polling_station_code";
$tdatapolling_stations[".inlineAddFields"][] = "town_id";
$tdatapolling_stations[".inlineAddFields"][] = "created_at";
$tdatapolling_stations[".inlineAddFields"][] = "updated_at";

$tdatapolling_stations[".editFields"] = array();
$tdatapolling_stations[".editFields"][] = "polling_station_name";
$tdatapolling_stations[".editFields"][] = "polling_station_code";
$tdatapolling_stations[".editFields"][] = "town_id";
$tdatapolling_stations[".editFields"][] = "created_at";
$tdatapolling_stations[".editFields"][] = "updated_at";

$tdatapolling_stations[".inlineEditFields"] = array();
$tdatapolling_stations[".inlineEditFields"][] = "polling_station_name";
$tdatapolling_stations[".inlineEditFields"][] = "polling_station_code";
$tdatapolling_stations[".inlineEditFields"][] = "town_id";
$tdatapolling_stations[".inlineEditFields"][] = "created_at";
$tdatapolling_stations[".inlineEditFields"][] = "updated_at";

$tdatapolling_stations[".exportFields"] = array();
$tdatapolling_stations[".exportFields"][] = "polling_station_id";
$tdatapolling_stations[".exportFields"][] = "polling_station_name";
$tdatapolling_stations[".exportFields"][] = "polling_station_code";
$tdatapolling_stations[".exportFields"][] = "town_id";
$tdatapolling_stations[".exportFields"][] = "created_at";
$tdatapolling_stations[".exportFields"][] = "updated_at";

$tdatapolling_stations[".importFields"] = array();
$tdatapolling_stations[".importFields"][] = "polling_station_id";
$tdatapolling_stations[".importFields"][] = "polling_station_name";
$tdatapolling_stations[".importFields"][] = "polling_station_code";
$tdatapolling_stations[".importFields"][] = "town_id";
$tdatapolling_stations[".importFields"][] = "created_at";
$tdatapolling_stations[".importFields"][] = "updated_at";

$tdatapolling_stations[".printFields"] = array();
$tdatapolling_stations[".printFields"][] = "polling_station_id";
$tdatapolling_stations[".printFields"][] = "polling_station_name";
$tdatapolling_stations[".printFields"][] = "polling_station_code";
$tdatapolling_stations[".printFields"][] = "town_id";
$tdatapolling_stations[".printFields"][] = "created_at";
$tdatapolling_stations[".printFields"][] = "updated_at";

//	polling_station_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_station_id";
	$fdata["GoodName"] = "polling_station_id";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","polling_station_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_station_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_station_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_stations["polling_station_id"] = $fdata;
//	polling_station_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "polling_station_name";
	$fdata["GoodName"] = "polling_station_name";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","polling_station_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_station_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_station_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapolling_stations["polling_station_name"] = $fdata;
//	polling_station_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "polling_station_code";
	$fdata["GoodName"] = "polling_station_code";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","polling_station_code"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_station_code"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_station_code";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapolling_stations["polling_station_code"] = $fdata;
//	town_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "town_id";
	$fdata["GoodName"] = "town_id";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","town_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "town_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "town_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "towns";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "town_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "town_name";
	
		
	$edata["LookupOrderBy"] = "town_name";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_stations["town_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","created_at"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "created_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_stations["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_stations";
	$fdata["Label"] = GetFieldLabel("polling_stations","updated_at"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "updated_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_stations["updated_at"] = $fdata;

	
$tables_data["polling_stations"]=&$tdatapolling_stations;
$field_labels["polling_stations"] = &$fieldLabelspolling_stations;
$fieldToolTips["polling_stations"] = &$fieldToolTipspolling_stations;
$page_titles["polling_stations"] = &$pageTitlespolling_stations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_stations"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_stations"] = array();


	
				$strOriginalDetailsTable="towns";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="towns";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "towns";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["polling_stations"][0] = $masterParams;	
				$masterTablesData["polling_stations"][0]["masterKeys"] = array();
	$masterTablesData["polling_stations"][0]["masterKeys"][]="town_id";
				$masterTablesData["polling_stations"][0]["detailKeys"] = array();
	$masterTablesData["polling_stations"][0]["detailKeys"][]="town_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_stations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_station_id,  polling_station_name,  polling_station_code,  town_id,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM polling_stations";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_station_id",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto5["m_sql"] = "polling_station_id";
$proto5["m_srcTableName"] = "polling_stations";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_station_name",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto7["m_sql"] = "polling_station_name";
$proto7["m_srcTableName"] = "polling_stations";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_station_code",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto9["m_sql"] = "polling_station_code";
$proto9["m_srcTableName"] = "polling_stations";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "town_id",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto11["m_sql"] = "town_id";
$proto11["m_srcTableName"] = "polling_stations";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto13["m_sql"] = "created_at";
$proto13["m_srcTableName"] = "polling_stations";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_stations",
	"m_srcTableName" => "polling_stations"
));

$proto15["m_sql"] = "updated_at";
$proto15["m_srcTableName"] = "polling_stations";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "polling_stations";
$proto18["m_srcTableName"] = "polling_stations";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "polling_station_id";
$proto18["m_columns"][] = "polling_station_name";
$proto18["m_columns"][] = "polling_station_code";
$proto18["m_columns"][] = "town_id";
$proto18["m_columns"][] = "created_at";
$proto18["m_columns"][] = "updated_at";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "polling_stations";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "polling_stations";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="polling_stations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_stations = createSqlQuery_polling_stations();


	
						
	
$tdatapolling_stations[".sqlquery"] = $queryData_polling_stations;

$tableEvents["polling_stations"] = new eventsBase;
$tdatapolling_stations[".hasEvents"] = false;

?>