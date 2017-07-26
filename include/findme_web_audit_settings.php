<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafindme_web_audit = array();	
	$tdatafindme_web_audit[".truncateText"] = true;
	$tdatafindme_web_audit[".NumberOfChars"] = 80; 
	$tdatafindme_web_audit[".ShortName"] = "findme_web_audit";
	$tdatafindme_web_audit[".OwnerID"] = "";
	$tdatafindme_web_audit[".OriginalTable"] = "findme web_audit";

//	field labels
$fieldLabelsfindme_web_audit = array();
$fieldToolTipsfindme_web_audit = array();
$pageTitlesfindme_web_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfindme_web_audit["English"] = array();
	$fieldToolTipsfindme_web_audit["English"] = array();
	$pageTitlesfindme_web_audit["English"] = array();
	$fieldLabelsfindme_web_audit["English"]["id"] = "Id";
	$fieldToolTipsfindme_web_audit["English"]["id"] = "";
	$fieldLabelsfindme_web_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipsfindme_web_audit["English"]["datetime"] = "";
	$fieldLabelsfindme_web_audit["English"]["ip"] = "Ip";
	$fieldToolTipsfindme_web_audit["English"]["ip"] = "";
	$fieldLabelsfindme_web_audit["English"]["user"] = "User";
	$fieldToolTipsfindme_web_audit["English"]["user"] = "";
	$fieldLabelsfindme_web_audit["English"]["table"] = "Table";
	$fieldToolTipsfindme_web_audit["English"]["table"] = "";
	$fieldLabelsfindme_web_audit["English"]["action"] = "Action";
	$fieldToolTipsfindme_web_audit["English"]["action"] = "";
	$fieldLabelsfindme_web_audit["English"]["description"] = "Description";
	$fieldToolTipsfindme_web_audit["English"]["description"] = "";
	if (count($fieldToolTipsfindme_web_audit["English"]))
		$tdatafindme_web_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfindme_web_audit[""] = array();
	$fieldToolTipsfindme_web_audit[""] = array();
	$pageTitlesfindme_web_audit[""] = array();
	$fieldLabelsfindme_web_audit[""]["id"] = "Id";
	$fieldToolTipsfindme_web_audit[""]["id"] = "";
	$fieldLabelsfindme_web_audit[""]["datetime"] = "Datetime";
	$fieldToolTipsfindme_web_audit[""]["datetime"] = "";
	$fieldLabelsfindme_web_audit[""]["ip"] = "Ip";
	$fieldToolTipsfindme_web_audit[""]["ip"] = "";
	$fieldLabelsfindme_web_audit[""]["user"] = "User";
	$fieldToolTipsfindme_web_audit[""]["user"] = "";
	$fieldLabelsfindme_web_audit[""]["table"] = "Table";
	$fieldToolTipsfindme_web_audit[""]["table"] = "";
	$fieldLabelsfindme_web_audit[""]["action"] = "Action";
	$fieldToolTipsfindme_web_audit[""]["action"] = "";
	$fieldLabelsfindme_web_audit[""]["description"] = "Description";
	$fieldToolTipsfindme_web_audit[""]["description"] = "";
	if (count($fieldToolTipsfindme_web_audit[""]))
		$tdatafindme_web_audit[".isUseToolTips"] = true;
}
	
	
	$tdatafindme_web_audit[".NCSearch"] = true;



$tdatafindme_web_audit[".shortTableName"] = "findme_web_audit";
$tdatafindme_web_audit[".nSecOptions"] = 0;
$tdatafindme_web_audit[".recsPerRowList"] = 1;
$tdatafindme_web_audit[".mainTableOwnerID"] = "";
$tdatafindme_web_audit[".moveNext"] = 1;
$tdatafindme_web_audit[".nType"] = 0;

$tdatafindme_web_audit[".strOriginalTableName"] = "findme web_audit";




$tdatafindme_web_audit[".showAddInPopup"] = false;

$tdatafindme_web_audit[".showEditInPopup"] = false;

$tdatafindme_web_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafindme_web_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafindme_web_audit[".fieldsForRegister"] = array();

