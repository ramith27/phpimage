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
 
?>
<form method="post" action="CaptchaVerifyExample.php"><br>
	<img src="../../src/PhpImageCaptcha.php" alt="Captcha"><br>
	<input type="text" name="input" />
	<input type="submit" />
</form>



