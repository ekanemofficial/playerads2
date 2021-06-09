<?php require_once('template-parts/header2.php');?>

	<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<?php require_once('template-parts/message-filter.php');?>

					<label style="position: fixed;bottom: 5%;left: 5%;font-size: 20px;cursor: pointer;"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" style="color: #fff;padding: 12.5px 15px;background:#255b88;border-radius: 50%;"></i></label>
				
				</div>


				<div class="col-xs-12 col-sm-12 col-md-6" style="margin-bottom: 10px;padding-top: 0px;">

					<?php require_once('template-parts/msg_theme.php');?>
					
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="margin-top: 50px;">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title" style="display: flex;align-items: center;padding: 0 0px;"><img src="img/team2.jpg" class="img-responsive img-circle" style="width: 40px;height: auto; margin-right: 15px;"> Sent Message</h5>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<!-- Inbox -->
<div id="msgInbox" class="modal fade" role="dialog" style="margin-top: 50px;">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<div class="" style="display: flex;align-items: center;padding: 0 0px;font-size: 12px;">
					<img src="img/team5.jpg" class="img-responsive img-circle" style="width: 40px;height: auto; margin-right: 15px;">
					<h5>Marie Sele</h5>
					
					<span class="pull-right" style="position: absolute;right: 5%;">5hrs Ago</span>
				</div>
			</div>
			<div class="modal-body">
				<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default account-btn"> <i class="fa fa-reply"></i> reply </button>
			</div>
		</div>
	</div>
</div>

<!-- Inbox -->
<div id="forward" class="modal fade" role="dialog" style="margin-top: 320px;margin-left: -15px;">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<div class="" style="display: flex;align-items: center;padding: 0 0px;font-size: 12px;">
					<img src="img/team5.jpg" class="img-responsive img-circle" style="width: 40px;height: auto; margin-right: 15px;">
					<h5>Forward Message</h5>
					
					<span class="pull-right" style="position: absolute;right: 5%;" id="cDate">
						<!-- <?php //echo date('Y:M:D');?> -->
					</span>
				</div>
			</div>
			<form method="post">
				<div class="modal-body">
					
					<div class="form-group">
						<input type="text" name="forward" class="form-control">
					</div>
					<div class="form-group">
						<textarea name="msgContent" class="form-control" placeholder="Enter Short Description" style="font-size: 12px;"><?=require_once('template-parts/text.php');?></textarea>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-default account-btn"> <i class="fa fa-reply"></i> reply </button>
				</div>
			</form>
		</div>
	</div>
</div>