$tdatafindme_web_audit[".listAjax"] = false;

	$tdatafindme_web_audit[".audit"] = true;

	$tdatafindme_web_audit[".locking"] = false;

$tdatafindme_web_audit[".edit"] = true;

$tdatafindme_web_audit[".list"] = true;

$tdatafindme_web_audit[".inlineEdit"] = true;
$tdatafindme_web_audit[".inlineAdd"] = true;
$tdatafindme_web_audit[".view"] = true;

$tdatafindme_web_audit[".import"] = true;

$tdatafindme_web_audit[".exportTo"] = true;

$tdatafindme_web_audit[".printFriendly"] = true;


$tdatafindme_web_audit[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafindme_web_audit[".searchSaving"] = false;
//

$tdatafindme_web_audit[".showSearchPanel"] = true;
		$tdatafindme_web_audit[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafindme_web_audit[".isUseAjaxSuggest"] = false;
else 
	$tdatafindme_web_audit[".isUseAjaxSuggest"] = true;

$tdatafindme_web_audit[".rowHighlite"] = true;



$tdatafindme_web_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafindme_web_audit[".isUseTimeForSearch"] = false;





$tdatafindme_web_audit[".allSearchFields"] = array();
$tdatafindme_web_audit[".filterFields"] = array();
$tdatafindme_web_audit[".requiredSearchFields"] = array();

$tdatafindme_web_audit[".allSearchFields"][] = "id";
	$tdatafindme_web_audit[".allSearchFields"][] = "datetime";
	$tdatafindme_web_audit[".allSearchFields"][] = "ip";
	$tdatafindme_web_audit[".allSearchFields"][] = "user";
	$tdatafindme_web_audit[".allSearchFields"][] = "table";
	$tdatafindme_web_audit[".allSearchFields"][] = "action";
	$tdatafindme_web_audit[".allSearchFields"][] = "description";
	

$tdatafindme_web_audit[".googleLikeFields"] = array();
$tdatafindme_web_audit[".googleLikeFields"][] = "id";
$tdatafindme_web_audit[".googleLikeFields"][] = "datetime";
$tdatafindme_web_audit[".googleLikeFields"][] = "ip";
$tdatafindme_web_audit[".googleLikeFields"][] = "user";
$tdatafindme_web_audit[".googleLikeFields"][] = "table";
$tdatafindme_web_audit[".googleLikeFields"][] = "action";
$tdatafindme_web_audit[".googleLikeFields"][] = "description";


$tdatafindme_web_audit[".advSearchFields"] = array();
$tdatafindme_web_audit[".advSearchFields"][] = "id";
$tdatafindme_web_audit[".advSearchFields"][] = "datetime";
$tdatafindme_web_audit[".advSearchFields"][] = "ip";
$tdatafindme_web_audit[".advSearchFields"][] = "user";
$tdatafindme_web_audit[".advSearchFields"][] = "table";
$tdatafindme_web_audit[".advSearchFields"][] = "action";
$tdatafindme_web_audit[".advSearchFields"][] = "description";

$tdatafindme_web_audit[".tableType"] = "list";

$tdatafindme_web_audit[".printerPageOrientation"] = 0;
$tdatafindme_web_audit[".nPrinterPageScale"] = 100;

$tdatafindme_web_audit[".nPrinterSplitRecords"] = 40;

$tdatafindme_web_audit[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatafindme_web_audit[".pageSize"] = 20;

$tdatafindme_web_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafindme_web_audit[".strOrderBy"] = $tstrOrderBy;

$tdatafindme_web_audit[".orderindexes"] = array();

$tdatafindme_web_audit[".sqlHead"] = "SELECT id,   `datetime`,   ip,   `user`,   `table`,   `action`,   description";
$tdatafindme_web_audit[".sqlFrom"] = "FROM `findme web_audit`";
$tdatafindme_web_audit[".sqlWhereExpr"] = "";
$tdatafindme_web_audit[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafindme_web_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafindme_web_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatafindme_web_audit[".highlightSearchResults"] = true;

$tableKeysfindme_web_audit = array();
$tableKeysfindme_web_audit[] = "id";
$tdatafindme_web_audit[".Keys"] = $tableKeysfindme_web_audit;

$tdatafindme_web_audit[".listFields"] = array();
$tdatafindme_web_audit[".listFields"][] = "id";
$tdatafindme_web_audit[".listFields"][] = "datetime";
$tdatafindme_web_audit[".listFields"][] = "ip";
$tdatafindme_web_audit[".listFields"][] = "user";
$tdatafindme_web_audit[".listFields"][] = "table";
$tdatafindme_web_audit[".listFields"][] = "action";
$tdatafindme_web_audit[".listFields"][] = "description";

$tdatafindme_web_audit[".hideMobileList"] = array();


$tdatafindme_web_audit[".viewFields"] = array();
$tdatafindme_web_audit[".viewFields"][] = "id";
$tdatafindme_web_audit[".viewFields"][] = "datetime";
$tdatafindme_web_audit[".viewFields"][] = "ip";
$tdatafindme_web_audit[".viewFields"][] = "user";
$tdatafindme_web_audit[".viewFields"][] = "table";
$tdatafindme_web_audit[".viewFields"][] = "action";
$tdatafindme_web_audit[".viewFields"][] = "description";

$tdatafindme_web_audit[".addFields"] = array();
$tdatafindme_web_audit[".addFields"][] = "datetime";
$tdatafindme_web_audit[".addFields"][] = "ip";
$tdatafindme_web_audit[".addFields"][] = "user";
$tdatafindme_web_audit[".addFields"][] = "table";
$tdatafindme_web_audit[".addFields"][] = "action";
$tdatafindme_web_audit[".addFields"][] = "description";

$tdatafindme_web_audit[".inlineAddFields"] = array();
$tdatafindme_web_audit[".inlineAddFields"][] = "datetime";
$tdatafindme_web_audit[".inlineAddFields"][] = "ip";
$tdatafindme_web_audit[".inlineAddFields"][] = "user";
$tdatafindme_web_audit[".inlineAddFields"][] = "table";
$tdatafindme_web_audit[".inlineAddFields"][] = "action";
$tdatafindme_web_audit[".inlineAddFields"][] = "description";

$tdatafindme_web_audit[".editFields"] = array();
$tdatafindme_web_audit[".editFields"][] = "datetime";
$tdatafindme_web_audit[".editFields"][] = "ip";
$tdatafindme_web_audit[".editFields"][] = "user";
$tdatafindme_web_audit[".editFields"][] = "table";
$tdatafindme_web_audit[".editFields"][] = "action";
$tdatafindme_web_audit[".editFields"][] = "description";

$tdatafindme_web_audit[".inlineEditFields"] = array();
$tdatafindme_web_audit[".inlineEditFields"][] = "datetime";
$tdatafindme_web_audit[".inlineEditFields"][] = "ip";
$tdatafindme_web_audit[".inlineEditFields"][] = "user";
$tdatafindme_web_audit[".inlineEditFields"][] = "table";
$tdatafindme_web_audit[".inlineEditFields"][] = "action";
$tdatafindme_web_audit[".inlineEditFields"][] = "description";

$tdatafindme_web_audit[".exportFields"] = array();
$tdatafindme_web_audit[".exportFields"][] = "id";
$tdatafindme_web_audit[".exportFields"][] = "datetime";
$tdatafindme_web_audit[".exportFields"][] = "ip";
$tdatafindme_web_audit[".exportFields"][] = "user";
$tdatafindme_web_audit[".exportFields"][] = "table";
$tdatafindme_web_audit[".exportFields"][] = "action";
$tdatafindme_web_audit[".exportFields"][] = "description";

$tdatafindme_web_audit[".importFields"] = array();
$tdatafindme_web_audit[".importFields"][] = "id";
$tdatafindme_web_audit[".importFields"][] = "datetime";
$tdatafindme_web_audit[".importFields"][] = "ip";
$tdatafindme_web_audit[".importFields"][] = "user";
$tdatafindme_web_audit[".importFields"][] = "table";
$tdatafindme_web_audit[".importFields"][] = "action";
$tdatafindme_web_audit[".importFields"][] = "description";

$tdatafindme_web_audit[".printFields"] = array();
$tdatafindme_web_audit[".printFields"][] = "id";
$tdatafindme_web_audit[".printFields"][] = "datetime";
$tdatafindme_web_audit[".printFields"][] = "ip";
$tdatafindme_web_audit[".printFields"][] = "user";
$tdatafindme_web_audit[".printFields"][] = "table";
$tdatafindme_web_audit[".printFields"][] = "action";
$tdatafindme_web_audit[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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

	

	
	$tdatafindme_web_audit["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","datetime"); 
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
	
		$fdata["strField"] = "datetime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";
	
		
		
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
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatafindme_web_audit["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","ip"); 
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
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";
	
		
		
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
			$edata["EditParams"].= " maxlength=40";
	
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

	

	
	$tdatafindme_web_audit["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","user"); 
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
	
		$fdata["strField"] = "user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";
	
		
		
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
		
		
			
	$edata["LinkField"] = "phone";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafindme_web_audit["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","table"); 
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
	
		$fdata["strField"] = "table"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdatafindme_web_audit["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","action"); 
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
	
		$fdata["strField"] = "action"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatafindme_web_audit["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "findme web_audit";
	$fdata["Label"] = GetFieldLabel("findme_web_audit","description"); 
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
	
		$fdata["strField"] = "description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";
	
		
		
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

	

	
	$tdatafindme_web_audit["description"] = $fdata;

	
$tables_data["findme web_audit"]=&$tdatafindme_web_audit;
$field_labels["findme_web_audit"] = &$fieldLabelsfindme_web_audit;
$fieldToolTips["findme web_audit"] = &$fieldToolTipsfindme_web_audit;
$page_titles["findme_web_audit"] = &$pageTitlesfindme_web_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["findme web_audit"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["findme web_audit"] = array();


	
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
					$masterTablesData["findme web_audit"][0] = $masterParams;	
				$masterTablesData["findme web_audit"][0]["masterKeys"] = array();
	$masterTablesData["findme web_audit"][0]["masterKeys"][]="phone";
				$masterTablesData["findme web_audit"][0]["detailKeys"] = array();
	$masterTablesData["findme web_audit"][0]["detailKeys"][]="user";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_findme_web_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   `datetime`,   ip,   `user`,   `table`,   `action`,   description";
$proto0["m_strFrom"] = "FROM `findme web_audit`";
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
	"m_strName" => "id",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "findme web_audit";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto7["m_sql"] = "`datetime`";
$proto7["m_srcTableName"] = "findme web_audit";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto9["m_sql"] = "ip";
$proto9["m_srcTableName"] = "findme web_audit";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto11["m_sql"] = "`user`";
$proto11["m_srcTableName"] = "findme web_audit";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto13["m_sql"] = "`table`";
$proto13["m_srcTableName"] = "findme web_audit";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto15["m_sql"] = "`action`";
$proto15["m_srcTableName"] = "findme web_audit";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "findme web_audit",
	"m_srcTableName" => "findme web_audit"
));

$proto17["m_sql"] = "description";
$proto17["m_srcTableName"] = "findme web_audit";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "findme web_audit";
$proto20["m_srcTableName"] = "findme web_audit";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "datetime";
$proto20["m_columns"][] = "ip";
$proto20["m_columns"][] = "user";
$proto20["m_columns"][] = "table";
$proto20["m_columns"][] = "action";
$proto20["m_columns"][] = "description";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "`findme web_audit`";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "findme web_audit";
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
$proto0["m_srcTableName"]="findme web_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_findme_web_audit = createSqlQuery_findme_web_audit();


	
							
	
$tdatafindme_web_audit[".sqlquery"] = $queryData_findme_web_audit;

$tableEvents["findme web_audit"] = new eventsBase;
$tdatafindme_web_audit[".hasEvents"] = false;

?>