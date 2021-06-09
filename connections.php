<?php require_once('template-parts/header2.php');?>

	<?php require_once('template-parts/cover.php');?>




	<section id="top" class="" style="margin-bottom: 140px;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<?php require_once('template-parts/avatar.php');?>
					
				</div>


				<div class="col-xs-12 col-sm-12 col-md-6" style="margin-bottom: 5px;">
					<?php //require_once('template-parts/friends.php');?>

					<div class="row">
						<!-- connections goes here -->
						<?php require_once('template-parts/connectionslist.php');?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3" style="padding: 0 20px;">
					<?php require_once('template-parts/right-info.php');?>
					<?php require_once('template-parts/friends.php');?>
					<?php require_once('template-parts/connections.php');?>
					
				</div>

		</div>
	</section>





<?php require_once('template-parts/footer.php');?>
