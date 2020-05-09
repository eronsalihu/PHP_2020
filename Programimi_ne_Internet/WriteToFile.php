<?php
if(isset($_POST['field1'])) {
    $data = " <br> ".$_POST['field1'] ."\r\n";
    $ret = file_put_contents('Advices.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>
