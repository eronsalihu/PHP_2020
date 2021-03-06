
<?php
require('dbconfig.php');
require('headeri.php');

?>
<?php
if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
if(isset($_POST['but_upload'])){
  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
    $sql = "SELECT name from images where username=:username";
    $stmt=$db->prepare($sql);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    if ($result=$stmt->fetch()) {
      $query="UPDATE images SET name=:name WHERE username='$username'";
      $stmtInsert=$db->prepare($query);
      $stmtInsert->bindParam(":name",$name);
      $rezultati=$stmtInsert->execute();
      if ($rezultati) {
        echo '<script>alert("Your profile Picture Updated")</script>';
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
      }
    }
    else{
    // Insert record
    $query = "INSERT INTO images values(?,?)";
    $stmtInsert=$db->prepare($query);
    $stmtInsert->execute([$username,$name]);

    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
  }
}
}
 ?>
 <?php
 if (isset($_SESSION['username'])) {
   $username=$_SESSION['username'];

 $sql = "SELECT name from images where username=:username";
 $stmt=$db->prepare($sql);
 $stmt->bindParam(":username",$username);
 $stmt->execute();
 if($result = $stmt->fetch()){
 $image = $result['name'];
 $image_src = "uploads/".$image;}
}
?>

<?php
if(isset($_SESSION['username'])) {
echo '<h1 style="color: white;font-family: Times-New-Roman;clear: both;font-size: 40px;text-align: center; font:bold; color: #B86366" >Welcome <strong>'.$_SESSION['username'].'</strong></h1><br/>';
} else {
header('location: login.php');
}
?>
<?php
if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
  if (isset($_POST['insert'])) {
    $target_dir = "uploads/";
     $file = $_FILES['image']['tmp_name'];
     $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
     $image_name = addslashes($_FILES['image']['name']);
  }
}
  ?>

<section class="links">
   <nav class="link-effect-13" id="link-effect-13">
  <a id="log" href="logout.php"><span data-hover="Ironman">LogOut</span></a>
    <a id="log" href="changePassword.php"><span data-hover="Batman">Change Password/Delete</span></a>

  </nav>
</section>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="css/projekti.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
    <meta name="viewport" content="width=device-width">
    <title>Profile</title>
</head>

<body>

<div class="outterd">
    <div class="inner-cont">
<table>
    <tr>
    <div>

        <tr>
           <form method="post" enctype="multipart/form-data">
          <div class="container">

    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' name="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview" >
            <div id="imagePreview" >
    <img style="width: 181px;
    height: 181px;
    position: relative;
    border-radius: 100%;"
 src='<?php echo $image_src;  ?>' >


            </div>
        </div>
    </div>
    <input type="submit" style="padding-bottom:38px"  name="but_upload" id="insert" value="Insert">
  </form>

</div>
</tr>
</div>
</tr>
</table>

<div style="float: left;" class="acc-set">
    <table>
        <th> <label>Account Settings</label></th>
        <tr>

            <td>
                 <label>Email: </label>
            </td>
            <td><input class="input" type="text" name="" value="<?php
          if (isset($_SESSION['username'])) {

            $username=$_SESSION['username'];
            $query="SELECT email FROM signup WHERE username=:username";
            $stmt=$db->prepare($query);
            $stmt->bindParam(":username",$username);
            $stmt->execute();
               if ($result=$stmt->fetch()) {

              echo $result['email'];

            }

          }


            ?>"></td>
        </tr>
        <tr>
            <td> <label>Username:</label></td>
            <td><input class="input" type="text" name="username" value="<?php if(isset($_SESSION['username'])) {
            echo $_SESSION['username'];
            } ?>" name="" ></td>
        </tr>
      </table></div>
        <div style="float: left;" class="prof-set">
            <table>
        <th><label>Profile Settings</label></th>
        <tr>
            <td> <label>First Name:</label> </td>
            <td><input class="input" type="text" name="" readonly value="<?php
            if (isset($_SESSION['username'])) {
          $username=$_SESSION['username'];

  $query = "Select * from userInfo where useri=:username ";
  $stmt=$db->prepare($query);
  $stmt->bindParam(":username",$username);
  $stmt->execute();
  if ($result=$stmt->fetch()) {
    echo $result['firstName'];
  }
            } ?>"></td>

        </tr>
        <tr>
            <td> <label>Last Name:</label> </td>
            <td><input class="input" type="text" name="" value="
              <?php
              if (isset($_SESSION['username'])) {
            $username=$_SESSION['username'];

    $query = "Select * from userInfo where useri=:username ";
    $stmt=$db->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    if ($result=$stmt->fetch()) {
      echo $result['lastName'];
    }
              } ?>" readonly></td>

        </tr>
        <tr>
            <td> <label >Gender:</label> </td>
            <td>
                <label class="radio-button">
  <input type="radio" name="radio" readonly <?php   if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];

