<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();	
	$tdatausers[".truncateText"] = true;
	$tdatausers[".NumberOfChars"] = 80; 
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["user_id"] = "User Id";
	$fieldToolTipsusers["English"]["user_id"] = "";
	$fieldLabelsusers["English"]["name"] = "Name";
	$fieldToolTipsusers["English"]["name"] = "";
	$fieldLabelsusers["English"]["phone"] = "Phone";
	$fieldToolTipsusers["English"]["phone"] = "";
	$fieldLabelsusers["English"]["password"] = "Password";
	$fieldToolTipsusers["English"]["password"] = "";
	$fieldLabelsusers["English"]["verification_code"] = "Verification Code";
	$fieldToolTipsusers["English"]["verification_code"] = "";
	$fieldLabelsusers["English"]["phone_verified"] = "Phone Verified";
	$fieldToolTipsusers["English"]["phone_verified"] = "";
	$fieldLabelsusers["English"]["active"] = "Active";
	$fieldToolTipsusers["English"]["active"] = "";
	$fieldLabelsusers["English"]["added_by"] = "Added By";
	$fieldToolTipsusers["English"]["added_by"] = "";
	$fieldLabelsusers["English"]["type_id"] = "Type Id";
	$fieldToolTipsusers["English"]["type_id"] = "";
	$fieldLabelsusers["English"]["remember_token"] = "Remember Token";
	$fieldToolTipsusers["English"]["remember_token"] = "";
	$fieldLabelsusers["English"]["created_at"] = "Created At";
	$fieldToolTipsusers["English"]["created_at"] = "";
	$fieldLabelsusers["English"]["updated_at"] = "Updated At";
	$fieldToolTipsusers["English"]["updated_at"] = "";
	$fieldLabelsusers["English"]["identifier"] = "Identifier";
	$fieldToolTipsusers["English"]["identifier"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$pageTitlesusers[""] = array();
	$fieldLabelsusers[""]["user_id"] = "User Id";
	$fieldToolTipsusers[""]["user_id"] = "";
	$fieldLabelsusers[""]["name"] = "Name";
	$fieldToolTipsusers[""]["name"] = "";
	$fieldLabelsusers[""]["phone"] = "Phone";
	$fieldToolTipsusers[""]["phone"] = "";
	$fieldLabelsusers[""]["password"] = "Password";
	$fieldToolTipsusers[""]["password"] = "";
	$fieldLabelsusers[""]["verification_code"] = "Verification Code";
	$fieldToolTipsusers[""]["verification_code"] = "";
	$fieldLabelsusers[""]["phone_verified"] = "Phone Verified";
	$fieldToolTipsusers[""]["phone_verified"] = "";
	$fieldLabelsusers[""]["active"] = "Active";
	$fieldToolTipsusers[""]["active"] = "";
	$fieldLabelsusers[""]["added_by"] = "Added By";
	$fieldToolTipsusers[""]["added_by"] = "";
	$fieldLabelsusers[""]["type_id"] = "Type Id";
	$fieldToolTipsusers[""]["type_id"] = "";
	$fieldLabelsusers[""]["remember_token"] = "Remember Token";
	$fieldToolTipsusers[""]["remember_token"] = "";
	$fieldLabelsusers[""]["created_at"] = "Created At";
	$fieldToolTipsusers[""]["created_at"] = "";
	$fieldLabelsusers[""]["updated_at"] = "Updated At";
	$fieldToolTipsusers[""]["updated_at"] = "";
	$fieldLabelsusers[""]["identifier"] = "Identifier";
	$fieldToolTipsusers[""]["identifier"] = "";
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}
	
	
	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowList"] = 1;
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;
$tdatausers[".nType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";




$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = true;

	$tdatausers[".locking"] = false;

$tdatausers[".edit"] = true;

$tdatausers[".list"] = true;

$tdatausers[".inlineEdit"] = true;
$tdatausers[".inlineAdd"] = true;
$tdatausers[".copy"] = true;
$tdatausers[".view"] = true;

$tdatausers[".import"] = true;

$tdatausers[".exportTo"] = true;

$tdatausers[".printFriendly"] = true;

$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

$tdatausers[".showSearchPanel"] = true;
		$tdatausers[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausers[".isUseAjaxSuggest"] = false;
else 
	$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;





$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "user_id";
	$tdatausers[".allSearchFields"][] = "name";
	$tdatausers[".allSearchFields"][] = "phone";
	$tdatausers[".allSearchFields"][] = "password";
	$tdatausers[".allSearchFields"][] = "verification_code";
	$tdatausers[".allSearchFields"][] = "phone_verified";
	$tdatausers[".allSearchFields"][] = "active";
	$tdatausers[".allSearchFields"][] = "added_by";
	$tdatausers[".allSearchFields"][] = "type_id";
	$tdatausers[".allSearchFields"][] = "remember_token";
	$tdatausers[".allSearchFields"][] = "created_at";
	$tdatausers[".allSearchFields"][] = "updated_at";
	$tdatausers[".allSearchFields"][] = "identifier";
	

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "user_id";
$tdatausers[".googleLikeFields"][] = "name";
$tdatausers[".googleLikeFields"][] = "phone";
$tdatausers[".googleLikeFields"][] = "password";
$tdatausers[".googleLikeFields"][] = "verification_code";
$tdatausers[".googleLikeFields"][] = "phone_verified";
$tdatausers[".googleLikeFields"][] = "active";
$tdatausers[".googleLikeFields"][] = "added_by";
$tdatausers[".googleLikeFields"][] = "type_id";
$tdatausers[".googleLikeFields"][] = "remember_token";
$tdatausers[".googleLikeFields"][] = "created_at";
$tdatausers[".googleLikeFields"][] = "updated_at";
$tdatausers[".googleLikeFields"][] = "identifier";


$tdatausers[".advSearchFields"] = array();
$tdatausers[".advSearchFields"][] = "user_id";
$tdatausers[".advSearchFields"][] = "name";
$tdatausers[".advSearchFields"][] = "phone";
$tdatausers[".advSearchFields"][] = "password";
$tdatausers[".advSearchFields"][] = "verification_code";
$tdatausers[".advSearchFields"][] = "phone_verified";
$tdatausers[".advSearchFields"][] = "active";
$tdatausers[".advSearchFields"][] = "added_by";
$tdatausers[".advSearchFields"][] = "type_id";
$tdatausers[".advSearchFields"][] = "remember_token";
$tdatausers[".advSearchFields"][] = "created_at";
$tdatausers[".advSearchFields"][] = "updated_at";
$tdatausers[".advSearchFields"][] = "identifier";

$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT user_id,  name,  phone,  password,  verification_code,  phone_verified,  active,  added_by,  type_id,  remember_token,  created_at,  updated_at,  identifier";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "user_id";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "user_id";
$tdatausers[".listFields"][] = "name";
$tdatausers[".listFields"][] = "phone";
$tdatausers[".listFields"][] = "password";
$tdatausers[".listFields"][] = "verification_code";
$tdatausers[".listFields"][] = "phone_verified";
$tdatausers[".listFields"][] = "active";
$tdatausers[".listFields"][] = "added_by";
$tdatausers[".listFields"][] = "type_id";
$tdatausers[".listFields"][] = "remember_token";
$tdatausers[".listFields"][] = "created_at";
$tdatausers[".listFields"][] = "updated_at";
$tdatausers[".listFields"][] = "identifier";

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "user_id";
$tdatausers[".viewFields"][] = "name";
$tdatausers[".viewFields"][] = "phone";
$tdatausers[".viewFields"][] = "password";
$tdatausers[".viewFields"][] = "verification_code";
$tdatausers[".viewFields"][] = "phone_verified";
$tdatausers[".viewFields"][] = "active";
$tdatausers[".viewFields"][] = "added_by";
$tdatausers[".viewFields"][] = "type_id";
$tdatausers[".viewFields"][] = "remember_token";
$tdatausers[".viewFields"][] = "created_at";
$tdatausers[".viewFields"][] = "updated_at";
$tdatausers[".viewFields"][] = "identifier";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "name";
$tdatausers[".addFields"][] = "phone";
$tdatausers[".addFields"][] = "password";
$tdatausers[".addFields"][] = "verification_code";
$tdatausers[".addFields"][] = "phone_verified";
$tdatausers[".addFields"][] = "active";
$tdatausers[".addFields"][] = "added_by";
$tdatausers[".addFields"][] = "type_id";
$tdatausers[".addFields"][] = "remember_token";
$tdatausers[".addFields"][] = "created_at";
$tdatausers[".addFields"][] = "updated_at";
$tdatausers[".addFields"][] = "identifier";

$tdatausers[".inlineAddFields"] = array();
$tdatausers[".inlineAddFields"][] = "name";
$tdatausers[".inlineAddFields"][] = "phone";
$tdatausers[".inlineAddFields"][] = "password";
$tdatausers[".inlineAddFields"][] = "verification_code";
$tdatausers[".inlineAddFields"][] = "phone_verified";
$tdatausers[".inlineAddFields"][] = "active";
$tdatausers[".inlineAddFields"][] = "added_by";
$tdatausers[".inlineAddFields"][] = "type_id";
$tdatausers[".inlineAddFields"][] = "remember_token";
$tdatausers[".inlineAddFields"][] = "created_at";
$tdatausers[".inlineAddFields"][] = "updated_at";
$tdatausers[".inlineAddFields"][] = "identifier";

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "name";
$tdatausers[".editFields"][] = "phone";
$tdatausers[".editFields"][] = "password";
$tdatausers[".editFields"][] = "verification_code";
$tdatausers[".editFields"][] = "phone_verified";
$tdatausers[".editFields"][] = "active";
$tdatausers[".editFields"][] = "added_by";
$tdatausers[".editFields"][] = "type_id";
$tdatausers[".editFields"][] = "remember_token";
$tdatausers[".editFields"][] = "created_at";
$tdatausers[".editFields"][] = "updated_at";
$tdatausers[".editFields"][] = "identifier";

$tdatausers[".inlineEditFields"] = array();
$tdatausers[".inlineEditFields"][] = "name";
$tdatausers[".inlineEditFields"][] = "phone";
$tdatausers[".inlineEditFields"][] = "password";
$tdatausers[".inlineEditFields"][] = "verification_code";
$tdatausers[".inlineEditFields"][] = "phone_verified";
$tdatausers[".inlineEditFields"][] = "active";
$tdatausers[".inlineEditFields"][] = "added_by";
$tdatausers[".inlineEditFields"][] = "type_id";
$tdatausers[".inlineEditFields"][] = "remember_token";
$tdatausers[".inlineEditFields"][] = "created_at";
$tdatausers[".inlineEditFields"][] = "updated_at";
$tdatausers[".inlineEditFields"][] = "identifier";

$tdatausers[".exportFields"] = array();
$tdatausers[".exportFields"][] = "user_id";
$tdatausers[".exportFields"][] = "name";
$tdatausers[".exportFields"][] = "phone";
$tdatausers[".exportFields"][] = "password";
$tdatausers[".exportFields"][] = "verification_code";
$tdatausers[".exportFields"][] = "phone_verified";
$tdatausers[".exportFields"][] = "active";
$tdatausers[".exportFields"][] = "added_by";
$tdatausers[".exportFields"][] = "type_id";
$tdatausers[".exportFields"][] = "remember_token";
$tdatausers[".exportFields"][] = "created_at";
$tdatausers[".exportFields"][] = "updated_at";
$tdatausers[".exportFields"][] = "identifier";

$tdatausers[".importFields"] = array();
$tdatausers[".importFields"][] = "user_id";
$tdatausers[".importFields"][] = "name";
$tdatausers[".importFields"][] = "phone";
$tdatausers[".importFields"][] = "password";
$tdatausers[".importFields"][] = "verification_code";
$tdatausers[".importFields"][] = "phone_verified";
$tdatausers[".importFields"][] = "active";
$tdatausers[".importFields"][] = "added_by";
$tdatausers[".importFields"][] = "type_id";
$tdatausers[".importFields"][] = "remember_token";
$tdatausers[".importFields"][] = "created_at";
$tdatausers[".importFields"][] = "updated_at";
$tdatausers[".importFields"][] = "identifier";

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "user_id";
$tdatausers[".printFields"][] = "name";
$tdatausers[".printFields"][] = "phone";
$tdatausers[".printFields"][] = "password";
$tdatausers[".printFields"][] = "verification_code";
$tdatausers[".printFields"][] = "phone_verified";
$tdatausers[".printFields"][] = "active";
$tdatausers[".printFields"][] = "added_by";
$tdatausers[".printFields"][] = "type_id";
$tdatausers[".printFields"][] = "remember_token";
$tdatausers[".printFields"][] = "created_at";
$tdatausers[".printFields"][] = "updated_at";
$tdatausers[".printFields"][] = "identifier";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatausers["user_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","name"); 
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
	
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";
	
		
		
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

	

	
	$tdatausers["name"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone"); 
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
	
		$fdata["strField"] = "phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";
	
		
		
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
			$edata["EditParams"].= " maxlength=18";
	
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

	

	
	$tdatausers["phone"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","password"); 
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
	
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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

	

	
	$tdatausers["password"] = $fdata;
//	verification_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "verification_code";
	$fdata["GoodName"] = "verification_code";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","verification_code"); 
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
	
		$fdata["strField"] = "verification_code"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "verification_code";
	
		
		
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
			$edata["EditParams"].= " maxlength=6";
	
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

	

	
	$tdatausers["verification_code"] = $fdata;
//	phone_verified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "phone_verified";
	$fdata["GoodName"] = "phone_verified";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_verified"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "phone_verified"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_verified";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatausers["phone_verified"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","active"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "active"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatausers["active"] = $fdata;
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","added_by"); 
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

	

	
	$tdatausers["added_by"] = $fdata;
//	type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "type_id";
	$fdata["GoodName"] = "type_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","type_id"); 
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
	
		$fdata["strField"] = "type_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_id";
	
		
		
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
	$edata["LookupTable"] = "user_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "type_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type_name";
	
		
	$edata["LookupOrderBy"] = "type_name";
	
		
			
		
				
	
	
		
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

	

	
	$tdatausers["type_id"] = $fdata;
//	remember_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "remember_token";
	$fdata["GoodName"] = "remember_token";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","remember_token"); 
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
	
		$fdata["strField"] = "remember_token"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remember_token";
	
		
		
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

	

	
	$tdatausers["remember_token"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","created_at"); 
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

	

	
	$tdatausers["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","updated_at"); 
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

	

	
	$tdatausers["updated_at"] = $fdata;
//	identifier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "identifier";
	$fdata["GoodName"] = "identifier";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","identifier"); 
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
	$edata["LookupTable"] = "find_me_ids";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "identifier";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "identifier";
	
		
	$edata["LookupOrderBy"] = "identifier";
	
		
			
		
				
	
	
		
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

	

	
	$tdatausers["identifier"] = $fdata;

	
$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();
//	find_me_ids
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="find_me_ids";
		$detailsParam["dOriginalTable"] = "find_me_ids";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "find_me_ids";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = true;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="identifier";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="identifier";
//	user_details
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user_details";
		$detailsParam["dOriginalTable"] = "user_details";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user_details";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	user_jobs
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user_jobs";
		$detailsParam["dOriginalTable"] = "user_jobs";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user_jobs";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	verification_ids
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="verification_ids";
		$detailsParam["dOriginalTable"] = "verification_ids";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "verification_ids";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	findme web_audit
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="findme web_audit";
		$detailsParam["dOriginalTable"] = "findme web_audit";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "findme_web_audit";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="phone";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user";
//	user_types
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user_types";
		$detailsParam["dOriginalTable"] = "user_types";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user_types";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="type_id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="type_id";
//	find_me_jobs
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="find_me_jobs";
		$detailsParam["dOriginalTable"] = "find_me_jobs";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "find_me_jobs";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="added_by";
	
// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


	
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
					$masterTablesData["users"][0] = $masterParams;	
				$masterTablesData["users"][0]["masterKeys"] = array();
	$masterTablesData["users"][0]["masterKeys"][]="user_id";
				$masterTablesData["users"][0]["detailKeys"] = array();
	$masterTablesData["users"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  name,  phone,  password,  verification_code,  phone_verified,  active,  added_by,  type_id,  remember_token,  created_at,  updated_at,  identifier";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto5["m_sql"] = "user_id";
$proto5["m_srcTableName"] = "users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto9["m_sql"] = "phone";
$proto9["m_srcTableName"] = "users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "verification_code",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto13["m_sql"] = "verification_code";
$proto13["m_srcTableName"] = "users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_verified",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto15["m_sql"] = "phone_verified";
$proto15["m_srcTableName"] = "users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto17["m_sql"] = "active";
$proto17["m_srcTableName"] = "users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto19["m_sql"] = "added_by";
$proto19["m_srcTableName"] = "users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "type_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto21["m_sql"] = "type_id";
$proto21["m_srcTableName"] = "users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "remember_token",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto23["m_sql"] = "remember_token";
$proto23["m_srcTableName"] = "users";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto25["m_sql"] = "created_at";
$proto25["m_srcTableName"] = "users";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto27["m_sql"] = "updated_at";
$proto27["m_srcTableName"] = "users";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "identifier",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto29["m_sql"] = "identifier";
$proto29["m_srcTableName"] = "users";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "users";
$proto32["m_srcTableName"] = "users";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "user_id";
$proto32["m_columns"][] = "name";
$proto32["m_columns"][] = "phone";
$proto32["m_columns"][] = "password";
$proto32["m_columns"][] = "verification_code";
$proto32["m_columns"][] = "phone_verified";
$proto32["m_columns"][] = "active";
$proto32["m_columns"][] = "added_by";
$proto32["m_columns"][] = "type_id";
$proto32["m_columns"][] = "remember_token";
$proto32["m_columns"][] = "created_at";
$proto32["m_columns"][] = "updated_at";
$proto32["m_columns"][] = "identifier";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "users";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "users";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
													
	
$tdatausers[".sqlquery"] = $queryData_users;

$tableEvents["users"] = new eventsBase;
$tdatausers[".hasEvents"] = false;

?>