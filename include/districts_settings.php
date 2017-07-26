<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadistricts = array();	
	$tdatadistricts[".truncateText"] = true;
	$tdatadistricts[".NumberOfChars"] = 80; 
	$tdatadistricts[".ShortName"] = "districts";
	$tdatadistricts[".OwnerID"] = "";
	$tdatadistricts[".OriginalTable"] = "districts";

//	field labels
$fieldLabelsdistricts = array();
$fieldToolTipsdistricts = array();
$pageTitlesdistricts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdistricts["English"] = array();
	$fieldToolTipsdistricts["English"] = array();
	$pageTitlesdistricts["English"] = array();
	$fieldLabelsdistricts["English"]["district_id"] = "District Id";
	$fieldToolTipsdistricts["English"]["district_id"] = "";
	$fieldLabelsdistricts["English"]["region_id"] = "Region Id";
	$fieldToolTipsdistricts["English"]["region_id"] = "";
	$fieldLabelsdistricts["English"]["district_name"] = "District Name";
	$fieldToolTipsdistricts["English"]["district_name"] = "";
	$fieldLabelsdistricts["English"]["created_at"] = "Created At";
	$fieldToolTipsdistricts["English"]["created_at"] = "";
	$fieldLabelsdistricts["English"]["updated_at"] = "Updated At";
	$fieldToolTipsdistricts["English"]["updated_at"] = "";
	if (count($fieldToolTipsdistricts["English"]))
		$tdatadistricts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdistricts[""] = array();
	$fieldToolTipsdistricts[""] = array();
	$pageTitlesdistricts[""] = array();
	$fieldLabelsdistricts[""]["district_id"] = "District Id";
	$fieldToolTipsdistricts[""]["district_id"] = "";
	$fieldLabelsdistricts[""]["region_id"] = "Region Id";
	$fieldToolTipsdistricts[""]["region_id"] = "";
	$fieldLabelsdistricts[""]["district_name"] = "District Name";
	$fieldToolTipsdistricts[""]["district_name"] = "";
	$fieldLabelsdistricts[""]["created_at"] = "Created At";
	$fieldToolTipsdistricts[""]["created_at"] = "";
	$fieldLabelsdistricts[""]["updated_at"] = "Updated At";
	$fieldToolTipsdistricts[""]["updated_at"] = "";
	if (count($fieldToolTipsdistricts[""]))
		$tdatadistricts[".isUseToolTips"] = true;
}
	
	
	$tdatadistricts[".NCSearch"] = true;



$tdatadistricts[".shortTableName"] = "districts";
$tdatadistricts[".nSecOptions"] = 0;
$tdatadistricts[".recsPerRowList"] = 1;
$tdatadistricts[".mainTableOwnerID"] = "";
$tdatadistricts[".moveNext"] = 1;
$tdatadistricts[".nType"] = 0;

$tdatadistricts[".strOriginalTableName"] = "districts";




$tdatadistricts[".showAddInPopup"] = false;

$tdatadistricts[".showEditInPopup"] = false;

$tdatadistricts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadistricts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadistricts[".fieldsForRegister"] = array();

$tdatadistricts[".listAjax"] = false;

	$tdatadistricts[".audit"] = true;

	$tdatadistricts[".locking"] = false;

$tdatadistricts[".edit"] = true;

$tdatadistricts[".list"] = true;

$tdatadistricts[".inlineEdit"] = true;
$tdatadistricts[".inlineAdd"] = true;
$tdatadistricts[".view"] = true;

$tdatadistricts[".import"] = true;

$tdatadistricts[".exportTo"] = true;

$tdatadistricts[".printFriendly"] = true;

$tdatadistricts[".delete"] = true;

