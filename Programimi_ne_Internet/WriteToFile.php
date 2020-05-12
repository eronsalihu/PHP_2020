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
  height: 200px; 
}

.row:after {
   
  content: "";
  display: table;
  clear: both;
}
h2#theh2 {
    font-size:1.2em;
    margin:7em;
    padding-left:24.5em;
}
</style>
</head>
<body>

<h2 id="theh2">THANKS FOR YOUR ADVICE</h2>

<div class="row">
  <div class="column" style="background-color:#B86366;">
    <h2>The words you say to us make us better every day. If you got any idea for improving we will be happy to hear from you.</h2><br>
    <br><p><?php
if(isset($_POST['field1'])) {
    $data = " <br> ".$_POST['field1'] ."\r\n";
    $ret = file_put_contents('Advices.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file by YOU";
    }
}
else {
   die('no post data to process');
}
?>
<form action="readToFile.php" method="POST">
<br>
<br>
	If you want to read the advices click here :
    <input type="submit" name="submit" value="Read" >
</form>
</p>
  </div>
 
</div>

</body>
</html>
<?php
require('footeri.php'); ?>

