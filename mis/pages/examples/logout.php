<?php
session_start();
error_reporting(0);
if ($_SESSION['login'] == 1) {
	session_destroy(); 
	echo "Sucessfully Logout...";
}
header('Location: login.php');


?>