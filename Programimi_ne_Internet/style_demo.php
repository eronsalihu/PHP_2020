<?php require('headeri.php'); ?>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".ffoto1").fadeToggle();

  });
  $("#btn2").click(function(){
    $(".ffoto1").fadeiIn("fast");
  });
   $("#btn3").click(function(){

    $(".ffoto1").fadeiOut(3000);
  });
});



</script>
<style >
  *{
    margin: 0;
    padding: 0;
  }
div.fotoja1{

  text-align: center;
  margin-right: 10em;
}
img.ffoto1{
  margin-top: 2em;
  border-radius: 10px;
  display: block;
  margin-left: 2em;;
  margin-right: 2em;
  box-shadow: 2px 2px 7px 1px #1C6EA4;
  text-shadow: 1px 2px 2px #1C6EA4;

}
div.butonat{
  margin-top: 5em;
  margin-left: 13em;
  margin-right: auto;
}
button{
  margin-left: 0.8em;
  margin-right: 0.8em;
  border-radius: 12px;
  padding: 5px;
  font-size: 0.8em;
  font-family:wide latin;
  color:#24292E;
  background-color: #D6D5D0;
  box-shadow: 2px 2px 7px 1px #1C6EA4;

}
div.lajmet{
  width: 24em;
  height: 31em;
background-color: #ffffff;
margin-top: 5em;
margin-right: 1em;
margin-left: 1em;
border-radius: 1.5em;
padding: 1em;
margin-left: 2em;
margin-right: 2em;
color: black;

}
h1.a,h2.a{
  font-size: 1.2em;
  font-family: bauhaus 93;
  text-align: center;
  padding-top: 0.5em;
  color:#1F2531;
}
p.b{
  font-size: 1em;
  font-family:baskeville old face;
  color: #8D8D8D;
}
#kliko{
  border: 2px solid #8D8D8D;
  padding: 0.4em;
  border-radius: 8px;
  background-color: #2EC551;
  margin-left: 1em;
  font-family: Arial black;
  color: white;
}
#h11{
  color: #B86366;
  margin-top:3em;
  text-align: center;
  font-size: 1.7em;
text-shadow: 1px 2px 2px #1C6EA4;
}
.booxi {
  margin-top: 1em;
  margin-left: 2em;
  padding: 12px;
  background-image: url(backi1.jpg);
  width: 21em;
  height: 15em;
  border-radius: 12px;
}
#div1, #div2 {
  float: left;
  width: 100px;
  height: 35px;
  margin: 10px;
  padding: 10px;
  border: 1px solid black;
}

.booxi1 {
  margin-top: 1em;
  margin-left: 5em;
  padding: 12px;
  background-image: url(backi2.jpg);
  width: 21em;
  height: 15em;
  border-radius: 12px;
}
.dragii{
  margin-left: 5em;
  margin-right: 10em;
}
video{
  margin-left: 5em;
  margin-top: 2em;
  border-radius: 10px;
  width: 30em;
text-shadow: 1px 2px 2px #1C6EA4;

}

.vlerso{
  padding-left: 2em;
  padding-right: 2em;
  margin-left: 2em;
border: 1px solid #DED2CA;
margin-top: 0.5em;
margin-right: 7em;
font-size: 1em;
color: #68D1FF;
border-radius: 10px;
}
.vlereso{
  font-size: 1.3em;
  margin-top: 2em;
  margin-left: 2em
  margin-right:12em;
  color: #F1E9C2;
  font-family: rockwell;
}
.boxes {
  margin-top: 1em;
  padding: 50px;
  background: #484848;
  width: 15em;
  border-radius: 20%
}


input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 20px;
  font: 14px/20px 'Open Sans', Arial, sans-serif;
  color: #ddd;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #6cc0e5;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.h11
{
  padding: 0.7em;
  color: #FF603B;
}
p.pp{
  padding: 0.7em;
  color: #CC0000;
}

  </style>
    <body onload="startGame()">

  <div class="fotoja1">
  <div class="butonat">

  <button>Toggle Effect</button>
  <button id="btn2">Fade in the figures</button>
  <button id="btn3">Fade out the figures</button>
    </div>
<table>
<tr>
  <td>