$tdatadistricts[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadistricts[".searchSaving"] = false;
//

$tdatadistricts[".showSearchPanel"] = true;
		$tdatadistricts[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadistricts[".isUseAjaxSuggest"] = false;
else 
	$tdatadistricts[".isUseAjaxSuggest"] = true;

$tdatadistricts[".rowHighlite"] = true;



$tdatadistricts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadistricts[".isUseTimeForSearch"] = false;





$tdatadistricts[".allSearchFields"] = array();
$tdatadistricts[".filterFields"] = array();
$tdatadistricts[".requiredSearchFields"] = array();

$tdatadistricts[".allSearchFields"][] = "district_id";
	$tdatadistricts[".allSearchFields"][] = "region_id";
	$tdatadistricts[".allSearchFields"][] = "district_name";
	$tdatadistricts[".allSearchFields"][] = "created_at";
	$tdatadistricts[".allSearchFields"][] = "updated_at";
	

$tdatadistricts[".googleLikeFields"] = array();
$tdatadistricts[".googleLikeFields"][] = "district_id";
$tdatadistricts[".googleLikeFields"][] = "region_id";
$tdatadistricts[".googleLikeFields"][] = "district_name";
$tdatadistricts[".googleLikeFields"][] = "created_at";
$tdatadistricts[".googleLikeFields"][] = "updated_at";


$tdatadistricts[".advSearchFields"] = array();
$tdatadistricts[".advSearchFields"][] = "district_id";
$tdatadistricts[".advSearchFields"][] = "region_id";
$tdatadistricts[".advSearchFields"][] = "district_name";
$tdatadistricts[".advSearchFields"][] = "created_at";
$tdatadistricts[".advSearchFields"][] = "updated_at";

$tdatadistricts[".tableType"] = "list";

$tdatadistricts[".printerPageOrientation"] = 0;
$tdatadistricts[".nPrinterPageScale"] = 100;

$tdatadistricts[".nPrinterSplitRecords"] = 40;

$tdatadistricts[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatadistricts[".pageSize"] = 20;

$tdatadistricts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadistricts[".strOrderBy"] = $tstrOrderBy;

$tdatadistricts[".orderindexes"] = array();

$tdatadistricts[".sqlHead"] = "SELECT district_id,  region_id,  district_name,  created_at,  updated_at";
$tdatadistricts[".sqlFrom"] = "FROM districts";
$tdatadistricts[".sqlWhereExpr"] = "";
$tdatadistricts[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadistricts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadistricts[".arrGroupsPerPage"] = $arrGPP;

$tdatadistricts[".highlightSearchResults"] = true;

$tableKeysdistricts = array();
$tableKeysdistricts[] = "district_id";
$tdatadistricts[".Keys"] = $tableKeysdistricts;

$tdatadistricts[".listFields"] = array();
$tdatadistricts[".listFields"][] = "district_id";
$tdatadistricts[".listFields"][] = "region_id";
$tdatadistricts[".listFields"][] = "district_name";
$tdatadistricts[".listFields"][] = "created_at";
$tdatadistricts[".listFields"][] = "updated_at";

$tdatadistricts[".hideMobileList"] = array();


$tdatadistricts[".viewFields"] = array();
$tdatadistricts[".viewFields"][] = "district_id";
$tdatadistricts[".viewFields"][] = "region_id";
$tdatadistricts[".viewFields"][] = "district_name";
$tdatadistricts[".viewFields"][] = "created_at";
$tdatadistricts[".viewFields"][] = "updated_at";

$tdatadistricts[".addFields"] = array();
$tdatadistricts[".addFields"][] = "region_id";
$tdatadistricts[".addFields"][] = "district_name";
$tdatadistricts[".addFields"][] = "created_at";
$tdatadistricts[".addFields"][] = "updated_at";

$tdatadistricts[".inlineAddFields"] = array();
$tdatadistricts[".inlineAddFields"][] = "region_id";
$tdatadistricts[".inlineAddFields"][] = "district_name";
$tdatadistricts[".inlineAddFields"][] = "created_at";
$tdatadistricts[".inlineAddFields"][] = "updated_at";

$tdatadistricts[".editFields"] = array();
$tdatadistricts[".editFields"][] = "region_id";
$tdatadistricts[".editFields"][] = "district_name";
$tdatadistricts[".editFields"][] = "created_at";
$tdatadistricts[".editFields"][] = "updated_at";

$tdatadistricts[".inlineEditFields"] = array();
$tdatadistricts[".inlineEditFields"][] = "region_id";
$tdatadistricts[".inlineEditFields"][] = "district_name";
$tdatadistricts[".inlineEditFields"][] = "created_at";
$tdatadistricts[".inlineEditFields"][] = "updated_at";

$tdatadistricts[".exportFields"] = array();
$tdatadistricts[".exportFields"][] = "district_id";
$tdatadistricts[".exportFields"][] = "region_id";
$tdatadistricts[".exportFields"][] = "district_name";
$tdatadistricts[".exportFields"][] = "created_at";
$tdatadistricts[".exportFields"][] = "updated_at";

$tdatadistricts[".importFields"] = array();
$tdatadistricts[".importFields"][] = "district_id";
$tdatadistricts[".importFields"][] = "region_id";
$tdatadistricts[".importFields"][] = "district_name";
$tdatadistricts[".importFields"][] = "created_at";
$tdatadistricts[".importFields"][] = "updated_at";

$tdatadistricts[".printFields"] = array();
$tdatadistricts[".printFields"][] = "district_id";
$tdatadistricts[".printFields"][] = "region_id";
$tdatadistricts[".printFields"][] = "district_name";
$tdatadistricts[".printFields"][] = "created_at";
$tdatadistricts[".printFields"][] = "updated_at";

//	district_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "district_id";
	$fdata["GoodName"] = "district_id";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","district_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatadistricts["district_id"] = $fdata;
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","region_id"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "regions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region_name";
	
		
	$edata["LookupOrderBy"] = "region_name";
	
		
			
		
				
	
	
		
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

	

	
	$tdatadistricts["region_id"] = $fdata;
//	district_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "district_name";
	$fdata["GoodName"] = "district_name";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","district_name"); 
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
	
		$fdata["strField"] = "district_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "district_name";
	
		
		
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

	

	
	$tdatadistricts["district_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","created_at"); 
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

	

	
	$tdatadistricts["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "districts";
	$fdata["Label"] = GetFieldLabel("districts","updated_at"); 
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

	

	
	$tdatadistricts["updated_at"] = $fdata;

	
$tables_data["districts"]=&$tdatadistricts;
$field_labels["districts"] = &$fieldLabelsdistricts;
$fieldToolTips["districts"] = &$fieldToolTipsdistricts;
$page_titles["districts"] = &$pageTitlesdistricts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["districts"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["districts"] = array();


	
				$strOriginalDetailsTable="regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
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
					$masterTablesData["districts"][0] = $masterParams;	
				$masterTablesData["districts"][0]["masterKeys"] = array();
	$masterTablesData["districts"][0]["masterKeys"][]="region_id";
				$masterTablesData["districts"][0]["detailKeys"] = array();
	$masterTablesData["districts"][0]["detailKeys"][]="region_id";
		
	
				$strOriginalDetailsTable="towns";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="towns";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "towns";
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
					$masterTablesData["districts"][1] = $masterParams;	
				$masterTablesData["districts"][1]["masterKeys"] = array();
	$masterTablesData["districts"][1]["masterKeys"][]="district_id";
				$masterTablesData["districts"][1]["detailKeys"] = array();
	$masterTablesData["districts"][1]["detailKeys"][]="district_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_districts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "district_id,  region_id,  district_name,  created_at,  updated_at";
$proto0["m_strFrom"] = "FROM districts";
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
	"m_strName" => "district_id",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto5["m_sql"] = "district_id";
$proto5["m_srcTableName"] = "districts";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto7["m_sql"] = "region_id";
$proto7["m_srcTableName"] = "districts";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "district_name",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto9["m_sql"] = "district_name";
$proto9["m_srcTableName"] = "districts";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto11["m_sql"] = "created_at";
$proto11["m_srcTableName"] = "districts";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "districts",
	"m_srcTableName" => "districts"
));

$proto13["m_sql"] = "updated_at";
$proto13["m_srcTableName"] = "districts";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "districts";
$proto16["m_srcTableName"] = "districts";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "district_id";
$proto16["m_columns"][] = "region_id";
$proto16["m_columns"][] = "district_name";
$proto16["m_columns"][] = "created_at";
$proto16["m_columns"][] = "updated_at";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "districts";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "districts";
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
$proto0["m_srcTableName"]="districts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_districts = createSqlQuery_districts();


	
					
	
$tdatadistricts[".sqlquery"] = $queryData_districts;

$tableEvents["districts"] = new eventsBase;
$tdatadistricts[".hasEvents"] = false;

?>