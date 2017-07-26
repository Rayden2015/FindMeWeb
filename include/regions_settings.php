<?php
require_once(getabspath("classes/cipherer.php"));




$tdataregions = array();	
	$tdataregions[".truncateText"] = true;
	$tdataregions[".NumberOfChars"] = 80; 
	$tdataregions[".ShortName"] = "regions";
	$tdataregions[".OwnerID"] = "";
	$tdataregions[".OriginalTable"] = "regions";

//	field labels
$fieldLabelsregions = array();
$fieldToolTipsregions = array();
$pageTitlesregions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsregions["English"] = array();
	$fieldToolTipsregions["English"] = array();
	$pageTitlesregions["English"] = array();
	$fieldLabelsregions["English"]["region_id"] = "Region Id";
	$fieldToolTipsregions["English"]["region_id"] = "";
	$fieldLabelsregions["English"]["region_name"] = "Region Name";
	$fieldToolTipsregions["English"]["region_name"] = "";
	$fieldLabelsregions["English"]["country_id"] = "Country Id";
	$fieldToolTipsregions["English"]["country_id"] = "";
	$fieldLabelsregions["English"]["created_at"] = "Created At";
	$fieldToolTipsregions["English"]["created_at"] = "";
	$fieldLabelsregions["English"]["updated_at"] = "Updated At";
	$fieldToolTipsregions["English"]["updated_at"] = "";
	if (count($fieldToolTipsregions["English"]))
		$tdataregions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsregions[""] = array();
	$fieldToolTipsregions[""] = array();
	$pageTitlesregions[""] = array();
	$fieldLabelsregions[""]["region_id"] = "Region Id";
	$fieldToolTipsregions[""]["region_id"] = "";
	$fieldLabelsregions[""]["region_name"] = "Region Name";
	$fieldToolTipsregions[""]["region_name"] = "";
	$fieldLabelsregions[""]["country_id"] = "Country Id";
	$fieldToolTipsregions[""]["country_id"] = "";
	$fieldLabelsregions[""]["created_at"] = "Created At";
	$fieldToolTipsregions[""]["created_at"] = "";
	$fieldLabelsregions[""]["updated_at"] = "Updated At";
	$fieldToolTipsregions[""]["updated_at"] = "";
	if (count($fieldToolTipsregions[""]))
		$tdataregions[".isUseToolTips"] = true;
}
	
	
	$tdataregions[".NCSearch"] = true;



$tdataregions[".shortTableName"] = "regions";
$tdataregions[".nSecOptions"] = 0;
$tdataregions[".recsPerRowList"] = 1;
$tdataregions[".mainTableOwnerID"] = "";
$tdataregions[".moveNext"] = 1;
$tdataregions[".nType"] = 0;

$tdataregions[".strOriginalTableName"] = "regions";




$tdataregions[".showAddInPopup"] = false;

$tdataregions[".showEditInPopup"] = false;

$tdataregions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataregions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataregions[".fieldsForRegister"] = array();

$tdataregions[".listAjax"] = false;

	$tdataregions[".audit"] = true;

	$tdataregions[".locking"] = false;

$tdataregions[".edit"] = true;

$tdataregions[".list"] = true;

$tdataregions[".inlineEdit"] = true;
$tdataregions[".inlineAdd"] = true;
$tdataregions[".view"] = true;

$tdataregions[".import"] = true;

$tdataregions[".exportTo"] = true;

$tdataregions[".printFriendly"] = true;

$tdataregions[".delete"] = true;