<img src="smart_life.png" alt="Fotoja nuk mund te shfaqet" class="ffoto1" >
</td>
<td>
<img src="smart_thingss.jpg" alt="Fotoja nuk mund te shfaqet" class="ffoto1" width="400px" height="250px" >
</td>
<td>
<img src="smartthings.jpg" alt="Fotoja nuk mund te shfaqet" class="ffoto1" width="400px" height="250px" >
</td>
</tr>
</table>
</div>
<div class="lexo!!!">
<a href="#!" class="button" data-micron="bounce">  <h1 id="h11">For a good using of SmartThings app you beetter read the following content!!!</h1> </a>
</div>
<table>
  <tr>
<td>
<div class="lajmet">
<h1 class="a">SmartThings is the easy way to turn your home into a smart home</h1>
<p class="b">SmartThings can teach your home a few new tricks and make life a little bit easier.</p>
<h2 class="a">When You Wake Up</h2>
<p class="b">When you wake up in the morning SmartThings can turn on the lights,turn up the thermostat,turn on the radio and turn on
the coffe machine.  </p>
<h2 class="a">When you leave home</h2>
<p class="b">SmartThings can lock all the doors,turn off all the lights,turn down the thermostat,and turn on the security camera</p>
<h2 class="a">While you're away</h2>
<p class="b">SmartThings can send you video of alerts if there's unexcepted activity,warn you if theres a water leak,and much more.</p>
<h2 class="a">When you arrive home</h2>
<p class="b">SmartThings can open the garage door automatically,adjust the color of your lights,turn on your favorite music and
control your home appliances</p>
</div>
</td>
<td>
<div class="lajmet">
  <h1 class="a">Home Security</h1>
  <p class="b">See how ADT and SmartThings can help make your home secure and smart.24/7 peace of mind whether you’re home or away.</p>
<h2 class="a">Help protect your family with a fast-response ADT home security system.</h2>
<p class="b">Your home security system needs a brain, so get started with an <b><i>ADT Security Hub</i></b>.
  It features a 7-inch touchscreen control panel, a built-in siren,
  battery and cellular data backup, and dual-encryption wireless technology.</p>
  <h2 class="a">Help secure your home with a range of easy-to-install wireless detectors and alarms.</h2>
  <p class="b">Add <b><i>ADT detectors and alarms</i></b> to help protect your home from intrusion, fire, floods, and more.
     Choose from a range of devices which can be installed in minutes.</p>
     <h2 class="a">Automate your home with SmartThings and a wide range of compatible devices</h2>
     <p class="b">Turn your home into a smart home with your ADT Security Hub. Choose from a wide range of <b><i>Works with
        SmartThings devices</i></b>, including lights, cameras, doorbells, door locks, thermostats, sensors, and more</p>
</div>
</td>
<td>
<div class="lajmet">
  <h1 class="a">Getting Started</h1>
  <p class="b">Getting started with SmartThings is so esasy like <big><b><i>1,2,3</i></b></big></p>
    <h2 class="a">Step 1/3
SmartThings</h2>
<p class="b">Your smart home needs a brain, so get started with SmartThings.
   It connects wirelessly with a wide range of smart devices and makes them work together.</p>
   <h2 class="a">Step 2/3
Smart Devices</h2>
<p class="b">Next, add some smart devices and put your home to work.
  SmartThings works with a wide range of connected devices, including lights, cameras, locks, thermostats, sensors, and more.</p>
  <h2 class="a">Step 3/3
Smart Homes</h2>
<p class="b">Step 3/3
Smart Homes
Finally, use the Google Assistant, Amazon Alexa, or one of the SmartThings apps to control your smart home.</p>
<br>
<br>
<p class="b">If you want to ask a question <a  class="linket" href="https://www.smartthings.com/faq" target="_blank"><span id="kliko">Click On Me!</span> </a> </p>
</div>
</td>
</tr>
</table>
<table>
  <tr>
    <td>
      <div class="booxi">
      <h1 class="h11">Technology allows us to do lots of things easier</h1>
      <p class="pp">Using educational technology for drill and practice of basic skills can be highly effective according to
         a large body of data and a long history of use (Kulik, 1994).
         Students usually learn more, and learn more rapidly, in courses that use computer assisted instruction (CAI)</p>
      </div>
    </td>
  <td>
  <video src="videojaa.mp4" autoplay controls>
  </video>
  </td>
  <td>
    <div class="booxi1">
    <h1 class="h11" id="demo">Applications of Technology to Advanced Skills</h1>
    <p class="pp">The application of educational technologies to instruction has progressed beyond the use of basic drill and practice software,
       and now includes the use of complex multimedia products and advanced networking technologies.
       Today, students use multimedia to learn interactively and work on class projects. </p>
    </div>
  </td>
