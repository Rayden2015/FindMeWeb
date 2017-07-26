<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapolling_coordinates_picture = array();	
	$tdatapolling_coordinates_picture[".truncateText"] = true;
	$tdatapolling_coordinates_picture[".NumberOfChars"] = 80; 
	$tdatapolling_coordinates_picture[".ShortName"] = "polling_coordinates_picture";
	$tdatapolling_coordinates_picture[".OwnerID"] = "";
	$tdatapolling_coordinates_picture[".OriginalTable"] = "polling_coordinates_picture";

//	field labels
$fieldLabelspolling_coordinates_picture = array();
$fieldToolTipspolling_coordinates_picture = array();
$pageTitlespolling_coordinates_picture = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspolling_coordinates_picture["English"] = array();
	$fieldToolTipspolling_coordinates_picture["English"] = array();
	$pageTitlespolling_coordinates_picture["English"] = array();
	$fieldLabelspolling_coordinates_picture["English"]["polling_coordinates_picture_id"] = "Polling Coordinates Picture Id";
	$fieldToolTipspolling_coordinates_picture["English"]["polling_coordinates_picture_id"] = "";
	$fieldLabelspolling_coordinates_picture["English"]["picture_1"] = "Picture 1";
	$fieldToolTipspolling_coordinates_picture["English"]["picture_1"] = "";
	$fieldLabelspolling_coordinates_picture["English"]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_picture["English"]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_picture["English"]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_picture["English"]["created_at"] = "";
	$fieldLabelspolling_coordinates_picture["English"]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_picture["English"]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_picture["English"]))
		$tdatapolling_coordinates_picture[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspolling_coordinates_picture[""] = array();
	$fieldToolTipspolling_coordinates_picture[""] = array();
	$pageTitlespolling_coordinates_picture[""] = array();
	$fieldLabelspolling_coordinates_picture[""]["polling_coordinates_picture_id"] = "Polling Coordinates Picture Id";
	$fieldToolTipspolling_coordinates_picture[""]["polling_coordinates_picture_id"] = "";
	$fieldLabelspolling_coordinates_picture[""]["picture_1"] = "Picture 1";
	$fieldToolTipspolling_coordinates_picture[""]["picture_1"] = "";
	$fieldLabelspolling_coordinates_picture[""]["polling_coordinates_id"] = "Polling Coordinates Id";
	$fieldToolTipspolling_coordinates_picture[""]["polling_coordinates_id"] = "";
	$fieldLabelspolling_coordinates_picture[""]["created_at"] = "Created At";
	$fieldToolTipspolling_coordinates_picture[""]["created_at"] = "";
	$fieldLabelspolling_coordinates_picture[""]["updated_at"] = "Updated At";
	$fieldToolTipspolling_coordinates_picture[""]["updated_at"] = "";
	if (count($fieldToolTipspolling_coordinates_picture[""]))
		$tdatapolling_coordinates_picture[".isUseToolTips"] = true;
}
	
	
	$tdatapolling_coordinates_picture[".NCSearch"] = true;



$tdatapolling_coordinates_picture[".shortTableName"] = "polling_coordinates_picture";
$tdatapolling_coordinates_picture[".nSecOptions"] = 0;
$tdatapolling_coordinates_picture[".recsPerRowList"] = 1;
$tdatapolling_coordinates_picture[".mainTableOwnerID"] = "";
$tdatapolling_coordinates_picture[".moveNext"] = 1;
$tdatapolling_coordinates_picture[".nType"] = 0;

$tdatapolling_coordinates_picture[".strOriginalTableName"] = "polling_coordinates_picture";




$tdatapolling_coordinates_picture[".showAddInPopup"] = false;

$tdatapolling_coordinates_picture[".showEditInPopup"] = false;

