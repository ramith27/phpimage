<?php
/**
 * Scripted By Ramith Nambiar
 * 13 June 2016
 */

session_start();
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

