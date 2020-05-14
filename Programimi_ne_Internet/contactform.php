<?php
$toEmail = "enis.berisha7@student.uni-pr.edu";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
echo '<script>alert("Email u dergua me sukses!")</script>';
} else {
echo '<script>alert("Gjate dergimit ka hasur ne errore!")</script>';
}
?>
<?php
if(isset($_POST["rating"]))
      {
           $query = "INSERT INTO rate(vleresimi) VALUES (:gender)";
           $statement = $connect->prepare($query);
           $statement->execute(
                array(
                     'vleresimi'     =>     $_POST["rating"]
                )
           );
           $count = $statement->rowCount();
          if($count > 0)
          {
               echo "Gender Inserted Successfully!";
          }  
}
?>
