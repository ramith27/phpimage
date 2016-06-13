<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/**
 * Scripted By Ramith Nambiar
 * 13 June 2016
 */
 
class PhpImage {
	public $image = "";
	private $image_dimention_width = "";
	private $image_dimention_height = "";
	public $font_file = "";
	private $font_size = 0.0;

	/*
	 *
	 */
	function __construct($width, $height) {
		$this -> image_dimention_width = $width;
		$this -> image_dimention_height = $height;
		$this -> image_dimention_width_center = $width / 2;
		$this -> image_dimention_height_center = $height / 2;
	}

	function draw() {
		$this -> image = imagecreatetruecolor($this -> image_dimention_width, $this -> image_dimention_height);
		imagesavealpha($this -> image, true);
		imagealphablending($this -> image, false);
	}

	function fillcolor($color) {
		switch ($color) {
			case 'transparent' :
				$color = imagecolorallocatealpha($this -> image, 255, 255, 255, 127);
				break;
			case 'white' :
				$color = imagecolorallocate($this -> image, 255, 255, 255);
				break;
			case 'black' :
				$color = imagecolorallocate($this -> image, 0, 0, 0);
				break;
			default :
				break;
		}
		imagefill($this -> image, 0, 0, $color);
	}

	function addimage($pngfilename, $position_x, $position_y, $width = 0, $height = 0) {
		list($actualwidth, $actualheight) = getimagesize($pngfilename);
		if ($width == 0)
			list($width, $height) = getimagesize($pngfilename);
		if($position_x=='left')
			$position_x=0;
		elseif($position_x=='center')
			$position_x=$this -> image_dimention_width_center-($width/2);
		elseif($position_x=='right')
			$position_x=$this -> image_dimention_width-($width);
		
		if($position_y=='top')
			$position_y=0;
		elseif($position_y=='center')
			$position_y=$this -> image_dimention_height_center-($height/2);
		elseif($position_y=='bottom')
			$position_y=$this -> image_dimention_height-($height);
		$image = imagecreatefrompng($pngfilename);
		imagecopyresampled($this -> image, $image, $position_x, $position_y, 0, 0, $width, $height, $actualwidth, $actualheight);
		imagealphablending($this -> image, true);
	}

	function setfont($font_file, $font_size) {
		$this -> font_file = $font_file;
		$this -> font_size = $font_size;
	}

	function textcolor($color = 'black') {
		if ($color == 'lime') {
			$color = imagecolorallocate($this -> image, 204, 255, 51);
		}
		if ($color == 'yellow') {
			$color = imagecolorallocate($this -> image, 255, 255, 0);
		}
		if ($color == 'black') {
			$color = imagecolorallocate($this -> image, 0, 0, 0);
		}
		return $color;
	}

	function addtext($string, $color, $x, $y, $align = 'left') {
		if ($align == 'center') {
			$string_len = strlen($string);
			$string_len = $string_len * ($this -> font_size * 0.75);
			$string_len = ceil($string_len / 2);
			$x = $this -> image_dimention_width_center - $string_len;
		}
		$color = $this -> textcolor($color);
		imagettftext($this -> image, $this -> font_size, 0, $x, $y, $color, $this -> font_file, $string);
	}

	function setlargetextarea($string) {
		$stringwrap = $this -> image_dimention_width / ($this -> font_size);
		$string = wordwrap($string, $stringwrap, "\n", TRUE);
		$stringlen = strlen($string);
		$stringline = ceil($stringlen / $stringwrap);
		$this -> image_dimention_height = $this -> image_dimention_height + (($stringline * $this -> font_size));
	}

	function largetext($string, $color, $x, $y) {
		$stringwrap = $this -> image_dimention_width / ($this -> font_size / 1.37);
		$string = wordwrap($string, $stringwrap, "\n", TRUE);
		$color = $this -> textcolor($color);
		imagettftext($this -> image, $this -> font_size, 0, $x, $y, $color, $this -> font_file, $string);
	}

	function addtextjustified($angle, $left, $top, $color, $text, $minspacing = 3, $linespacing = 1) {
		$color = $this -> textcolor($color);
		$max_width = $this -> image_dimention_width-40;
		$font = $this -> font_file;
		$size = $this -> font_size;
		$image = $this -> image;
		$wordwidth = array();
		$linewidth = array();
		$linewordcount = array();
		$largest_line_height = 0;
		$lineno = 0;
		$words=explode(" ",$text);
		$wln = 0;
		$linewidth[$lineno] = 0;
		$linewordcount[$lineno] = 0;
		foreach ($words as $word) {
			$dimensions = imagettfbbox($size, $angle, $font, $word);
			$line_width = $dimensions[2] - $dimensions[0];
			$line_height = $dimensions[1] - $dimensions[7];
			if ($line_height > $largest_line_height)
				$largest_line_height = $line_height;
			if (($linewidth[$lineno] + $line_width + $minspacing) > $max_width) {
				$lineno++;
				$linewidth[$lineno] = 0;
				$linewordcount[$lineno] = 0;
				$wln = 0;
			}
			$linewidth[$lineno] += $line_width + $minspacing;
			$wordwidth[$lineno][$wln] = $line_width;
			$wordtext[$lineno][$wln] = $word;
			$linewordcount[$lineno]++;
			$wln++;
		}
		for ($line = 0; $line <= $lineno; $line++) {
			$slack = $max_width - $linewidth[$line];
			if (($linewordcount[$line] > 1) && ($line != $lineno))
				$spacing = ($slack / ($linewordcount[$line] - 1));
			else
				$spacing = $minspacing;
			$x = 0;
			for ($i = 0; $i < $linewordcount[$line]; $i++) {
				imagettftext($image, $size, $angle, $left + intval($x), $top + $largest_line_height + ($largest_line_height * $line * $linespacing), $color, $font, $wordtext[$line][$i]);
				$x += $wordwidth[$line][$i] + $spacing + $minspacing;
			}
		}
		return true;
	}

	function display() {
		header("Content-type: image/png");
		imagepng($this -> image);
		imagedestroy($this -> image);
	}
}
?>