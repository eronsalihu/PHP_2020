<form id="f" style="padding-bottom:2em; ">
    <label for="fname" style="padding-left:13em; ">Get a photo , rotate and Save again.  </label><br><br>
    <label for="fname">File Number 1-6: </label>
    <input type="text" id="fname" name="txt10" placeholder="Type: z1|z2|z3|z4|z5|z6">

    <label for="lname">Rotate Degree :</label>
    <input type="text" id="lname" name="txt20" placeholder="Type: 45|90|180|360">

  
    <input id="ss" type="submit" value="submit" name="subi"/>
  </form>

<?php if(isset($_GET["subi"])) {
    try {
        
        $fileName =  $_GET["txt10"].".png";
        $degrees = $_GET["txt20"];
        
        $source = imagecreatefrompng($fileName);    
         
        $rotate = imagerotate($source, $degrees, 0);
        
        imagepng($rotate, "1.myUpdateImage.png");
        
        print_r('Image saved successfully.');
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
   
}
?>
