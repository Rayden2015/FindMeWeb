<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajob_categories = array();	
	$tdatajob_categories[".truncateText"] = true;
	$tdatajob_categories[".NumberOfChars"] = 80; 
	$tdatajob_categories[".ShortName"] = "job_categories";
	$tdatajob_categories[".OwnerID"] = "";
	$tdatajob_categories[".OriginalTable"] = "job_categories";

//	field labels
$fieldLabelsjob_categories = array();
$fieldToolTipsjob_categories = array();
$pageTitlesjob_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob_categories["English"] = array();
	$fieldToolTipsjob_categories["English"] = array();
	$pageTitlesjob_categories["English"] = array();
	$fieldLabelsjob_categories["English"]["category_id"] = "Category Id";
	$fieldToolTipsjob_categories["English"]["category_id"] = "";
	$fieldLabelsjob_categories["English"]["category_name"] = "Category Name";
	$fieldToolTipsjob_categories["English"]["category_name"] = "";
	$fieldLabelsjob_categories["English"]["created_at"] = "Created At";
	$fieldToolTipsjob_categories["English"]["created_at"] = "";
	$fieldLabelsjob_categories["English"]["updated_at"] = "Updated At";
	$fieldToolTipsjob_categories["English"]["updated_at"] = "";
	if (count($fieldToolTipsjob_categories["English"]))
		$tdatajob_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjob_categories[""] = array();
	$fieldToolTipsjob_categories[""] = array();
	$pageTitlesjob_categories[""] = array();
	$fieldLabelsjob_categories[""]["category_id"] = "Category Id";
	$fieldToolTipsjob_categories[""]["category_id"] = "";
	$fieldLabelsjob_categories[""]["category_name"] = "Category Name";
	$fieldToolTipsjob_categories[""]["category_name"] = "";
	$fieldLabelsjob_categories[""]["created_at"] = "Created At";
	$fieldToolTipsjob_categories[""]["created_at"] = "";
	$fieldLabelsjob_categories[""]["updated_at"] = "Updated At";
	$fieldToolTipsjob_categories[""]["updated_at"] = "";
	if (count($fieldToolTipsjob_categories[""]))
		$tdatajob_categories[".isUseToolTips"] = true;
}
	
	
	$tdatajob_categories[".NCSearch"] = true;



$tdatajob_categories[".shortTableName"] = "job_categories";
$tdatajob_categories[".nSecOptions"] = 0;
$tdatajob_categories[".recsPerRowList"] = 1;
$tdatajob_categories[".mainTableOwnerID"] = "";
$tdatajob_categories[".moveNext"] = 1;
$tdatajob_categories[".nType"] = 0;

$tdatajob_categories[".strOriginalTableName"] = "job_categories";




$tdatajob_categories[".showAddInPopup"] = false;

$tdatajob_categories[".showEditInPopup"] = false;

$tdatajob_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajob_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajob_categories[".fieldsForRegister"] = array();

$tdatajob_categories[".listAjax"] = false;

	$tdatajob_categories[".audit"] = true;

	$tdatajob_categories[".locking"] = false;

$tdatajob_categories[".edit"] = true;

$tdatajob_categories[".list"] = true;

$tdatajob_categories[".inlineEdit"] = true;
$tdatajob_categories[".inlineAdd"] = true;
$tdatajob_categories[".view"] = true;

$tdatajob_categories[".import"] = true;

$tdatajob_categories[".exportTo"] = true;

$tdatajob_categories[".printFriendly"] = true;

$tdatajob_categories[".delete"] = true;

