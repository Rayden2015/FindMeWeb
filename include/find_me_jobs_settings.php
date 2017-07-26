<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafind_me_jobs = array();	
	$tdatafind_me_jobs[".truncateText"] = true;
	$tdatafind_me_jobs[".NumberOfChars"] = 80; 
	$tdatafind_me_jobs[".ShortName"] = "find_me_jobs";
	$tdatafind_me_jobs[".OwnerID"] = "";
	$tdatafind_me_jobs[".OriginalTable"] = "find_me_jobs";

//	field labels
$fieldLabelsfind_me_jobs = array();
$fieldToolTipsfind_me_jobs = array();
$pageTitlesfind_me_jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfind_me_jobs["English"] = array();
	$fieldToolTipsfind_me_jobs["English"] = array();
	$pageTitlesfind_me_jobs["English"] = array();
	$fieldLabelsfind_me_jobs["English"]["job_id"] = "Job Id";
	$fieldToolTipsfind_me_jobs["English"]["job_id"] = "";
	$fieldLabelsfind_me_jobs["English"]["job_name"] = "Job Name";
	$fieldToolTipsfind_me_jobs["English"]["job_name"] = "";
	$fieldLabelsfind_me_jobs["English"]["category_id"] = "Category Id";
	$fieldToolTipsfind_me_jobs["English"]["category_id"] = "";
	$fieldLabelsfind_me_jobs["English"]["added_by"] = "Added By";
	$fieldToolTipsfind_me_jobs["English"]["added_by"] = "";
	$fieldLabelsfind_me_jobs["English"]["created_at"] = "Created At";
	$fieldToolTipsfind_me_jobs["English"]["created_at"] = "";
	$fieldLabelsfind_me_jobs["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfind_me_jobs["English"]["updated_at"] = "";
	$fieldLabelsfind_me_jobs["English"]["fields"] = "Fields";
	$fieldToolTipsfind_me_jobs["English"]["fields"] = "";
	if (count($fieldToolTipsfind_me_jobs["English"]))
		$tdatafind_me_jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfind_me_jobs[""] = array();
	$fieldToolTipsfind_me_jobs[""] = array();
	$pageTitlesfind_me_jobs[""] = array();
	$fieldLabelsfind_me_jobs[""]["job_id"] = "Job Id";
	$fieldToolTipsfind_me_jobs[""]["job_id"] = "";
	$fieldLabelsfind_me_jobs[""]["job_name"] = "Job Name";
	$fieldToolTipsfind_me_jobs[""]["job_name"] = "";
	$fieldLabelsfind_me_jobs[""]["category_id"] = "Category Id";
	$fieldToolTipsfind_me_jobs[""]["category_id"] = "";
	$fieldLabelsfind_me_jobs[""]["added_by"] = "Added By";
	$fieldToolTipsfind_me_jobs[""]["added_by"] = "";
	$fieldLabelsfind_me_jobs[""]["created_at"] = "Created At";
	$fieldToolTipsfind_me_jobs[""]["created_at"] = "";
	$fieldLabelsfind_me_jobs[""]["updated_at"] = "Updated At";
	$fieldToolTipsfind_me_jobs[""]["updated_at"] = "";
	$fieldLabelsfind_me_jobs[""]["fields"] = "Fields";
	$fieldToolTipsfind_me_jobs[""]["fields"] = "";
	if (count($fieldToolTipsfind_me_jobs[""]))
		$tdatafind_me_jobs[".isUseToolTips"] = true;
}
	
	
	$tdatafind_me_jobs[".NCSearch"] = true;



$tdatafind_me_jobs[".shortTableName"] = "find_me_jobs";
$tdatafind_me_jobs[".nSecOptions"] = 0;
$tdatafind_me_jobs[".recsPerRowList"] = 1;
$tdatafind_me_jobs[".mainTableOwnerID"] = "";
$tdatafind_me_jobs[".moveNext"] = 1;
$tdatafind_me_jobs[".nType"] = 0;

$tdatafind_me_jobs[".strOriginalTableName"] = "find_me_jobs";




$tdatafind_me_jobs[".showAddInPopup"] = false;

$tdatafind_me_jobs[".showEditInPopup"] = false;

$tdatafind_me_jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafind_me_jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafind_me_jobs[".fieldsForRegister"] = array();

$tdatafind_me_jobs[".listAjax"] = false;

	$tdatafind_me_jobs[".audit"] = true;

	$tdatafind_me_jobs[".locking"] = false;

