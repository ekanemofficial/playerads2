<?php session_start();
require_once('../core/db.php');



if(isset($_POST['save_personal'])){

    $age = mysqli_real_escape_string($db_conx, $_POST['age']);
    $marital_status = mysqli_real_escape_string($db_conx, $_POST['marital_status']);
    $country = mysqli_real_escape_string($db_conx, $_POST['country']);
    $state = mysqli_real_escape_string($db_conx, $_POST['state']);
    $height = mysqli_real_escape_string($db_conx, $_POST['height']);
    $weight = mysqli_real_escape_string($db_conx, $_POST['weight']);
    $passport = mysqli_real_escape_string($db_conx, $_POST['passport']);
    $error = "";

    if(empty($age)){

      $error .= '<p class="text-danger small"> Age is required </p>';

    }elseif(empty($marital_status)){

      $error .= '<p class="text-danger"> Marital Status is required </p>';

    }elseif(empty($country)){

      $error .= '<p class="text-danger"> Country is required </p>';

    }elseif(empty($state)){

      $error .= '<p class="text-danger"> State is required </p>';

    }elseif(empty($height)){

      $error .= '<p class="text-danger"> Height is required </p>';

    }
    elseif(empty($weight)){

      $error .= '<p class="text-danger"> Weight is required </p>';

    }elseif(empty($passport)){

      $error .= '<p class="text-danger"> Passport Id is required </p>';

    }else{
      

    	$query = "UPDATE `users` SET age='$age', marital_status='$marital_status', country='$country', state='$state', height='$height', weight='$weight', passport='$passport' WHERE username='".$_SESSION['username']."'";

      	$result = mysqli_query($db_conx, $query);

    }

}











?>