<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser_types = array();	
	$tdatauser_types[".truncateText"] = true;
	$tdatauser_types[".NumberOfChars"] = 80; 
	$tdatauser_types[".ShortName"] = "user_types";
	$tdatauser_types[".OwnerID"] = "";
	$tdatauser_types[".OriginalTable"] = "user_types";

//	field labels
$fieldLabelsuser_types = array();
$fieldToolTipsuser_types = array();
$pageTitlesuser_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_types["English"] = array();
	$fieldToolTipsuser_types["English"] = array();
	$pageTitlesuser_types["English"] = array();
	$fieldLabelsuser_types["English"]["type_id"] = "Type Id";
	$fieldToolTipsuser_types["English"]["type_id"] = "";
	$fieldLabelsuser_types["English"]["type_name"] = "Type Name";
	$fieldToolTipsuser_types["English"]["type_name"] = "";
	$fieldLabelsuser_types["English"]["created_at"] = "Created At";
	$fieldToolTipsuser_types["English"]["created_at"] = "";
	$fieldLabelsuser_types["English"]["updated_at"] = "Updated At";
	$fieldToolTipsuser_types["English"]["updated_at"] = "";
	if (count($fieldToolTipsuser_types["English"]))
		$tdatauser_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser_types[""] = array();
	$fieldToolTipsuser_types[""] = array();
	$pageTitlesuser_types[""] = array();
	$fieldLabelsuser_types[""]["type_id"] = "Type Id";
	$fieldToolTipsuser_types[""]["type_id"] = "";
	$fieldLabelsuser_types[""]["type_name"] = "Type Name";
	$fieldToolTipsuser_types[""]["type_name"] = "";
	$fieldLabelsuser_types[""]["created_at"] = "Created At";
	$fieldToolTipsuser_types[""]["created_at"] = "";
	$fieldLabelsuser_types[""]["updated_at"] = "Updated At";
	$fieldToolTipsuser_types[""]["updated_at"] = "";
	if (count($fieldToolTipsuser_types[""]))
		$tdatauser_types[".isUseToolTips"] = true;
}
	
	
	$tdatauser_types[".NCSearch"] = true;



$tdatauser_types[".shortTableName"] = "user_types";
$tdatauser_types[".nSecOptions"] = 0;
$tdatauser_types[".recsPerRowList"] = 1;
$tdatauser_types[".mainTableOwnerID"] = "";
$tdatauser_types[".moveNext"] = 1;
$tdatauser_types[".nType"] = 0;

$tdatauser_types[".strOriginalTableName"] = "user_types";




$tdatauser_types[".showAddInPopup"] = false;

$tdatauser_types[".showEditInPopup"] = false;

$tdatauser_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser_types[".fieldsForRegister"] = array();

$tdatauser_types[".listAjax"] = false;

	$tdatauser_types[".audit"] = true;

	$tdatauser_types[".locking"] = false;

$tdatauser_types[".edit"] = true;

$tdatauser_types[".list"] = true;

$tdatauser_types[".inlineEdit"] = true;
$tdatauser_types[".inlineAdd"] = true;
$tdatauser_types[".view"] = true;

$tdatauser_types[".import"] = true;

$tdatauser_types[".exportTo"] = true;

$tdatauser_types[".printFriendly"] = true;

$tdatauser_types[".delete"] = true;

