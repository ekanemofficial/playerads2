<?php
session_start();


$host = "localhost";
$user = "admin";
$pass = "admin";
$db   = "pa";

$db_conx = mysqli_connect($host, $user, $pass, $db);

if(!$db_conx)
{
	echo "Could Not Connect To Database Server!";

}else{

	// echo "Database Connected";
	// exit();
}


?>