$query = "Select * from userInfo where useri=:username ";
$stmt=$db->prepare($query);
$stmt->bindParam(":username",$username);
$stmt->execute();
if ($result=$stmt->fetch()) {
  $check=$result['Gender'];
  if ($check=='M') {


   ?>checked <?php }}} ?>>
  <span class="label-visible">
    <span class="fake-radiobutton"></span>
    Male
  </span>
</label>

<label class="radio-button">
  <input type="radio" name="radio" <?php   if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];

$query = "Select * from userInfo where useri=:username ";
$stmt=$db->prepare($query);
$stmt->bindParam(":username",$username);
$stmt->execute();
if ($result=$stmt->fetch()) {
  $check=$result['Gender'];
  if ($check=='F') {


   ?>checked <?php }}} ?> readonly>
  <span class="label-visible">
    <span class="fake-radiobutton"></span>
    Female
  </span>
</label></td>

        </tr>
        <tr>
            <td> <label>Birthday:</label> </td>
            <td><input type="text" class="input" readonly value="  <?php
              if (isset($_SESSION['username'])) {
            $username=$_SESSION['username'];

    $query = "Select * from userInfo where useri=:username ";
    $stmt=$db->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    if ($result=$stmt->fetch()) {
      echo $result['birthday'];
    }
              } ?>" ></td>

        </tr>
        <tr>
            <td> <label>About:</label> </td>
            <td><textarea class="input"  readonly><?php
              if (isset($_SESSION['username'])) {
            $username=$_SESSION['username'];

    $query = "Select * from userInfo where useri=:username ";
    $stmt=$db->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    if ($result=$stmt->fetch()) {
      echo $result['about'];
    }
              } ?></textarea></td>

        </tr>
        <tr>
            <td> <label>Phone:</label> </td>
            <td><input class="input" type="text" value="<?php
              if (isset($_SESSION['username'])) {
            $username=$_SESSION['username'];

    $query = "Select * from userInfo where useri=:username ";
    $stmt=$db->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    if ($result=$stmt->fetch()) {
      echo $result['phone'];
    }
              } ?>" name="" readonly></td>

        </tr>
        <tr>
          <td> <a href="#" data-toggle="modal" style="border:none; font-size:2em;" data-target="#signup">Edit</a></td>
        </tr>
    </table>
</div>
<div style="float: right; padding-right:2em;">
    <table>
        <tr>
            <td>
                <label>Status <?php if (isset($_SESSION['username'])) {
                echo ":Active";
                } ?></label>
            </td>
        </tr>

    </table>
</div>
</div>
</div>
  </div>
  <div class="modal fade my-modal" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Give form to your profile</h4>
        </div>
        <div class="modal-body">
          <form class="form" method="post" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">First Name:</label>
          <input type="text" class="form-control" required name="firstName" id="exampleInputEmail1" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last Name:</label>
          <input type="text" class="form-control" required name="lastName" id="exampleInputEmail1" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gender:</label>
          <input type="radio" name="gender" value="F" id="exampleInputEmail1" class="form-control" >
          <span class="label-visible">
            <span class="fake-radiobutton"></span>
            Female
          </span>
          <input type="radio" name="gender" value="M" id="exampleInputEmail1" class="form-control">
          <span class="label-visible">
            <span class="fake-radiobutton"></span>
            Male
          </span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" required>Birthday</label>
          <input type="text" class="form-control" name="date" id="exampleInputPassword1" placeholder="Enter Birthday yy-mm-dd">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">About:</label>
          <input type="textarea" required maxlength="150" class="form-control" name="about" id="exampleInputPassword1" placeholder="About You">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone Number:</label>
          <input type="text" class="form-control" required name="phone" id="exampleInputEmail1" placeholder="Phone Number">
        </div>
        <button type="submit" name="create" class="btn btn-primary btn-lg">Create Profile!</button>
      </form>
        </div>
        <div class="modal-footer">


        </div>
      </div>
    </div>
  </div>
  <script>
 $(document).ready(function(){
      $('input[type="radio"]').click(function(){
           var gender = $(this).val();
           $.ajax({
                url:"login_success.php",
                method:"POST",
                data:{gender:gender},
                success:function(data){
                     $('#result').html(data);
                }
           });
      });
 });
 </script>

