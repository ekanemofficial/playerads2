<?php


if(isset($_GET['UID'])){
  $UID = $_GET['UID'];
}

$sql = " SELECT * FROM `users` WHERE username='".$UID."' LIMIT 1 ";
$result       = mysqli_query($db_conx, $sql);
$row          = mysqli_fetch_row($result);


// players
$user_id      = $row[0];
$unique_id    = $row[1];
$user_type    = $row[2];
$fname        = $row[3];
$lname        = $row[4];
$username     = $row[5];
$gender       = $row[8];
$age          = $row[9];
$bio          = $row[10];
$height       = $row[11];
$weight       = $row[12];
$strong_foot  = $row[13];
$position     = $row[14];
$country      = $row[15];
$state        = $row[16];
$passport     = $row[17];
$career_level = $row[18];
$current_club = $row[19];
$league       = $row[20];
$division     = $row[21];
$avatar       = $row[22];
$contract_stats = $row[23];
$interest     = $row[24];
$reg_date     = $row[27];
$licence      = $row[28];
$ratings      = $row[29];
$country_of_operation = $row[30];
$country_assoc = $row[31];
$scouted_player_id  = $row[32];
$name_of_team   = $row[33];

// partners, academy, clubs
$company_name  = $row[34];
$organization_type  = $row[35];
$registration_number   = $row[36];
$registration_name   = $row[37];
$main_trade_name  = $row[38];
$phone_number_1   = $row[39];
$phone_number_2   = $row[40];
$date_of_commencement  = $row[41];
$date_of_incorporation = $row[42];
$sector = $row[43];
$team_city_location  = $row[44];
$street_name  = $row[45];
$views  = $row[50];
$current_employment = $row[51];
$pep_registration = $row[52];
$stadium = $row[53];
$head_coach = $row[54];
$coach_remark = $row[55];
$marital_status = $row[56];
$alternative_position = $row[57];
$last_active_season = $row[58];
$club_city_location = $row[59];
$last_update = $row[60];


$fa_reg_body = $row[61];
$manage_player = $row[62];
$team_bio = $row[63];
$vision = $row[64];
$mission = $row[65];
$name_of_head_coach = $row[66];
$team_bio_title = $row[67];







$fullname = $fname . ' ' . $lname;


$get_current_date = strtotime(date('Y-m-d H:i:s'));
$get_age = strtotime($age);
$diff = abs($get_current_date - $get_age);
$years = floor($diff / (365*60*60*24));

$get_age = date('Y');
$current_age  = $get_age - strtotime($age);


// select all from conection where the user_id is exactly the userid of the loggedin users
$sql_connect = "SELECT * FROM `connections` WHERE `user1`='".$_SESSION['userid']."' AND `request_status`=1 ";
$result_connect       = mysqli_query($db_conx, $sql_connect);
$row_connect          = mysqli_fetch_row($result_connect);




$sql3 = "SELECT COUNT(id) FROM `connections` WHERE user2='".$_SESSION['userid']."' AND request_status=1";
$result3 = mysqli_query($db_conx, $sql3);

$run_result = mysqli_fetch_row($result3);
$connections = $run_result[0];



function get_bio(){
  global $db_conx;

  $bio = "SELECT `bio` FROM `users` WHERE username='".$_SESSION['username']."' LIMIT 1";
  $run_bio = mysqli_query($db_conx, $bio);
  $row = mysqli_fetch_array($run_bio);
  echo $bio = $row['bio'];

}

function insert_bio(){

  global $db_conx;
    if(isset($_POST['body'])){

    $body = mysqli_real_escape_string($db_conx, $_POST['body']);

    // $sql = "INSERT INTO users (bio) VALUES ('$body') WHERE id='".$_SESSION['userid']."'";

    $sql = "UPDATE `users` SET `bio`='$bio' WHERE username='".$_SESSION['username']."' ";

    if ($db_conx->query($sql) === TRUE) {

        echo "Bio Record Successfully Saved";

    } else {

        echo "Error: " . $sql . "<br>" . $db_conx->error;
    }

  }
}




              // $market_id = $row['id'];
              // $market_user_id = $row['market_user_id'];
              // $market_username = $row['market_username'];
              // $market_type = $row['market_type'];
              // $market_title = $row['market_title'];
              // $market_desc = $row['market_desc'];
              // $market_gender = $row['market_gender'];
              // $market_age_range = $row['market_age_range'];
              // $market_country = $row['market_country'];
              // $market_state = $row['market_state'];
              // $market_organizer = $row['market_organizer'];
              // $market_post_date = $row['market_post_date'];
              // $market_exp_date = $row['market_exp_date'];
              // $market_price1 = $row['market_price1'];
              // $market_price2 = $row['market_price2'];
              // $market_user_applied = $row['market_user_applied'];
              // $market_user_views  = $row['market_user_views'];
              // $market_token  = $row['market_token'];
              // $market_conditions  = $row['market_conditions'];
              // $sponsored  = $row['sponsored'];
              // $market_user_level = $row['market_user_level'];
              // $sponsored_stats = $row['sponsored_stats'];





?>
