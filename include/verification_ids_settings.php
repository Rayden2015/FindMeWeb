<?php
require_once(getabspath("classes/cipherer.php"));




$tdataverification_ids = array();	
	$tdataverification_ids[".truncateText"] = true;
	$tdataverification_ids[".NumberOfChars"] = 80; 
	$tdataverification_ids[".ShortName"] = "verification_ids";
	$tdataverification_ids[".OwnerID"] = "";
	$tdataverification_ids[".OriginalTable"] = "verification_ids";

//	field labels
$fieldLabelsverification_ids = array();
$fieldToolTipsverification_ids = array();
$pageTitlesverification_ids = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsverification_ids["English"] = array();
	$fieldToolTipsverification_ids["English"] = array();
	$pageTitlesverification_ids["English"] = array();
	$fieldLabelsverification_ids["English"]["user_id"] = "User Id";
	$fieldToolTipsverification_ids["English"]["user_id"] = "";
	$fieldLabelsverification_ids["English"]["type_name"] = "Type Name";
	$fieldToolTipsverification_ids["English"]["type_name"] = "";
	$fieldLabelsverification_ids["English"]["id_number"] = "Id Number";
	$fieldToolTipsverification_ids["English"]["id_number"] = "";
	$fieldLabelsverification_ids["English"]["created_at"] = "Created At";
	$fieldToolTipsverification_ids["English"]["created_at"] = "";
	$fieldLabelsverification_ids["English"]["updated_at"] = "Updated At";
	$fieldToolTipsverification_ids["English"]["updated_at"] = "";
	if (count($fieldToolTipsverification_ids["English"]))
		$tdataverification_ids[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsverification_ids[""] = array();
	$fieldToolTipsverification_ids[""] = array();
	$pageTitlesverification_ids[""] = array();
	$fieldLabelsverification_ids[""]["user_id"] = "User Id";
	$fieldToolTipsverification_ids[""]["user_id"] = "";
	$fieldLabelsverification_ids[""]["type_name"] = "Type Name";
	$fieldToolTipsverification_ids[""]["type_name"] = "";
	$fieldLabelsverification_ids[""]["id_number"] = "Id Number";
	$fieldToolTipsverification_ids[""]["id_number"] = "";
	$fieldLabelsverification_ids[""]["created_at"] = "Created At";
	$fieldToolTipsverification_ids[""]["created_at"] = "";
	$fieldLabelsverification_ids[""]["updated_at"] = "Updated At";
	$fieldToolTipsverification_ids[""]["updated_at"] = "";
	if (count($fieldToolTipsverification_ids[""]))
		$tdataverification_ids[".isUseToolTips"] = true;
}
	
	
	$tdataverification_ids[".NCSearch"] = true;



$tdataverification_ids[".shortTableName"] = "verification_ids";
$tdataverification_ids[".nSecOptions"] = 0;
$tdataverification_ids[".recsPerRowList"] = 1;
$tdataverification_ids[".mainTableOwnerID"] = "";
$tdataverification_ids[".moveNext"] = 1;
$tdataverification_ids[".nType"] = 0;

$tdataverification_ids[".strOriginalTableName"] = "verification_ids";




$tdataverification_ids[".showAddInPopup"] = false;

$tdataverification_ids[".showEditInPopup"] = false;

