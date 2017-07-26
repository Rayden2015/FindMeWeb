<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_coordinates_contact = array();	
	$tdatapolling_coordinates_contact[".truncateText"] = true;
	$tdatapolling_coordinates_contact[".NumberOfChars"] = 80; 
	$tdatapolling_coordinates_contact[".ShortName"] = "polling_coordinates_contact";
	$tdatapolling_coordinates_contact[".OwnerID"] = "";
	$tdatapolling_coordinates_contact[".OriginalTable"] = "polling_coordinates_contact";

//	field labels
$fieldLabelspolling_coordinates_contact = array();
$fieldToolTipspolling_coordinates_contact = array();
$pageTitlespolling_coordinates_contact = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_coordinates_contact["English"] = array();
	$fieldToolTipspolling_coordinates_contact["English"] = array();
	$pageTitlespolling_coordinates_contact["English"] = array();
	$fieldLabelspolling_coordinates_contact["English"]["polling_coordinates_contact_id"] = "Polling Coordinates Contact Id";
	$fieldToolTipspolling_coordinates_contact["English"]["polling_coordinates_contact_id"] = "";
	$fieldLabelspolling_coordinates_contact["English"]["mobile_number"] = "Mobile Number";
	$fieldToolTipspolling_coordinates_contact["English"]["mobile_number"] = "";
	$fieldLabelspolling_coordinates_contact["English"]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_contact["English"]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_contact["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_contact["English"]["created_at"] = "";
	$fieldLabelspolling_coordinates_contact["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_contact["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_contact["English"]))
		$tdatapolling_coordinates_contact[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_coordinates_contact[""] = array();
	$fieldToolTipspolling_coordinates_contact[""] = array();
	$pageTitlespolling_coordinates_contact[""] = array();
	$fieldLabelspolling_coordinates_contact[""]["polling_coordinates_contact_id"] = "Polling Coordinates Contact Id";
	$fieldToolTipspolling_coordinates_contact[""]["polling_coordinates_contact_id"] = "";
	$fieldLabelspolling_coordinates_contact[""]["mobile_number"] = "Mobile Number";
	$fieldToolTipspolling_coordinates_contact[""]["mobile_number"] = "";
	$fieldLabelspolling_coordinates_contact[""]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_contact[""]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_contact[""]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_contact[""]["created_at"] = "";
	$fieldLabelspolling_coordinates_contact[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_contact[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_contact[""]))
		$tdatapolling_coordinates_contact[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_coordinates_contact[".NCSearch"] = true;



$tdatapolling_coordinates_contact[".shortTableName"] = "polling_coordinates_contact";
$tdatapolling_coordinates_contact[".nSecOptions"] = 0;
$tdatapolling_coordinates_contact[".recsPerRowList"] = 1;
$tdatapolling_coordinates_contact[".mainTableOwnerID"] = "";
$tdatapolling_coordinates_contact[".moveNext"] = 1;
$tdatapolling_coordinates_contact[".nType"] = 0;

$tdatapolling_coordinates_contact[".strOriginalTableName"] = "polling_coordinates_contact";




$tdatapolling_coordinates_contact[".showAddInPopup"] = false;

$tdatapolling_coordinates_contact[".showEditInPopup"] = false;

$tdatapolling_coordinates_contact[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_coordinates_contact[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_coordinates_contact[".fieldsForRegister"] = array();

$tdatapolling_coordinates_contact[".listAjax"] = false;

	$tdatapolling_coordinates_contact[".audit"] = true;

	$tdatapolling_coordinates_contact[".locking"] = false;

$tdatapolling_coordinates_contact[".edit"] = true;

$tdatapolling_coordinates_contact[".list"] = true;

$tdatapolling_coordinates_contact[".inlineEdit"] = true;
$tdatapolling_coordinates_contact[".inlineAdd"] = true;
$tdatapolling_coordinates_contact[".view"] = true;

$tdatapolling_coordinates_contact[".import"] = true;

$tdatapolling_coordinates_contact[".exportTo"] = true;

$tdatapolling_coordinates_contact[".printFriendly"] = true;

$tdatapolling_coordinates_contact[".delete"] = true;

$tdatapolling_coordinates_contact[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_coordinates_contact[".searchSaving"] = false;
//

$tdatapolling_coordinates_contact[".showSearchPanel"] = true;
		$tdatapolling_coordinates_contact[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_coordinates_contact[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_coordinates_contact[".isUseAjaxSuggest"] = true;

$tdatapolling_coordinates_contact[".rowHighlite"] = true;



$tdatapolling_coordinates_contact[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_coordinates_contact[".isUseTimeForSearch"] = false;





$tdatapolling_coordinates_contact[".allSearchFields"] = array();
$tdatapolling_coordinates_contact[".filterFields"] = array();
$tdatapolling_coordinates_contact[".requiredSearchFields"] = array();

$tdatapolling_coordinates_contact[".allSearchFields"][] = "polling_coordinates_contact_id";
	$tdatapolling_coordinates_contact[".allSearchFields"][] = "mobile_number";
	$tdatapolling_coordinates_contact[".allSearchFields"][] = "polling_coordinates_id";
	$tdatapolling_coordinates_contact[".allSearchFields"][] = "created_at";
	$tdatapolling_coordinates_contact[".allSearchFields"][] = "updated_at";
	

$tdatapolling_coordinates_contact[".googleLikeFields"] = array();
$tdatapolling_coordinates_contact[".googleLikeFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".googleLikeFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".googleLikeFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".googleLikeFields"][] = "created_at";
$tdatapolling_coordinates_contact[".googleLikeFields"][] = "updated_at";


$tdatapolling_coordinates_contact[".advSearchFields"] = array();
$tdatapolling_coordinates_contact[".advSearchFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".advSearchFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".advSearchFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".advSearchFields"][] = "created_at";
$tdatapolling_coordinates_contact[".advSearchFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".tableType"] = "list";

$tdatapolling_coordinates_contact[".printerPageOrientation"] = 0;
$tdatapolling_coordinates_contact[".nPrinterPageScale"] = 100;

$tdatapolling_coordinates_contact[".nPrinterSplitRecords"] = 40;

$tdatapolling_coordinates_contact[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_coordinates_contact[".pageSize"] = 20;

$tdatapolling_coordinates_contact[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_coordinates_contact[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_coordinates_contact[".orderindexes"] = array();

$tdatapolling_coordinates_contact[".sqlHead"] = "SELECT polling_coordinates_contact_id,  mobile_number,  polling_coordinates_id,  created_at,  updated_at";
$tdatapolling_coordinates_contact[".sqlFrom"] = "FROM polling_coordinates_contact";
$tdatapolling_coordinates_contact[".sqlWhereExpr"] = "";
$tdatapolling_coordinates_contact[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_coordinates_contact[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_coordinates_contact[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_coordinates_contact[".highlightSearchResults"] = true;

$tableKeyspolling_coordinates_contact = array();
$tableKeyspolling_coordinates_contact[] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".Keys"] = $tableKeyspolling_coordinates_contact;

$tdatapolling_coordinates_contact[".listFields"] = array();
$tdatapolling_coordinates_contact[".listFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".listFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".listFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".listFields"][] = "created_at";
$tdatapolling_coordinates_contact[".listFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".hideMobileList"] = array();


$tdatapolling_coordinates_contact[".viewFields"] = array();
$tdatapolling_coordinates_contact[".viewFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".viewFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".viewFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".viewFields"][] = "created_at";
$tdatapolling_coordinates_contact[".viewFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".addFields"] = array();
$tdatapolling_coordinates_contact[".addFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".addFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".addFields"][] = "created_at";
$tdatapolling_coordinates_contact[".addFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".inlineAddFields"] = array();
$tdatapolling_coordinates_contact[".inlineAddFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".inlineAddFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".inlineAddFields"][] = "created_at";
$tdatapolling_coordinates_contact[".inlineAddFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".editFields"] = array();
$tdatapolling_coordinates_contact[".editFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".editFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".editFields"][] = "created_at";
$tdatapolling_coordinates_contact[".editFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".inlineEditFields"] = array();
$tdatapolling_coordinates_contact[".inlineEditFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".inlineEditFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".inlineEditFields"][] = "created_at";
$tdatapolling_coordinates_contact[".inlineEditFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".exportFields"] = array();
$tdatapolling_coordinates_contact[".exportFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".exportFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".exportFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".exportFields"][] = "created_at";
$tdatapolling_coordinates_contact[".exportFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".importFields"] = array();
$tdatapolling_coordinates_contact[".importFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".importFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".importFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".importFields"][] = "created_at";
$tdatapolling_coordinates_contact[".importFields"][] = "updated_at";

$tdatapolling_coordinates_contact[".printFields"] = array();
$tdatapolling_coordinates_contact[".printFields"][] = "polling_coordinates_contact_id";
$tdatapolling_coordinates_contact[".printFields"][] = "mobile_number";
$tdatapolling_coordinates_contact[".printFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_contact[".printFields"][] = "created_at";
$tdatapolling_coordinates_contact[".printFields"][] = "updated_at";

//	polling_coordinates_contact_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_coordinates_contact_id";
	$fdata["GoodName"] = "polling_coordinates_contact_id";
	$fdata["ownerTable"] = "polling_coordinates_contact";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_contact","polling_coordinates_contact_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_coordinates_contact_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_coordinates_contact_id";
	
		
		
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

	

	
	$tdatapolling_coordinates_contact["polling_coordinates_contact_id"] = $fdata;
//	mobile_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mobile_number";
	$fdata["GoodName"] = "mobile_number";
	$fdata["ownerTable"] = "polling_coordinates_contact";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_contact","mobile_number"); 
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
	
		$fdata["strField"] = "mobile_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile_number";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	

	
	$tdatapolling_coordinates_contact["mobile_number"] = $fdata;
//	polling_coordinates_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "polling_coordinates_id";
	$fdata["GoodName"] = "polling_coordinates_id";
	$fdata["ownerTable"] = "polling_coordinates_contact";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_contact","polling_coordinates_id"); 
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

	

	
	$tdatapolling_coordinates_contact["polling_coordinates_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_coordinates_contact";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_contact","created_at"); 
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

	

	
	$tdatapolling_coordinates_contact["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_coordinates_contact";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_contact","updated_at"); 
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

	

	
	$tdatapolling_coordinates_contact["updated_at"] = $fdata;

	
$tables_data["polling_coordinates_contact"]=&$tdatapolling_coordinates_contact;
$field_labels["polling_coordinates_contact"] = &$fieldLabelspolling_coordinates_contact;
$fieldToolTips["polling_coordinates_contact"] = &$fieldToolTipspolling_coordinates_contact;
$page_titles["polling_coordinates_contact"] = &$pageTitlespolling_coordinates_contact;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_coordinates_contact"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_coordinates_contact"] = array();


	
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
					$masterTablesData["polling_coordinates_contact"][0] = $masterParams;	
				$masterTablesData["polling_coordinates_contact"][0]["masterKeys"] = array();
	$masterTablesData["polling_coordinates_contact"][0]["masterKeys"][]="polling_coordinates_id";
				$masterTablesData["polling_coordinates_contact"][0]["detailKeys"] = array();
	$masterTablesData["polling_coordinates_contact"][0]["detailKeys"][]="polling_coordinates_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_coordinates_contact()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_coordinates_contact_id,  mobile_number,  polling_coordinates_id,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM polling_coordinates_contact";
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
	"m_strName" => "polling_coordinates_contact_id",
	"m_strTable" => "polling_coordinates_contact",
	"m_srcTableName" => "polling_coordinates_contact"
));

$proto5["m_sql"] = "polling_coordinates_contact_id";
$proto5["m_srcTableName"] = "polling_coordinates_contact";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile_number",
	"m_strTable" => "polling_coordinates_contact",
	"m_srcTableName" => "polling_coordinates_contact"
));

$proto7["m_sql"] = "mobile_number";
$proto7["m_srcTableName"] = "polling_coordinates_contact";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_coordinates_id",
	"m_strTable" => "polling_coordinates_contact",
	"m_srcTableName" => "polling_coordinates_contact"
));

$proto9["m_sql"] = "polling_coordinates_id";
$proto9["m_srcTableName"] = "polling_coordinates_contact";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_coordinates_contact",
	"m_srcTableName" => "polling_coordinates_contact"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "polling_coordinates_contact";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_coordinates_contact",
	"m_srcTableName" => "polling_coordinates_contact"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "polling_coordinates_contact";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "polling_coordinates_contact";
$proto16["m_srcTableName"] = "polling_coordinates_contact";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "polling_coordinates_contact_id";
$proto16["m_columns"][] = "mobile_number";
$proto16["m_columns"][] = "polling_coordinates_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "polling_coordinates_contact";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "polling_coordinates_contact";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="polling_coordinates_contact";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_coordinates_contact = createSqlQuery_polling_coordinates_contact();


	
					
	
$tdatapolling_coordinates_contact[".sqlquery"] = $queryData_polling_coordinates_contact;

$tableEvents["polling_coordinates_contact"] = new eventsBase;
$tdatapolling_coordinates_contact[".hasEvents"] = false;

?>