</body>
<?php
if (isset($_SESSION['username'])) {
  if (isset($_POST['create'])) {
$username=$_SESSION['username'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$about=$_POST['about'];
$phone=$_POST['phone'];
if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
    {
      if (preg_match('/^[0-9\-\(\)\/\+\s]*$/',$phone)) {


$query="SELECT * from userInfo where useri =:username";
$stmt=$db->prepare($query);
$stmt->bindParam(":username",$username);
$stmt->execute();
   if ($result=$stmt->fetch(PDO::FETCH_OBJ)) {
     $sql="UPDATE userInfo SET firstName=:first, lastName=:last,Gender=:g,birthday=:birth,about=:ab,phone=:ph WHERE useri='$username'";
     $stmtInsert=$db->prepare($sql);
     $stmtInsert->bindParam(":first",$firstName);
     $stmtInsert->bindParam(":last",$lastName);
     $stmtInsert->bindParam(":g",$gender);
     $stmtInsert->bindParam(":birth",$date);
     $stmtInsert->bindParam(":ab",$about);
     $stmtInsert->bindParam(":ph",$phone);
$rezultati=$stmtInsert->execute();
if ($rezultati) {
  echo '<script>alert("Your data successfully updated")</script>';
}
}

else {

  $sql="INSERT INTO userInfo VALUES(?,?,?,?,?,?,?)";
  $stmtInsert=$db->prepare($sql);
   $result=$stmtInsert->execute([$username,$firstName,$lastName,$gender,$date,$about,$phone]);
$result=$stmt->execute();
if ($result) {
echo '<script>alert("Your profile is completed")</script>';
}
}

}else {
  echo '<script>alert("Numri juaj duhet te jete sipas standarteve te parapara!")</script>';
}
}
else{
    echo '<script>alert("Data juaj duhet te jete ne formatin yyyy-mm-dd!")</script>';
}
}
}
 ?>
<footer >

    <?php
require('footeri.php');
   ?>


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/index.js"></script>
<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
<style type="text/css">
@import "compass/css3";

@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed);
@mixin clearfix {
	*zoom:1;
    &:before, &:after {
		content: "";
		display: table;
	}
    &:after {
		clear: both;
	}
}
#log{
	font-family: 'Roboto Condensed', sans-serif;
	font-size:20px;
   text-decoration:none;
   border: none;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.links{
	@include clearfix;
	padding:50px;
	@include box-sizing(border-box);
	text-align: center;


}
.link-effect-13 {
	#log {
		color: #797878;
		margin: 0 20px;
		padding: 10px;
		position: relative;
		overflow: hidden;
		display: inline-block;
		@include transition(.3s ease-out .3s);
		span{
			&::before{
				width: 100%;
				height: 2px;
				background: white;
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				@include translateX (-100%);
				@include transition (.3s);
			}
			&::after{
				width: 100%;
				height: 2px;
				background: white;
				content: "";
				position: absolute;
				right: 0;
				bottom: 0;
				@include translateX (100%);
				@include transition (.3s);
			}
		}
		&::before {
			width: 2px;
			height: 100%;
			background: white;
			content: "";
			position: absolute;
			left: 0;
			top: 0;
			@include translateY (100%);
			@include transition (.3s);

		}
		&::after {
			width: 2px;
			height: 100%;
			background: white;
			content: "";
			position: absolute;
			right: 0px;
			bottom: 0;
			@include translateY (-100%);
			@include transition (.3s);

		}
		&:hover{
			color: white;
			&::before,
			&::after {
				@include translateX (0);
			}
			span{
				&::before,
				&::after {
				@include translateX (0);
				}
			}
		}
	}
}


    input[type="date"] {
  display:block;
  position:relative;
  padding:1rem 3.5rem 1rem 0.75rem;

  font-size:1rem;
  font-family:monospace;
  color: white;
  border:1px solid #E3E2E0;
  border-radius:0.25rem;

  background:
    #1F2531
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' viewBox='0 0 20 22'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23688EBB' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' transform='translate(1 1)'%3E%3Crect width='18' height='18' y='2' rx='2'/%3E%3Cpath d='M13 0L13 4M5 0L5 4M0 8L18 8'/%3E%3C/g%3E%3C/svg%3E")
    right 1rem
    center
    no-repeat;

  cursor:pointer;
}
input[type="date"]:focus {
  outline:none;
  border-color:white;
  box-shadow:0 0 0 0.25rem rgba(0, 120, 250, 0.1);
}

