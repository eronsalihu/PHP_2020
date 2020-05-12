 <?php
  require('headeri.php');
   ?>

<head>
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
          <div class="container">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview" >
            <div id="imagePreview" >
            </div>

        </div>
    </div>
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
            <td><input class="input" type="Email" name="" ></td>
        </tr>
        <tr>
            <td> <label>Username:</label></td>
            <td><input class="input" type="text" name="" ></td>
        </tr>
        <tr>
            <td>
                 <label>Password:</label></p>
            </td>
            <td><input class="input" type="password" name="" ></td>
        </tr></table></div>
        <div style="float: left;" class="prof-set">
            <table>
        <th><label>Profile Settings</label></th>
        <tr>
            <td> <label>First Name:</label> </td>
            <td><input class="input" type="text" name=""></td>

        </tr>
        <tr>
            <td> <label>Last Name:</label> </td>
            <td><input class="input" type="text" name=""></td>

        </tr>
        <tr>
            <td> <label >Gender:</label> </td>
            <td>
                <label class="radio-button">
  <input type="radio" name="radio" checked="checked">
  <span class="label-visible">
    <span class="fake-radiobutton"></span>
    Male
  </span>
</label>

<label class="radio-button">
  <input type="radio" name="radio">
  <span class="label-visible">
    <span class="fake-radiobutton"></span>
    Female
  </span>
</label></td>

        </tr>
        <tr>
            <td> <label>Birthday:</label> </td>
            <td><input type="date" value="2020-01-01" min="2005-01-01" max="2100-01-01"></td>

        </tr>
        <tr>
            <td> <label>About:</label> </td>
            <td><textarea class="input"></textarea></td>

        </tr>
        <tr>
            <td> <label>Phone:</label> </td>
            <td><input class="input" type="text" name=""></td>

        </tr>
    
    </table>
</div>
<div style="float: right;">
    <table>
        <tr>
            <td>
                <label>Status</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>User Rating</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Member Since</label>
            </td>
        </tr>
    </table>
</div>
</div>
</div>
</body>
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
    height: 54em;

}
.inner-cont{
    background-color: #B86366;
    color: white;
    height: 32em;
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