<tr>
</table>

<!-- Loja -->
<button  onclick="window.location.href = 'game.php'" style="font-size:1em; margin-left:39em; margin-top:5em; height:50px;width:150px;
	border-radius:7px;color:white;background-color:#B86466;"><i class="fa fa-gamepad"></i>  GAME</button>

<br>



<form class="" style="display: inline-block;" action="style_demo.php" method="post">
  <input type="text" name="shteti" class="form__field" placeholder="Enter Country Name" required value="">
  <input type="submit" name="kerko" style=""id="search" style="" value="Search">
</form>

<style media="screen">
#search{
  font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;
  background: #576E86;
	border: none;
	padding: 10px 22px 24px 22px;
	border-radius: 5px;
	color: #A8BACE;
}
#search:hover{
  background: #394D61;
}
.form__field {
  font-family: inherit;
  margin-left: 27em;
  margin-top: 1em;
  margin-bottom: 1em;

  border: 0;
  border-bottom: 2px solid $gray;
  outline: 0;
  font-size: 1.3rem;
  color: $white;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;

  &::placeholder {
    color: transparent;
  }

  &:placeholder-shown ~ .form__label {
    font-size: 1.3rem;
    cursor: text;
    top: 20px}}

</style>

 <?php
require "vendor/autoload.php";
if (isset($_POST['kerko'])) {
$shteti=$_POST['shteti'];
$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/statistics?country=".$shteti,
  array(
    "X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
    "X-RapidAPI-Key" => "525072fd78mshda77b2165e2c7cap1bc151jsn62510dd20d86"
  )
);
echo "
   <table class='table' style='border-collapse: collapse;
  width: 100%;'>
      <thead>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>Country</th>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>New</th>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>Active</th>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>Critical</th>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>Recovered</th>
        <th style='padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;'>Total</th>
      </thead>
      <tbody>";

  foreach ($response->body as $key => $statistics) {
      if(is_Array($statistics)){
        foreach ($statistics as $index => $value) {
          echo "<tr><td style='padding: 8px;
          text-align: left;
          border-bottom: 1px solid #ddd;'>".
            $value->country
          ."</td>";
          foreach ($value as $key => $v) {
            if (isset($v->new)) {
              echo "<td style='padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;'>".$v->new."</td>";
            }
            if(isset($v->active)){
              echo "<td style='padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;'>".$v->active."</td>";
            }
            if (isset($v->critical)) {
              echo "<td style='padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;'>".$v->critical."</td>";
            }
            if(isset($v->recovered)){
              echo"<td style='padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;'>".$v->recovered."</td>";
            }
            if(isset($v->total)){
              echo "<td style='padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;'>".$v->total."</td></tr>";
              break;
            }

          }

          }
        }
      }


echo "</tbody></table>";

}
?>

<?php
require('footeri.php');
 ?>
<style media="screen">
input[type=text]{
  width:100%;

  border:2px solid #aaa;
  border-radius:4px;
  margin:8px 0;
  outline:none;
  padding:8px;
  box-sizing:border-box;
  transition:.3s;
}

input[type=text]:focus{
  border-color:dodgerBlue;
  box-shadow:0 0 8px 0 dodgerBlue;
}
.shteti{
    position:absolute;
    display:block;
    width:80%;
    height:60px;
    background:#fff;
    font-size:10pt;
    text-transform:capitalize;
    padding-left:20px;
    color:rgba(0,0,0,.1);
    @include prefix(box-shadow, 1px 1px 20px rgba(0,0,0,.2));
    border:none;
    @include prefix(border-radius,4px);
    @include prefix(transition,all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55));
     &:focus,
     &:active:focus{
      outline:none;
      padding-left:30px;
     }
  }

.shteti{
  margin-bottom:10%;
  z-index:2;
  @include prefix(transition , .5s);
}


</style>
