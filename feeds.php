<?php require_once('template-parts/header2.php');?>

	<?php require_once('template-parts/cover.php');?>


	<section id="top" class="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<?php require_once('template-parts/avatar.php');?>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-6" style="margin-bottom: 10px;">
					<?php require_once('template-parts/feed_theme.php');?>
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

<script type="text/javascript">

// document.getElementById("commentBtn").addEventListener("click", displayDate);

	var commentBtn = document.querySelector('commentBtn');
	commentBtn.click(function(){
		alert('clicked');
	});


	// $(".panel-footer-x").hide();

	// $(".commentBtn").click(function(){
	// 	$(".panel-footer-x").hide(function(){
	// 	    $(this).slideToggle();			
	// 	});

	// });



</script>

<form method="post" enctype="multipart/form-data" style="position: absolute;left: -2000px">
	<input type="file" id="upload_img" name="upload_img">
</form>

<form method="post" enctype="multipart/form-data" style="position: absolute;left: -3000px">
	<input type="file" id="upload_video" name="upload_video">
</form>