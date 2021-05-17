<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
<?php include_once("{$currDir}/header.php"); ?>
<?php @include("{$currDir}/hooks/links-home.php"); ?>

<?php
	/*
		Classes of first and other blocks
		---------------------------------
		For possible classes, refer to the Bootstrap grid columns, panels and buttons documentation:
			Grid columns: http://getbootstrap.com/css/#grid
			Panels: http://getbootstrap.com/components/#panels
			Buttons: http://getbootstrap.com/css/#buttons
	*/
	$block_classes = array(
		'first' => array(
			'grid_column' => 'col-sm-12 col-md-8 col-lg-6',
			'panel' => 'panel-warning',
			'link' => 'btn-warning'
		),
		'other' => array(
			'grid_column' => 'col-sm-6 col-md-4 col-lg-3',
			'panel' => 'panel-info',
			'link' => 'btn-info'
		)
	);
?>

<style>
	.panel-body-description{
		margin-top: 10px;
		height: 100px;
		overflow: auto;
	}
	.panel-body .btn img{
		margin: 0 10px;
		max-height: 32px;
	}
</style>


<?php
	/* accessible tables */
	$arrTables = getTableList();
	if(is_array($arrTables) && count($arrTables)){
		/* how many table groups do we have? */
		$groups = get_table_groups();
		$multiple_groups = (count($groups) > 1 ? true : false);

		/* construct $tg: table list grouped by table group */
		$tg = array();
		if(count($groups)){
			foreach($groups as $grp => $tables){
				foreach($tables as $tn){
					$tg[$tn] = $grp;
				}
			}
		}

		$i = 0; $current_group = '';
		foreach($tg as $tn => $tgroup){
			$tc = $arrTables[$tn];
			/* is the current table filter-first? */
			$tChkFF = array_search($tn, array());
			/* hide current table in homepage? */
			$tChkHL = array_search($tn, array('medical_records'));
			/* allow homepage 'add new' for current table? */
			$tChkAHAN = array_search($tn, array());

			$t_perm = getTablePermissions($tn);
			$can_insert = $t_perm['insert'];

			$searchFirst = (($tChkFF !== false && $tChkFF !== null) ? '?Filter_x=1' : '');
			?>
				<?php if(!$i && !$multiple_groups){ /* no grouping, begin row */ ?>

					<div class="row table_links">
				<?php } ?>
				<?php if($multiple_groups && $current_group != $tgroup){ /* grouping, begin group & row */ ?>
					<?php if($current_group != ''){ /* not first group, so we should first end previous group */ ?>

							</div><!-- /.table_links -->
							<div class="row custom_links">
								<?php
									/* custom home links for current group, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other'], $current_group);
								?>
							</div>
						</div><!-- /.collapse -->
					<?php } ?>
					<?php $current_group = $tgroup; ?>

					<a class="btn btn-primary btn-block btn-lg collapser vspacer-lg" data-toggle="collapse" href="#group-<?php echo md5($tgroup); ?>"><?php echo $tgroup; ?> <i class="glyphicon glyphicon-chevron-right"></i></a>
					<div class="collapse" id="group-<?php echo md5($tgroup); ?>">
						<div class="row table_links">
				<?php } ?>

					<?php if($tChkHL === false || $tChkHL === null){ /* if table is not set as hidden in homepage */ ?>
						<div id="<?php echo $tn; ?>-tile" class="<?php echo (!$i ? $block_classes['first']['grid_column'] : $block_classes['other']['grid_column']); ?>">
							<div class="panel <?php echo (!$i ? $block_classes['first']['panel'] : $block_classes['other']['panel']); ?>">
								<div class="panel-body">
									<?php if($can_insert && $tChkAHAN !== false && $tChkAHAN !== null){ ?>

										<div class="btn-group" style="width: 100%;">
										   <a style="width: 85%;" class="btn btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo preg_replace("/&amp;(#[0-9]+|[a-z]+);/i", "&$1;", html_attr(strip_tags($tc[1]))); ?>" href="<?php echo $tn; ?>_view.php<?php echo $searchFirst; ?>"><?php echo ($tc[2] ? '<img src="' . $tc[2] . '">' : '');?><strong><?php echo $tc[0]; ?></strong></a>
										   <a id="<?php echo $tn; ?>_add_new" style="width: 15%;" class="btn btn-add-new btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo html_attr($Translation['Add New']); ?>" href="<?php echo $tn; ?>_view.php?addNew_x=1"><i style="vertical-align: bottom;" class="glyphicon glyphicon-plus"></i></a>
										</div>
									<?php }else{ ?>

										<a class="btn btn-block btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo preg_replace("/&amp;(#[0-9]+|[a-z]+);/i", "&$1;", html_attr(strip_tags($tc[1]))); ?>" href="<?php echo $tn; ?>_view.php<?php echo $searchFirst; ?>"><?php echo ($tc[2] ? '<img src="' . $tc[2] . '">' : '');?><strong><?php echo $tc[0]; ?></strong></a>
									<?php } ?>

									<div class="panel-body-description"><?php echo $tc[1]; ?></div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php if($i == (count($arrTables) - 1) && !$multiple_groups){ /* no grouping, end row */ ?>

					</div> <!-- /.table_links -->

					<div class="row custom_links" id="custom_links">
						<?php
							/* custom home links, as defined in "hooks/links-home.php" */
							echo get_home_links($homeLinks, $block_classes['other'], '*');
						?>
					</div>

				<?php } ?>
				<?php if($i == (count($arrTables) - 1) && $multiple_groups){ /* grouping, end last group & row */ ?>

							</div> <!-- /.table_links -->
							<div class="row custom_links" id="custom_links">
								<?php
									/* custom home links for last table group, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other'], $tgroup);

									/* custom home links having no table groups, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other']);
								?>
							</div>
						</div><!-- /.collapse -->
				<?php } ?>
			<?php
			$i++;
		}
	}else{
		?><script>window.location='index.php?signIn=1';</script><?php
	}
?>

<script>
	$j(function(){
		var table_descriptions_exist = false;
		$j('div[id$="-tile"] .panel-body-description').each(function(){
			if($j.trim($j(this).html()).length) table_descriptions_exist = true;
		});

		if(!table_descriptions_exist){
			$j('div[id$="-tile"] .panel-body-description').css({height: 'auto'});
		}

		$j('.panel-body .btn').height(32);

		$j('.btn-add-new').click(function(){
			var tn = $j(this).attr('id').replace(/_add_new$/, '');
			modal_window({
				url: tn + '_view.php?addNew_x=1&Embedded=1',
				size: 'full',
				title: $j(this).prev().text() + ": <?php echo html_attr($Translation['Add New']); ?>" 
			});
			return false;
		});

		/* adjust arrow directions on opening/closing groups, and initially open first group */
		$j('.collapser').click(function(){
			$j(this).children('.glyphicon').toggleClass('glyphicon-chevron-right glyphicon-chevron-down');
		});

		/* hide empty table groups */
		$j('.collapser').each(function(){
			var target = $j(this).attr('href');
			if(!$j(target + " .row div").length) $j(this).hide();
		});
		$j('.collapser:visible').eq(0).click();
	});
</script>
<html>
  <head>
    <title>Cómo abrir una nueva pestaña con Java Script</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="card text-center">
    <div class="card-header">
    <div class="card-body">    
<div class="p-1 mb-1 bg-secondary text-white h4"   align="center">Interacción con el paciente</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
  <button type="button" id="open" class="btn btn-primary">&nbsp&nbsp&nbsp&nbsp&nbsp Videoconferencia principal &nbsp&nbsp&nbsp&nbsp&nbsp </button>
  <button type="button" id="open1" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp Cámara lateral &nbsp&nbsp&nbsp&nbsp&nbsp </button>
  <button type="button" id="open2" class="btn btn-primary">&nbsp&nbsp&nbsp&nbsp&nbsp Sensorización &nbsp&nbsp&nbsp&nbsp&nbsp</button>
  <button type="button" id="open3" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp Manual para el uso de la página &nbsp&nbsp&nbsp&nbsp&nbsp</button>
	</div>
	</div>
	<div class="row">
    <div class="col-sm">
	<p> </p>
	<p> </p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
    <script>

      function abrirNuevoTab(url) {
        // Abrir nuevo tab
        var win = window.open(url, '_blank');
        // Cambiar el foco al nuevo tab (punto opcional)
        win.focus();
      }
      $('#open').click(function(){
        abrirNuevoTab('https://meet.jit.si/Teleconsultorio')
      })
    </script>
	    <script>

function abrirNuevoTab1(url) {
  // Abrir nuevo tab
  var win = window.open(url, '_blank');
  // Cambiar el foco al nuevo tab (punto opcional)
  win.focus();
}
$('#open1').click(function(){
  abrirNuevoTab1('https://videocamarafrontal.herokuapp.com/ver.html')
})
</script>

<script>

function abrirNuevoTab2(url) {
  // Abrir nuevo tab
  var win = window.open(url, '_blank');
  // Cambiar el foco al nuevo tab (punto opcional)
  win.focus();
}
$('#open2').click(function(){
  abrirNuevoTab2('/sensores/seleccion.php')
})
</script>

<script>

function abrirNuevoTab3(url) {
  // Abrir nuevo tab
  var win = window.open(url, '_blank');
  // Cambiar el foco al nuevo tab (punto opcional)
  win.focus();
}
$('#open3').click(function(){
  abrirNuevoTab3('manual.php')
})
</script>
  </body>
</html>

<?php include_once("$currDir/footer.php"); ?>
