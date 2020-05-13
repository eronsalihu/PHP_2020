<?php require('headeri.php'); ?>
<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

.column {
    margin-left:30em;
    margin-bottom:4.5em;
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 500px; 
}

.row:after {
   
  content: "";
  display: table;
  clear: both;
}
h2#theh2 {
    font-size:1.2em;
    margin:7em;
    padding-left:22.5em;
}
</style>
</head>
<body>

<h2 id="theh2">Here are All your Advices about our page</h2>

<div class="row">
  <div class="column" style="background-color:#B86366;">
    <h2 style="text-align:center">THANKS FOR HELPING US</h2><br>
    <p><?php
$myfile = fopen("Advices.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Advices.txt"));
fclose($myfile);
?></p>
  </div>
 
</div>

</body>
</html>
<?php
require('footeri.php'); ?>
