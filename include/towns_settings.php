<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatowns = array();	
	$tdatatowns[".truncateText"] = true;
	$tdatatowns[".NumberOfChars"] = 80; 
	$tdatatowns[".ShortName"] = "towns";
	$tdatatowns[".OwnerID"] = "";
	$tdatatowns[".OriginalTable"] = "towns";

//	field labels
$fieldLabelstowns = array();
$fieldToolTipstowns = array();
$pageTitlestowns = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstowns["English"] = array();
	$fieldToolTipstowns["English"] = array();
	$pageTitlestowns["English"] = array();
	$fieldLabelstowns["English"]["town_id"] = "Town Id";
	$fieldToolTipstowns["English"]["town_id"] = "";
	$fieldLabelstowns["English"]["district_id"] = "District Id";
	$fieldToolTipstowns["English"]["district_id"] = "";
	$fieldLabelstowns["English"]["town_name"] = "Town Name";
	$fieldToolTipstowns["English"]["town_name"] = "";
	$fieldLabelstowns["English"]["created_at"] = "Created At";
	$fieldToolTipstowns["English"]["created_at"] = "";
	if (count($fieldToolTipstowns["English"]))
		$tdatatowns[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstowns[""] = array();
	$fieldToolTipstowns[""] = array();
	$pageTitlestowns[""] = array();
	$fieldLabelstowns[""]["town_id"] = "Town Id";
	$fieldToolTipstowns[""]["town_id"] = "";
	$fieldLabelstowns[""]["district_id"] = "District Id";
	$fieldToolTipstowns[""]["district_id"] = "";
	$fieldLabelstowns[""]["town_name"] = "Town Name";
	$fieldToolTipstowns[""]["town_name"] = "";
	$fieldLabelstowns[""]["created_at"] = "Created At";
	$fieldToolTipstowns[""]["created_at"] = "";
	if (count($fieldToolTipstowns[""]))
		$tdatatowns[".isUseToolTips"] = true;
}
	
	
	$tdatatowns[".NCSearch"] = true;



$tdatatowns[".shortTableName"] = "towns";
$tdatatowns[".nSecOptions"] = 0;
$tdatatowns[".recsPerRowList"] = 1;
$tdatatowns[".mainTableOwnerID"] = "";
$tdatatowns[".moveNext"] = 1;
$tdatatowns[".nType"] = 0;

$tdatatowns[".strOriginalTableName"] = "towns";




$tdatatowns[".showAddInPopup"] = false;

$tdatatowns[".showEditInPopup"] = false;

