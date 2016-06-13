# Create  Captcha Using Php 

PHP Image Library with features like Text or Image Captcha, Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Steps To Create Image

	
### Steps To Create Captcha


### Example To Create Image
##### Html File
	<html>
		<head>
		</head>
		<body>
			<h1>Captcha Example</h1>
			<form method="post" action="CaptchaVerifyExample.php"><br>
				<img src="../../src/PhpImageCaptcha.php" alt="Captcha"><br>
				<input type="text" name="input" />
				<input type="submit" />
			</form>
		</body>
	</html>
	
##### Php File
	<?php
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
    
	
### Output 
![alt tag](https://camo.githubusercontent.com/17bc80d1b360c8cfb2a176f1ffc0a67ee49e4ffe/687474703a2f2f7333332e706f7374696d672e6f72672f636a7135647a786a332f746573742e706e67)


### Get the code

    git clone https://github.com/ramith27/phpimage.git
    
### Script Developed By
    
    Ramith Nambiar @ramith27

  