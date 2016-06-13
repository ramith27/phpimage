# Create Image Using Php 

PHP Image Library with features like Text or Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Note
Currently This Script only support 6 Colors : Red,Blue,Green,White,Black,Yellow

### Usage

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

### Get the code

    git clone https://github.com/ramith27/phpimage.git
    
### Script Developed By
    
    Ramith Nambiar @ramith27
    
### Updates
    13 June 2016 : Uploaded Version 0.1
    
### Example
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
    $img -> savepng('image');
    
### Output 
![alt tag](https://camo.githubusercontent.com/17bc80d1b360c8cfb2a176f1ffc0a67ee49e4ffe/687474703a2f2f7333332e706f7374696d672e6f72672f636a7135647a786a332f746573742e706e67)
