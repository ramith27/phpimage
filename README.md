# Create Image Using Php 

PHP Image Library with features like Text or Image Align , Text Justify , Make Transparent Image , Auto height adjust according to text and many more we will be updating many more changes.

### Usage

    include 'PhpImage.php';

    $image = new PhpImage(WIDTH,HEIGHT);
    
    $image -> draw();
    
    $image -> fillcolor('COLOR');
    
    $image -> setfont('FONT_FILE_PATH', 'FONT_SIZE');
    
    $image -> addimage('IMAGE_PATH', 'ALIGN_HORIZONTAL', 'ALIGN_VERTICAL'); 
    
    $image -> addtext('YOUR_TEXT','COLOR','X_POSITION','Y_POSITION','ALIGN');
    
    $image -> addtextjustified('ANGLE', 'PADDING_LEFT', 'PADDING_TOP','COLOR','YOUR_STRING');

### Get the code

    git clone https://github.com/ramith27/phpimage.git
    
### Script Developed By
    
    Ramith Nambiar @ramith27
