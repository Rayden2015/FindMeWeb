<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_coordinates_map = array();	
	$tdatapolling_coordinates_map[".truncateText"] = true;
	$tdatapolling_coordinates_map[".NumberOfChars"] = 80; 
	$tdatapolling_coordinates_map[".ShortName"] = "polling_coordinates_map";
	$tdatapolling_coordinates_map[".OwnerID"] = "";
	$tdatapolling_coordinates_map[".OriginalTable"] = "polling_coordinates_map";

//	field labels
$fieldLabelspolling_coordinates_map = array();
$fieldToolTipspolling_coordinates_map = array();
$pageTitlespolling_coordinates_map = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_coordinates_map["English"] = array();
	$fieldToolTipspolling_coordinates_map["English"] = array();
	$pageTitlespolling_coordinates_map["English"] = array();
	$fieldLabelspolling_coordinates_map["English"]["polling_coordinates_map_id"] = "Polling Coordinates Map Id";
	$fieldToolTipspolling_coordinates_map["English"]["polling_coordinates_map_id"] = "";
	$fieldLabelspolling_coordinates_map["English"]["find_me_code"] = "Find Me Code";
	$fieldToolTipspolling_coordinates_map["English"]["find_me_code"] = "";
	$fieldLabelspolling_coordinates_map["English"]["town_id"] = "Town Id";
	$fieldToolTipspolling_coordinates_map["English"]["town_id"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point1"] = "Point1";
	$fieldToolTipspolling_coordinates_map["English"]["point1"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point2"] = "Point2";
	$fieldToolTipspolling_coordinates_map["English"]["point2"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point3"] = "Point3";
	$fieldToolTipspolling_coordinates_map["English"]["point3"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point4"] = "Point4";
	$fieldToolTipspolling_coordinates_map["English"]["point4"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point5"] = "Point5";
	$fieldToolTipspolling_coordinates_map["English"]["point5"] = "";
	$fieldLabelspolling_coordinates_map["English"]["point6"] = "Point6";
	$fieldToolTipspolling_coordinates_map["English"]["point6"] = "";
	$fieldLabelspolling_coordinates_map["English"]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_map["English"]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_map["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_map["English"]["created_at"] = "";
	$fieldLabelspolling_coordinates_map["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_map["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_map["English"]))
		$tdatapolling_coordinates_map[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_coordinates_map[""] = array();
	$fieldToolTipspolling_coordinates_map[""] = array();
	$pageTitlespolling_coordinates_map[""] = array();
	$fieldLabelspolling_coordinates_map[""]["polling_coordinates_map_id"] = "Polling Coordinates Map Id";
	$fieldToolTipspolling_coordinates_map[""]["polling_coordinates_map_id"] = "";
	$fieldLabelspolling_coordinates_map[""]["find_me_code"] = "Find Me Code";
	$fieldToolTipspolling_coordinates_map[""]["find_me_code"] = "";
	$fieldLabelspolling_coordinates_map[""]["town_id"] = "Town Id";
	$fieldToolTipspolling_coordinates_map[""]["town_id"] = "";
	$fieldLabelspolling_coordinates_map[""]["point1"] = "Point1";
	$fieldToolTipspolling_coordinates_map[""]["point1"] = "";
	$fieldLabelspolling_coordinates_map[""]["point2"] = "Point2";
	$fieldToolTipspolling_coordinates_map[""]["point2"] = "";
	$fieldLabelspolling_coordinates_map[""]["point3"] = "Point3";
	$fieldToolTipspolling_coordinates_map[""]["point3"] = "";
	$fieldLabelspolling_coordinates_map[""]["point4"] = "Point4";
	$fieldToolTipspolling_coordinates_map[""]["point4"] = "";
	$fieldLabelspolling_coordinates_map[""]["point5"] = "Point5";
	$fieldToolTipspolling_coordinates_map[""]["point5"] = "";
	$fieldLabelspolling_coordinates_map[""]["point6"] = "Point6";
	$fieldToolTipspolling_coordinates_map[""]["point6"] = "";
	$fieldLabelspolling_coordinates_map[""]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_map[""]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_map[""]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_map[""]["created_at"] = "";
	$fieldLabelspolling_coordinates_map[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_map[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_map[""]))
		$tdatapolling_coordinates_map[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_coordinates_map[".NCSearch"] = true;



$tdatapolling_coordinates_map[".shortTableName"] = "polling_coordinates_map";
$tdatapolling_coordinates_map[".nSecOptions"] = 0;
$tdatapolling_coordinates_map[".recsPerRowList"] = 1;
$tdatapolling_coordinates_map[".mainTableOwnerID"] = "";
$tdatapolling_coordinates_map[".moveNext"] = 1;
$tdatapolling_coordinates_map[".nType"] = 0;

$tdatapolling_coordinates_map[".strOriginalTableName"] = "polling_coordinates_map";




$tdatapolling_coordinates_map[".showAddInPopup"] = false;

$tdatapolling_coordinates_map[".showEditInPopup"] = false;

$tdatapolling_coordinates_map[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_coordinates_map[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_coordinates_map[".fieldsForRegister"] = array();

$tdatapolling_coordinates_map[".listAjax"] = false;

	$tdatapolling_coordinates_map[".audit"] = true;

	$tdatapolling_coordinates_map[".locking"] = false;

$tdatapolling_coordinates_map[".edit"] = true;

$tdatapolling_coordinates_map[".list"] = true;

$tdatapolling_coordinates_map[".inlineEdit"] = true;
$tdatapolling_coordinates_map[".inlineAdd"] = true;
$tdatapolling_coordinates_map[".view"] = true;

$tdatapolling_coordinates_map[".import"] = true;

$tdatapolling_coordinates_map[".exportTo"] = true;

$tdatapolling_coordinates_map[".printFriendly"] = true;

$tdatapolling_coordinates_map[".delete"] = true;

$tdatapolling_coordinates_map[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_coordinates_map[".searchSaving"] = false;
//

$tdatapolling_coordinates_map[".showSearchPanel"] = true;
		$tdatapolling_coordinates_map[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_coordinates_map[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_coordinates_map[".isUseAjaxSuggest"] = true;

$tdatapolling_coordinates_map[".rowHighlite"] = true;



$tdatapolling_coordinates_map[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_coordinates_map[".isUseTimeForSearch"] = false;





$tdatapolling_coordinates_map[".allSearchFields"] = array();
$tdatapolling_coordinates_map[".filterFields"] = array();
$tdatapolling_coordinates_map[".requiredSearchFields"] = array();

$tdatapolling_coordinates_map[".allSearchFields"][] = "polling_coordinates_map_id";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "find_me_code";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "town_id";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point1";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point2";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point3";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point4";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point5";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "point6";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "polling_coordinates_id";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "created_at";
	$tdatapolling_coordinates_map[".allSearchFields"][] = "updated_at";
	

$tdatapolling_coordinates_map[".googleLikeFields"] = array();
$tdatapolling_coordinates_map[".googleLikeFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "town_id";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point1";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point2";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point3";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point4";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point5";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "point6";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "created_at";
$tdatapolling_coordinates_map[".googleLikeFields"][] = "updated_at";


$tdatapolling_coordinates_map[".advSearchFields"] = array();
$tdatapolling_coordinates_map[".advSearchFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".advSearchFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".advSearchFields"][] = "town_id";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point1";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point2";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point3";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point4";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point5";
$tdatapolling_coordinates_map[".advSearchFields"][] = "point6";
$tdatapolling_coordinates_map[".advSearchFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".advSearchFields"][] = "created_at";
$tdatapolling_coordinates_map[".advSearchFields"][] = "updated_at";

$tdatapolling_coordinates_map[".tableType"] = "list";

$tdatapolling_coordinates_map[".printerPageOrientation"] = 0;
$tdatapolling_coordinates_map[".nPrinterPageScale"] = 100;

$tdatapolling_coordinates_map[".nPrinterSplitRecords"] = 40;

$tdatapolling_coordinates_map[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_coordinates_map[".pageSize"] = 20;

$tdatapolling_coordinates_map[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_coordinates_map[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_coordinates_map[".orderindexes"] = array();

$tdatapolling_coordinates_map[".sqlHead"] = "SELECT polling_coordinates_map_id,   find_me_code,   town_id,   point1,   point2,   point3,   point4,   point5,   point6,   polling_coordinates_id,   created_at,   updated_at";
$tdatapolling_coordinates_map[".sqlFrom"] = "FROM polling_coordinates_map";
$tdatapolling_coordinates_map[".sqlWhereExpr"] = "";
$tdatapolling_coordinates_map[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_coordinates_map[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_coordinates_map[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_coordinates_map[".highlightSearchResults"] = true;

$tableKeyspolling_coordinates_map = array();
$tableKeyspolling_coordinates_map[] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".Keys"] = $tableKeyspolling_coordinates_map;

$tdatapolling_coordinates_map[".listFields"] = array();
$tdatapolling_coordinates_map[".listFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".listFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".listFields"][] = "town_id";
$tdatapolling_coordinates_map[".listFields"][] = "point1";
$tdatapolling_coordinates_map[".listFields"][] = "point2";
$tdatapolling_coordinates_map[".listFields"][] = "point3";
$tdatapolling_coordinates_map[".listFields"][] = "point4";
$tdatapolling_coordinates_map[".listFields"][] = "point5";
$tdatapolling_coordinates_map[".listFields"][] = "point6";
$tdatapolling_coordinates_map[".listFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".listFields"][] = "created_at";
$tdatapolling_coordinates_map[".listFields"][] = "updated_at";

$tdatapolling_coordinates_map[".hideMobileList"] = array();


$tdatapolling_coordinates_map[".viewFields"] = array();
$tdatapolling_coordinates_map[".viewFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".viewFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".viewFields"][] = "town_id";
$tdatapolling_coordinates_map[".viewFields"][] = "point1";
$tdatapolling_coordinates_map[".viewFields"][] = "point2";
$tdatapolling_coordinates_map[".viewFields"][] = "point3";
$tdatapolling_coordinates_map[".viewFields"][] = "point4";
$tdatapolling_coordinates_map[".viewFields"][] = "point5";
$tdatapolling_coordinates_map[".viewFields"][] = "point6";
$tdatapolling_coordinates_map[".viewFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".viewFields"][] = "created_at";
$tdatapolling_coordinates_map[".viewFields"][] = "updated_at";

$tdatapolling_coordinates_map[".addFields"] = array();
$tdatapolling_coordinates_map[".addFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".addFields"][] = "town_id";
$tdatapolling_coordinates_map[".addFields"][] = "point1";
$tdatapolling_coordinates_map[".addFields"][] = "point2";
$tdatapolling_coordinates_map[".addFields"][] = "point3";
$tdatapolling_coordinates_map[".addFields"][] = "point4";
$tdatapolling_coordinates_map[".addFields"][] = "point5";
$tdatapolling_coordinates_map[".addFields"][] = "point6";
$tdatapolling_coordinates_map[".addFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".addFields"][] = "created_at";
$tdatapolling_coordinates_map[".addFields"][] = "updated_at";

$tdatapolling_coordinates_map[".inlineAddFields"] = array();
$tdatapolling_coordinates_map[".inlineAddFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "town_id";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point1";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point2";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point3";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point4";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point5";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "point6";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "created_at";
$tdatapolling_coordinates_map[".inlineAddFields"][] = "updated_at";

$tdatapolling_coordinates_map[".editFields"] = array();
$tdatapolling_coordinates_map[".editFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".editFields"][] = "town_id";
$tdatapolling_coordinates_map[".editFields"][] = "point1";
$tdatapolling_coordinates_map[".editFields"][] = "point2";
$tdatapolling_coordinates_map[".editFields"][] = "point3";
$tdatapolling_coordinates_map[".editFields"][] = "point4";
$tdatapolling_coordinates_map[".editFields"][] = "point5";
$tdatapolling_coordinates_map[".editFields"][] = "point6";
$tdatapolling_coordinates_map[".editFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".editFields"][] = "created_at";
$tdatapolling_coordinates_map[".editFields"][] = "updated_at";

$tdatapolling_coordinates_map[".inlineEditFields"] = array();
$tdatapolling_coordinates_map[".inlineEditFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "town_id";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point1";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point2";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point3";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point4";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point5";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "point6";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "created_at";
$tdatapolling_coordinates_map[".inlineEditFields"][] = "updated_at";

$tdatapolling_coordinates_map[".exportFields"] = array();
$tdatapolling_coordinates_map[".exportFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".exportFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".exportFields"][] = "town_id";
$tdatapolling_coordinates_map[".exportFields"][] = "point1";
$tdatapolling_coordinates_map[".exportFields"][] = "point2";
$tdatapolling_coordinates_map[".exportFields"][] = "point3";
$tdatapolling_coordinates_map[".exportFields"][] = "point4";
$tdatapolling_coordinates_map[".exportFields"][] = "point5";
$tdatapolling_coordinates_map[".exportFields"][] = "point6";
$tdatapolling_coordinates_map[".exportFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".exportFields"][] = "created_at";
$tdatapolling_coordinates_map[".exportFields"][] = "updated_at";

$tdatapolling_coordinates_map[".importFields"] = array();
$tdatapolling_coordinates_map[".importFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".importFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".importFields"][] = "town_id";
$tdatapolling_coordinates_map[".importFields"][] = "point1";
$tdatapolling_coordinates_map[".importFields"][] = "point2";
$tdatapolling_coordinates_map[".importFields"][] = "point3";
$tdatapolling_coordinates_map[".importFields"][] = "point4";
$tdatapolling_coordinates_map[".importFields"][] = "point5";
$tdatapolling_coordinates_map[".importFields"][] = "point6";
$tdatapolling_coordinates_map[".importFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".importFields"][] = "created_at";
$tdatapolling_coordinates_map[".importFields"][] = "updated_at";

$tdatapolling_coordinates_map[".printFields"] = array();
$tdatapolling_coordinates_map[".printFields"][] = "polling_coordinates_map_id";
$tdatapolling_coordinates_map[".printFields"][] = "find_me_code";
$tdatapolling_coordinates_map[".printFields"][] = "town_id";
$tdatapolling_coordinates_map[".printFields"][] = "point1";
$tdatapolling_coordinates_map[".printFields"][] = "point2";
$tdatapolling_coordinates_map[".printFields"][] = "point3";
$tdatapolling_coordinates_map[".printFields"][] = "point4";
$tdatapolling_coordinates_map[".printFields"][] = "point5";
$tdatapolling_coordinates_map[".printFields"][] = "point6";
$tdatapolling_coordinates_map[".printFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_map[".printFields"][] = "created_at";
$tdatapolling_coordinates_map[".printFields"][] = "updated_at";

//	polling_coordinates_map_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_coordinates_map_id";
	$fdata["GoodName"] = "polling_coordinates_map_id";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","polling_coordinates_map_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_coordinates_map_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_coordinates_map_id";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["polling_coordinates_map_id"] = $fdata;
//	find_me_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "find_me_code";
	$fdata["GoodName"] = "find_me_code";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","find_me_code"); 
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
	
		$fdata["strField"] = "find_me_code"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "find_me_code";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["find_me_code"] = $fdata;
//	town_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "town_id";
	$fdata["GoodName"] = "town_id";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","town_id"); 
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_coordinates_map["town_id"] = $fdata;
//	point1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "point1";
	$fdata["GoodName"] = "point1";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point1"); 
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
	
		$fdata["strField"] = "point1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point1";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point1"] = $fdata;
//	point2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "point2";
	$fdata["GoodName"] = "point2";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point2"); 
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
	
		$fdata["strField"] = "point2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point2";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point2"] = $fdata;
//	point3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "point3";
	$fdata["GoodName"] = "point3";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point3"); 
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
	
		$fdata["strField"] = "point3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point3";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point3"] = $fdata;
//	point4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "point4";
	$fdata["GoodName"] = "point4";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point4"); 
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
	
		$fdata["strField"] = "point4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point4";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point4"] = $fdata;
//	point5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "point5";
	$fdata["GoodName"] = "point5";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point5"); 
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
	
		$fdata["strField"] = "point5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point5";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point5"] = $fdata;
//	point6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "point6";
	$fdata["GoodName"] = "point6";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","point6"); 
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
	
		$fdata["strField"] = "point6"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "point6";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["point6"] = $fdata;
//	polling_coordinates_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "polling_coordinates_id";
	$fdata["GoodName"] = "polling_coordinates_id";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","polling_coordinates_id"); 
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
	
		$fdata["strField"] = "polling_coordinates_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_coordinates_id";
	
		
		
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

	

	
	$tdatapolling_coordinates_map["polling_coordinates_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","created_at"); 
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

	

	
	$tdatapolling_coordinates_map["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_coordinates_map";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_map","updated_at"); 
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

	

	
	$tdatapolling_coordinates_map["updated_at"] = $fdata;

	
$tables_data["polling_coordinates_map"]=&$tdatapolling_coordinates_map;
$field_labels["polling_coordinates_map"] = &$fieldLabelspolling_coordinates_map;
$fieldToolTips["polling_coordinates_map"] = &$fieldToolTipspolling_coordinates_map;
$page_titles["polling_coordinates_map"] = &$pageTitlespolling_coordinates_map;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_coordinates_map"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_coordinates_map"] = array();


	
				$strOriginalDetailsTable="polling_coordinates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="polling_coordinates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "polling_coordinates";
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
					$masterTablesData["polling_coordinates_map"][0] = $masterParams;	
				$masterTablesData["polling_coordinates_map"][0]["masterKeys"] = array();
	$masterTablesData["polling_coordinates_map"][0]["masterKeys"][]="polling_coordinates_id";
				$masterTablesData["polling_coordinates_map"][0]["detailKeys"] = array();
	$masterTablesData["polling_coordinates_map"][0]["detailKeys"][]="polling_coordinates_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_coordinates_map()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_coordinates_map_id,   find_me_code,   town_id,   point1,   point2,   point3,   point4,   point5,   point6,   polling_coordinates_id,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM polling_coordinates_map";
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
	"m_strName" => "polling_coordinates_map_id",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto5["m_sql"] = "polling_coordinates_map_id";
$proto5["m_srcTableName"] = "polling_coordinates_map";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "find_me_code",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto7["m_sql"] = "find_me_code";
$proto7["m_srcTableName"] = "polling_coordinates_map";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "town_id",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto9["m_sql"] = "town_id";
$proto9["m_srcTableName"] = "polling_coordinates_map";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "point1",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto11["m_sql"] = "point1";
$proto11["m_srcTableName"] = "polling_coordinates_map";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "point2",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto13["m_sql"] = "point2";
$proto13["m_srcTableName"] = "polling_coordinates_map";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "point3",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto15["m_sql"] = "point3";
$proto15["m_srcTableName"] = "polling_coordinates_map";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "point4",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto17["m_sql"] = "point4";
$proto17["m_srcTableName"] = "polling_coordinates_map";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "point5",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto19["m_sql"] = "point5";
$proto19["m_srcTableName"] = "polling_coordinates_map";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "point6",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto21["m_sql"] = "point6";
$proto21["m_srcTableName"] = "polling_coordinates_map";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_coordinates_id",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto23["m_sql"] = "polling_coordinates_id";
$proto23["m_srcTableName"] = "polling_coordinates_map";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto25["m_sql"] = "created_at";
$proto25["m_srcTableName"] = "polling_coordinates_map";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_coordinates_map",
	"m_srcTableName" => "polling_coordinates_map"
));

$proto27["m_sql"] = "updated_at";
$proto27["m_srcTableName"] = "polling_coordinates_map";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "polling_coordinates_map";
$proto30["m_srcTableName"] = "polling_coordinates_map";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "polling_coordinates_map_id";
$proto30["m_columns"][] = "find_me_code";
$proto30["m_columns"][] = "town_id";
$proto30["m_columns"][] = "point1";
$proto30["m_columns"][] = "point2";
$proto30["m_columns"][] = "point3";
$proto30["m_columns"][] = "point4";
$proto30["m_columns"][] = "point5";
$proto30["m_columns"][] = "point6";
$proto30["m_columns"][] = "polling_coordinates_id";
$proto30["m_columns"][] = "created_at";
$proto30["m_columns"][] = "updated_at";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "polling_coordinates_map";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "polling_coordinates_map";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="polling_coordinates_map";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_coordinates_map = createSqlQuery_polling_coordinates_map();


	
												
	
$tdatapolling_coordinates_map[".sqlquery"] = $queryData_polling_coordinates_map;

$tableEvents["polling_coordinates_map"] = new eventsBase;
$tdatapolling_coordinates_map[".hasEvents"] = false;

?>