<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser_jobs = array();	
	$tdatauser_jobs[".truncateText"] = true;
	$tdatauser_jobs[".NumberOfChars"] = 80; 
	$tdatauser_jobs[".ShortName"] = "user_jobs";
	$tdatauser_jobs[".OwnerID"] = "";
	$tdatauser_jobs[".OriginalTable"] = "user_jobs";

//	field labels
$fieldLabelsuser_jobs = array();
$fieldToolTipsuser_jobs = array();
$pageTitlesuser_jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_jobs["English"] = array();
	$fieldToolTipsuser_jobs["English"] = array();
	$pageTitlesuser_jobs["English"] = array();
	$fieldLabelsuser_jobs["English"]["user_jobs_id"] = "User Jobs Id";
	$fieldToolTipsuser_jobs["English"]["user_jobs_id"] = "";
	$fieldLabelsuser_jobs["English"]["job_name"] = "Job Name";
	$fieldToolTipsuser_jobs["English"]["job_name"] = "";
	$fieldLabelsuser_jobs["English"]["user_id"] = "User Id";
	$fieldToolTipsuser_jobs["English"]["user_id"] = "";
	$fieldLabelsuser_jobs["English"]["created_at"] = "Created At";
	$fieldToolTipsuser_jobs["English"]["created_at"] = "";
	$fieldLabelsuser_jobs["English"]["updated_at"] = "Updated At";
	$fieldToolTipsuser_jobs["English"]["updated_at"] = "";
	if (count($fieldToolTipsuser_jobs["English"]))
		$tdatauser_jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser_jobs[""] = array();
	$fieldToolTipsuser_jobs[""] = array();
	$pageTitlesuser_jobs[""] = array();
	$fieldLabelsuser_jobs[""]["user_jobs_id"] = "User Jobs Id";
	$fieldToolTipsuser_jobs[""]["user_jobs_id"] = "";
	$fieldLabelsuser_jobs[""]["job_name"] = "Job Name";
	$fieldToolTipsuser_jobs[""]["job_name"] = "";
	$fieldLabelsuser_jobs[""]["user_id"] = "User Id";
	$fieldToolTipsuser_jobs[""]["user_id"] = "";
	$fieldLabelsuser_jobs[""]["created_at"] = "Created At";
	$fieldToolTipsuser_jobs[""]["created_at"] = "";
	$fieldLabelsuser_jobs[""]["updated_at"] = "Updated At";
	$fieldToolTipsuser_jobs[""]["updated_at"] = "";
	if (count($fieldToolTipsuser_jobs[""]))
		$tdatauser_jobs[".isUseToolTips"] = true;
}
	
	
	$tdatauser_jobs[".NCSearch"] = true;



$tdatauser_jobs[".shortTableName"] = "user_jobs";
$tdatauser_jobs[".nSecOptions"] = 0;
$tdatauser_jobs[".recsPerRowList"] = 1;
$tdatauser_jobs[".mainTableOwnerID"] = "";
$tdatauser_jobs[".moveNext"] = 1;
$tdatauser_jobs[".nType"] = 0;

$tdatauser_jobs[".strOriginalTableName"] = "user_jobs";




$tdatauser_jobs[".showAddInPopup"] = false;

$tdatauser_jobs[".showEditInPopup"] = false;

$tdatauser_jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser_jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser_jobs[".fieldsForRegister"] = array();

$tdatauser_jobs[".listAjax"] = false;

	$tdatauser_jobs[".audit"] = true;

	$tdatauser_jobs[".locking"] = false;

$tdatauser_jobs[".edit"] = true;

$tdatauser_jobs[".list"] = true;

$tdatauser_jobs[".inlineEdit"] = true;
$tdatauser_jobs[".inlineAdd"] = true;
$tdatauser_jobs[".view"] = true;

$tdatauser_jobs[".import"] = true;

$tdatauser_jobs[".exportTo"] = true;

$tdatauser_jobs[".printFriendly"] = true;

$tdatauser_jobs[".delete"] = true;

$tdatauser_jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser_jobs[".searchSaving"] = false;
//