::-webkit-datetime-edit {}
::-webkit-datetime-edit-fields-wrapper {}
::-webkit-datetime-edit-month-field:hover,
::-webkit-datetime-edit-day-field:hover,
::-webkit-datetime-edit-year-field:hover {
  background:#1F2531;
}
::-webkit-datetime-edit-text {
  opacity:0;
}
::-webkit-clear-button,
::-webkit-inner-spin-button {
  display:none;
}
::-webkit-calendar-picker-indicator {
  position:absolute;
  width:2.5rem;
  height:100%;
  top:0;
  right:0;
  bottom:0;

  opacity:0;
  cursor:pointer;

  color:#E3E2E0;
  background:#1F2531;

}

input[type="date"]:hover::-webkit-calendar-picker-indicator { opacity:0.05; }
input[type="date"]:hover::-webkit-calendar-picker-indicator:hover { opacity:0.15; }


.radio-button{
  position: relative;
  margin: 20px 0;
}
.checkbox { display: block; }

.radio-button input {
  position: absolute;
  margin: 5px;
  padding: 0;
  /* for mobile accessibility (iOS Label Bug) */
  visibility: hidden;
}
.radio-button .label-visible {
  margin-left: 1.2em;
  margin-bottom: 0;
}

.fake-radiobutton{
  position: absolute;
  display: block;
  top: 0;
  left: 3px;
  width: 20px;
  height: 20px;
  border: 1px solid #1F2531;
  background-color: #E3E2E0;
}
.fake-radiobutton:after {
  content: "";
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 16px;
  background: #1F2531;
  transform: translateX(-50%) translateY(-50%);
}

.fake-radiobutton { border-radius: 50%; }
.fake-radiobutton:after { border-radius: 50%; }

input[type="radio"]:checked + span .fake-radiobutton:after { display: block; }

.stats{
    margin-left: 2em;
}
.acc-set{
    margin-right: 2em;
    margin-left: 2em;

}

.input{
    background-color: #1F2531;
    height: 25px;
    border-radius: 5px;
    border: solid 1px #E3E2E0 ;
    color: white;
}
.outterd{
    background-color: #ffffff;
    margin-top: 10em;
    margin-right: 1em;
    margin-left: 1em;
    border-radius: 1.5em;
    padding: 1em;
    height: 71em;

}
.inner-cont{
    background-color: #B86366;
    color: white;
    height: 44em;
    margin: 1em;
    border-radius:1.5em;
    border: solid 20px #E3E2E0;
    font-size: 1.5em;
}

 .container {
     max-width: 960px;
     margin: 30px auto;
     padding: 20px;
     border-bottom: solid 1px #E3E2E0;
}

 .avatar-upload {
     position: relative;
     max-width: 205px;
     margin: 50px auto;
}
 .avatar-upload .avatar-edit {
     position: absolute;
     right: 12px;
     z-index: 1;
     top: 10px;
}
 .avatar-upload .avatar-edit input {
     display: none;
}
 .avatar-upload .avatar-edit input + label {
     display: inline-block;
     width: 34px;
     height: 34px;
     margin-bottom: 0;
     border-radius: 100%;
     background: #fff;
     border: 1px solid transparent;
     box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
     cursor: pointer;
     font-weight: normal;
     transition: all 0.2s ease-in-out;
}
 .avatar-upload .avatar-edit input + label:hover {
     background: #f1f1f1;
     border-color: #d6d6d6;
}
 .avatar-upload .avatar-edit input + label:after {
     content: "\f040";
     font-family: 'FontAwesome';
     color: #757575;
     position: absolute;
     top: 10px;
     left: 0;
     right: 0;
     text-align: center;
     margin: auto;
}
 .avatar-upload .avatar-preview {
     width: 192px;
     height: 192px;
     position: relative;
     border-radius: 100%;
     border: 6px solid #f8f8f8;
     box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
     background: #1F2531
}
 .avatar-upload .avatar-preview > div {
     width: 100%;
     height: 100%;
     border-radius: 100%;
     background-size: cover;
     background-repeat: no-repeat;
     background-position: center;
}
body{
    background-color: #1F2531;
}
</style>
