<?php

	$sql = "SELECT COUNT(id) FROM `market`";
	$run_sql = mysqli_query($db_conx, $sql);
	$count_row = mysqli_fetch_row($run_sql);

	$sql = "SELECT COUNT(id) FROM `market` WHERE market_type=0";
	$run_sql2 = mysqli_query($db_conx, $sql);
	$count_row2 = mysqli_fetch_row($run_sql2);	

	$sql = "SELECT COUNT(id) FROM `market` WHERE market_type=1";
	$run_sql3 = mysqli_query($db_conx, $sql);
	$count_row3 = mysqli_fetch_row($run_sql3);	

	$sql = "SELECT COUNT(id) FROM `market` WHERE market_type=2";
	$run_sql4 = mysqli_query($db_conx, $sql);
	$count_row4 = mysqli_fetch_row($run_sql4);	
?>



<div class="panel panel-default my-market-stats" style="margin-top: 30px;">
	<div class="panel-heading">
		<h5>MARKET STATS </h5>
	</div>
	<div class="panel-body" style="padding-bottom: 0">
		<p> FOOTBALL TRIALS  <span class="badge badge-info">  <?php echo $id = $count_row2[0]; ?> </span></p>
		<p> PLAYER PURCHASE <span class="badge badge-info"> <?php echo $id = $count_row3[0]; ?> </span></p>
		<p> PLAYER OFFERED <span class="badge badge-primary"> <?php echo $id = $count_row4[0]; ?> </span></p>
	</div>
	<div class="panel-footer">
		<p> TOTAL MARKET <span class="badge badge-info"> <?php echo $id = $count_row[0]; ?> </span></p>
	</div>
</div>

<script type="text/javascript">
	
	

</script>