<?php
	define("PREPEND_PATH", "../");
	include(__DIR__ . "/../lib.php");
	include(__DIR__ . "/language-summary-reports.php");

	$x = new StdClass;
	$x->TableTitle = "Summary Reports";
	include_once(__DIR__ . "/../header.php");
	$user_data = getMemberInfo();
	$user_group = to_utf8(strtolower($user_data["group"]));
	?>

	<div class="page-header"><h1>
		<img src="summary_reports-logo-md.png" style="height: 1em; vertical-align: text-top;">
		Summary Reports
	</h1></div>
	
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="text-center text-bold" style="font-size: 1.5em; line-height: 2em;">Donations</div>
			</div>
			<div class="panel-body">
				<div class="panel-body-description">
					<div class="row">
													<div class ="col-xs-12 col-md-4 col-lg-4">
								<a href ="summary-reports-Donations-0.php"
								   class="btn btn-success all-groups btn-block btn-lg vspacer-lg summary-reports"
								   style="padding-top: 1em; padding-bottom: 1em;">
									<i class ="glyphicon glyphicon-th"></i> Donations								</a>
							</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		 
	<script>

		var user_group= <?php echo json_encode($user_group) ?>  ;

		$j(function(){ 
			$j( ".panel a" ).not('.'+user_group).not('.all-groups').parent().remove();
			$j('.panel').each(function(){
				if($j(this).find('a').length == 0){
					$j(this).remove();
				}
 
			}) 
		})

	</script>
	

<?php include_once(__DIR__ . "/../footer.php"); ?>