$tdatafind_me_jobs[".edit"] = true;

$tdatafind_me_jobs[".list"] = true;

$tdatafind_me_jobs[".inlineEdit"] = true;
$tdatafind_me_jobs[".inlineAdd"] = true;
$tdatafind_me_jobs[".view"] = true;

$tdatafind_me_jobs[".import"] = true;

$tdatafind_me_jobs[".exportTo"] = true;

$tdatafind_me_jobs[".printFriendly"] = true;

$tdatafind_me_jobs[".delete"] = true;

$tdatafind_me_jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafind_me_jobs[".searchSaving"] = false;
//

$tdatafind_me_jobs[".showSearchPanel"] = true;
		$tdatafind_me_jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafind_me_jobs[".isUseAjaxSuggest"] = false;
else 
	$tdatafind_me_jobs[".isUseAjaxSuggest"] = true;

$tdatafind_me_jobs[".rowHighlite"] = true;



$tdatafind_me_jobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafind_me_jobs[".isUseTimeForSearch"] = false;





$tdatafind_me_jobs[".allSearchFields"] = array();
$tdatafind_me_jobs[".filterFields"] = array();
$tdatafind_me_jobs[".requiredSearchFields"] = array();

$tdatafind_me_jobs[".allSearchFields"][] = "job_id";
	$tdatafind_me_jobs[".allSearchFields"][] = "job_name";
	$tdatafind_me_jobs[".allSearchFields"][] = "category_id";
	$tdatafind_me_jobs[".allSearchFields"][] = "added_by";
	$tdatafind_me_jobs[".allSearchFields"][] = "created_at";
	$tdatafind_me_jobs[".allSearchFields"][] = "updated_at";
	$tdatafind_me_jobs[".allSearchFields"][] = "fields";
	

$tdatafind_me_jobs[".googleLikeFields"] = array();
$tdatafind_me_jobs[".googleLikeFields"][] = "job_id";
$tdatafind_me_jobs[".googleLikeFields"][] = "job_name";
$tdatafind_me_jobs[".googleLikeFields"][] = "category_id";
$tdatafind_me_jobs[".googleLikeFields"][] = "added_by";
$tdatafind_me_jobs[".googleLikeFields"][] = "created_at";
$tdatafind_me_jobs[".googleLikeFields"][] = "updated_at";
$tdatafind_me_jobs[".googleLikeFields"][] = "fields";


$tdatafind_me_jobs[".advSearchFields"] = array();
$tdatafind_me_jobs[".advSearchFields"][] = "job_id";
$tdatafind_me_jobs[".advSearchFields"][] = "job_name";
$tdatafind_me_jobs[".advSearchFields"][] = "category_id";
$tdatafind_me_jobs[".advSearchFields"][] = "added_by";
$tdatafind_me_jobs[".advSearchFields"][] = "created_at";
$tdatafind_me_jobs[".advSearchFields"][] = "updated_at";
$tdatafind_me_jobs[".advSearchFields"][] = "fields";

$tdatafind_me_jobs[".tableType"] = "list";

$tdatafind_me_jobs[".printerPageOrientation"] = 0;
$tdatafind_me_jobs[".nPrinterPageScale"] = 100;

$tdatafind_me_jobs[".nPrinterSplitRecords"] = 40;

