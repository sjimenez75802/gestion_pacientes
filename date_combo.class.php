<?php if(!defined('datalist_date_separator')) die('datalist.php not included!');

class DateCombo{
	// renders a date combo with a pre-selected date

	var $DateFormat,          // any combination of y,m,d
		$DefaultDate,         // format: yyyy-mm-dd
		$MinYear,
		$MaxYear,
		$MonthNames,
		$Comment,
		$NamePrefix,          // will be used in the HTML name prop as a prefix to "Year", "Month", "Day"
		$CSSOptionClass,
		$CSSSelectedClass,
		$CSSCommentClass;

	function __construct(){  // PHP 7 compatibility
		$this->DateCombo();
	}

	function DateCombo(){
		// set default values
		$this->DateFormat = "ymd";
		$this->DefaultDate = '';
		$this->MinYear = 1900;
		$this->MaxYear = 2100;
		$this->MonthNames = "Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre";
		$this->Comment = "<empty>";
		$this->NamePrefix = "Date";

		$this->CSSOptionClass = 'form-control';
		$this->CSSSelectedClass = 'active';
		$this->CSSCommentClass = '';
	}

	function GetHTML($readOnly=false){
		list($xy, $xm, $xd)=explode('-', $this->DefaultDate);

		//$y : render years combo
		$years = new Combo;
		for($i=$this->MinYear; $i<=$this->MaxYear; $i++){
			$years->ListItem[] = $i;
			$years->ListData[] = $i;
		}
		$years->SelectName = $this->NamePrefix . 'Year';
		$years->SelectID = $this->NamePrefix;
		$years->SelectedData = $xy;
		$years->Class = "{$this->CSSOptionClass} split-date";
		$years->SelectedClass = $this->CSSSelectedClass;
		$years->ApplySelect2 = false;
		$years->Render();
		$y = ($readOnly ? substr($this->DefaultDate, 0, 4) : $years->HTML);

		//$m : render months combo
		$months = new Combo;
		for($i=1; $i<=12; $i++){
			$months->ListData[] = $i;
		}
		$months->ListItem = explode(",", $this->MonthNames);
		$months->SelectName = $this->NamePrefix . 'Month';
		$months->SelectID = $this->NamePrefix . '-mm';
		$months->SelectedData = intval($xm);
		$months->Class = $this->CSSOptionClass;
		$months->SelectedClass = $this->CSSSelectedClass;
		$months->ApplySelect2 = false;
		$months->Render();
		$m = ($readOnly ? $xm : $months->HTML);

		//$d : render days combo
		$days = new Combo;
		for($i=1; $i<=31; $i++){
			$days->ListItem[] = $i;
			$days->ListData[] = $i;
		}
		$days->SelectName = $this->NamePrefix . 'Day';
		$days->SelectID = $this->NamePrefix . '-dd';
		$days->SelectedData = intval($xd);
		$days->Class = $this->CSSOptionClass;
		$days->SelectedClass = $this->CSSSelectedClass;
		$days->ApplySelect2 = false;
		$days->Render();
		$d = ($readOnly ? $xd : $days->HTML);

		$df = $this->DateFormat; // contains date order 'myd', 'dmy' ... etc

		$read_only_date = ${$df[0]} . datalist_date_separator . ${$df[1]} . datalist_date_separator . ${$df[2]};
		if($read_only_date == datalist_date_separator.datalist_date_separator) $read_only_date = '';
		//$read_only_date = '<p class="form-control-static">' . $read_only_date . '</p>';

		$editable_date = '<div class="row">';
		for($i = 0; $i < 3; $i++){
			switch($df[$i]){
				case 'd':
					$editable_date .= '<div class="col-xs-3 date_combo">' . $d . '</div>';
					break;
				case 'm':
					$editable_date .= '<div class="col-xs-4 date_combo">' . $m . '</div>';
					break;
				case 'y':
					$editable_date .= '<div class="col-xs-3 date_combo">' . $y . '</div>';
					break;
			}
			if($i == 2) $editable_date .= '<div class="col-xs-2"><button class="btn btn-default" id="fd-but-' . $this->NamePrefix . '"><i class="glyphicon glyphicon-th"></i></button></div>'; 
		}
		$editable_date .= '</div>';

		return ($readOnly ? $read_only_date : $editable_date);
	}
}