$tdataregions[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataregions[".searchSaving"] = false;
//

$tdataregions[".showSearchPanel"] = true;
		$tdataregions[".flexibleSearch"] = true;		

if (isMobile())
	$tdataregions[".isUseAjaxSuggest"] = false;
else 
	$tdataregions[".isUseAjaxSuggest"] = true;

$tdataregions[".rowHighlite"] = true;



$tdataregions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataregions[".isUseTimeForSearch"] = false;





$tdataregions[".allSearchFields"] = array();
$tdataregions[".filterFields"] = array();
$tdataregions[".requiredSearchFields"] = array();

$tdataregions[".allSearchFields"][] = "region_id";
	$tdataregions[".allSearchFields"][] = "region_name";
	$tdataregions[".allSearchFields"][] = "country_id";
	$tdataregions[".allSearchFields"][] = "created_at";
	$tdataregions[".allSearchFields"][] = "updated_at";
	

$tdataregions[".googleLikeFields"] = array();
$tdataregions[".googleLikeFields"][] = "region_id";
$tdataregions[".googleLikeFields"][] = "region_name";
$tdataregions[".googleLikeFields"][] = "country_id";
$tdataregions[".googleLikeFields"][] = "created_at";
$tdataregions[".googleLikeFields"][] = "updated_at";


$tdataregions[".advSearchFields"] = array();
$tdataregions[".advSearchFields"][] = "region_id";
$tdataregions[".advSearchFields"][] = "region_name";
$tdataregions[".advSearchFields"][] = "country_id";
$tdataregions[".advSearchFields"][] = "created_at";
$tdataregions[".advSearchFields"][] = "updated_at";

$tdataregions[".tableType"] = "list";

$tdataregions[".printerPageOrientation"] = 0;
$tdataregions[".nPrinterPageScale"] = 100;

$tdataregions[".nPrinterSplitRecords"] = 40;

$tdataregions[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataregions[".pageSize"] = 20;

$tdataregions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataregions[".strOrderBy"] = $tstrOrderBy;

$tdataregions[".orderindexes"] = array();

$tdataregions[".sqlHead"] = "SELECT region_id,   region_name,   country_id,   created_at,   updated_at";
$tdataregions[".sqlFrom"] = "FROM regions";
$tdataregions[".sqlWhereExpr"] = "";
$tdataregions[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregions[".arrGroupsPerPage"] = $arrGPP;

$tdataregions[".highlightSearchResults"] = true;

$tableKeysregions = array();
$tableKeysregions[] = "region_id";
$tdataregions[".Keys"] = $tableKeysregions;

$tdataregions[".listFields"] = array();
$tdataregions[".listFields"][] = "region_id";
$tdataregions[".listFields"][] = "region_name";
$tdataregions[".listFields"][] = "country_id";
$tdataregions[".listFields"][] = "created_at";
$tdataregions[".listFields"][] = "updated_at";

$tdataregions[".hideMobileList"] = array();


$tdataregions[".viewFields"] = array();
$tdataregions[".viewFields"][] = "region_id";
$tdataregions[".viewFields"][] = "region_name";
$tdataregions[".viewFields"][] = "country_id";
$tdataregions[".viewFields"][] = "created_at";
$tdataregions[".viewFields"][] = "updated_at";

$tdataregions[".addFields"] = array();
$tdataregions[".addFields"][] = "region_name";
$tdataregions[".addFields"][] = "country_id";
$tdataregions[".addFields"][] = "created_at";
$tdataregions[".addFields"][] = "updated_at";

$tdataregions[".inlineAddFields"] = array();
$tdataregions[".inlineAddFields"][] = "region_name";
$tdataregions[".inlineAddFields"][] = "country_id";
$tdataregions[".inlineAddFields"][] = "created_at";
$tdataregions[".inlineAddFields"][] = "updated_at";

$tdataregions[".editFields"] = array();
$tdataregions[".editFields"][] = "region_name";
$tdataregions[".editFields"][] = "country_id";
$tdataregions[".editFields"][] = "created_at";
$tdataregions[".editFields"][] = "updated_at";

$tdataregions[".inlineEditFields"] = array();
$tdataregions[".inlineEditFields"][] = "region_name";
$tdataregions[".inlineEditFields"][] = "country_id";
$tdataregions[".inlineEditFields"][] = "created_at";
$tdataregions[".inlineEditFields"][] = "updated_at";

$tdataregions[".exportFields"] = array();
$tdataregions[".exportFields"][] = "region_id";
$tdataregions[".exportFields"][] = "region_name";
$tdataregions[".exportFields"][] = "country_id";
$tdataregions[".exportFields"][] = "created_at";
$tdataregions[".exportFields"][] = "updated_at";

$tdataregions[".importFields"] = array();
$tdataregions[".importFields"][] = "region_id";
$tdataregions[".importFields"][] = "region_name";
$tdataregions[".importFields"][] = "country_id";
$tdataregions[".importFields"][] = "created_at";
$tdataregions[".importFields"][] = "updated_at";

$tdataregions[".printFields"] = array();
$tdataregions[".printFields"][] = "region_id";
$tdataregions[".printFields"][] = "region_name";
$tdataregions[".printFields"][] = "country_id";
$tdataregions[".printFields"][] = "created_at";
$tdataregions[".printFields"][] = "updated_at";

//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","region_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "region_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";
	
		
		
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

	

	
	$tdataregions["region_id"] = $fdata;
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","region_name"); 
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
	
		$fdata["strField"] = "region_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";
	
		
		
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

	

	
	$tdataregions["region_name"] = $fdata;
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","country_id"); 
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
	
		$fdata["strField"] = "country_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";
	
		
		
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "countries";
	$edata["LookupConnId"] = "findme_db_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "country_id";
	
		
	$edata["LookupOrderBy"] = "country_name";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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

	

	
	$tdataregions["country_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","created_at"); 
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

	

	
	$tdataregions["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","updated_at"); 
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

	

	
	$tdataregions["updated_at"] = $fdata;

	
$tables_data["regions"]=&$tdataregions;
$field_labels["regions"] = &$fieldLabelsregions;
$fieldToolTips["regions"] = &$fieldToolTipsregions;
$page_titles["regions"] = &$pageTitlesregions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["regions"] = array();
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
			
	$detailsTablesData["regions"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["regions"][$dIndex]["detailKeys"][]="region_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["regions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_regions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region_id,   region_name,   country_id,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM regions";
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
	"m_strName" => "region_id",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto5["m_sql"] = "region_id";
$proto5["m_srcTableName"] = "regions";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto7["m_sql"] = "region_name";
$proto7["m_srcTableName"] = "regions";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto9["m_sql"] = "country_id";
$proto9["m_srcTableName"] = "regions";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "regions";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "regions";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "regions";
$proto16["m_srcTableName"] = "regions";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "region_id";
$proto16["m_columns"][] = "region_name";
$proto16["m_columns"][] = "country_id";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "regions";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "regions";
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
$proto0["m_srcTableName"]="regions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_regions = createSqlQuery_regions();


	
					
	
$tdataregions[".sqlquery"] = $queryData_regions;

$tableEvents["regions"] = new eventsBase;
$tdataregions[".hasEvents"] = false;

?>