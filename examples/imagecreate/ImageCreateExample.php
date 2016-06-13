<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/**
 * Scripted By Ramith Nambiar
 * 13 June 2016
 */
 
include "../../src/PhpImage.php";
$string = "PHP Image Library with features like Text or Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.";
$img = new PhpImage(500, 200);
$img -> setfont('font.ttf', 10);
$img -> setlargetextarea($string);
$img -> draw();
$img -> fillcolor('WHITE');
$img -> addimagejpeg('photo.jpg', 'RIGHT', 'TOP');
$img -> addtext('@ramith27/phpimage','black',0,40,'center');
$img -> addtext('Create Image Using Php','black',0,70,'center');
$img -> addtextjustified(0, 20, 100,'black',$string);
$img -> display();
$img -> savepng('test');
?>