$tdatapolling_coordinates_picture[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolling_coordinates_picture[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolling_coordinates_picture[".fieldsForRegister"] = array();

$tdatapolling_coordinates_picture[".listAjax"] = false;

	$tdatapolling_coordinates_picture[".audit"] = true;

	$tdatapolling_coordinates_picture[".locking"] = false;

$tdatapolling_coordinates_picture[".edit"] = true;

$tdatapolling_coordinates_picture[".list"] = true;

$tdatapolling_coordinates_picture[".inlineEdit"] = true;
$tdatapolling_coordinates_picture[".inlineAdd"] = true;
$tdatapolling_coordinates_picture[".view"] = true;

$tdatapolling_coordinates_picture[".import"] = true;

$tdatapolling_coordinates_picture[".exportTo"] = true;

$tdatapolling_coordinates_picture[".printFriendly"] = true;

$tdatapolling_coordinates_picture[".delete"] = true;

$tdatapolling_coordinates_picture[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapolling_coordinates_picture[".searchSaving"] = false;
//

$tdatapolling_coordinates_picture[".showSearchPanel"] = true;
		$tdatapolling_coordinates_picture[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapolling_coordinates_picture[".isUseAjaxSuggest"] = false;
else 
	$tdatapolling_coordinates_picture[".isUseAjaxSuggest"] = true;

$tdatapolling_coordinates_picture[".rowHighlite"] = true;



$tdatapolling_coordinates_picture[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolling_coordinates_picture[".isUseTimeForSearch"] = false;





$tdatapolling_coordinates_picture[".allSearchFields"] = array();
$tdatapolling_coordinates_picture[".filterFields"] = array();
$tdatapolling_coordinates_picture[".requiredSearchFields"] = array();

$tdatapolling_coordinates_picture[".allSearchFields"][] = "polling_coordinates_picture_id";
	$tdatapolling_coordinates_picture[".allSearchFields"][] = "picture_1";
	$tdatapolling_coordinates_picture[".allSearchFields"][] = "polling_coordinates_id";
	$tdatapolling_coordinates_picture[".allSearchFields"][] = "created_at";
	$tdatapolling_coordinates_picture[".allSearchFields"][] = "updated_at";
	

$tdatapolling_coordinates_picture[".googleLikeFields"] = array();
$tdatapolling_coordinates_picture[".googleLikeFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".googleLikeFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".googleLikeFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".googleLikeFields"][] = "created_at";
$tdatapolling_coordinates_picture[".googleLikeFields"][] = "updated_at";


$tdatapolling_coordinates_picture[".advSearchFields"] = array();
$tdatapolling_coordinates_picture[".advSearchFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".advSearchFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".advSearchFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".advSearchFields"][] = "created_at";
$tdatapolling_coordinates_picture[".advSearchFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".tableType"] = "list";

$tdatapolling_coordinates_picture[".printerPageOrientation"] = 0;
$tdatapolling_coordinates_picture[".nPrinterPageScale"] = 100;

$tdatapolling_coordinates_picture[".nPrinterSplitRecords"] = 40;

$tdatapolling_coordinates_picture[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapolling_coordinates_picture[".pageSize"] = 20;

$tdatapolling_coordinates_picture[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolling_coordinates_picture[".strOrderBy"] = $tstrOrderBy;

$tdatapolling_coordinates_picture[".orderindexes"] = array();

$tdatapolling_coordinates_picture[".sqlHead"] = "SELECT polling_coordinates_picture_id,   picture_1,   polling_coordinates_id,   created_at,   updated_at";
$tdatapolling_coordinates_picture[".sqlFrom"] = "FROM polling_coordinates_picture";
$tdatapolling_coordinates_picture[".sqlWhereExpr"] = "";
$tdatapolling_coordinates_picture[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolling_coordinates_picture[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolling_coordinates_picture[".arrGroupsPerPage"] = $arrGPP;

$tdatapolling_coordinates_picture[".highlightSearchResults"] = true;

$tableKeyspolling_coordinates_picture = array();
$tableKeyspolling_coordinates_picture[] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".Keys"] = $tableKeyspolling_coordinates_picture;

$tdatapolling_coordinates_picture[".listFields"] = array();
$tdatapolling_coordinates_picture[".listFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".listFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".listFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".listFields"][] = "created_at";
$tdatapolling_coordinates_picture[".listFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".hideMobileList"] = array();


$tdatapolling_coordinates_picture[".viewFields"] = array();
$tdatapolling_coordinates_picture[".viewFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".viewFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".viewFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".viewFields"][] = "created_at";
$tdatapolling_coordinates_picture[".viewFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".addFields"] = array();
$tdatapolling_coordinates_picture[".addFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".addFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".addFields"][] = "created_at";
$tdatapolling_coordinates_picture[".addFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".inlineAddFields"] = array();
$tdatapolling_coordinates_picture[".inlineAddFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".inlineAddFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".inlineAddFields"][] = "created_at";
$tdatapolling_coordinates_picture[".inlineAddFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".editFields"] = array();
$tdatapolling_coordinates_picture[".editFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".editFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".editFields"][] = "created_at";
$tdatapolling_coordinates_picture[".editFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".inlineEditFields"] = array();
$tdatapolling_coordinates_picture[".inlineEditFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".inlineEditFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".inlineEditFields"][] = "created_at";
$tdatapolling_coordinates_picture[".inlineEditFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".exportFields"] = array();
$tdatapolling_coordinates_picture[".exportFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".exportFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".exportFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".exportFields"][] = "created_at";
$tdatapolling_coordinates_picture[".exportFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".importFields"] = array();
$tdatapolling_coordinates_picture[".importFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".importFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".importFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".importFields"][] = "created_at";
$tdatapolling_coordinates_picture[".importFields"][] = "updated_at";

$tdatapolling_coordinates_picture[".printFields"] = array();
$tdatapolling_coordinates_picture[".printFields"][] = "polling_coordinates_picture_id";
$tdatapolling_coordinates_picture[".printFields"][] = "picture_1";
$tdatapolling_coordinates_picture[".printFields"][] = "polling_coordinates_id";
$tdatapolling_coordinates_picture[".printFields"][] = "created_at";
$tdatapolling_coordinates_picture[".printFields"][] = "updated_at";

//	polling_coordinates_picture_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "polling_coordinates_picture_id";
	$fdata["GoodName"] = "polling_coordinates_picture_id";
	$fdata["ownerTable"] = "polling_coordinates_picture";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_picture","polling_coordinates_picture_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "polling_coordinates_picture_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "polling_coordinates_picture_id";
	
		
		
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

	

	
	$tdatapolling_coordinates_picture["polling_coordinates_picture_id"] = $fdata;
//	picture_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "picture_1";
	$fdata["GoodName"] = "picture_1";
	$fdata["ownerTable"] = "polling_coordinates_picture";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_picture","picture_1"); 
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
	
		$fdata["strField"] = "picture_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "picture_1";
	
		
		
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

	

	
	$tdatapolling_coordinates_picture["picture_1"] = $fdata;
//	polling_coordinates_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "polling_coordinates_id";
	$fdata["GoodName"] = "polling_coordinates_id";
	$fdata["ownerTable"] = "polling_coordinates_picture";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_picture","polling_coordinates_id"); 
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

	

	
	$tdatapolling_coordinates_picture["polling_coordinates_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "polling_coordinates_picture";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_picture","created_at"); 
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

	

	
	$tdatapolling_coordinates_picture["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "polling_coordinates_picture";
	$fdata["Label"] = GetFieldLabel("polling_coordinates_picture","updated_at"); 
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

	

	
	$tdatapolling_coordinates_picture["updated_at"] = $fdata;

	
$tables_data["polling_coordinates_picture"]=&$tdatapolling_coordinates_picture;
$field_labels["polling_coordinates_picture"] = &$fieldLabelspolling_coordinates_picture;
$fieldToolTips["polling_coordinates_picture"] = &$fieldToolTipspolling_coordinates_picture;
$page_titles["polling_coordinates_picture"] = &$pageTitlespolling_coordinates_picture;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polling_coordinates_picture"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["polling_coordinates_picture"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_polling_coordinates_picture()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "polling_coordinates_picture_id,   picture_1,   polling_coordinates_id,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM polling_coordinates_picture";
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
	"m_strName" => "polling_coordinates_picture_id",
	"m_strTable" => "polling_coordinates_picture",
	"m_srcTableName" => "polling_coordinates_picture"
));

$proto5["m_sql"] = "polling_coordinates_picture_id";
$proto5["m_srcTableName"] = "polling_coordinates_picture";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "picture_1",
	"m_strTable" => "polling_coordinates_picture",
	"m_srcTableName" => "polling_coordinates_picture"
));

$proto7["m_sql"] = "picture_1";
$proto7["m_srcTableName"] = "polling_coordinates_picture";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "polling_coordinates_id",
	"m_strTable" => "polling_coordinates_picture",
	"m_srcTableName" => "polling_coordinates_picture"
));

$proto9["m_sql"] = "polling_coordinates_id";
$proto9["m_srcTableName"] = "polling_coordinates_picture";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "polling_coordinates_picture",
	"m_srcTableName" => "polling_coordinates_picture"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "polling_coordinates_picture";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "polling_coordinates_picture",
	"m_srcTableName" => "polling_coordinates_picture"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "polling_coordinates_picture";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "polling_coordinates_picture";
$proto16["m_srcTableName"] = "polling_coordinates_picture";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "polling_coordinates_picture_id";
$proto16["m_columns"][] = "picture_1";
$proto16["m_columns"][] = "polling_coordinates_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "polling_coordinates_picture";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "polling_coordinates_picture";
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
$proto0["m_srcTableName"]="polling_coordinates_picture";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polling_coordinates_picture = createSqlQuery_polling_coordinates_picture();


	
					
	
$tdatapolling_coordinates_picture[".sqlquery"] = $queryData_polling_coordinates_picture;

$tableEvents["polling_coordinates_picture"] = new eventsBase;
$tdatapolling_coordinates_picture[".hasEvents"] = false;

?>