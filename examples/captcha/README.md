# Create  Captcha Using Php 

PHP Image Library with features like Text or Image Captcha, Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Example Of Captcha
###### Html File
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
	
###### Php File 
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
![alt tag](https://camo.githubusercontent.com/fb2d1a8ea1d3265860146ea18cac4af3aa0c53ae/687474703a2f2f626c732e776534752e70772f636170746368612e706e67)
 

### Get the code

    git clone https://github.com/ramith27/phpimage.git
    
### Script Developed By
    
    Ramith Nambiar @ramith27

  