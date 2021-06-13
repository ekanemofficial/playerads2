<?php require_once('template-parts/header2.php');?>

	<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<?php require_once('template-parts/avatar.php');?>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-6 clearfix" style="margin-bottom: 10px;">
					<?php require_once('template-parts/top-info.php');?>
					<?php require('template-parts/h_ads.php');?>

					<h5>Career Information</h5>
					
					<?php require('template-parts/career_info.php');?>

					<?php require('template-parts/h_ads.php');?>

					<h5>Career Experience</h5>
					<?php require('template-parts/career_theme.php');?>
					<a href="career.php" class="btn btn-default account-btn pull-right" style="display: block">View More...</a>
					<br><br>

					<?php require('template-parts/h_ads.php');?>
					
				</div>


				<div class="col-xs-12 col-sm-12 col-md-3" style="padding: 0 20px;">
					<?php require_once('template-parts/right-sidebar.php');?>
					
					
				</div>
			</div>
		</div>
	</section>






<?php require_once('template-parts/footer.php');?>
