<?php
// This script and data application were generated by AppGini 5.62
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/medical_records.php");
	include("$currDir/medical_records_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('medical_records');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "medical_records";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`medical_records`.`id`" => "id",
		"IF(    CHAR_LENGTH(`patients1`.`last_name`) || CHAR_LENGTH(`patients1`.`first_name`), CONCAT_WS('',   `patients1`.`last_name`, ',', `patients1`.`first_name`), '') /* Patient */" => "patient",
		"`medical_records`.`image_1`" => "image_1",
		"`medical_records`.`image_2`" => "image_2",
		"`medical_records`.`image_3`" => "image_3",
		"`medical_records`.`image_4`" => "image_4",
		"`medical_records`.`image_5`" => "image_5",
		"`medical_records`.`document_1`" => "document_1",
		"`medical_records`.`document_2`" => "document_2",
		"`medical_records`.`document_3`" => "document_3",
		"`medical_records`.`document_4`" => "document_4",
		"`medical_records`.`document_5`" => "document_5",
		"`medical_records`.`description`" => "description"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`medical_records`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`medical_records`.`id`" => "id",
		"IF(    CHAR_LENGTH(`patients1`.`last_name`) || CHAR_LENGTH(`patients1`.`first_name`), CONCAT_WS('',   `patients1`.`last_name`, ',', `patients1`.`first_name`), '') /* Patient */" => "patient",
		"`medical_records`.`image_1`" => "image_1",
		"`medical_records`.`image_2`" => "image_2",
		"`medical_records`.`image_3`" => "image_3",
		"`medical_records`.`image_4`" => "image_4",
		"`medical_records`.`image_5`" => "image_5",
		"`medical_records`.`document_1`" => "document_1",
		"`medical_records`.`document_2`" => "document_2",
		"`medical_records`.`document_3`" => "document_3",
		"`medical_records`.`document_4`" => "document_4",
		"`medical_records`.`document_5`" => "document_5",
		"`medical_records`.`description`" => "description"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`medical_records`.`id`" => "ID",
		"IF(    CHAR_LENGTH(`patients1`.`last_name`) || CHAR_LENGTH(`patients1`.`first_name`), CONCAT_WS('',   `patients1`.`last_name`, ',', `patients1`.`first_name`), '') /* Patient */" => "Patient",
		"`medical_records`.`document_1`" => "Documento 1",
		"`medical_records`.`document_2`" => "Documento 2",
		"`medical_records`.`document_3`" => "Documento 3",
		"`medical_records`.`document_4`" => "Documento 4",
		"`medical_records`.`document_5`" => "Documento 5",
		"`medical_records`.`description`" => "Descripción"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`medical_records`.`id`" => "id",
		"IF(    CHAR_LENGTH(`patients1`.`last_name`) || CHAR_LENGTH(`patients1`.`first_name`), CONCAT_WS('',   `patients1`.`last_name`, ',', `patients1`.`first_name`), '') /* Patient */" => "patient",
		"`medical_records`.`document_1`" => "document_1",
		"`medical_records`.`document_2`" => "document_2",
		"`medical_records`.`document_3`" => "document_3",
		"`medical_records`.`document_4`" => "document_4",
		"`medical_records`.`document_5`" => "document_5",
		"`medical_records`.`description`" => "description"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array(  'patient' => 'Patient');

	$x->QueryFrom = "`medical_records` LEFT JOIN `patients` as patients1 ON `patients1`.`id`=`medical_records`.`patient` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = false;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 0;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "medical_records_view.php";
	$x->RedirectAfterInsert = "medical_records_view.php?SelectedID=#ID#";
	$x->TableTitle = "Historial médico";
	$x->TableIcon = "resources/table_icons/cash_terminal.png";
	$x->PrimaryKey = "`medical_records`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150);
	$x->ColCaption = array("Paciente", "Imagen 1", "Imagen 2", "Imagen 3", "Imagen 4", "Imagen 5", "Documento 1", "Documento 2", "Documento 3", "Documento 4", "Documento 5", "Descripción");
	$x->ColFieldName = array('patient', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'document_1', 'document_2', 'document_3', 'document_4', 'document_5', 'description');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);

	// template paths below are based on the app main directory
	$x->Template = 'templates/medical_records_templateTV.html';
	$x->SelectedTemplate = 'templates/medical_records_templateTVS.html';
	$x->TemplateDV = 'templates/medical_records_templateDV.html';
	$x->TemplateDVP = 'templates/medical_records_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `medical_records`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='medical_records' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `medical_records`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='medical_records' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`medical_records`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: medical_records_init
	$render=TRUE;
	if(function_exists('medical_records_init')){
		$args=array();
		$render=medical_records_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: medical_records_header
	$headerCode='';
	if(function_exists('medical_records_header')){
		$args=array();
		$headerCode=medical_records_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: medical_records_footer
	$footerCode='';
	if(function_exists('medical_records_footer')){
		$args=array();
		$footerCode=medical_records_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>