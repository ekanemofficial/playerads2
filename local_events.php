<?php require_once('template-parts/header2.php');?>

<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<!-- end of cover -->

		<div class="container">
			<div class="row" style="border:0px solid #ccc">
				<div class="col-xs-12 col-sm-12 col-md-3" style="border:0px solid #ff0;">
					<!-- filter trials and market -->
					<?php require_once('template-parts/filter.php');?>


					<?php require('template-parts/v_ads.php');?>
					<?php require('template-parts/mrk_stats.php');?>
					
				</div>

				<div class="col-xs-12 col-sm-12 col-md-9" style="border:0px solid #333;padding: 0;">
					
					<?php include_once('template-parts/market_theme.php');?>

				</div>
			</div>
		</div>
		<!-- content ends here -->
	</section>

<?php require_once('template-parts/footer.php');?>

