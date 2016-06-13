# Create Image And Captcha Using Php 

PHP Image Library with features like Text or Image Captcha, Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Note
Currently This Script only support 6 Colors : Red,Blue,Green,White,Black,Yellow

### Steps To Create Image

    include 'src/PhpImage.php';

    $image = new PhpImage(WIDTH,HEIGHT);
    
    $image -> draw();
    
    $image -> fillcolor('COLOR'); //If You want Transparent Image $image -> fillcolor('TRANSPARENT');
    
    $image -> setfont('FONT_FILE_PATH', 'FONT_SIZE');
    
    $image -> addimagepng('IMAGE_PATH', 'ALIGN_HORIZONTAL', 'ALIGN_VERTICAL'); //(LEFT/CENTER/RIGHT,TOP/CENTER/BOTTOM)
    
    $image -> addimagejpeg('IMAGE_PATH', 'ALIGN_HORIZONTAL', 'ALIGN_VERTICAL'); //(LEFT/CENTER/RIGHT,TOP/CENTER/BOTTOM)
    
    $image -> addtext('YOUR_TEXT','COLOR','X_POSITION','Y_POSITION','ALIGN');  //ALIGN = CENTER/LEFT
    
    $image -> addtextjustified('ANGLE', 'PADDING_LEFT_RIGHT', 'PADDING_TOP','COLOR','YOUR_STRING');
    
    $image -> display(); //To Display Image
    
    $image -> savepng('FILE_NAME'); 
	
### Steps To Create Captcha

	Check the Example Directory for sample

### Get the code

    git clone https://github.com/ramith27/phpimage.git
    
### Script Developed By
    
    Ramith Nambiar @ramith27
    
### Updates
    13 June 2016 : Uploaded Version 0.1
  