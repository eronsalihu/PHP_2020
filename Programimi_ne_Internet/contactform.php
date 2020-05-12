<?php
$toEmail = "enis.berisha7@student.uni-pr.edu";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
echo '<script>alert("Email u dergua me sukses!")</script>';
} else {
echo '<script>alert("Gjate dergimit ka hasur ne errore!")</script>';
}
?>
