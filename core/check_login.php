<?php
include_once('core/db.php');

if(!isset($_SESSION['username']) || !isset($_SESSION['token']) && $_SESSION["loggedin"] != true)
{
	header("location:login.php");
}

?>