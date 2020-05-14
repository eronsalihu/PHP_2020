<?php
if (isset($_SESSION['username'])) {
$username=$_SESSION['username'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['radio'];
$date=date("Y-m-d", strtotime($_POST['date']));
$about=$_POST['about'];
$phone=$_POST['phone'];
if (isset($_POST['create'])) {
  $query = "SELECT * fROM userinfo WHERE username =:username";
  $stmt=$db->prepare($query);
  $stmt->bindParam(":username",$username);
  $stmt->execute();
     if ($result=$stmt->fetch(PDO::FETCH_OBJ)) {
       echo '<script>alert("Prit Veq pak!")</script>';
  }
  else {
    $sql="INSERT INTO userinfo(useri,firstName,lastName,Gender,birthday,about,phone) VALUES(?,?,?,?,?,?,?)";
    $stmtInsert=$db->prepare($sql);
    $result=$stmtInsert->execute([$username,$firstName,$lastName,$gender,$date,$about,$phone]);
    if ($result) {

      setcookie("firstName",$firstName,time()+(10*365*24*60*60));
      setcookie("lastName",$lastName,time()+(10*365*24*60*60));
      setcookie("gender",$gender,time()+(10*365*24*60*60));
      setcookie("date",$date,time()+(10*365*24*60*60));
      setcookie("about",$about,time()+(10*365*24*60*60));
      setcookie("phone",$phone,time()+(10*365*24*60*60));
        echo '<script>alert("Your profile succesfully completed!")</script>';
    }
}
}
}
 ?>
