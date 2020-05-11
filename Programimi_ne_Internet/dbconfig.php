<?php
$db_user="root";
$db_pass="E.berisha1";
$db_name="smartapp";
$message="";
try {
  $db=new PDO('mysql:host=localhost;dbname=' . $db_name .';charset=utf8;',$db_user,$db_pass);
  session_start();

  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOEXCEPTION $e) {
$message=$e->getMessage();
die();
}

?>