$tdatauser_jobs[".showSearchPanel"] = true;
		$tdatauser_jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser_jobs[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_jobs[".isUseAjaxSuggest"] = true;

$tdatauser_jobs[".rowHighlite"] = true;



$tdatauser_jobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_jobs[".isUseTimeForSearch"] = false;





$tdatauser_jobs[".allSearchFields"] = array();
$tdatauser_jobs[".filterFields"] = array();
$tdatauser_jobs[".requiredSearchFields"] = array();

$tdatauser_jobs[".allSearchFields"][] = "user_jobs_id";
	$tdatauser_jobs[".allSearchFields"][] = "job_name";
	$tdatauser_jobs[".allSearchFields"][] = "user_id";
	$tdatauser_jobs[".allSearchFields"][] = "created_at";
	$tdatauser_jobs[".allSearchFields"][] = "updated_at";
	

$tdatauser_jobs[".googleLikeFields"] = array();
$tdatauser_jobs[".googleLikeFields"][] = "user_jobs_id";
$tdatauser_jobs[".googleLikeFields"][] = "job_name";
$tdatauser_jobs[".googleLikeFields"][] = "user_id";
$tdatauser_jobs[".googleLikeFields"][] = "created_at";
$tdatauser_jobs[".googleLikeFields"][] = "updated_at";


$tdatauser_jobs[".advSearchFields"] = array();
$tdatauser_jobs[".advSearchFields"][] = "user_jobs_id";
$tdatauser_jobs[".advSearchFields"][] = "job_name";
$tdatauser_jobs[".advSearchFields"][] = "user_id";
$tdatauser_jobs[".advSearchFields"][] = "created_at";
$tdatauser_jobs[".advSearchFields"][] = "updated_at";

$tdatauser_jobs[".tableType"] = "list";

$tdatauser_jobs[".printerPageOrientation"] = 0;
$tdatauser_jobs[".nPrinterPageScale"] = 100;

$tdatauser_jobs[".nPrinterSplitRecords"] = 40;

$tdatauser_jobs[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatauser_jobs[".pageSize"] = 20;

$tdatauser_jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_jobs[".strOrderBy"] = $tstrOrderBy;

$tdatauser_jobs[".orderindexes"] = array();

$tdatauser_jobs[".sqlHead"] = "SELECT user_jobs_id,   job_name,   user_id,   created_at,   updated_at";
$tdatauser_jobs[".sqlFrom"] = "FROM user_jobs";
$tdatauser_jobs[".sqlWhereExpr"] = "";
$tdatauser_jobs[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_jobs[".arrGroupsPerPage"] = $arrGPP;

$tdatauser_jobs[".highlightSearchResults"] = true;

$tableKeysuser_jobs = array();
$tableKeysuser_jobs[] = "user_jobs_id";
$tdatauser_jobs[".Keys"] = $tableKeysuser_jobs;

$tdatauser_jobs[".listFields"] = array();
$tdatauser_jobs[".listFields"][] = "user_jobs_id";
$tdatauser_jobs[".listFields"][] = "job_name";
$tdatauser_jobs[".listFields"][] = "user_id";
$tdatauser_jobs[".listFields"][] = "created_at";
$tdatauser_jobs[".listFields"][] = "updated_at";

$tdatauser_jobs[".hideMobileList"] = array();


$tdatauser_jobs[".viewFields"] = array();
$tdatauser_jobs[".viewFields"][] = "user_jobs_id";
$tdatauser_jobs[".viewFields"][] = "job_name";
$tdatauser_jobs[".viewFields"][] = "user_id";
$tdatauser_jobs[".viewFields"][] = "created_at";
$tdatauser_jobs[".viewFields"][] = "updated_at";

$tdatauser_jobs[".addFields"] = array();
$tdatauser_jobs[".addFields"][] = "job_name";
$tdatauser_jobs[".addFields"][] = "user_id";
$tdatauser_jobs[".addFields"][] = "created_at";
$tdatauser_jobs[".addFields"][] = "updated_at";

$tdatauser_jobs[".inlineAddFields"] = array();
$tdatauser_jobs[".inlineAddFields"][] = "job_name";
$tdatauser_jobs[".inlineAddFields"][] = "user_id";
$tdatauser_jobs[".inlineAddFields"][] = "created_at";
$tdatauser_jobs[".inlineAddFields"][] = "updated_at";

$tdatauser_jobs[".editFields"] = array();
$tdatauser_jobs[".editFields"][] = "job_name";
$tdatauser_jobs[".editFields"][] = "user_id";
$tdatauser_jobs[".editFields"][] = "created_at";
$tdatauser_jobs[".editFields"][] = "updated_at";

$tdatauser_jobs[".inlineEditFields"] = array();
$tdatauser_jobs[".inlineEditFields"][] = "job_name";
$tdatauser_jobs[".inlineEditFields"][] = "user_id";
$tdatauser_jobs[".inlineEditFields"][] = "created_at";
$tdatauser_jobs[".inlineEditFields"][] = "updated_at";

$tdatauser_jobs[".exportFields"] = array();
$tdatauser_jobs[".exportFields"][] = "user_jobs_id";
$tdatauser_jobs[".exportFields"][] = "job_name";
$tdatauser_jobs[".exportFields"][] = "user_id";
$tdatauser_jobs[".exportFields"][] = "created_at";
$tdatauser_jobs[".exportFields"][] = "updated_at";

$tdatauser_jobs[".importFields"] = array();
$tdatauser_jobs[".importFields"][] = "user_jobs_id";
$tdatauser_jobs[".importFields"][] = "job_name";
$tdatauser_jobs[".importFields"][] = "user_id";
$tdatauser_jobs[".importFields"][] = "created_at";
$tdatauser_jobs[".importFields"][] = "updated_at";

$tdatauser_jobs[".printFields"] = array();
$tdatauser_jobs[".printFields"][] = "user_jobs_id";
$tdatauser_jobs[".printFields"][] = "job_name";
$tdatauser_jobs[".printFields"][] = "user_id";
$tdatauser_jobs[".printFields"][] = "created_at";
$tdatauser_jobs[".printFields"][] = "updated_at";

//	user_jobs_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_jobs_id";
	$fdata["GoodName"] = "user_jobs_id";
	$fdata["ownerTable"] = "user_jobs";
	$fdata["Label"] = GetFieldLabel("user_jobs","user_jobs_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_jobs_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_jobs_id";
	
		
		
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

	

	
	$tdatauser_jobs["user_jobs_id"] = $fdata;
//	job_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_name";
	$fdata["GoodName"] = "job_name";
	$fdata["ownerTable"] = "user_jobs";
	$fdata["Label"] = GetFieldLabel("user_jobs","job_name"); 
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
	
		$fdata["strField"] = "job_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_name";
	
		
		
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

	

	
	$tdatauser_jobs["job_name"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user_jobs";
	$fdata["Label"] = GetFieldLabel("user_jobs","user_id"); 
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

	

	
	$tdatauser_jobs["user_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user_jobs";
	$fdata["Label"] = GetFieldLabel("user_jobs","created_at"); 
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

	

	
	$tdatauser_jobs["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "user_jobs";
	$fdata["Label"] = GetFieldLabel("user_jobs","updated_at"); 
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

	

	
	$tdatauser_jobs["updated_at"] = $fdata;

	
$tables_data["user_jobs"]=&$tdatauser_jobs;
$field_labels["user_jobs"] = &$fieldLabelsuser_jobs;
$fieldToolTips["user_jobs"] = &$fieldToolTipsuser_jobs;
$page_titles["user_jobs"] = &$pageTitlesuser_jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_jobs"] = array();


	
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
					$masterTablesData["user_jobs"][0] = $masterParams;	
				$masterTablesData["user_jobs"][0]["masterKeys"] = array();
	$masterTablesData["user_jobs"][0]["masterKeys"][]="user_id";
				$masterTablesData["user_jobs"][0]["detailKeys"] = array();
	$masterTablesData["user_jobs"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_jobs_id,   job_name,   user_id,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM user_jobs";
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
	"m_strName" => "user_jobs_id",
	"m_strTable" => "user_jobs",
	"m_srcTableName" => "user_jobs"
));

$proto5["m_sql"] = "user_jobs_id";
$proto5["m_srcTableName"] = "user_jobs";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_name",
	"m_strTable" => "user_jobs",
	"m_srcTableName" => "user_jobs"
));

$proto7["m_sql"] = "job_name";
$proto7["m_srcTableName"] = "user_jobs";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "user_jobs",
	"m_srcTableName" => "user_jobs"
));

$proto9["m_sql"] = "user_id";
$proto9["m_srcTableName"] = "user_jobs";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user_jobs",
	"m_srcTableName" => "user_jobs"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "user_jobs";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "user_jobs",
	"m_srcTableName" => "user_jobs"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "user_jobs";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "user_jobs";
$proto16["m_srcTableName"] = "user_jobs";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "user_jobs_id";
$proto16["m_columns"][] = "job_name";
$proto16["m_columns"][] = "user_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "user_jobs";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "user_jobs";
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
$proto0["m_srcTableName"]="user_jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_jobs = createSqlQuery_user_jobs();


	
					
	
$tdatauser_jobs[".sqlquery"] = $queryData_user_jobs;

$tableEvents["user_jobs"] = new eventsBase;
$tdatauser_jobs[".hasEvents"] = false;

?>