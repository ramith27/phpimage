# Create Image Using Php 

PHP Image Library with features like Text or Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Note
Currently This Script only support 6 Colors : Red,Blue,Green,White,Black,Yellow

### Usage

    include 'PhpImage.php';

    $image = new PhpImage(WIDTH,HEIGHT);
    
    $image -> draw();
    
    $image -> fillcolor('COLOR'); //If You want Transparent Image $image -> fillcolor('TRANSPARENT');
    
    $image -> setfont('FONT_FILE_PATH', 'FONT_SIZE');
    
    $image -> addimage('IMAGE_PATH', 'ALIGN_HORIZONTAL', 'ALIGN_VERTICAL');  
    // ALIGN_HORIZONTAL=LEFT/CENTER/RIGHT & ALIGN_VERTICAL = TOP/CENTER/BOTTOM
    
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
    <img alt="test.png" src="data:image/png;base64,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" />
