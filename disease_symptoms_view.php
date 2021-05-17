<?php
// This script and data application were generated by AppGini 5.62
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/disease_symptoms.php");
	include("$currDir/disease_symptoms_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('disease_symptoms');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "disease_symptoms";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`disease_symptoms`.`id`" => "id",
		"`disease_symptoms`.`disease`" => "disease",
		"`disease_symptoms`.`symptoms`" => "symptoms",
		"`disease_symptoms`.`reference`" => "reference"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`disease_symptoms`.`id`',
		2 => 2,
		3 => 3,
		4 => 4
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`disease_symptoms`.`id`" => "id",
		"`disease_symptoms`.`disease`" => "disease",
		"`disease_symptoms`.`symptoms`" => "symptoms",
		"`disease_symptoms`.`reference`" => "reference"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`disease_symptoms`.`id`" => "ID",
		"`disease_symptoms`.`disease`" => "Medicamento*",
		"`disease_symptoms`.`symptoms`" => "Posología",
		"`disease_symptoms`.`reference`" => "Intrucciones Paciente"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`disease_symptoms`.`id`" => "id",
		"`disease_symptoms`.`disease`" => "disease",
		"`disease_symptoms`.`symptoms`" => "symptoms",
		"`disease_symptoms`.`reference`" => "reference"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`disease_symptoms` ";
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
	$x->RecordsPerPage = 20;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "disease_symptoms_view.php";
	$x->RedirectAfterInsert = "disease_symptoms_view.php?SelectedID=#ID#";
	$x->TableTitle = "Recetario médico";
	$x->TableIcon = "resources/table_icons/health.png";
	$x->PrimaryKey = "`disease_symptoms`.`id`";
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth   = array(  150, 300, 150);
	$x->ColCaption = array("Medicamento", "Posología", "Instrucciones Paciente");
	$x->ColFieldName = array('disease', 'symptoms', 'reference');
	$x->ColNumber  = array(2, 3, 4);

	// template paths below are based on the app main directory
	$x->Template = 'templates/disease_symptoms_templateTV.html';
	$x->SelectedTemplate = 'templates/disease_symptoms_templateTVS.html';
	$x->TemplateDV = 'templates/disease_symptoms_templateDV.html';
	$x->TemplateDVP = 'templates/disease_symptoms_templateDVP.html';

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
		$x->QueryWhere="where `disease_symptoms`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='disease_symptoms' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `disease_symptoms`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='disease_symptoms' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`disease_symptoms`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: disease_symptoms_init
	$render=TRUE;
	if(function_exists('disease_symptoms_init')){
		$args=array();
		$render=disease_symptoms_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: disease_symptoms_header
	$headerCode='';
	if(function_exists('disease_symptoms_header')){
		$args=array();
		$headerCode=disease_symptoms_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: disease_symptoms_footer
	$footerCode='';
	if(function_exists('disease_symptoms_footer')){
		$args=array();
		$footerCode=disease_symptoms_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>