$tdatauser_types[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser_types[".searchSaving"] = false;
//

$tdatauser_types[".showSearchPanel"] = true;
		$tdatauser_types[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser_types[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_types[".isUseAjaxSuggest"] = true;

$tdatauser_types[".rowHighlite"] = true;



$tdatauser_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_types[".isUseTimeForSearch"] = false;





$tdatauser_types[".allSearchFields"] = array();
$tdatauser_types[".filterFields"] = array();
$tdatauser_types[".requiredSearchFields"] = array();

$tdatauser_types[".allSearchFields"][] = "type_id";
	$tdatauser_types[".allSearchFields"][] = "type_name";
	$tdatauser_types[".allSearchFields"][] = "created_at";
	$tdatauser_types[".allSearchFields"][] = "updated_at";
	

$tdatauser_types[".googleLikeFields"] = array();
$tdatauser_types[".googleLikeFields"][] = "type_id";
$tdatauser_types[".googleLikeFields"][] = "type_name";
$tdatauser_types[".googleLikeFields"][] = "created_at";
$tdatauser_types[".googleLikeFields"][] = "updated_at";


$tdatauser_types[".advSearchFields"] = array();
$tdatauser_types[".advSearchFields"][] = "type_id";
$tdatauser_types[".advSearchFields"][] = "type_name";
$tdatauser_types[".advSearchFields"][] = "created_at";
$tdatauser_types[".advSearchFields"][] = "updated_at";

$tdatauser_types[".tableType"] = "list";

$tdatauser_types[".printerPageOrientation"] = 0;
$tdatauser_types[".nPrinterPageScale"] = 100;

$tdatauser_types[".nPrinterSplitRecords"] = 40;

$tdatauser_types[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatauser_types[".pageSize"] = 20;

$tdatauser_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_types[".strOrderBy"] = $tstrOrderBy;

$tdatauser_types[".orderindexes"] = array();

$tdatauser_types[".sqlHead"] = "SELECT type_id,   type_name,   created_at,   updated_at";
$tdatauser_types[".sqlFrom"] = "FROM user_types";
$tdatauser_types[".sqlWhereExpr"] = "";
$tdatauser_types[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_types[".arrGroupsPerPage"] = $arrGPP;

$tdatauser_types[".highlightSearchResults"] = true;

$tableKeysuser_types = array();
$tableKeysuser_types[] = "type_id";
$tdatauser_types[".Keys"] = $tableKeysuser_types;

$tdatauser_types[".listFields"] = array();
$tdatauser_types[".listFields"][] = "type_id";
$tdatauser_types[".listFields"][] = "type_name";
$tdatauser_types[".listFields"][] = "created_at";
$tdatauser_types[".listFields"][] = "updated_at";

$tdatauser_types[".hideMobileList"] = array();


$tdatauser_types[".viewFields"] = array();
$tdatauser_types[".viewFields"][] = "type_id";
$tdatauser_types[".viewFields"][] = "type_name";
$tdatauser_types[".viewFields"][] = "created_at";
$tdatauser_types[".viewFields"][] = "updated_at";

$tdatauser_types[".addFields"] = array();
$tdatauser_types[".addFields"][] = "type_name";
$tdatauser_types[".addFields"][] = "created_at";
$tdatauser_types[".addFields"][] = "updated_at";

$tdatauser_types[".inlineAddFields"] = array();
$tdatauser_types[".inlineAddFields"][] = "type_name";
$tdatauser_types[".inlineAddFields"][] = "created_at";
$tdatauser_types[".inlineAddFields"][] = "updated_at";

$tdatauser_types[".editFields"] = array();
$tdatauser_types[".editFields"][] = "type_name";
$tdatauser_types[".editFields"][] = "created_at";
$tdatauser_types[".editFields"][] = "updated_at";

$tdatauser_types[".inlineEditFields"] = array();
$tdatauser_types[".inlineEditFields"][] = "type_name";
$tdatauser_types[".inlineEditFields"][] = "created_at";
$tdatauser_types[".inlineEditFields"][] = "updated_at";

$tdatauser_types[".exportFields"] = array();
$tdatauser_types[".exportFields"][] = "type_id";
$tdatauser_types[".exportFields"][] = "type_name";
$tdatauser_types[".exportFields"][] = "created_at";
$tdatauser_types[".exportFields"][] = "updated_at";

$tdatauser_types[".importFields"] = array();
$tdatauser_types[".importFields"][] = "type_id";
$tdatauser_types[".importFields"][] = "type_name";
$tdatauser_types[".importFields"][] = "created_at";
$tdatauser_types[".importFields"][] = "updated_at";

$tdatauser_types[".printFields"] = array();
$tdatauser_types[".printFields"][] = "type_id";
$tdatauser_types[".printFields"][] = "type_name";
$tdatauser_types[".printFields"][] = "created_at";
$tdatauser_types[".printFields"][] = "updated_at";

//	type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type_id";
	$fdata["GoodName"] = "type_id";
	$fdata["ownerTable"] = "user_types";
	$fdata["Label"] = GetFieldLabel("user_types","type_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatauser_types["type_id"] = $fdata;
//	type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_name";
	$fdata["GoodName"] = "type_name";
	$fdata["ownerTable"] = "user_types";
	$fdata["Label"] = GetFieldLabel("user_types","type_name"); 
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

	

	
	$tdatauser_types["type_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user_types";
	$fdata["Label"] = GetFieldLabel("user_types","created_at"); 
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

	

	
	$tdatauser_types["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "user_types";
	$fdata["Label"] = GetFieldLabel("user_types","updated_at"); 
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

	

	
	$tdatauser_types["updated_at"] = $fdata;

	
$tables_data["user_types"]=&$tdatauser_types;
$field_labels["user_types"] = &$fieldLabelsuser_types;
$fieldToolTips["user_types"] = &$fieldToolTipsuser_types;
$page_titles["user_types"] = &$pageTitlesuser_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_types"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_types"] = array();


	
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
					$masterTablesData["user_types"][0] = $masterParams;	
				$masterTablesData["user_types"][0]["masterKeys"] = array();
	$masterTablesData["user_types"][0]["masterKeys"][]="type_id";
				$masterTablesData["user_types"][0]["detailKeys"] = array();
	$masterTablesData["user_types"][0]["detailKeys"][]="type_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "type_id,   type_name,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM user_types";
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
	"m_strName" => "type_id",
	"m_strTable" => "user_types",
	"m_srcTableName" => "user_types"
));

$proto5["m_sql"] = "type_id";
$proto5["m_srcTableName"] = "user_types";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type_name",
	"m_strTable" => "user_types",
	"m_srcTableName" => "user_types"
));

$proto7["m_sql"] = "type_name";
$proto7["m_srcTableName"] = "user_types";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user_types",
	"m_srcTableName" => "user_types"
));

$proto9["m_sql"] = "created_at";
$proto9["m_srcTableName"] = "user_types";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "user_types",
	"m_srcTableName" => "user_types"
));

$proto11["m_sql"] = "updated_at";
$proto11["m_srcTableName"] = "user_types";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "user_types";
$proto14["m_srcTableName"] = "user_types";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "type_id";
$proto14["m_columns"][] = "type_name";
$proto14["m_columns"][] = "created_at";
$proto14["m_columns"][] = "updated_at";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "user_types";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "user_types";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_types = createSqlQuery_user_types();


	
				
	
$tdatauser_types[".sqlquery"] = $queryData_user_types;

$tableEvents["user_types"] = new eventsBase;
$tdatauser_types[".hasEvents"] = false;

?>