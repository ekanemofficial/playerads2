<?php require_once('themes/header.php');



function getDateTimeDiff($date){


$sql = " SELECT * FROM `users` WHERE username='".$UID."' LIMIT 1 ";
$result    = mysqli_query($db_conx, $sql);
$row       = mysqli_fetch_row($result);

$last_seen = $row[49];
  
	$now_timestamp  = strtotime(date('Y-m-d H:i:s'));
		$last_seen_date = strtotime($last_seen); 
    $diff_timestamp = abs($now_timestamp - $last_seen_date);

  	if($diff_timestamp < 60){

    	return ' few seconds ago';

  	}else if($diff_timestamp>=60 && $diff_timestamp<3600){

    	return floor($diff_timestamp/60). ' mins ago';

  	}else if($diff_timestamp>=3600 && $diff_timestamp<86400){

    	return floor($diff_timestamp/3600). ' hours ago';

  	}else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){

    	return floor($diff_timestamp/(86400)). ' days ago';

  	}else if($diff_timestamp>=(86400*30) && $diff_timestamp<(86400*365)){

    	return floor($diff_timestamp /(86400*30)). ' months ago';

  	}else{

    	return floor($diff_timestamp /(365*60*60*24)). ' years ago';

  	}
  
}

// echo '<p>Current Time : <strong>'.  date('Y-m-d H:i:s') .'</strong></p>';
echo '<p>Date Diffence : <strong>'. getDateTimeDiff('2020-07-16 23:42:38') .'</strong></p>';
// echo '<p>Date Diffence : <strong>'. getDateTimeDiff('2018-09-09 11:02:39') .'</strong></p>';
// echo '<p>Date Diffence : <strong>'. getDateTimeDiff('1960-10-01 16:12:99') .'</strong></p>';


        // $years = floor($diff_timestamp / (365*60*60*24));
        // $months = floor($diff_timestamp - $years * 365*60*60*24 / (30*60*60*24));
        // $days = floor($diff_timestamp - $years * 365*60*60*24 - $months *30*60*60*24 / (60*60*24));
        // $hours = floor($diff_timestamp - $years * 365*60*60*24 - $months *30*60*60*24 - $days*60*60*24 / (60*60));
        // $minutes = floor($diff_timestamp - $years * 365*60*60*24 - $months *30*60*60*24 - $days*60*60*24 - $hours*60*60 / (60));
        // $seconds = floor($diff_timestamp - $years * 365*60*60*24 - $months *30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60);












?>