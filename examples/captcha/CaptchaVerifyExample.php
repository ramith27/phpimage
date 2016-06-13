<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Scripted By Ramith Nambiar
 * 13 June 2016
 */

if($_POST['input'] == $_SESSION['captcha']){
	$_SESSION['captcha']="";
	echo "success";
	/*Your Code Here*/
}
else {
	echo "error";
	$_SESSION['captcha']="";
}
?>