$tdataverification_ids[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataverification_ids[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataverification_ids[".fieldsForRegister"] = array();

$tdataverification_ids[".listAjax"] = false;

	$tdataverification_ids[".audit"] = true;

	$tdataverification_ids[".locking"] = false;

$tdataverification_ids[".edit"] = true;

$tdataverification_ids[".list"] = true;

$tdataverification_ids[".inlineEdit"] = true;
$tdataverification_ids[".inlineAdd"] = true;
$tdataverification_ids[".view"] = true;

$tdataverification_ids[".import"] = true;

$tdataverification_ids[".exportTo"] = true;

$tdataverification_ids[".printFriendly"] = true;

$tdataverification_ids[".delete"] = true;

$tdataverification_ids[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataverification_ids[".searchSaving"] = false;
//

$tdataverification_ids[".showSearchPanel"] = true;
		$tdataverification_ids[".flexibleSearch"] = true;		

if (isMobile())
	$tdataverification_ids[".isUseAjaxSuggest"] = false;
else 
	$tdataverification_ids[".isUseAjaxSuggest"] = true;

$tdataverification_ids[".rowHighlite"] = true;



$tdataverification_ids[".addPageEvents"] = false;

// use timepicker for search panel
$tdataverification_ids[".isUseTimeForSearch"] = false;





$tdataverification_ids[".allSearchFields"] = array();
$tdataverification_ids[".filterFields"] = array();
$tdataverification_ids[".requiredSearchFields"] = array();

$tdataverification_ids[".allSearchFields"][] = "user_id";
	$tdataverification_ids[".allSearchFields"][] = "type_name";
	$tdataverification_ids[".allSearchFields"][] = "id_number";
	$tdataverification_ids[".allSearchFields"][] = "created_at";
	$tdataverification_ids[".allSearchFields"][] = "updated_at";
	

$tdataverification_ids[".googleLikeFields"] = array();
$tdataverification_ids[".googleLikeFields"][] = "user_id";
$tdataverification_ids[".googleLikeFields"][] = "type_name";
$tdataverification_ids[".googleLikeFields"][] = "id_number";
$tdataverification_ids[".googleLikeFields"][] = "created_at";
$tdataverification_ids[".googleLikeFields"][] = "updated_at";


$tdataverification_ids[".advSearchFields"] = array();
$tdataverification_ids[".advSearchFields"][] = "user_id";
$tdataverification_ids[".advSearchFields"][] = "type_name";
$tdataverification_ids[".advSearchFields"][] = "id_number";
$tdataverification_ids[".advSearchFields"][] = "created_at";
$tdataverification_ids[".advSearchFields"][] = "updated_at";

$tdataverification_ids[".tableType"] = "list";

$tdataverification_ids[".printerPageOrientation"] = 0;
$tdataverification_ids[".nPrinterPageScale"] = 100;

$tdataverification_ids[".nPrinterSplitRecords"] = 40;

$tdataverification_ids[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataverification_ids[".pageSize"] = 20;

$tdataverification_ids[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataverification_ids[".strOrderBy"] = $tstrOrderBy;

$tdataverification_ids[".orderindexes"] = array();

$tdataverification_ids[".sqlHead"] = "SELECT user_id,  type_name,  id_number,  created_at,  updated_at";
$tdataverification_ids[".sqlFrom"] = "FROM verification_ids";
$tdataverification_ids[".sqlWhereExpr"] = "";
$tdataverification_ids[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataverification_ids[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataverification_ids[".arrGroupsPerPage"] = $arrGPP;

$tdataverification_ids[".highlightSearchResults"] = true;

$tableKeysverification_ids = array();
$tableKeysverification_ids[] = "user_id";
$tdataverification_ids[".Keys"] = $tableKeysverification_ids;

$tdataverification_ids[".listFields"] = array();
$tdataverification_ids[".listFields"][] = "user_id";
$tdataverification_ids[".listFields"][] = "type_name";
$tdataverification_ids[".listFields"][] = "id_number";
$tdataverification_ids[".listFields"][] = "created_at";
$tdataverification_ids[".listFields"][] = "updated_at";

$tdataverification_ids[".hideMobileList"] = array();


$tdataverification_ids[".viewFields"] = array();
$tdataverification_ids[".viewFields"][] = "user_id";
$tdataverification_ids[".viewFields"][] = "type_name";
$tdataverification_ids[".viewFields"][] = "id_number";
$tdataverification_ids[".viewFields"][] = "created_at";
$tdataverification_ids[".viewFields"][] = "updated_at";

$tdataverification_ids[".addFields"] = array();
$tdataverification_ids[".addFields"][] = "user_id";
$tdataverification_ids[".addFields"][] = "type_name";
$tdataverification_ids[".addFields"][] = "id_number";
$tdataverification_ids[".addFields"][] = "created_at";
$tdataverification_ids[".addFields"][] = "updated_at";

$tdataverification_ids[".inlineAddFields"] = array();
$tdataverification_ids[".inlineAddFields"][] = "user_id";
$tdataverification_ids[".inlineAddFields"][] = "type_name";
$tdataverification_ids[".inlineAddFields"][] = "id_number";
$tdataverification_ids[".inlineAddFields"][] = "created_at";
$tdataverification_ids[".inlineAddFields"][] = "updated_at";

$tdataverification_ids[".editFields"] = array();
$tdataverification_ids[".editFields"][] = "user_id";
$tdataverification_ids[".editFields"][] = "type_name";
$tdataverification_ids[".editFields"][] = "id_number";
$tdataverification_ids[".editFields"][] = "created_at";
$tdataverification_ids[".editFields"][] = "updated_at";

$tdataverification_ids[".inlineEditFields"] = array();
$tdataverification_ids[".inlineEditFields"][] = "user_id";
$tdataverification_ids[".inlineEditFields"][] = "type_name";
$tdataverification_ids[".inlineEditFields"][] = "id_number";
$tdataverification_ids[".inlineEditFields"][] = "created_at";
$tdataverification_ids[".inlineEditFields"][] = "updated_at";

$tdataverification_ids[".exportFields"] = array();
$tdataverification_ids[".exportFields"][] = "user_id";
$tdataverification_ids[".exportFields"][] = "type_name";
$tdataverification_ids[".exportFields"][] = "id_number";
$tdataverification_ids[".exportFields"][] = "created_at";
$tdataverification_ids[".exportFields"][] = "updated_at";

$tdataverification_ids[".importFields"] = array();
$tdataverification_ids[".importFields"][] = "user_id";
$tdataverification_ids[".importFields"][] = "type_name";
$tdataverification_ids[".importFields"][] = "id_number";
$tdataverification_ids[".importFields"][] = "created_at";
$tdataverification_ids[".importFields"][] = "updated_at";

$tdataverification_ids[".printFields"] = array();
$tdataverification_ids[".printFields"][] = "user_id";
$tdataverification_ids[".printFields"][] = "type_name";
$tdataverification_ids[".printFields"][] = "id_number";
$tdataverification_ids[".printFields"][] = "created_at";
$tdataverification_ids[".printFields"][] = "updated_at";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "verification_ids";
	$fdata["Label"] = GetFieldLabel("verification_ids","user_id"); 
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

	

	
	$tdataverification_ids["user_id"] = $fdata;
//	type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_name";
	$fdata["GoodName"] = "type_name";
	$fdata["ownerTable"] = "verification_ids";
	$fdata["Label"] = GetFieldLabel("verification_ids","type_name"); 
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
	
		$fdata["strField"] = "type_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_name";
	
		
		
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
	$edata["LookupValues"][] = "None";
	$edata["LookupValues"][] = "Voter ID";
	$edata["LookupValues"][] = "Passport";
	$edata["LookupValues"][] = "NHIS";
	$edata["LookupValues"][] = "Driver License";
	$edata["LookupValues"][] = "National ID";

		
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

	

	
	$tdataverification_ids["type_name"] = $fdata;
//	id_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_number";
	$fdata["GoodName"] = "id_number";
	$fdata["ownerTable"] = "verification_ids";
	$fdata["Label"] = GetFieldLabel("verification_ids","id_number"); 
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
	
		$fdata["strField"] = "id_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_number";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataverification_ids["id_number"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "verification_ids";
	$fdata["Label"] = GetFieldLabel("verification_ids","created_at"); 
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

	

	
	$tdataverification_ids["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "verification_ids";
	$fdata["Label"] = GetFieldLabel("verification_ids","updated_at"); 
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

	

	
	$tdataverification_ids["updated_at"] = $fdata;

	
$tables_data["verification_ids"]=&$tdataverification_ids;
$field_labels["verification_ids"] = &$fieldLabelsverification_ids;
$fieldToolTips["verification_ids"] = &$fieldToolTipsverification_ids;
$page_titles["verification_ids"] = &$pageTitlesverification_ids;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["verification_ids"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["verification_ids"] = array();


	
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
					$masterTablesData["verification_ids"][0] = $masterParams;	
				$masterTablesData["verification_ids"][0]["masterKeys"] = array();
	$masterTablesData["verification_ids"][0]["masterKeys"][]="user_id";
				$masterTablesData["verification_ids"][0]["detailKeys"] = array();
	$masterTablesData["verification_ids"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_verification_ids()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  type_name,  id_number,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM verification_ids";
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
	"m_strTable" => "verification_ids",
	"m_srcTableName" => "verification_ids"
));

$proto5["m_sql"] = "user_id";
$proto5["m_srcTableName"] = "verification_ids";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type_name",
	"m_strTable" => "verification_ids",
	"m_srcTableName" => "verification_ids"
));

$proto7["m_sql"] = "type_name";
$proto7["m_srcTableName"] = "verification_ids";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_number",
	"m_strTable" => "verification_ids",
	"m_srcTableName" => "verification_ids"
));

$proto9["m_sql"] = "id_number";
$proto9["m_srcTableName"] = "verification_ids";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "verification_ids",
	"m_srcTableName" => "verification_ids"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "verification_ids";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "verification_ids",
	"m_srcTableName" => "verification_ids"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "verification_ids";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "verification_ids";
$proto16["m_srcTableName"] = "verification_ids";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "user_id";
$proto16["m_columns"][] = "type_name";
$proto16["m_columns"][] = "id_number";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "verification_ids";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "verification_ids";
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
$proto0["m_srcTableName"]="verification_ids";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_verification_ids = createSqlQuery_verification_ids();


	
					
	
$tdataverification_ids[".sqlquery"] = $queryData_verification_ids;

$tableEvents["verification_ids"] = new eventsBase;
$tdataverification_ids[".hasEvents"] = false;

?>