$tdatafind_me_jobs[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatafind_me_jobs[".pageSize"] = 20;

$tdatafind_me_jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafind_me_jobs[".strOrderBy"] = $tstrOrderBy;

$tdatafind_me_jobs[".orderindexes"] = array();

$tdatafind_me_jobs[".sqlHead"] = "SELECT job_id,   job_name,   category_id,   added_by,   created_at,   updated_at,   fields";
$tdatafind_me_jobs[".sqlFrom"] = "FROM find_me_jobs";
$tdatafind_me_jobs[".sqlWhereExpr"] = "";
$tdatafind_me_jobs[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafind_me_jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafind_me_jobs[".arrGroupsPerPage"] = $arrGPP;

$tdatafind_me_jobs[".highlightSearchResults"] = true;

$tableKeysfind_me_jobs = array();
$tableKeysfind_me_jobs[] = "job_id";
$tdatafind_me_jobs[".Keys"] = $tableKeysfind_me_jobs;

$tdatafind_me_jobs[".listFields"] = array();
$tdatafind_me_jobs[".listFields"][] = "job_id";
$tdatafind_me_jobs[".listFields"][] = "job_name";
$tdatafind_me_jobs[".listFields"][] = "category_id";
$tdatafind_me_jobs[".listFields"][] = "added_by";
$tdatafind_me_jobs[".listFields"][] = "created_at";
$tdatafind_me_jobs[".listFields"][] = "updated_at";
$tdatafind_me_jobs[".listFields"][] = "fields";

$tdatafind_me_jobs[".hideMobileList"] = array();


$tdatafind_me_jobs[".viewFields"] = array();
$tdatafind_me_jobs[".viewFields"][] = "job_id";
$tdatafind_me_jobs[".viewFields"][] = "job_name";
$tdatafind_me_jobs[".viewFields"][] = "category_id";
$tdatafind_me_jobs[".viewFields"][] = "added_by";
$tdatafind_me_jobs[".viewFields"][] = "created_at";
$tdatafind_me_jobs[".viewFields"][] = "updated_at";
$tdatafind_me_jobs[".viewFields"][] = "fields";

$tdatafind_me_jobs[".addFields"] = array();
$tdatafind_me_jobs[".addFields"][] = "job_name";
$tdatafind_me_jobs[".addFields"][] = "category_id";
$tdatafind_me_jobs[".addFields"][] = "added_by";
$tdatafind_me_jobs[".addFields"][] = "created_at";
$tdatafind_me_jobs[".addFields"][] = "updated_at";
$tdatafind_me_jobs[".addFields"][] = "fields";

$tdatafind_me_jobs[".inlineAddFields"] = array();
$tdatafind_me_jobs[".inlineAddFields"][] = "job_name";
$tdatafind_me_jobs[".inlineAddFields"][] = "category_id";
$tdatafind_me_jobs[".inlineAddFields"][] = "added_by";
$tdatafind_me_jobs[".inlineAddFields"][] = "created_at";
$tdatafind_me_jobs[".inlineAddFields"][] = "updated_at";
$tdatafind_me_jobs[".inlineAddFields"][] = "fields";

$tdatafind_me_jobs[".editFields"] = array();
$tdatafind_me_jobs[".editFields"][] = "job_name";
$tdatafind_me_jobs[".editFields"][] = "category_id";
$tdatafind_me_jobs[".editFields"][] = "added_by";
$tdatafind_me_jobs[".editFields"][] = "created_at";
$tdatafind_me_jobs[".editFields"][] = "updated_at";
$tdatafind_me_jobs[".editFields"][] = "fields";

$tdatafind_me_jobs[".inlineEditFields"] = array();
$tdatafind_me_jobs[".inlineEditFields"][] = "job_name";
$tdatafind_me_jobs[".inlineEditFields"][] = "category_id";
$tdatafind_me_jobs[".inlineEditFields"][] = "added_by";
$tdatafind_me_jobs[".inlineEditFields"][] = "created_at";
$tdatafind_me_jobs[".inlineEditFields"][] = "updated_at";
$tdatafind_me_jobs[".inlineEditFields"][] = "fields";

$tdatafind_me_jobs[".exportFields"] = array();
$tdatafind_me_jobs[".exportFields"][] = "job_id";
$tdatafind_me_jobs[".exportFields"][] = "job_name";
$tdatafind_me_jobs[".exportFields"][] = "category_id";
$tdatafind_me_jobs[".exportFields"][] = "added_by";
$tdatafind_me_jobs[".exportFields"][] = "created_at";
$tdatafind_me_jobs[".exportFields"][] = "updated_at";
$tdatafind_me_jobs[".exportFields"][] = "fields";

$tdatafind_me_jobs[".importFields"] = array();
$tdatafind_me_jobs[".importFields"][] = "job_id";
$tdatafind_me_jobs[".importFields"][] = "job_name";
$tdatafind_me_jobs[".importFields"][] = "category_id";
$tdatafind_me_jobs[".importFields"][] = "added_by";
$tdatafind_me_jobs[".importFields"][] = "created_at";
$tdatafind_me_jobs[".importFields"][] = "updated_at";
$tdatafind_me_jobs[".importFields"][] = "fields";

$tdatafind_me_jobs[".printFields"] = array();
$tdatafind_me_jobs[".printFields"][] = "job_id";
$tdatafind_me_jobs[".printFields"][] = "job_name";
$tdatafind_me_jobs[".printFields"][] = "category_id";
$tdatafind_me_jobs[".printFields"][] = "added_by";
$tdatafind_me_jobs[".printFields"][] = "created_at";
$tdatafind_me_jobs[".printFields"][] = "updated_at";
$tdatafind_me_jobs[".printFields"][] = "fields";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatafind_me_jobs["job_id"] = $fdata;
//	job_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_name";
	$fdata["GoodName"] = "job_name";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","job_name"); 
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

	

	
	$tdatafind_me_jobs["job_name"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","category_id"); 
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
	
		$fdata["strField"] = "category_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";
	
		
		
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
	$edata["LookupTable"] = "job_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category_name";
	
		
	$edata["LookupOrderBy"] = "category_name";
	
		
			
		
				
	
	
		
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

	

	
	$tdatafind_me_jobs["category_id"] = $fdata;
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","added_by"); 
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
	
		$fdata["strField"] = "added_by"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "added_by";
	
		
		
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

	

	
	$tdatafind_me_jobs["added_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","created_at"); 
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

	

	
	$tdatafind_me_jobs["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","updated_at"); 
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

	

	
	$tdatafind_me_jobs["updated_at"] = $fdata;
//	fields
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fields";
	$fdata["GoodName"] = "fields";
	$fdata["ownerTable"] = "find_me_jobs";
	$fdata["Label"] = GetFieldLabel("find_me_jobs","fields"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fields"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fields";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatafind_me_jobs["fields"] = $fdata;

	
$tables_data["find_me_jobs"]=&$tdatafind_me_jobs;
$field_labels["find_me_jobs"] = &$fieldLabelsfind_me_jobs;
$fieldToolTips["find_me_jobs"] = &$fieldToolTipsfind_me_jobs;
$page_titles["find_me_jobs"] = &$pageTitlesfind_me_jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["find_me_jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["find_me_jobs"] = array();


	
				$strOriginalDetailsTable="job_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="job_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "job_categories";
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
					$masterTablesData["find_me_jobs"][0] = $masterParams;	
				$masterTablesData["find_me_jobs"][0]["masterKeys"] = array();
	$masterTablesData["find_me_jobs"][0]["masterKeys"][]="category_id";
				$masterTablesData["find_me_jobs"][0]["detailKeys"] = array();
	$masterTablesData["find_me_jobs"][0]["detailKeys"][]="category_id";
		
	
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
					$masterTablesData["find_me_jobs"][1] = $masterParams;	
				$masterTablesData["find_me_jobs"][1]["masterKeys"] = array();
	$masterTablesData["find_me_jobs"][1]["masterKeys"][]="user_id";
				$masterTablesData["find_me_jobs"][1]["detailKeys"] = array();
	$masterTablesData["find_me_jobs"][1]["detailKeys"][]="added_by";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_find_me_jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job_id,   job_name,   category_id,   added_by,   created_at,   updated_at,   fields";
$proto0["m_strFrom"] = "FROM find_me_jobs";
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
	"m_strName" => "job_id",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto5["m_sql"] = "job_id";
$proto5["m_srcTableName"] = "find_me_jobs";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_name",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto7["m_sql"] = "job_name";
$proto7["m_srcTableName"] = "find_me_jobs";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto9["m_sql"] = "category_id";
$proto9["m_srcTableName"] = "find_me_jobs";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto11["m_sql"] = "added_by";
$proto11["m_srcTableName"] = "find_me_jobs";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto13["m_sql"] = "created_at";
$proto13["m_srcTableName"] = "find_me_jobs";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto15["m_sql"] = "updated_at";
$proto15["m_srcTableName"] = "find_me_jobs";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "fields",
	"m_strTable" => "find_me_jobs",
	"m_srcTableName" => "find_me_jobs"
));

$proto17["m_sql"] = "fields";
$proto17["m_srcTableName"] = "find_me_jobs";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "find_me_jobs";
$proto20["m_srcTableName"] = "find_me_jobs";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "job_id";
$proto20["m_columns"][] = "job_name";
$proto20["m_columns"][] = "category_id";
$proto20["m_columns"][] = "added_by";
$proto20["m_columns"][] = "created_at";
$proto20["m_columns"][] = "updated_at";
$proto20["m_columns"][] = "fields";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "find_me_jobs";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "find_me_jobs";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="find_me_jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_find_me_jobs = createSqlQuery_find_me_jobs();


	
							
	
$tdatafind_me_jobs[".sqlquery"] = $queryData_find_me_jobs;

$tableEvents["find_me_jobs"] = new eventsBase;
$tdatafind_me_jobs[".hasEvents"] = false;

?>