$tdatajob_categories[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajob_categories[".searchSaving"] = false;
//

$tdatajob_categories[".showSearchPanel"] = true;
		$tdatajob_categories[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajob_categories[".isUseAjaxSuggest"] = false;
else 
	$tdatajob_categories[".isUseAjaxSuggest"] = true;

$tdatajob_categories[".rowHighlite"] = true;



$tdatajob_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob_categories[".isUseTimeForSearch"] = false;





$tdatajob_categories[".allSearchFields"] = array();
$tdatajob_categories[".filterFields"] = array();
$tdatajob_categories[".requiredSearchFields"] = array();

$tdatajob_categories[".allSearchFields"][] = "category_id";
	$tdatajob_categories[".allSearchFields"][] = "category_name";
	$tdatajob_categories[".allSearchFields"][] = "created_at";
	$tdatajob_categories[".allSearchFields"][] = "updated_at";
	

$tdatajob_categories[".googleLikeFields"] = array();
$tdatajob_categories[".googleLikeFields"][] = "category_id";
$tdatajob_categories[".googleLikeFields"][] = "category_name";
$tdatajob_categories[".googleLikeFields"][] = "created_at";
$tdatajob_categories[".googleLikeFields"][] = "updated_at";


$tdatajob_categories[".advSearchFields"] = array();
$tdatajob_categories[".advSearchFields"][] = "category_id";
$tdatajob_categories[".advSearchFields"][] = "category_name";
$tdatajob_categories[".advSearchFields"][] = "created_at";
$tdatajob_categories[".advSearchFields"][] = "updated_at";

$tdatajob_categories[".tableType"] = "list";

$tdatajob_categories[".printerPageOrientation"] = 0;
$tdatajob_categories[".nPrinterPageScale"] = 100;

$tdatajob_categories[".nPrinterSplitRecords"] = 40;

$tdatajob_categories[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatajob_categories[".pageSize"] = 20;

$tdatajob_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajob_categories[".strOrderBy"] = $tstrOrderBy;

$tdatajob_categories[".orderindexes"] = array();

$tdatajob_categories[".sqlHead"] = "SELECT category_id,   category_name,   created_at,   updated_at";
$tdatajob_categories[".sqlFrom"] = "FROM job_categories";
$tdatajob_categories[".sqlWhereExpr"] = "";
$tdatajob_categories[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatajob_categories[".highlightSearchResults"] = true;

$tableKeysjob_categories = array();
$tableKeysjob_categories[] = "category_id";
$tdatajob_categories[".Keys"] = $tableKeysjob_categories;

$tdatajob_categories[".listFields"] = array();
$tdatajob_categories[".listFields"][] = "category_id";
$tdatajob_categories[".listFields"][] = "category_name";
$tdatajob_categories[".listFields"][] = "created_at";
$tdatajob_categories[".listFields"][] = "updated_at";

$tdatajob_categories[".hideMobileList"] = array();


$tdatajob_categories[".viewFields"] = array();
$tdatajob_categories[".viewFields"][] = "category_id";
$tdatajob_categories[".viewFields"][] = "category_name";
$tdatajob_categories[".viewFields"][] = "created_at";
$tdatajob_categories[".viewFields"][] = "updated_at";

$tdatajob_categories[".addFields"] = array();
$tdatajob_categories[".addFields"][] = "category_name";
$tdatajob_categories[".addFields"][] = "created_at";
$tdatajob_categories[".addFields"][] = "updated_at";

$tdatajob_categories[".inlineAddFields"] = array();
$tdatajob_categories[".inlineAddFields"][] = "category_name";
$tdatajob_categories[".inlineAddFields"][] = "created_at";
$tdatajob_categories[".inlineAddFields"][] = "updated_at";

$tdatajob_categories[".editFields"] = array();
$tdatajob_categories[".editFields"][] = "category_name";
$tdatajob_categories[".editFields"][] = "created_at";
$tdatajob_categories[".editFields"][] = "updated_at";

$tdatajob_categories[".inlineEditFields"] = array();
$tdatajob_categories[".inlineEditFields"][] = "category_name";
$tdatajob_categories[".inlineEditFields"][] = "created_at";
$tdatajob_categories[".inlineEditFields"][] = "updated_at";

$tdatajob_categories[".exportFields"] = array();
$tdatajob_categories[".exportFields"][] = "category_id";
$tdatajob_categories[".exportFields"][] = "category_name";
$tdatajob_categories[".exportFields"][] = "created_at";
$tdatajob_categories[".exportFields"][] = "updated_at";

$tdatajob_categories[".importFields"] = array();
$tdatajob_categories[".importFields"][] = "category_id";
$tdatajob_categories[".importFields"][] = "category_name";
$tdatajob_categories[".importFields"][] = "created_at";
$tdatajob_categories[".importFields"][] = "updated_at";

$tdatajob_categories[".printFields"] = array();
$tdatajob_categories[".printFields"][] = "category_id";
$tdatajob_categories[".printFields"][] = "category_name";
$tdatajob_categories[".printFields"][] = "created_at";
$tdatajob_categories[".printFields"][] = "updated_at";

//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "job_categories";
	$fdata["Label"] = GetFieldLabel("job_categories","category_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatajob_categories["category_id"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "job_categories";
	$fdata["Label"] = GetFieldLabel("job_categories","category_name"); 
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
	
		$fdata["strField"] = "category_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_name";
	
		
		
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

	

	
	$tdatajob_categories["category_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "job_categories";
	$fdata["Label"] = GetFieldLabel("job_categories","created_at"); 
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

	

	
	$tdatajob_categories["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "job_categories";
	$fdata["Label"] = GetFieldLabel("job_categories","updated_at"); 
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

	

	
	$tdatajob_categories["updated_at"] = $fdata;

	
$tables_data["job_categories"]=&$tdatajob_categories;
$field_labels["job_categories"] = &$fieldLabelsjob_categories;
$fieldToolTips["job_categories"] = &$fieldToolTipsjob_categories;
$page_titles["job_categories"] = &$pageTitlesjob_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["job_categories"] = array();
//	find_me_jobs
	
	

		$dIndex = 0;
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
			
	$detailsTablesData["job_categories"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["job_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["job_categories"][$dIndex]["masterKeys"][]="category_id";

				$detailsTablesData["job_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["job_categories"][$dIndex]["detailKeys"][]="category_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["job_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_job_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "category_id,   category_name,   created_at,   updated_at";
$proto0["m_strFrom"] = "FROM job_categories";
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
	"m_strName" => "category_id",
	"m_strTable" => "job_categories",
	"m_srcTableName" => "job_categories"
));

$proto5["m_sql"] = "category_id";
$proto5["m_srcTableName"] = "job_categories";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "job_categories",
	"m_srcTableName" => "job_categories"
));

$proto7["m_sql"] = "category_name";
$proto7["m_srcTableName"] = "job_categories";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "job_categories",
	"m_srcTableName" => "job_categories"
));

$proto9["m_sql"] = "created_at";
$proto9["m_srcTableName"] = "job_categories";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "job_categories",
	"m_srcTableName" => "job_categories"
));

$proto11["m_sql"] = "updated_at";
$proto11["m_srcTableName"] = "job_categories";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "job_categories";
$proto14["m_srcTableName"] = "job_categories";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "category_id";
$proto14["m_columns"][] = "category_name";
$proto14["m_columns"][] = "created_at";
$proto14["m_columns"][] = "updated_at";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "job_categories";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "job_categories";
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
$proto0["m_srcTableName"]="job_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job_categories = createSqlQuery_job_categories();


	
				
	
$tdatajob_categories[".sqlquery"] = $queryData_job_categories;

$tableEvents["job_categories"] = new eventsBase;
$tdatajob_categories[".hasEvents"] = false;

?>