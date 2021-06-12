<?php require_once('template-parts/header2.php');?>

<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<!-- end of cover -->

		<div class="container">
			<div class="row" style="border:0px solid #ccc">
				<div class="col-xs-12 col-sm-12 col-md-3" style="border:0px solid #ff0;">
					<!-- filter trials and market -->
					<?php require_once('template-parts/filter.php');?>

					<!-- <div class="ads" style="margin-top: -23px;margin-bottom: 10px;">
						<h5><i class="fa fa-ads"></i> SPONSORED</h5>
						<a href="#"><img src="img/ads.jpg" class="img-responsive"></a>
					</div> -->
						

					<div class="panel panel-default my-market-stats" style="">
						<div class="panel-heading" style="background: #fff;padding: 0 10px;border: 0 !important;outline: 0">
							<h5 style="font-size: 12px;"> SPONSORED </h5>
						</div>
						<div class="panel-body" style="padding: 0">
							<a href="#"><img src="img/ads.jpg" class="img-responsive"></a>
						</div>
					</div>
				
						
						

					<div class="panel panel-default my-market-stats" style="margin-top: 30px;">
						<div class="panel-heading">
							<h5>MARKET STATS </h5>
						</div>
						<div class="panel-body">
							<p> FOOTBALL TRIALS  <span class="badge badge-info"> 245 </span></p>
							<p> PLAYER PURCHASE <span class="badge badge-info"> 115 </span></p>
							<p> PLAYER OFFERED <span class="badge badge-primary"> 545 </span></p>
						</div>
						<div class="panel-footer">
							<p> TOTAL MARKET <span class="badge badge-info"> 905 </span></p>
						</div>
					</div>
					
				</div>

				<div class="col-xs-12 col-sm-12 col-md-9" style="border:0px solid #333;padding: 0;">
					
					<?php include_once('template-parts/market_theme.php');?>

				</div>
			</div>
		</div>
		<!-- content ends here -->
	</section>

<?php require_once('template-parts/footer.php');?>