$tdatatowns[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatowns[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatowns[".fieldsForRegister"] = array();

$tdatatowns[".listAjax"] = false;

	$tdatatowns[".audit"] = true;

	$tdatatowns[".locking"] = false;

$tdatatowns[".edit"] = true;

$tdatatowns[".list"] = true;

$tdatatowns[".inlineEdit"] = true;
$tdatatowns[".inlineAdd"] = true;
$tdatatowns[".view"] = true;

$tdatatowns[".import"] = true;

$tdatatowns[".exportTo"] = true;

$tdatatowns[".printFriendly"] = true;

$tdatatowns[".delete"] = true;

$tdatatowns[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatowns[".searchSaving"] = false;
//

$tdatatowns[".showSearchPanel"] = true;
		$tdatatowns[".flexibleSearch"] = true;		

if (isMobile())
	$tdatatowns[".isUseAjaxSuggest"] = false;
else 
	$tdatatowns[".isUseAjaxSuggest"] = true;

$tdatatowns[".rowHighlite"] = true;



$tdatatowns[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatowns[".isUseTimeForSearch"] = false;





$tdatatowns[".allSearchFields"] = array();
$tdatatowns[".filterFields"] = array();
$tdatatowns[".requiredSearchFields"] = array();

$tdatatowns[".allSearchFields"][] = "town_id";
	$tdatatowns[".allSearchFields"][] = "district_id";
	$tdatatowns[".allSearchFields"][] = "town_name";
	$tdatatowns[".allSearchFields"][] = "created_at";
	

$tdatatowns[".googleLikeFields"] = array();
$tdatatowns[".googleLikeFields"][] = "town_id";
$tdatatowns[".googleLikeFields"][] = "district_id";
$tdatatowns[".googleLikeFields"][] = "town_name";
$tdatatowns[".googleLikeFields"][] = "created_at";


$tdatatowns[".advSearchFields"] = array();
$tdatatowns[".advSearchFields"][] = "town_id";
$tdatatowns[".advSearchFields"][] = "district_id";
$tdatatowns[".advSearchFields"][] = "town_name";
$tdatatowns[".advSearchFields"][] = "created_at";

$tdatatowns[".tableType"] = "list";

$tdatatowns[".printerPageOrientation"] = 0;
$tdatatowns[".nPrinterPageScale"] = 100;

$tdatatowns[".nPrinterSplitRecords"] = 40;

$tdatatowns[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatatowns[".pageSize"] = 20;

$tdatatowns[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatowns[".strOrderBy"] = $tstrOrderBy;

$tdatatowns[".orderindexes"] = array();

$tdatatowns[".sqlHead"] = "SELECT town_id,   district_id,   town_name,   created_at";
$tdatatowns[".sqlFrom"] = "FROM towns";
$tdatatowns[".sqlWhereExpr"] = "";
$tdatatowns[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatowns[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatowns[".arrGroupsPerPage"] = $arrGPP;

$tdatatowns[".highlightSearchResults"] = true;

$tableKeystowns = array();
$tableKeystowns[] = "town_id";
$tdatatowns[".Keys"] = $tableKeystowns;

$tdatatowns[".listFields"] = array();
$tdatatowns[".listFields"][] = "town_id";
$tdatatowns[".listFields"][] = "district_id";
$tdatatowns[".listFields"][] = "town_name";
$tdatatowns[".listFields"][] = "created_at";

$tdatatowns[".hideMobileList"] = array();


$tdatatowns[".viewFields"] = array();
$tdatatowns[".viewFields"][] = "town_id";
$tdatatowns[".viewFields"][] = "district_id";
$tdatatowns[".viewFields"][] = "town_name";
$tdatatowns[".viewFields"][] = "created_at";

$tdatatowns[".addFields"] = array();
$tdatatowns[".addFields"][] = "district_id";
$tdatatowns[".addFields"][] = "town_name";
$tdatatowns[".addFields"][] = "created_at";

$tdatatowns[".inlineAddFields"] = array();
$tdatatowns[".inlineAddFields"][] = "district_id";
$tdatatowns[".inlineAddFields"][] = "town_name";
$tdatatowns[".inlineAddFields"][] = "created_at";

$tdatatowns[".editFields"] = array();
$tdatatowns[".editFields"][] = "district_id";
$tdatatowns[".editFields"][] = "town_name";
$tdatatowns[".editFields"][] = "created_at";

$tdatatowns[".inlineEditFields"] = array();
$tdatatowns[".inlineEditFields"][] = "district_id";
$tdatatowns[".inlineEditFields"][] = "town_name";
$tdatatowns[".inlineEditFields"][] = "created_at";

$tdatatowns[".exportFields"] = array();
$tdatatowns[".exportFields"][] = "town_id";
$tdatatowns[".exportFields"][] = "district_id";
$tdatatowns[".exportFields"][] = "town_name";
$tdatatowns[".exportFields"][] = "created_at";

$tdatatowns[".importFields"] = array();
$tdatatowns[".importFields"][] = "town_id";
$tdatatowns[".importFields"][] = "district_id";
$tdatatowns[".importFields"][] = "town_name";
$tdatatowns[".importFields"][] = "created_at";

$tdatatowns[".printFields"] = array();
$tdatatowns[".printFields"][] = "town_id";
$tdatatowns[".printFields"][] = "district_id";
$tdatatowns[".printFields"][] = "town_name";
$tdatatowns[".printFields"][] = "created_at";

//	town_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "town_id";
	$fdata["GoodName"] = "town_id";
	$fdata["ownerTable"] = "towns";
	$fdata["Label"] = GetFieldLabel("towns","town_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "town_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "town_id";
	
		
		
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

	

	
	$tdatatowns["town_id"] = $fdata;
//	district_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "district_id";
	$fdata["GoodName"] = "district_id";
	$fdata["ownerTable"] = "towns";
	$fdata["Label"] = GetFieldLabel("towns","district_id"); 
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
	
		$fdata["strField"] = "district_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "district_id";
	
		
		
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
	$edata["LookupTable"] = "districts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "district_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "district_name";
	
		
	$edata["LookupOrderBy"] = "district_name";
	
		
			
		
				
	
	
		
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

	

	
	$tdatatowns["district_id"] = $fdata;
//	town_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "town_name";
	$fdata["GoodName"] = "town_name";
	$fdata["ownerTable"] = "towns";
	$fdata["Label"] = GetFieldLabel("towns","town_name"); 
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
	
		$fdata["strField"] = "town_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "town_name";
	
		
		
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

	

	
	$tdatatowns["town_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "towns";
	$fdata["Label"] = GetFieldLabel("towns","created_at"); 
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

	

	
	$tdatatowns["created_at"] = $fdata;

	
$tables_data["towns"]=&$tdatatowns;
$field_labels["towns"] = &$fieldLabelstowns;
$fieldToolTips["towns"] = &$fieldToolTipstowns;
$page_titles["towns"] = &$pageTitlestowns;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["towns"] = array();
//	districts
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="districts";
		$detailsParam["dOriginalTable"] = "districts";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "districts";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["towns"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["towns"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["towns"][$dIndex]["masterKeys"][]="district_id";

				$detailsTablesData["towns"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["towns"][$dIndex]["detailKeys"][]="district_id";
//	polling_stations
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polling_stations";
		$detailsParam["dOriginalTable"] = "polling_stations";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polling_stations";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["towns"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["towns"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["towns"][$dIndex]["masterKeys"][]="town_id";

				$detailsTablesData["towns"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["towns"][$dIndex]["detailKeys"][]="town_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["towns"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_towns()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "town_id,   district_id,   town_name,   created_at";
$proto0["m_strFrom"] = "FROM towns";
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
	"m_strName" => "town_id",
	"m_strTable" => "towns",
	"m_srcTableName" => "towns"
));

$proto5["m_sql"] = "town_id";
$proto5["m_srcTableName"] = "towns";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "district_id",
	"m_strTable" => "towns",
	"m_srcTableName" => "towns"
));

$proto7["m_sql"] = "district_id";
$proto7["m_srcTableName"] = "towns";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "town_name",
	"m_strTable" => "towns",
	"m_srcTableName" => "towns"
));

$proto9["m_sql"] = "town_name";
$proto9["m_srcTableName"] = "towns";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "towns",
	"m_srcTableName" => "towns"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "towns";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "towns";
$proto14["m_srcTableName"] = "towns";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "town_id";
$proto14["m_columns"][] = "district_id";
$proto14["m_columns"][] = "town_name";
$proto14["m_columns"][] = "created_at";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "towns";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "towns";
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
$proto0["m_srcTableName"]="towns";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_towns = createSqlQuery_towns();


	
				
	
$tdatatowns[".sqlquery"] = $queryData_towns;

$tableEvents["towns"] = new eventsBase;
$tdatatowns[".hasEvents"] = false;

?>