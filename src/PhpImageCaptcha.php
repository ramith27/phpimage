<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'PhpImage.php';
/**
 * Scripted By Ramith Nambiar
 * 13 June 2016
 */
class PhpImageCaptcha extends PhpImage{
	function createnumber($number) {
		$string="";
		$this -> addimagepng('include/images/pattern'.mt_rand(1, 3).'.png', 'LEFT', 'TOP');
		if($number > 2 && $number < 6)
		for($i=0;$i<$number;$i++){
			$str=mt_rand(0, 9);
			$rgb=array(
				'red' => mt_rand(0, 255),
				'green' => mt_rand(0, 255),
				'blue' => mt_rand(0, 255),
				);
			$this -> addtext($str, $rgb, $i*40+35 , 30,'',mt_rand(0, 80));
			$string.=$str; 
		}
		
		return $string;
	}	
}

function createCaptcha($number=5){
	$captcha=new PhpImageCaptcha(235,50);  
	$captcha -> setfont('include/font/OpenSans.ttf', 20);
	$captcha -> draw();
	$captcha -> fillcolor('transparent');
	$captchasession=$captcha -> createnumber($number);
	$_SESSION['captcha']=$captchasession;
	$captcha -> display(); 
}
createCaptcha();
?>
