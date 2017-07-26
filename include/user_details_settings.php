<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser_details = array();	
	$tdatauser_details[".truncateText"] = true;
	$tdatauser_details[".NumberOfChars"] = 80; 
	$tdatauser_details[".ShortName"] = "user_details";
	$tdatauser_details[".OwnerID"] = "";
	$tdatauser_details[".OriginalTable"] = "user_details";

//	field labels
$fieldLabelsuser_details = array();
$fieldToolTipsuser_details = array();
$pageTitlesuser_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_details["English"] = array();
	$fieldToolTipsuser_details["English"] = array();
	$pageTitlesuser_details["English"] = array();
	$fieldLabelsuser_details["English"]["user_id"] = "User Id";
	$fieldToolTipsuser_details["English"]["user_id"] = "";
	$fieldLabelsuser_details["English"]["email"] = "Email";
	$fieldToolTipsuser_details["English"]["email"] = "";
	$fieldLabelsuser_details["English"]["town_id"] = "Town Id";
	$fieldToolTipsuser_details["English"]["town_id"] = "";
	$fieldLabelsuser_details["English"]["verified"] = "Verified";
	$fieldToolTipsuser_details["English"]["verified"] = "";
	$fieldLabelsuser_details["English"]["verified_by"] = "Verified By";
	$fieldToolTipsuser_details["English"]["verified_by"] = "";
	$fieldLabelsuser_details["English"]["photo"] = "Photo";
	$fieldToolTipsuser_details["English"]["photo"] = "";
	$fieldLabelsuser_details["English"]["latitude"] = "Latitude";
	$fieldToolTipsuser_details["English"]["latitude"] = "";
	$fieldLabelsuser_details["English"]["longitude"] = "Longitude";
	$fieldToolTipsuser_details["English"]["longitude"] = "";
	$fieldLabelsuser_details["English"]["find_me_code"] = "Find Me Code";
	$fieldToolTipsuser_details["English"]["find_me_code"] = "";
	$fieldLabelsuser_details["English"]["created_at"] = "Created At";
	$fieldToolTipsuser_details["English"]["created_at"] = "";
	$fieldLabelsuser_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsuser_details["English"]["updated_at"] = "";
	if (count($fieldToolTipsuser_details["English"]))
		$tdatauser_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser_details[""] = array();
	$fieldToolTipsuser_details[""] = array();
	$pageTitlesuser_details[""] = array();
	$fieldLabelsuser_details[""]["user_id"] = "User Id";
	$fieldToolTipsuser_details[""]["user_id"] = "";
	$fieldLabelsuser_details[""]["email"] = "Email";
	$fieldToolTipsuser_details[""]["email"] = "";
	$fieldLabelsuser_details[""]["town_id"] = "Town Id";
	$fieldToolTipsuser_details[""]["town_id"] = "";
	$fieldLabelsuser_details[""]["verified"] = "Verified";
	$fieldToolTipsuser_details[""]["verified"] = "";
	$fieldLabelsuser_details[""]["verified_by"] = "Verified By";
	$fieldToolTipsuser_details[""]["verified_by"] = "";
	$fieldLabelsuser_details[""]["photo"] = "Photo";
	$fieldToolTipsuser_details[""]["photo"] = "";
	$fieldLabelsuser_details[""]["latitude"] = "Latitude";
	$fieldToolTipsuser_details[""]["latitude"] = "";
	$fieldLabelsuser_details[""]["longitude"] = "Longitude";
	$fieldToolTipsuser_details[""]["longitude"] = "";
	$fieldLabelsuser_details[""]["find_me_code"] = "Find Me Code";
	$fieldToolTipsuser_details[""]["find_me_code"] = "";
	$fieldLabelsuser_details[""]["created_at"] = "Created At";
	$fieldToolTipsuser_details[""]["created_at"] = "";
	$fieldLabelsuser_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsuser_details[""]["updated_at"] = "";
	if (count($fieldToolTipsuser_details[""]))
		$tdatauser_details[".isUseToolTips"] = true;
}
	
	
	$tdatauser_details[".NCSearch"] = true;



