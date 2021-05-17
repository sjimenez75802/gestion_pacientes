<?php

$script_name = basename($_SERVER['PHP_SELF']); // the url without the path
if ($script_name == 'index.php' && isset($_GET['signIn'])) {
	//echo "the form of loggin";
	?>
<script src="resources/jquery/js/jquery.background-fit.min.js"></script>
	<style>
		body{
			//background: url("images/seis.jpg") no-repeat fixed center center / cover;
			background-image:  url("images/seis.jpg");
			background-position-y: center;
			background-repeat: no-repeat;
            background-size: cover;
		 

		}

	</style>


	<script>
		$j(function() {
  $j("body").bg_fit();
});
	</script>

<?php }
?>