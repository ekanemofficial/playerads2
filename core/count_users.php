<?php



$player_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 0 ";
$agent_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 1 ";
$scout_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 2 ";
$coach_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 3 ";
$club_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 4 ";
$academy_sql = "SELECT COUNT(user_id) FROM `users` WHERE `user_type` = 5 ";


$run_players = mysqli_query($db_conx, $player_sql);
$run_agents = mysqli_query($db_conx, $agent_sql);
$run_scouts = mysqli_query($db_conx, $scout_sql);
$run_coaches = mysqli_query($db_conx, $coach_sql);
$run_clubs = mysqli_query($db_conx, $club_sql);
$run_academics = mysqli_query($db_conx, $academy_sql);



$count_player_row = mysqli_fetch_row($run_players);
$count_agent_row = mysqli_fetch_row($run_agents);
$count_scout_row = mysqli_fetch_row($run_scouts);
$count_coach_row = mysqli_fetch_row($run_coaches);
$count_club_row = mysqli_fetch_row($run_clubs);
$count_academy_row = mysqli_fetch_row($run_academics);


$count_user_id0 = $count_player_row[0];
$count_user_id1 = $count_agent_row[0];
$count_user_id2 = $count_scout_row[0];
$count_user_id3 = $count_coach_row[0];
$count_user_id4 = $count_club_row[0];
$count_user_id5 = $count_academy_row[0];

$count_user_id6 = $count_user_id0 + $count_user_id1 + $count_user_id2 + $count_user_id3 + $count_user_id4 + $count_user_id5;

$count_user_id8 = $count_user_id3 + $count_user_id4 + $count_user_id5;

$users_online = "SELECT COUNT(user_id) FROM `users` WHERE `is_online`=1";
$run_users_online = mysqli_query($db_conx, $users_online);
$online_count = mysqli_fetch_row($run_users_online);
$is_online = $online_count[0];



















?>