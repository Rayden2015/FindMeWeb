<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafind_me_ids = array();	
	$tdatafind_me_ids[".truncateText"] = true;
	$tdatafind_me_ids[".NumberOfChars"] = 80; 
	$tdatafind_me_ids[".ShortName"] = "find_me_ids";
	$tdatafind_me_ids[".OwnerID"] = "";
	$tdatafind_me_ids[".OriginalTable"] = "find_me_ids";

//	field labels
$fieldLabelsfind_me_ids = array();
$fieldToolTipsfind_me_ids = array();
$pageTitlesfind_me_ids = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfind_me_ids["English"] = array();
	$fieldToolTipsfind_me_ids["English"] = array();
	$pageTitlesfind_me_ids["English"] = array();
	$fieldLabelsfind_me_ids["English"]["find_me_id"] = "Find Me Id";
	$fieldToolTipsfind_me_ids["English"]["find_me_id"] = "";
	$fieldLabelsfind_me_ids["English"]["lat"] = "Lat";
	$fieldToolTipsfind_me_ids["English"]["lat"] = "";
	$fieldLabelsfind_me_ids["English"]["google_name"] = "Google Name";
	$fieldToolTipsfind_me_ids["English"]["google_name"] = "";
	$fieldLabelsfind_me_ids["English"]["custom_address_1"] = "Custom Address 1";
	$fieldToolTipsfind_me_ids["English"]["custom_address_1"] = "";
	$fieldLabelsfind_me_ids["English"]["custom_address_2"] = "Custom Address 2";
	$fieldToolTipsfind_me_ids["English"]["custom_address_2"] = "";
	$fieldLabelsfind_me_ids["English"]["created_at"] = "Created At";
	$fieldToolTipsfind_me_ids["English"]["created_at"] = "";
	$fieldLabelsfind_me_ids["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfind_me_ids["English"]["updated_at"] = "";
	$fieldLabelsfind_me_ids["English"]["lng"] = "Lng";
	$fieldToolTipsfind_me_ids["English"]["lng"] = "";
	$fieldLabelsfind_me_ids["English"]["identifier"] = "Identifier";
	$fieldToolTipsfind_me_ids["English"]["identifier"] = "";
	$fieldLabelsfind_me_ids["English"]["polling_station_code"] = "Polling Station Code";
	$fieldToolTipsfind_me_ids["English"]["polling_station_code"] = "";
	if (count($fieldToolTipsfind_me_ids["English"]))
		$tdatafind_me_ids[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfind_me_ids[""] = array();
	$fieldToolTipsfind_me_ids[""] = array();
	$pageTitlesfind_me_ids[""] = array();
	$fieldLabelsfind_me_ids[""]["find_me_id"] = "Find Me Id";
	$fieldToolTipsfind_me_ids[""]["find_me_id"] = "";
	$fieldLabelsfind_me_ids[""]["lat"] = "Lat";
	$fieldToolTipsfind_me_ids[""]["lat"] = "";
	$fieldLabelsfind_me_ids[""]["google_name"] = "Google Name";
	$fieldToolTipsfind_me_ids[""]["google_name"] = "";
	$fieldLabelsfind_me_ids[""]["custom_address_1"] = "Custom Address 1";
	$fieldToolTipsfind_me_ids[""]["custom_address_1"] = "";
	$fieldLabelsfind_me_ids[""]["custom_address_2"] = "Custom Address 2";
	$fieldToolTipsfind_me_ids[""]["custom_address_2"] = "";
	$fieldLabelsfind_me_ids[""]["created_at"] = "Created At";
	$fieldToolTipsfind_me_ids[""]["created_at"] = "";
	$fieldLabelsfind_me_ids[""]["updated_at"] = "Updated At";
	$fieldToolTipsfind_me_ids[""]["updated_at"] = "";
	$fieldLabelsfind_me_ids[""]["lng"] = "Lng";
	$fieldToolTipsfind_me_ids[""]["lng"] = "";
	$fieldLabelsfind_me_ids[""]["identifier"] = "Identifier";
	$fieldToolTipsfind_me_ids[""]["identifier"] = "";
	$fieldLabelsfind_me_ids[""]["polling_station_code"] = "Polling Station Code";
	$fieldToolTipsfind_me_ids[""]["polling_station_code"] = "";
	if (count($fieldToolTipsfind_me_ids[""]))
		$tdatafind_me_ids[".isUseToolTips"] = true;
}
	
	
	$tdatafind_me_ids[".NCSearch"] = true;



$tdatafind_me_ids[".shortTableName"] = "find_me_ids";
$tdatafind_me_ids[".nSecOptions"] = 0;
$tdatafind_me_ids[".recsPerRowList"] = 1;
$tdatafind_me_ids[".mainTableOwnerID"] = "";
$tdatafind_me_ids[".moveNext"] = 1;
$tdatafind_me_ids[".nType"] = 0;

$tdatafind_me_ids[".strOriginalTableName"] = "find_me_ids";




$tdatafind_me_ids[".showAddInPopup"] = false;

$tdatafind_me_ids[".showEditInPopup"] = false;

$tdatafind_me_ids[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafind_me_ids[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafind_me_ids[".fieldsForRegister"] = array();

$tdatafind_me_ids[".listAjax"] = false;

	$tdatafind_me_ids[".audit"] = true;

	$tdatafind_me_ids[".locking"] = false;

$tdatafind_me_ids[".edit"] = true;

$tdatafind_me_ids[".list"] = true;

$tdatafind_me_ids[".inlineEdit"] = true;
$tdatafind_me_ids[".inlineAdd"] = true;
$tdatafind_me_ids[".view"] = true;

$tdatafind_me_ids[".import"] = true;

$tdatafind_me_ids[".exportTo"] = true;

$tdatafind_me_ids[".printFriendly"] = true;

$tdatafind_me_ids[".delete"] = true;

$tdatafind_me_ids[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafind_me_ids[".searchSaving"] = false;
//

$tdatafind_me_ids[".showSearchPanel"] = true;
		$tdatafind_me_ids[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafind_me_ids[".isUseAjaxSuggest"] = false;
else 
	$tdatafind_me_ids[".isUseAjaxSuggest"] = true;

$tdatafind_me_ids[".rowHighlite"] = true;



$tdatafind_me_ids[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafind_me_ids[".isUseTimeForSearch"] = false;





$tdatafind_me_ids[".allSearchFields"] = array();
$tdatafind_me_ids[".filterFields"] = array();
$tdatafind_me_ids[".requiredSearchFields"] = array();

$tdatafind_me_ids[".allSearchFields"][] = "find_me_id";
	$tdatafind_me_ids[".allSearchFields"][] = "lat";
	$tdatafind_me_ids[".allSearchFields"][] = "google_name";
	$tdatafind_me_ids[".allSearchFields"][] = "custom_address_1";
	$tdatafind_me_ids[".allSearchFields"][] = "custom_address_2";
	$tdatafind_me_ids[".allSearchFields"][] = "created_at";
	$tdatafind_me_ids[".allSearchFields"][] = "updated_at";
	$tdatafind_me_ids[".allSearchFields"][] = "lng";
	$tdatafind_me_ids[".allSearchFields"][] = "identifier";
	$tdatafind_me_ids[".allSearchFields"][] = "polling_station_code";
	

$tdatafind_me_ids[".googleLikeFields"] = array();
$tdatafind_me_ids[".googleLikeFields"][] = "find_me_id";
$tdatafind_me_ids[".googleLikeFields"][] = "lat";
$tdatafind_me_ids[".googleLikeFields"][] = "google_name";
$tdatafind_me_ids[".googleLikeFields"][] = "custom_address_1";
$tdatafind_me_ids[".googleLikeFields"][] = "custom_address_2";
$tdatafind_me_ids[".googleLikeFields"][] = "created_at";
$tdatafind_me_ids[".googleLikeFields"][] = "updated_at";
$tdatafind_me_ids[".googleLikeFields"][] = "lng";
$tdatafind_me_ids[".googleLikeFields"][] = "identifier";
$tdatafind_me_ids[".googleLikeFields"][] = "polling_station_code";


$tdatafind_me_ids[".advSearchFields"] = array();
$tdatafind_me_ids[".advSearchFields"][] = "find_me_id";
$tdatafind_me_ids[".advSearchFields"][] = "lat";
$tdatafind_me_ids[".advSearchFields"][] = "google_name";
$tdatafind_me_ids[".advSearchFields"][] = "custom_address_1";
$tdatafind_me_ids[".advSearchFields"][] = "custom_address_2";
$tdatafind_me_ids[".advSearchFields"][] = "created_at";
$tdatafind_me_ids[".advSearchFields"][] = "updated_at";
$tdatafind_me_ids[".advSearchFields"][] = "lng";
$tdatafind_me_ids[".advSearchFields"][] = "identifier";
$tdatafind_me_ids[".advSearchFields"][] = "polling_station_code";

$tdatafind_me_ids[".tableType"] = "list";

$tdatafind_me_ids[".printerPageOrientation"] = 0;
$tdatafind_me_ids[".nPrinterPageScale"] = 100;

$tdatafind_me_ids[".nPrinterSplitRecords"] = 40;

$tdatafind_me_ids[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatafind_me_ids[".pageSize"] = 20;

$tdatafind_me_ids[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafind_me_ids[".strOrderBy"] = $tstrOrderBy;

$tdatafind_me_ids[".orderindexes"] = array();

$tdatafind_me_ids[".sqlHead"] = "SELECT find_me_id,  lat,  google_name,  custom_address_1,  custom_address_2,  created_at,  updated_at,  lng,  identifier,  polling_station_code";
$tdatafind_me_ids[".sqlFrom"] = "FROM find_me_ids";
$tdatafind_me_ids[".sqlWhereExpr"] = "";
$tdatafind_me_ids[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafind_me_ids[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafind_me_ids[".arrGroupsPerPage"] = $arrGPP;

$tdatafind_me_ids[".highlightSearchResults"] = true;

$tableKeysfind_me_ids = array();
$tableKeysfind_me_ids[] = "find_me_id";
$tdatafind_me_ids[".Keys"] = $tableKeysfind_me_ids;

$tdatafind_me_ids[".listFields"] = array();
$tdatafind_me_ids[".listFields"][] = "find_me_id";
$tdatafind_me_ids[".listFields"][] = "lat";
$tdatafind_me_ids[".listFields"][] = "google_name";
$tdatafind_me_ids[".listFields"][] = "custom_address_1";
$tdatafind_me_ids[".listFields"][] = "custom_address_2";
$tdatafind_me_ids[".listFields"][] = "created_at";
$tdatafind_me_ids[".listFields"][] = "updated_at";
$tdatafind_me_ids[".listFields"][] = "lng";
$tdatafind_me_ids[".listFields"][] = "identifier";
$tdatafind_me_ids[".listFields"][] = "polling_station_code";

$tdatafind_me_ids[".hideMobileList"] = array();


$tdatafind_me_ids[".viewFields"] = array();
$tdatafind_me_ids[".viewFields"][] = "find_me_id";
$tdatafind_me_ids[".viewFields"][] = "lat";
$tdatafind_me_ids[".viewFields"][] = "google_name";
$tdatafind_me_ids[".viewFields"][] = "custom_address_1";
$tdatafind_me_ids[".viewFields"][] = "custom_address_2";
$tdatafind_me_ids[".viewFields"][] = "created_at";
$tdatafind_me_ids[".viewFields"][] = "updated_at";
$tdatafind_me_ids[".viewFields"][] = "lng";
$tdatafind_me_ids[".viewFields"][] = "identifier";
$tdatafind_me_ids[".viewFields"][] = "polling_station_code";

$tdatafind_me_ids[".addFields"] = array();
$tdatafind_me_ids[".addFields"][] = "lat";
$tdatafind_me_ids[".addFields"][] = "google_name";
$tdatafind_me_ids[".addFields"][] = "custom_address_1";
$tdatafind_me_ids[".addFields"][] = "custom_address_2";
$tdatafind_me_ids[".addFields"][] = "created_at";
$tdatafind_me_ids[".addFields"][] = "updated_at";
$tdatafind_me_ids[".addFields"][] = "lng";
$tdatafind_me_ids[".addFields"][] = "identifier";
$tdatafind_me_ids[".addFields"][] = "polling_station_code";

$tdatafind_me_ids[".inlineAddFields"] = array();
$tdatafind_me_ids[".inlineAddFields"][] = "lat";
$tdatafind_me_ids[".inlineAddFields"][] = "google_name";
$tdatafind_me_ids[".inlineAddFields"][] = "custom_address_1";
$tdatafind_me_ids[".inlineAddFields"][] = "custom_address_2";
$tdatafind_me_ids[".inlineAddFields"][] = "created_at";
$tdatafind_me_ids[".inlineAddFields"][] = "updated_at";
$tdatafind_me_ids[".inlineAddFields"][] = "lng";
$tdatafind_me_ids[".inlineAddFields"][] = "identifier";
$tdatafind_me_ids[".inlineAddFields"][] = "polling_station_code";

$tdatafind_me_ids[".editFields"] = array();
$tdatafind_me_ids[".editFields"][] = "lat";
$tdatafind_me_ids[".editFields"][] = "google_name";
$tdatafind_me_ids[".editFields"][] = "custom_address_1";
$tdatafind_me_ids[".editFields"][] = "custom_address_2";
$tdatafind_me_ids[".editFields"][] = "created_at";
$tdatafind_me_ids[".editFields"][] = "updated_at";
$tdatafind_me_ids[".editFields"][] = "lng";
$tdatafind_me_ids[".editFields"][] = "identifier";
$tdatafind_me_ids[".editFields"][] = "polling_station_code";

$tdatafind_me_ids[".inlineEditFields"] = array();
$tdatafind_me_ids[".inlineEditFields"][] = "lat";
$tdatafind_me_ids[".inlineEditFields"][] = "google_name";
$tdatafind_me_ids[".inlineEditFields"][] = "custom_address_1";
$tdatafind_me_ids[".inlineEditFields"][] = "custom_address_2";
$tdatafind_me_ids[".inlineEditFields"][] = "created_at";
$tdatafind_me_ids[".inlineEditFields"][] = "updated_at";
$tdatafind_me_ids[".inlineEditFields"][] = "lng";
$tdatafind_me_ids[".inlineEditFields"][] = "identifier";
$tdatafind_me_ids[".inlineEditFields"][] = "polling_station_code";

$tdatafind_me_ids[".exportFields"] = array();
$tdatafind_me_ids[".exportFields"][] = "find_me_id";
$tdatafind_me_ids[".exportFields"][] = "lat";
$tdatafind_me_ids[".exportFields"][] = "google_name";
$tdatafind_me_ids[".exportFields"][] = "custom_address_1";
$tdatafind_me_ids[".exportFields"][] = "custom_address_2";
$tdatafind_me_ids[".exportFields"][] = "created_at";
$tdatafind_me_ids[".exportFields"][] = "updated_at";
$tdatafind_me_ids[".exportFields"][] = "lng";
$tdatafind_me_ids[".exportFields"][] = "identifier";
$tdatafind_me_ids[".exportFields"][] = "polling_station_code";

$tdatafind_me_ids[".importFields"] = array();
$tdatafind_me_ids[".importFields"][] = "find_me_id";
$tdatafind_me_ids[".importFields"][] = "lat";
$tdatafind_me_ids[".importFields"][] = "google_name";
$tdatafind_me_ids[".importFields"][] = "custom_address_1";
$tdatafind_me_ids[".importFields"][] = "custom_address_2";
$tdatafind_me_ids[".importFields"][] = "created_at";
$tdatafind_me_ids[".importFields"][] = "updated_at";
$tdatafind_me_ids[".importFields"][] = "lng";
$tdatafind_me_ids[".importFields"][] = "identifier";
$tdatafind_me_ids[".importFields"][] = "polling_station_code";

$tdatafind_me_ids[".printFields"] = array();
$tdatafind_me_ids[".printFields"][] = "find_me_id";
$tdatafind_me_ids[".printFields"][] = "lat";
$tdatafind_me_ids[".printFields"][] = "google_name";
$tdatafind_me_ids[".printFields"][] = "custom_address_1";
$tdatafind_me_ids[".printFields"][] = "custom_address_2";
$tdatafind_me_ids[".printFields"][] = "created_at";
$tdatafind_me_ids[".printFields"][] = "updated_at";
$tdatafind_me_ids[".printFields"][] = "lng";
$tdatafind_me_ids[".printFields"][] = "identifier";
$tdatafind_me_ids[".printFields"][] = "polling_station_code";

//	find_me_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "find_me_id";
	$fdata["GoodName"] = "find_me_id";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","find_me_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "find_me_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "find_me_id";
	
		
		
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

	

	
	$tdatafind_me_ids["find_me_id"] = $fdata;
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","lat"); 
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
	
		$fdata["strField"] = "lat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lat";
	
		
		
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

	

	
	$tdatafind_me_ids["lat"] = $fdata;
//	google_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "google_name";
	$fdata["GoodName"] = "google_name";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","google_name"); 
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
	
		$fdata["strField"] = "google_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "google_name";
	
		
		
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

	

	
	$tdatafind_me_ids["google_name"] = $fdata;
//	custom_address_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "custom_address_1";
	$fdata["GoodName"] = "custom_address_1";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","custom_address_1"); 
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
	
		$fdata["strField"] = "custom_address_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "custom_address_1";
	
		
		
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

	

	
	$tdatafind_me_ids["custom_address_1"] = $fdata;
//	custom_address_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "custom_address_2";
	$fdata["GoodName"] = "custom_address_2";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","custom_address_2"); 
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
	
		$fdata["strField"] = "custom_address_2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "custom_address_2";
	
		
		
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

	

	
	$tdatafind_me_ids["custom_address_2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","created_at"); 
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

	

	
	$tdatafind_me_ids["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","updated_at"); 
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

	

	
	$tdatafind_me_ids["updated_at"] = $fdata;
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","lng"); 
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
	
		$fdata["strField"] = "lng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lng";
	
		
		
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

	

	
	$tdatafind_me_ids["lng"] = $fdata;
//	identifier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "identifier";
	$fdata["GoodName"] = "identifier";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","identifier"); 
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
	
		$fdata["strField"] = "identifier"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identifier";
	
		
		
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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "identifier";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "identifier";
	
		
	$edata["LookupOrderBy"] = "name";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafind_me_ids["identifier"] = $fdata;
//	polling_station_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "polling_station_code";
	$fdata["GoodName"] = "polling_station_code";
	$fdata["ownerTable"] = "find_me_ids";
	$fdata["Label"] = GetFieldLabel("find_me_ids","polling_station_code"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "polling_stations";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "polling_station_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "polling_station_code";
	
		
	$edata["LookupOrderBy"] = "polling_station_code";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafind_me_ids["polling_station_code"] = $fdata;

	
$tables_data["find_me_ids"]=&$tdatafind_me_ids;
$field_labels["find_me_ids"] = &$fieldLabelsfind_me_ids;
$fieldToolTips["find_me_ids"] = &$fieldToolTipsfind_me_ids;
$page_titles["find_me_ids"] = &$pageTitlesfind_me_ids;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["find_me_ids"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["find_me_ids"] = array();


	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["find_me_ids"][0] = $masterParams;	
				$masterTablesData["find_me_ids"][0]["masterKeys"] = array();
	$masterTablesData["find_me_ids"][0]["masterKeys"][]="identifier";
				$masterTablesData["find_me_ids"][0]["detailKeys"] = array();
	$masterTablesData["find_me_ids"][0]["detailKeys"][]="identifier";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_find_me_ids()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "find_me_id,  lat,  google_name,  custom_address_1,  custom_address_2,  created_at,  updated_at,  lng,  identifier,  polling_station_code";
$proto0["m_strFrom"] = "FROM find_me_ids";
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
	"m_strName" => "find_me_id",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto5["m_sql"] = "find_me_id";
$proto5["m_srcTableName"] = "find_me_ids";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto7["m_sql"] = "lat";
$proto7["m_srcTableName"] = "find_me_ids";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "google_name",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto9["m_sql"] = "google_name";
$proto9["m_srcTableName"] = "find_me_ids";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_address_1",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto11["m_sql"] = "custom_address_1";
$proto11["m_srcTableName"] = "find_me_ids";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_address_2",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto13["m_sql"] = "custom_address_2";
$proto13["m_srcTableName"] = "find_me_ids";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto15["m_sql"] = "created_at";
$proto15["m_srcTableName"] = "find_me_ids";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto17["m_sql"] = "updated_at";
$proto17["m_srcTableName"] = "find_me_ids";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto19["m_sql"] = "lng";
$proto19["m_srcTableName"] = "find_me_ids";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "identifier",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto21["m_sql"] = "identifier";
$proto21["m_srcTableName"] = "find_me_ids";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_station_code",
	"m_strTable" => "find_me_ids",
	"m_srcTableName" => "find_me_ids"
));

$proto23["m_sql"] = "polling_station_code";
$proto23["m_srcTableName"] = "find_me_ids";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "find_me_ids";
$proto26["m_srcTableName"] = "find_me_ids";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "find_me_id";
$proto26["m_columns"][] = "lat";
$proto26["m_columns"][] = "google_name";
$proto26["m_columns"][] = "custom_address_1";
$proto26["m_columns"][] = "custom_address_2";
$proto26["m_columns"][] = "created_at";
$proto26["m_columns"][] = "updated_at";
$proto26["m_columns"][] = "lng";
$proto26["m_columns"][] = "identifier";
$proto26["m_columns"][] = "polling_station_code";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "find_me_ids";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "find_me_ids";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="find_me_ids";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_find_me_ids = createSqlQuery_find_me_ids();


	
										
	
$tdatafind_me_ids[".sqlquery"] = $queryData_find_me_ids;

$tableEvents["find_me_ids"] = new eventsBase;
$tdatafind_me_ids[".hasEvents"] = false;

?>