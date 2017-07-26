<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_coordinates_info = array();	
	$tdatapolling_coordinates_info[".truncateText"] = true;
	$tdatapolling_coordinates_info[".NumberOfChars"] = 80; 
	$tdatapolling_coordinates_info[".ShortName"] = "polling_coordinates_info";
	$tdatapolling_coordinates_info[".OwnerID"] = "";
	$tdatapolling_coordinates_info[".OriginalTable"] = "polling_coordinates_info";

//	field labels
$fieldLabelspolling_coordinates_info = array();
$fieldToolTipspolling_coordinates_info = array();
$pageTitlespolling_coordinates_info = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_coordinates_info["English"] = array();
	$fieldToolTipspolling_coordinates_info["English"] = array();
	$pageTitlespolling_coordinates_info["English"] = array();
	$fieldLabelspolling_coordinates_info["English"]["polling_coordinates_info_id"] = "Polling Coordinates Info Id";
	$fieldToolTipspolling_coordinates_info["English"]["polling_coordinates_info_id"] = "";
	$fieldLabelspolling_coordinates_info["English"]["Custom_name"] = "Custom Name";
	$fieldToolTipspolling_coordinates_info["English"]["Custom_name"] = "";
	$fieldLabelspolling_coordinates_info["English"]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_info["English"]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_info["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_info["English"]["created_at"] = "";
	$fieldLabelspolling_coordinates_info["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_info["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_info["English"]))
		$tdatapolling_coordinates_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_coordinates_info[""] = array();
	$fieldToolTipspolling_coordinates_info[""] = array();
	$pageTitlespolling_coordinates_info[""] = array();
	$fieldLabelspolling_coordinates_info[""]["polling_coordinates_info_id"] = "Polling Coordinates Info Id";
	$fieldToolTipspolling_coordinates_info[""]["polling_coordinates_info_id"] = "";
	$fieldLabelspolling_coordinates_info[""]["Custom_name"] = "Custom Name";
	$fieldToolTipspolling_coordinates_info[""]["Custom_name"] = "";
	$fieldLabelspolling_coordinates_info[""]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_info[""]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_info[""]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_info[""]["created_at"] = "";
	$fieldLabelspolling_coordinates_info[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_info[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_info[""]))
		$tdatapolling_coordinates_info[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_coordinates_info[".NCSearch"] = true;



$tdatapolling_coordinates_info[".shortTableName"] = "polling_coordinates_info";
$tdatapolling_coordinates_info[".nSecOptions"] = 0;
$tdatapolling_coordinates_info[".recsPerRowList"] = 1;
$tdatapolling_coordinates_info[".mainTableOwnerID"] = "";
$tdatapolling_coordinates_info[".moveNext"] = 1;
$tdatapolling_coordinates_info[".nType"] = 0;

$tdatapolling_coordinates_info[".strOriginalTableName"] = "polling_coordinates_info";




$tdatapolling_coordinates_info[".showAddInPopup"] = false;

$tdatapolling_coordinates_info[".showEditInPopup"] = false;

$tdatapolling_coordinates_info[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_coordinates_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_coordinates_info[".fieldsForRegister"] = array();

$tdatapolling_coordinates_info[".listAjax"] = false;

	$tdatapolling_coordinates_info[".audit"] = true;

	$tdatapolling_coordinates_info[".locking"] = false;

$tdatapolling_coordinates_info[".edit"] = true;

$tdatapolling_coordinates_info[".list"] = true;

$tdatapolling_coordinates_info[".inlineEdit"] = true;
$tdatapolling_coordinates_info[".inlineAdd"] = true;
$tdatapolling_coordinates_info[".view"] = true;

$tdatapolling_coordinates_info[".import"] = true;

$tdatapolling_coordinates_info[".exportTo"] = true;

$tdatapolling_coordinates_info[".printFriendly"] = true;

$tdatapolling_coordinates_info[".delete"] = true;

$tdatapolling_coordinates_info[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_coordinates_info[".searchSaving"] = false;
//

$tdatapolling_coordinates_info[".showSearchPanel"] = true;
		$tdatapolling_coordinates_info[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_coordinates_info[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_coordinates_info[".isUseAjaxSuggest"] = true;

$tdatapolling_coordinates_info[".rowHighlite"] = true;



$tdatapolling_coordinates_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_coordinates_info[".isUseTimeForSearch"] = false;





$tdatapolling_coordinates_info[".allSearchFields"] = array();
$tdatapolling_coordinates_info[".filterFields"] = array();
$tdatapolling_coordinates_info[".requiredSearchFields"] = array();

$tdatapolling_coordinates_info[".allSearchFields"][] = "polling_coordinates_info_id";
	$tdatapolling_coordinates_info[".allSearchFields"][] = "Custom_name";
	$tdatapolling_coordinates_info[".allSearchFields"][] = "polling_coordinates_id";
	$tdatapolling_coordinates_info[".allSearchFields"][] = "created_at";
	$tdatapolling_coordinates_info[".allSearchFields"][] = "updated_at";
	

$tdatapolling_coordinates_info[".googleLikeFields"] = array();
$tdatapolling_coordinates_info[".googleLikeFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".googleLikeFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".googleLikeFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".googleLikeFields"][] = "created_at";
$tdatapolling_coordinates_info[".googleLikeFields"][] = "updated_at";


$tdatapolling_coordinates_info[".advSearchFields"] = array();
$tdatapolling_coordinates_info[".advSearchFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".advSearchFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".advSearchFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".advSearchFields"][] = "created_at";
$tdatapolling_coordinates_info[".advSearchFields"][] = "updated_at";

$tdatapolling_coordinates_info[".tableType"] = "list";

$tdatapolling_coordinates_info[".printerPageOrientation"] = 0;
$tdatapolling_coordinates_info[".nPrinterPageScale"] = 100;

$tdatapolling_coordinates_info[".nPrinterSplitRecords"] = 40;

$tdatapolling_coordinates_info[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_coordinates_info[".pageSize"] = 20;

$tdatapolling_coordinates_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_coordinates_info[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_coordinates_info[".orderindexes"] = array();

$tdatapolling_coordinates_info[".sqlHead"] = "SELECT polling_coordinates_info_id,   Custom_name,   polling_coordinates_id,   created_at,   updated_at";
$tdatapolling_coordinates_info[".sqlFrom"] = "FROM polling_coordinates_info";
$tdatapolling_coordinates_info[".sqlWhereExpr"] = "";
$tdatapolling_coordinates_info[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_coordinates_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_coordinates_info[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_coordinates_info[".highlightSearchResults"] = true;

$tableKeyspolling_coordinates_info = array();
$tableKeyspolling_coordinates_info[] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".Keys"] = $tableKeyspolling_coordinates_info;

$tdatapolling_coordinates_info[".listFields"] = array();
$tdatapolling_coordinates_info[".listFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".listFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".listFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".listFields"][] = "created_at";
$tdatapolling_coordinates_info[".listFields"][] = "updated_at";

$tdatapolling_coordinates_info[".hideMobileList"] = array();


$tdatapolling_coordinates_info[".viewFields"] = array();
$tdatapolling_coordinates_info[".viewFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".viewFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".viewFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".viewFields"][] = "created_at";
$tdatapolling_coordinates_info[".viewFields"][] = "updated_at";

$tdatapolling_coordinates_info[".addFields"] = array();
$tdatapolling_coordinates_info[".addFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".addFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".addFields"][] = "created_at";
$tdatapolling_coordinates_info[".addFields"][] = "updated_at";

$tdatapolling_coordinates_info[".inlineAddFields"] = array();
$tdatapolling_coordinates_info[".inlineAddFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".inlineAddFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".inlineAddFields"][] = "created_at";
$tdatapolling_coordinates_info[".inlineAddFields"][] = "updated_at";

$tdatapolling_coordinates_info[".editFields"] = array();
$tdatapolling_coordinates_info[".editFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".editFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".editFields"][] = "created_at";
$tdatapolling_coordinates_info[".editFields"][] = "updated_at";

$tdatapolling_coordinates_info[".inlineEditFields"] = array();
$tdatapolling_coordinates_info[".inlineEditFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".inlineEditFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".inlineEditFields"][] = "created_at";
$tdatapolling_coordinates_info[".inlineEditFields"][] = "updated_at";

$tdatapolling_coordinates_info[".exportFields"] = array();
$tdatapolling_coordinates_info[".exportFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".exportFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".exportFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".exportFields"][] = "created_at";
$tdatapolling_coordinates_info[".exportFields"][] = "updated_at";

$tdatapolling_coordinates_info[".importFields"] = array();
$tdatapolling_coordinates_info[".importFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".importFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".importFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".importFields"][] = "created_at";
$tdatapolling_coordinates_info[".importFields"][] = "updated_at";

$tdatapolling_coordinates_info[".printFields"] = array();
$tdatapolling_coordinates_info[".printFields"][] = "polling_coordinates_info_id";
$tdatapolling_coordinates_info[".printFields"][] = "Custom_name";
$tdatapolling_coordinates_info[".printFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_info[".printFields"][] = "created_at";
$tdatapolling_coordinates_info[".printFields"][] = "updated_at";

//	polling_coordinates_info_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_coordinates_info_id";
	$fdata["GoodName"] = "polling_coordinates_info_id";
	$fdata["ownerTable"] = "polling_coordinates_info";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_info","polling_coordinates_info_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_coordinates_info_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_coordinates_info_id";
	
		
		
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

	

	
	$tdatapolling_coordinates_info["polling_coordinates_info_id"] = $fdata;
//	Custom_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Custom_name";
	$fdata["GoodName"] = "Custom_name";
	$fdata["ownerTable"] = "polling_coordinates_info";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_info","Custom_name"); 
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
	
		$fdata["strField"] = "Custom_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Custom_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdatapolling_coordinates_info["Custom_name"] = $fdata;
//	polling_coordinates_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "polling_coordinates_id";
	$fdata["GoodName"] = "polling_coordinates_id";
	$fdata["ownerTable"] = "polling_coordinates_info";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_info","polling_coordinates_id"); 
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

	

	
	$tdatapolling_coordinates_info["polling_coordinates_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_coordinates_info";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_info","created_at"); 
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

	

	
	$tdatapolling_coordinates_info["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_coordinates_info";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_info","updated_at"); 
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

	

	
	$tdatapolling_coordinates_info["updated_at"] = $fdata;

	
$tables_data["polling_coordinates_info"]=&$tdatapolling_coordinates_info;
$field_labels["polling_coordinates_info"] = &$fieldLabelspolling_coordinates_info;
$fieldToolTips["polling_coordinates_info"] = &$fieldToolTipspolling_coordinates_info;
$page_titles["polling_coordinates_info"] = &$pageTitlespolling_coordinates_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_coordinates_info"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_coordinates_info"] = array();


	
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
					$masterTablesData["polling_coordinates_info"][0] = $masterParams;	
				$masterTablesData["polling_coordinates_info"][0]["masterKeys"] = array();
	$masterTablesData["polling_coordinates_info"][0]["masterKeys"][]="polling_coordinates_id";
				$masterTablesData["polling_coordinates_info"][0]["detailKeys"] = array();
	$masterTablesData["polling_coordinates_info"][0]["detailKeys"][]="polling_coordinates_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_coordinates_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_coordinates_info_id,   Custom_name,   polling_coordinates_id,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM polling_coordinates_info";
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
	"m_strName" => "polling_coordinates_info_id",
	"m_strTable" => "polling_coordinates_info",
	"m_srcTableName" => "polling_coordinates_info"
));

$proto5["m_sql"] = "polling_coordinates_info_id";
$proto5["m_srcTableName"] = "polling_coordinates_info";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Custom_name",
	"m_strTable" => "polling_coordinates_info",
	"m_srcTableName" => "polling_coordinates_info"
));

$proto7["m_sql"] = "Custom_name";
$proto7["m_srcTableName"] = "polling_coordinates_info";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_coordinates_id",
	"m_strTable" => "polling_coordinates_info",
	"m_srcTableName" => "polling_coordinates_info"
));

$proto9["m_sql"] = "polling_coordinates_id";
$proto9["m_srcTableName"] = "polling_coordinates_info";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_coordinates_info",
	"m_srcTableName" => "polling_coordinates_info"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "polling_coordinates_info";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_coordinates_info",
	"m_srcTableName" => "polling_coordinates_info"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "polling_coordinates_info";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "polling_coordinates_info";
$proto16["m_srcTableName"] = "polling_coordinates_info";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "polling_coordinates_info_id";
$proto16["m_columns"][] = "Custom_name";
$proto16["m_columns"][] = "polling_coordinates_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "polling_coordinates_info";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "polling_coordinates_info";
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
$proto0["m_srcTableName"]="polling_coordinates_info";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_coordinates_info = createSqlQuery_polling_coordinates_info();


	
					
	
$tdatapolling_coordinates_info[".sqlquery"] = $queryData_polling_coordinates_info;

$tableEvents["polling_coordinates_info"] = new eventsBase;
$tdatapolling_coordinates_info[".hasEvents"] = false;

?>