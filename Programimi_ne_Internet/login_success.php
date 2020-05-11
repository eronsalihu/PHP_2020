<?php

session_start();
require('headeri.php');
if(isset($_SESSION['username'])) {
echo "Welcome <strong>".$_SESSION['username']."</strong><br/>";
} else {
header('location: login.php');
}

?>
<a href="logout.php">Logout</a>


<?php
require('footeri.php');
 ?>
