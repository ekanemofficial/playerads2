<?php require_once('template-parts/header2.php');?>

	<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<?php require_once('template-parts/avatar.php');?>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-6" style="margin-bottom: 10px;">

					<div class="row" style="padding-top: 0;border:0px solid red">
						
						<div class="col-md-12">
							<div class="manage_market"  style="border: 0px solid #4285f4;padding: 10px;">
								<h5 style="color: #f6f6f6">MY MARKET</h5>
								<p style="color: #888;font-size: 12px;">Sorry, You have not created a Market yet...</p>

								<a href="create_market.php" class="btn btn-black" style="border: 1px solid #4285f4;"> 
									<i class="fa fa-plus"></i> 
									Create Market 
								</a>
							</div>
						</div>
					</div>

										
				</div>


				<div class="col-xs-12 col-sm-12 col-md-3" style="padding: 0 20px;">
					<?php require_once('template-parts/right-info.php');?>
					<?php require_once('template-parts/friends.php');?>
					<?php require_once('template-parts/connections.php');?>
					
					
				</div>
			</div>
		</div>
	</section>







<?php require_once('template-parts/footer.php');?>
