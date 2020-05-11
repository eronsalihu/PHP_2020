<?php
$myfile = fopen("Advices.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Advices.txt"));
fclose($myfile);
?>
