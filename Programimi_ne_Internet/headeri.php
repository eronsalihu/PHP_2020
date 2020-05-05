<!DOCTYPE html>
<html >
<head>
	<title>Smart App</title>
	<link rel="stylesheet" type="text/css" href="projekti.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<div id="map"></div>
    <script>
    var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {

          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
  $(".smart").click(function(){
    $(".Free_Psd").slideToggle("slow");
	$(".smart");

  });
});
$(document).ready(function(){
  $(".qqq").click(function(){
    $("#benefi").slideToggle("slow");
	$(".qqq");

  });
});

$(document).ready(function(){

  $(".emaili").focus(function(){
    $(this).css("background-color", "#B86366");

  });
  $(".emaili").blur(function(){
    $(this).css("background-color","#1F2531");
  });
});
/*$(function(){

  $("button").click(function(){
    $(".footer-panel").hide();
  });

  $("#btn2").click(function(){
    $(".footer-panel").hide();

  });

  $(".footer-panel").click(function(){

	$(".footer-panel").hide();
  });
*/

</script>
</head>

<style>
#newspaper {
  /* Old Chrome, Safari, Opera */
  -webkit-column-count: 2;
  -webkit-column-width: 30px;

  /* Old Firefox */
  -moz-column-count: 2;
  -moz-column-width: 30px;

  /* Statndard syntax */
  column-count: 2;
  column-width: 30px;
}
</style>
<script type="text/javascript">
	var w;

function startWorker() {
  if(typeof(Worker) !== "undefined") {
    if(typeof(w) == "undefined") {
      w = new Worker("demo_workers.js");
    }
    w.onmessage = function(event) {
      document.getElementById("result").innerHTML = event.data;
    };
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
  }
}

</script>

<body onload="startWorker()">
	<div>
<section class="smarti_free">

		<p class="smart" >
			SMART APP <br>
		</p>
		<p class="Free_Psd" >
			 All About Smart Apps Here
		</p>
		</section>
	<header>

      <nav id="mainMenu">
         <ul>
           <li><a  id="ani" href="indexi.php" >Home</a></li>|
           <li><a id="ani" href="style_demo.php" >Style Demo</a></li>|
           <li><a id="ani" href="contact.php">Contact</a></li>|
           <li id="ani" class="dropdown"><a class="dropdbtn" >Dropdown</a>
           	<div class="dropdown-content">
           		<a id="dropdowmia" href="login.php" > LogIn/SignUp</a>
           		<a id="dropdowmai" href="https://smartapp.io/" target="_blank">Smart App</a>
           		<a id="dropdowmia" href="https://www.apple.com/ios/app-store/" target="_blank"> App Store</a>
							<a id="dropdowmia" href="https://play.google.com/" target="_blank">Play Store</a>
           	</div></li>
           <li><a id="ani" href="gallery.php" >Gallery</a></li>
         </ul>
      </nav>
      <p class="border"></p>
  </header>
</div>
