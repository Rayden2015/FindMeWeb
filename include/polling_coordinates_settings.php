<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_coordinates = array();	
	$tdatapolling_coordinates[".truncateText"] = true;
	$tdatapolling_coordinates[".NumberOfChars"] = 80; 
	$tdatapolling_coordinates[".ShortName"] = "polling_coordinates";
	$tdatapolling_coordinates[".OwnerID"] = "";
	$tdatapolling_coordinates[".OriginalTable"] = "polling_coordinates";

//	field labels
$fieldLabelspolling_coordinates = array();
$fieldToolTipspolling_coordinates = array();
$pageTitlespolling_coordinates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_coordinates["English"] = array();
	$fieldToolTipspolling_coordinates["English"] = array();
	$pageTitlespolling_coordinates["English"] = array();
	$fieldLabelspolling_coordinates["English"]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates["English"]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates["English"]["job_id"] = "Job Id";
	$fieldToolTipspolling_coordinates["English"]["job_id"] = "";
	$fieldLabelspolling_coordinates["English"]["user_id"] = "User Id";
	$fieldToolTipspolling_coordinates["English"]["user_id"] = "";
	$fieldLabelspolling_coordinates["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates["English"]["created_at"] = "";
	$fieldLabelspolling_coordinates["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates["English"]))
		$tdatapolling_coordinates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_coordinates[""] = array();
	$fieldToolTipspolling_coordinates[""] = array();
	$pageTitlespolling_coordinates[""] = array();
	$fieldLabelspolling_coordinates[""]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates[""]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates[""]["job_id"] = "Job Id";
	$fieldToolTipspolling_coordinates[""]["job_id"] = "";
	$fieldLabelspolling_coordinates[""]["user_id"] = "User Id";
	$fieldToolTipspolling_coordinates[""]["user_id"] = "";
	$fieldLabelspolling_coordinates[""]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates[""]["created_at"] = "";
	$fieldLabelspolling_coordinates[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates[""]))
		$tdatapolling_coordinates[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_coordinates[".NCSearch"] = true;



$tdatapolling_coordinates[".shortTableName"] = "polling_coordinates";
$tdatapolling_coordinates[".nSecOptions"] = 0;
$tdatapolling_coordinates[".recsPerRowList"] = 1;
$tdatapolling_coordinates[".mainTableOwnerID"] = "";
$tdatapolling_coordinates[".moveNext"] = 1;
$tdatapolling_coordinates[".nType"] = 0;

$tdatapolling_coordinates[".strOriginalTableName"] = "polling_coordinates";




$tdatapolling_coordinates[".showAddInPopup"] = false;

$tdatapolling_coordinates[".showEditInPopup"] = false;

$tdatapolling_coordinates[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_coordinates[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_coordinates[".fieldsForRegister"] = array();

$tdatapolling_coordinates[".listAjax"] = false;

	$tdatapolling_coordinates[".audit"] = true;

	$tdatapolling_coordinates[".locking"] = false;

$tdatapolling_coordinates[".edit"] = true;

$tdatapolling_coordinates[".list"] = true;

$tdatapolling_coordinates[".inlineEdit"] = true;
$tdatapolling_coordinates[".inlineAdd"] = true;
$tdatapolling_coordinates[".view"] = true;

$tdatapolling_coordinates[".import"] = true;

$tdatapolling_coordinates[".exportTo"] = true;

$tdatapolling_coordinates[".printFriendly"] = true;

$tdatapolling_coordinates[".delete"] = true;

$tdatapolling_coordinates[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_coordinates[".searchSaving"] = false;
//

$tdatapolling_coordinates[".showSearchPanel"] = true;
		$tdatapolling_coordinates[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_coordinates[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_coordinates[".isUseAjaxSuggest"] = true;

$tdatapolling_coordinates[".rowHighlite"] = true;



$tdatapolling_coordinates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_coordinates[".isUseTimeForSearch"] = false;





$tdatapolling_coordinates[".allSearchFields"] = array();
$tdatapolling_coordinates[".filterFields"] = array();
$tdatapolling_coordinates[".requiredSearchFields"] = array();

$tdatapolling_coordinates[".allSearchFields"][] = "polling_coordinates_id";
	$tdatapolling_coordinates[".allSearchFields"][] = "job_id";
	$tdatapolling_coordinates[".allSearchFields"][] = "user_id";
	$tdatapolling_coordinates[".allSearchFields"][] = "created_at";
	$tdatapolling_coordinates[".allSearchFields"][] = "updated_at";
	

$tdatapolling_coordinates[".googleLikeFields"] = array();
$tdatapolling_coordinates[".googleLikeFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".googleLikeFields"][] = "job_id";
$tdatapolling_coordinates[".googleLikeFields"][] = "user_id";
$tdatapolling_coordinates[".googleLikeFields"][] = "created_at";
$tdatapolling_coordinates[".googleLikeFields"][] = "updated_at";


$tdatapolling_coordinates[".advSearchFields"] = array();
$tdatapolling_coordinates[".advSearchFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".advSearchFields"][] = "job_id";
$tdatapolling_coordinates[".advSearchFields"][] = "user_id";
$tdatapolling_coordinates[".advSearchFields"][] = "created_at";
$tdatapolling_coordinates[".advSearchFields"][] = "updated_at";

$tdatapolling_coordinates[".tableType"] = "list";

$tdatapolling_coordinates[".printerPageOrientation"] = 0;
$tdatapolling_coordinates[".nPrinterPageScale"] = 100;

$tdatapolling_coordinates[".nPrinterSplitRecords"] = 40;

$tdatapolling_coordinates[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_coordinates[".pageSize"] = 20;

$tdatapolling_coordinates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_coordinates[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_coordinates[".orderindexes"] = array();

$tdatapolling_coordinates[".sqlHead"] = "SELECT polling_coordinates_id,  job_id,  user_id,  created_at,  updated_at";
$tdatapolling_coordinates[".sqlFrom"] = "FROM polling_coordinates";
$tdatapolling_coordinates[".sqlWhereExpr"] = "";
$tdatapolling_coordinates[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_coordinates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_coordinates[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_coordinates[".highlightSearchResults"] = true;

$tableKeyspolling_coordinates = array();
$tableKeyspolling_coordinates[] = "polling_coordinates_id";
$tableKeyspolling_coordinates[] = "user_id";
$tdatapolling_coordinates[".Keys"] = $tableKeyspolling_coordinates;

$tdatapolling_coordinates[".listFields"] = array();
$tdatapolling_coordinates[".listFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".listFields"][] = "job_id";
$tdatapolling_coordinates[".listFields"][] = "user_id";
$tdatapolling_coordinates[".listFields"][] = "created_at";
$tdatapolling_coordinates[".listFields"][] = "updated_at";

$tdatapolling_coordinates[".hideMobileList"] = array();


$tdatapolling_coordinates[".viewFields"] = array();
$tdatapolling_coordinates[".viewFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".viewFields"][] = "job_id";
$tdatapolling_coordinates[".viewFields"][] = "user_id";
$tdatapolling_coordinates[".viewFields"][] = "created_at";
$tdatapolling_coordinates[".viewFields"][] = "updated_at";

$tdatapolling_coordinates[".addFields"] = array();
$tdatapolling_coordinates[".addFields"][] = "job_id";
$tdatapolling_coordinates[".addFields"][] = "user_id";
$tdatapolling_coordinates[".addFields"][] = "created_at";
$tdatapolling_coordinates[".addFields"][] = "updated_at";

$tdatapolling_coordinates[".inlineAddFields"] = array();
$tdatapolling_coordinates[".inlineAddFields"][] = "job_id";
$tdatapolling_coordinates[".inlineAddFields"][] = "user_id";
$tdatapolling_coordinates[".inlineAddFields"][] = "created_at";
$tdatapolling_coordinates[".inlineAddFields"][] = "updated_at";

$tdatapolling_coordinates[".editFields"] = array();
$tdatapolling_coordinates[".editFields"][] = "job_id";
$tdatapolling_coordinates[".editFields"][] = "user_id";
$tdatapolling_coordinates[".editFields"][] = "created_at";
$tdatapolling_coordinates[".editFields"][] = "updated_at";

$tdatapolling_coordinates[".inlineEditFields"] = array();
$tdatapolling_coordinates[".inlineEditFields"][] = "job_id";
$tdatapolling_coordinates[".inlineEditFields"][] = "user_id";
$tdatapolling_coordinates[".inlineEditFields"][] = "created_at";
$tdatapolling_coordinates[".inlineEditFields"][] = "updated_at";

$tdatapolling_coordinates[".exportFields"] = array();
$tdatapolling_coordinates[".exportFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".exportFields"][] = "job_id";
$tdatapolling_coordinates[".exportFields"][] = "user_id";
$tdatapolling_coordinates[".exportFields"][] = "created_at";
$tdatapolling_coordinates[".exportFields"][] = "updated_at";

$tdatapolling_coordinates[".importFields"] = array();
$tdatapolling_coordinates[".importFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".importFields"][] = "job_id";
$tdatapolling_coordinates[".importFields"][] = "user_id";
$tdatapolling_coordinates[".importFields"][] = "created_at";
$tdatapolling_coordinates[".importFields"][] = "updated_at";

$tdatapolling_coordinates[".printFields"] = array();
$tdatapolling_coordinates[".printFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates[".printFields"][] = "job_id";
$tdatapolling_coordinates[".printFields"][] = "user_id";
$tdatapolling_coordinates[".printFields"][] = "created_at";
$tdatapolling_coordinates[".printFields"][] = "updated_at";

//	polling_coordinates_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_coordinates_id";
	$fdata["GoodName"] = "polling_coordinates_id";
	$fdata["ownerTable"] = "polling_coordinates";
	$fdata["Label"] = GetFieldLabel("polling_coordinates","polling_coordinates_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatapolling_coordinates["polling_coordinates_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "polling_coordinates";
	$fdata["Label"] = GetFieldLabel("polling_coordinates","job_id"); 
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
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_id";
	
		
		
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

	

	
	$tdatapolling_coordinates["job_id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "polling_coordinates";
	$fdata["Label"] = GetFieldLabel("polling_coordinates","user_id"); 
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
	$edata["DisplayField"] = "name";
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapolling_coordinates["user_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_coordinates";
	$fdata["Label"] = GetFieldLabel("polling_coordinates","created_at"); 
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

	

	
	$tdatapolling_coordinates["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_coordinates";
	$fdata["Label"] = GetFieldLabel("polling_coordinates","updated_at"); 
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

	

	
	$tdatapolling_coordinates["updated_at"] = $fdata;

	
$tables_data["polling_coordinates"]=&$tdatapolling_coordinates;
$field_labels["polling_coordinates"] = &$fieldLabelspolling_coordinates;
$fieldToolTips["polling_coordinates"] = &$fieldToolTipspolling_coordinates;
$page_titles["polling_coordinates"] = &$pageTitlespolling_coordinates;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_coordinates"] = array();
//	users
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="users";
		$detailsParam["dOriginalTable"] = "users";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "users";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["polling_coordinates"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"][]="user_id";
//	polling_coordinates_contact
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polling_coordinates_contact";
		$detailsParam["dOriginalTable"] = "polling_coordinates_contact";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polling_coordinates_contact";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["polling_coordinates"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"][]="polling_coordinates_id";

				$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"][]="polling_coordinates_id";
//	polling_coordinates_info
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polling_coordinates_info";
		$detailsParam["dOriginalTable"] = "polling_coordinates_info";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polling_coordinates_info";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["polling_coordinates"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"][]="polling_coordinates_id";

				$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"][]="polling_coordinates_id";
//	polling_coordinates_map
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polling_coordinates_map";
		$detailsParam["dOriginalTable"] = "polling_coordinates_map";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polling_coordinates_map";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["polling_coordinates"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["masterKeys"][]="polling_coordinates_id";

				$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["polling_coordinates"][$dIndex]["detailKeys"][]="polling_coordinates_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_coordinates"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_coordinates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_coordinates_id,  job_id,  user_id,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM polling_coordinates";
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
	"m_strName" => "polling_coordinates_id",
	"m_strTable" => "polling_coordinates",
	"m_srcTableName" => "polling_coordinates"
));

$proto5["m_sql"] = "polling_coordinates_id";
$proto5["m_srcTableName"] = "polling_coordinates";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "polling_coordinates",
	"m_srcTableName" => "polling_coordinates"
));

$proto7["m_sql"] = "job_id";
$proto7["m_srcTableName"] = "polling_coordinates";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "polling_coordinates",
	"m_srcTableName" => "polling_coordinates"
));

$proto9["m_sql"] = "user_id";
$proto9["m_srcTableName"] = "polling_coordinates";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_coordinates",
	"m_srcTableName" => "polling_coordinates"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "polling_coordinates";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_coordinates",
	"m_srcTableName" => "polling_coordinates"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "polling_coordinates";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "polling_coordinates";
$proto16["m_srcTableName"] = "polling_coordinates";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "polling_coordinates_id";
$proto16["m_columns"][] = "job_id";
$proto16["m_columns"][] = "user_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "polling_coordinates";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "polling_coordinates";
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
$proto0["m_srcTableName"]="polling_coordinates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_coordinates = createSqlQuery_polling_coordinates();


	
					
	
$tdatapolling_coordinates[".sqlquery"] = $queryData_polling_coordinates;

$tableEvents["polling_coordinates"] = new eventsBase;
$tdatapolling_coordinates[".hasEvents"] = false;

?>