$tdatauser_details[".shortTableName"] = "user_details";
$tdatauser_details[".nSecOptions"] = 0;
$tdatauser_details[".recsPerRowList"] = 1;
$tdatauser_details[".mainTableOwnerID"] = "";
$tdatauser_details[".moveNext"] = 1;
$tdatauser_details[".nType"] = 0;

$tdatauser_details[".strOriginalTableName"] = "user_details";




$tdatauser_details[".showAddInPopup"] = false;

$tdatauser_details[".showEditInPopup"] = false;

$tdatauser_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser_details[".fieldsForRegister"] = array();

$tdatauser_details[".listAjax"] = false;

	$tdatauser_details[".audit"] = true;

	$tdatauser_details[".locking"] = false;

$tdatauser_details[".edit"] = true;

$tdatauser_details[".list"] = true;

$tdatauser_details[".inlineEdit"] = true;
$tdatauser_details[".inlineAdd"] = true;
$tdatauser_details[".view"] = true;

$tdatauser_details[".import"] = true;

$tdatauser_details[".exportTo"] = true;

$tdatauser_details[".printFriendly"] = true;

$tdatauser_details[".delete"] = true;

$tdatauser_details[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser_details[".searchSaving"] = false;
//

$tdatauser_details[".showSearchPanel"] = true;
		$tdatauser_details[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser_details[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_details[".isUseAjaxSuggest"] = true;

$tdatauser_details[".rowHighlite"] = true;



$tdatauser_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_details[".isUseTimeForSearch"] = false;





$tdatauser_details[".allSearchFields"] = array();
$tdatauser_details[".filterFields"] = array();
$tdatauser_details[".requiredSearchFields"] = array();

$tdatauser_details[".allSearchFields"][] = "user_id";
	$tdatauser_details[".allSearchFields"][] = "email";
	$tdatauser_details[".allSearchFields"][] = "town_id";
	$tdatauser_details[".allSearchFields"][] = "verified";
	$tdatauser_details[".allSearchFields"][] = "verified_by";
	$tdatauser_details[".allSearchFields"][] = "photo";
	$tdatauser_details[".allSearchFields"][] = "latitude";
	$tdatauser_details[".allSearchFields"][] = "longitude";
	$tdatauser_details[".allSearchFields"][] = "find_me_code";
	$tdatauser_details[".allSearchFields"][] = "created_at";
	$tdatauser_details[".allSearchFields"][] = "updated_at";
	

$tdatauser_details[".googleLikeFields"] = array();
$tdatauser_details[".googleLikeFields"][] = "user_id";
$tdatauser_details[".googleLikeFields"][] = "email";
$tdatauser_details[".googleLikeFields"][] = "town_id";
$tdatauser_details[".googleLikeFields"][] = "verified";
$tdatauser_details[".googleLikeFields"][] = "verified_by";
$tdatauser_details[".googleLikeFields"][] = "photo";
$tdatauser_details[".googleLikeFields"][] = "latitude";
$tdatauser_details[".googleLikeFields"][] = "longitude";
$tdatauser_details[".googleLikeFields"][] = "find_me_code";
$tdatauser_details[".googleLikeFields"][] = "created_at";
$tdatauser_details[".googleLikeFields"][] = "updated_at";


$tdatauser_details[".advSearchFields"] = array();
$tdatauser_details[".advSearchFields"][] = "user_id";
$tdatauser_details[".advSearchFields"][] = "email";
$tdatauser_details[".advSearchFields"][] = "town_id";
$tdatauser_details[".advSearchFields"][] = "verified";
$tdatauser_details[".advSearchFields"][] = "verified_by";
$tdatauser_details[".advSearchFields"][] = "photo";
$tdatauser_details[".advSearchFields"][] = "latitude";
$tdatauser_details[".advSearchFields"][] = "longitude";
$tdatauser_details[".advSearchFields"][] = "find_me_code";
$tdatauser_details[".advSearchFields"][] = "created_at";
$tdatauser_details[".advSearchFields"][] = "updated_at";

$tdatauser_details[".tableType"] = "list";

$tdatauser_details[".printerPageOrientation"] = 0;
$tdatauser_details[".nPrinterPageScale"] = 100;

$tdatauser_details[".nPrinterSplitRecords"] = 40;

$tdatauser_details[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatauser_details[".pageSize"] = 20;

$tdatauser_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_details[".strOrderBy"] = $tstrOrderBy;

$tdatauser_details[".orderindexes"] = array();

$tdatauser_details[".sqlHead"] = "SELECT user_id,   email,   town_id,   verified,   verified_by,   photo,   latitude,   longitude,   find_me_code,   created_at,   updated_at";
$tdatauser_details[".sqlFrom"] = "FROM user_details";
$tdatauser_details[".sqlWhereExpr"] = "";
$tdatauser_details[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_details[".arrGroupsPerPage"] = $arrGPP;

$tdatauser_details[".highlightSearchResults"] = true;

$tableKeysuser_details = array();
$tableKeysuser_details[] = "user_id";
$tdatauser_details[".Keys"] = $tableKeysuser_details;

$tdatauser_details[".listFields"] = array();
$tdatauser_details[".listFields"][] = "user_id";
$tdatauser_details[".listFields"][] = "email";
$tdatauser_details[".listFields"][] = "town_id";
$tdatauser_details[".listFields"][] = "verified";
$tdatauser_details[".listFields"][] = "verified_by";
$tdatauser_details[".listFields"][] = "photo";
$tdatauser_details[".listFields"][] = "latitude";
$tdatauser_details[".listFields"][] = "longitude";
$tdatauser_details[".listFields"][] = "find_me_code";
$tdatauser_details[".listFields"][] = "created_at";
$tdatauser_details[".listFields"][] = "updated_at";

$tdatauser_details[".hideMobileList"] = array();


$tdatauser_details[".viewFields"] = array();
$tdatauser_details[".viewFields"][] = "user_id";
$tdatauser_details[".viewFields"][] = "email";
$tdatauser_details[".viewFields"][] = "town_id";
$tdatauser_details[".viewFields"][] = "verified";
$tdatauser_details[".viewFields"][] = "verified_by";
$tdatauser_details[".viewFields"][] = "photo";
$tdatauser_details[".viewFields"][] = "latitude";
$tdatauser_details[".viewFields"][] = "longitude";
$tdatauser_details[".viewFields"][] = "find_me_code";
$tdatauser_details[".viewFields"][] = "created_at";
$tdatauser_details[".viewFields"][] = "updated_at";

$tdatauser_details[".addFields"] = array();
$tdatauser_details[".addFields"][] = "user_id";
$tdatauser_details[".addFields"][] = "email";
$tdatauser_details[".addFields"][] = "town_id";
$tdatauser_details[".addFields"][] = "verified";
$tdatauser_details[".addFields"][] = "verified_by";
$tdatauser_details[".addFields"][] = "photo";
$tdatauser_details[".addFields"][] = "latitude";
$tdatauser_details[".addFields"][] = "longitude";
$tdatauser_details[".addFields"][] = "find_me_code";
$tdatauser_details[".addFields"][] = "created_at";
$tdatauser_details[".addFields"][] = "updated_at";

$tdatauser_details[".inlineAddFields"] = array();
$tdatauser_details[".inlineAddFields"][] = "user_id";
$tdatauser_details[".inlineAddFields"][] = "email";
$tdatauser_details[".inlineAddFields"][] = "town_id";
$tdatauser_details[".inlineAddFields"][] = "verified";
$tdatauser_details[".inlineAddFields"][] = "verified_by";
$tdatauser_details[".inlineAddFields"][] = "photo";
$tdatauser_details[".inlineAddFields"][] = "latitude";
$tdatauser_details[".inlineAddFields"][] = "longitude";
$tdatauser_details[".inlineAddFields"][] = "find_me_code";
$tdatauser_details[".inlineAddFields"][] = "created_at";
$tdatauser_details[".inlineAddFields"][] = "updated_at";

$tdatauser_details[".editFields"] = array();
$tdatauser_details[".editFields"][] = "user_id";
$tdatauser_details[".editFields"][] = "email";
$tdatauser_details[".editFields"][] = "town_id";
$tdatauser_details[".editFields"][] = "verified";
$tdatauser_details[".editFields"][] = "verified_by";
$tdatauser_details[".editFields"][] = "photo";
$tdatauser_details[".editFields"][] = "latitude";
$tdatauser_details[".editFields"][] = "longitude";
$tdatauser_details[".editFields"][] = "find_me_code";
$tdatauser_details[".editFields"][] = "created_at";
$tdatauser_details[".editFields"][] = "updated_at";

$tdatauser_details[".inlineEditFields"] = array();
$tdatauser_details[".inlineEditFields"][] = "user_id";
$tdatauser_details[".inlineEditFields"][] = "email";
$tdatauser_details[".inlineEditFields"][] = "town_id";
$tdatauser_details[".inlineEditFields"][] = "verified";
$tdatauser_details[".inlineEditFields"][] = "verified_by";
$tdatauser_details[".inlineEditFields"][] = "photo";
$tdatauser_details[".inlineEditFields"][] = "latitude";
$tdatauser_details[".inlineEditFields"][] = "longitude";
$tdatauser_details[".inlineEditFields"][] = "find_me_code";
$tdatauser_details[".inlineEditFields"][] = "created_at";
$tdatauser_details[".inlineEditFields"][] = "updated_at";

$tdatauser_details[".exportFields"] = array();
$tdatauser_details[".exportFields"][] = "user_id";
$tdatauser_details[".exportFields"][] = "email";
$tdatauser_details[".exportFields"][] = "town_id";
$tdatauser_details[".exportFields"][] = "verified";
$tdatauser_details[".exportFields"][] = "verified_by";
$tdatauser_details[".exportFields"][] = "photo";
$tdatauser_details[".exportFields"][] = "latitude";
$tdatauser_details[".exportFields"][] = "longitude";
$tdatauser_details[".exportFields"][] = "find_me_code";
$tdatauser_details[".exportFields"][] = "created_at";
$tdatauser_details[".exportFields"][] = "updated_at";

$tdatauser_details[".importFields"] = array();
$tdatauser_details[".importFields"][] = "user_id";
$tdatauser_details[".importFields"][] = "email";
$tdatauser_details[".importFields"][] = "town_id";
$tdatauser_details[".importFields"][] = "verified";
$tdatauser_details[".importFields"][] = "verified_by";
$tdatauser_details[".importFields"][] = "photo";
$tdatauser_details[".importFields"][] = "latitude";
$tdatauser_details[".importFields"][] = "longitude";
$tdatauser_details[".importFields"][] = "find_me_code";
$tdatauser_details[".importFields"][] = "created_at";
$tdatauser_details[".importFields"][] = "updated_at";

$tdatauser_details[".printFields"] = array();
$tdatauser_details[".printFields"][] = "user_id";
$tdatauser_details[".printFields"][] = "email";
$tdatauser_details[".printFields"][] = "town_id";
$tdatauser_details[".printFields"][] = "verified";
$tdatauser_details[".printFields"][] = "verified_by";
$tdatauser_details[".printFields"][] = "photo";
$tdatauser_details[".printFields"][] = "latitude";
$tdatauser_details[".printFields"][] = "longitude";
$tdatauser_details[".printFields"][] = "find_me_code";
$tdatauser_details[".printFields"][] = "created_at";
$tdatauser_details[".printFields"][] = "updated_at";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","user_id"); 
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
	
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";
	
		
		
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
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_id";
	
		
	$edata["LookupOrderBy"] = "name";
	
		
			
		
				
	
	
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauser_details["user_id"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","email"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";
	
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

	

	
	$tdatauser_details["email"] = $fdata;
//	town_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "town_id";
	$fdata["GoodName"] = "town_id";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","town_id"); 
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

	

	
	$tdatauser_details["town_id"] = $fdata;
//	verified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "verified";
	$fdata["GoodName"] = "verified";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","verified"); 
	$fdata["FieldType"] = 129;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "verified"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verified";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatauser_details["verified"] = $fdata;
//	verified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "verified_by";
	$fdata["GoodName"] = "verified_by";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","verified_by"); 
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
	
		$fdata["strField"] = "verified_by"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verified_by";
	
		
		
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
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_id";
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauser_details["verified_by"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","photo"); 
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
	
		$fdata["strField"] = "photo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "photo";
	
		
		
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

	

	
	$tdatauser_details["photo"] = $fdata;
//	latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "latitude";
	$fdata["GoodName"] = "latitude";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","latitude"); 
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
	
		$fdata["strField"] = "latitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";
	
		
		
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

	

	
	$tdatauser_details["latitude"] = $fdata;
//	longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "longitude";
	$fdata["GoodName"] = "longitude";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","longitude"); 
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
	
		$fdata["strField"] = "longitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitude";
	
		
		
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

	

	
	$tdatauser_details["longitude"] = $fdata;
//	find_me_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "find_me_code";
	$fdata["GoodName"] = "find_me_code";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","find_me_code"); 
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

	

	
	$tdatauser_details["find_me_code"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","created_at"); 
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

	

	
	$tdatauser_details["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "user_details";
	$fdata["Label"] = GetFieldLabel("user_details","updated_at"); 
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

	

	
	$tdatauser_details["updated_at"] = $fdata;

	
$tables_data["user_details"]=&$tdatauser_details;
$field_labels["user_details"] = &$fieldLabelsuser_details;
$fieldToolTips["user_details"] = &$fieldToolTipsuser_details;
$page_titles["user_details"] = &$pageTitlesuser_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_details"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_details"] = array();


	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
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
					$masterTablesData["user_details"][0] = $masterParams;	
				$masterTablesData["user_details"][0]["masterKeys"] = array();
	$masterTablesData["user_details"][0]["masterKeys"][]="user_id";
				$masterTablesData["user_details"][0]["detailKeys"] = array();
	$masterTablesData["user_details"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,   email,   town_id,   verified,   verified_by,   photo,   latitude,   longitude,   find_me_code,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM user_details";
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
	"m_strName" => "user_id",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto5["m_sql"] = "user_id";
$proto5["m_srcTableName"] = "user_details";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto7["m_sql"] = "email";
$proto7["m_srcTableName"] = "user_details";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "town_id",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto9["m_sql"] = "town_id";
$proto9["m_srcTableName"] = "user_details";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "verified",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto11["m_sql"] = "verified";
$proto11["m_srcTableName"] = "user_details";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "verified_by",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto13["m_sql"] = "verified_by";
$proto13["m_srcTableName"] = "user_details";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto15["m_sql"] = "photo";
$proto15["m_srcTableName"] = "user_details";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto17["m_sql"] = "latitude";
$proto17["m_srcTableName"] = "user_details";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "longitude",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto19["m_sql"] = "longitude";
$proto19["m_srcTableName"] = "user_details";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "find_me_code",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto21["m_sql"] = "find_me_code";
$proto21["m_srcTableName"] = "user_details";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto23["m_sql"] = "created_at";
$proto23["m_srcTableName"] = "user_details";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "user_details",
	"m_srcTableName" => "user_details"
));

$proto25["m_sql"] = "updated_at";
$proto25["m_srcTableName"] = "user_details";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "user_details";
$proto28["m_srcTableName"] = "user_details";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "user_id";
$proto28["m_columns"][] = "email";
$proto28["m_columns"][] = "town_id";
$proto28["m_columns"][] = "verified";
$proto28["m_columns"][] = "verified_by";
$proto28["m_columns"][] = "photo";
$proto28["m_columns"][] = "latitude";
$proto28["m_columns"][] = "longitude";
$proto28["m_columns"][] = "find_me_code";
$proto28["m_columns"][] = "created_at";
$proto28["m_columns"][] = "updated_at";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "user_details";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "user_details";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_details = createSqlQuery_user_details();


	
											
	
$tdatauser_details[".sqlquery"] = $queryData_user_details;

$tableEvents["user_details"] = new eventsBase;
$tdatauser_details[".hasEvents"] = false;

?>