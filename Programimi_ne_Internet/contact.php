<?php
require('headeri.php'); ?>
<style >


.wrapper {
display: grid;
grid-template-columns: 140px 140px 140px;
grid-gap: 10px;
color: #444;
margin-left: 36em;

}
.checkbox{background-color:#fff;display:inline-block;height:28px;margin:0 .25em;width:28px;border-radius:4px;border:1px solid #ccc;+}
 .checkbox span{display:block;height:28px;position:relative;width:28px;padding:0}
 .checkbox span:after{-moz-transform:scaleX(-1) rotate(135deg);-ms-transform:scaleX(-1)rotate(135deg);
    -webkit-transform:scaleX(-1) rotate(135deg);transform:scaleX(-1) rotate(135deg);
    -moz-transform-origin:left top;
    -ms-transform-origin:left top;
    -webkit-transform-origin:left top;
    transform-origin:left top;
    border-right:4px solid #fff;border-top:4px solid #fff;
    content:'';
    display:block;height:20px;
    left:3px;position:absolute;top:15px;width:10px}
    .checkbox span:hover:after{border-color:#999}
  .checkbox input{display:none}
  .checkbox input:checked + span:after{-webkit-animation:check .8s;-moz-animation:check .8s;-o-animation:check .8s;animation:check .8s;border-color:#555}
.checkbox input:checked + .default:after{border-color:#444}

.box {
background-color: #444;
color: #fff;
border-radius: 5px;
padding: 20px;
font-size: 150%;
}
h1#h111{
  color: #444;
  margin-top: 0.2em;
  margin-bottom: 0.2em;
  font-size: 1.7em;

}
</style>
<div class="none">
 <div class="innerdivv" style="margin-left: 1em;">
        	<form id="contactForm" action="mailto:info@smartapp.com" method="post" enctype="text/plain">
        		Name:<br>
        		<input type="text" name="name" required="" id="firstName" class="form-control" value="<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $email= $_POST['wEmail'];
                $vargu=explode('@',$email);
                $name=$vargu[0];
                echo $name;
              }

            ?>">
          <br><br>
            <button type="button" class="save" id="signupi">Save Name</button>
      <button type="button" class="access" id="signupi">Get Name</button><br>

        		E-mail:<br>
            <input type="text" name="email"class="form-control" required="" value="
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
            echo $_POST['wEmail'];
          }
             ?>">  <br>
        		Gender:<br>
        		<input type="radio" name="gender"class="form-control" value="female" checked=""> Male
        		<input type="radio" name="gender"class="form-control" value="other"> Female<br>
            Subject:<br>
        		<input type="text" name="subject" class="form-control" size="20" required=""><br>
        		Message:<br>
        		<textarea name="message" size="500"class="form-control" required=""></textarea><br>
        		<div>Characters left:<span id="char-left"></span></div>
        		Accept Terms and Conditions:<br>
        		<input type="checkbox" name="terms" class="form-control" size="50"><br><br>
        		<input type="submit" class="form-control submit" value="Send">
	     	</form>
		    </div>

		    <div id="contact-list">

		    </div>


<p id="demo"></p>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
var charactersLeft = 0;
  $( document ).ready(function() {
     charactersLeft = $("textarea[name='message']").attr("size");
     $("#char-left").text(charactersLeft);
  });
$("#contactForm").submit(function(){
    try {
    //console.acceptd();
    if($('input[name ="terms"]').prop("checked") == false)
      {
        alert("You must accept terms and conditions")
      return false;
      }
                      if(!validateEmail($('input[name="email"]').val()))
      {
        alert("Email is not valid!");
        return false;
      }
      alert("Message Sent!");
    }


              catch(error) {
      console.error(error);
  }
  });
  if(localStorage) {
    $(document).ready(function() {
      $(".save").click(function() {
        // Get input name
        var firstName = $("#firstName").val();

        // Store data
          localStorage.setItem("first_name", firstName);
        alert("Your first name is saved.");
      });
      $(".access").click(function() {
        // Retrieve data
          alert("Hi, " + localStorage.getItem("first_name"));
      });
    });
  } else {
      alert("Sorry, your browser do not support local storage.");
  }

$("textarea[name='message']").keydown(function(e){
    if(e.keyCode == 8)
    {
      charactersLeft++;
      $("#char-left").text(charactersLeft);
    }
    else
    {
      if(charactersLeft > 0)
      {
        charactersLeft--;
        $("#char-left").text(charactersLeft);
      }
      else
      {
        return false;
      }
    }
  });
</script>
<script>
  var contacts = ['Dave', 'Alice', 'Bob'];
  var emails = ['dave@smartapp.com','alice@smartapp.com','bob@smartapp.com'];

  var contactObject = [];
  for(var i = 0; i<contacts.length; i++)
  {
    var obj = {
      name:contacts[i],
      email:emails[i]
    };
    contactObject.push(obj);
  }
  var ul = '<ul>';
  for(var i = 0; i<contactObject.length; i++)
  {
    ul = ul + '<li><b>'+contactObject[i].name+'</b> <i>'+contactObject[i].email+'</i></li>';
  }
  ul = ul + '</ul>';
  $("#contact-list").html(ul);
  function updateBackground() {
var
  hr = (new Date()).getHours(),
  body = document.body,
  bstyle = body.style,
  hello = document.querySelector(".hello");
if (hr < 10) {
  bstyle.backgroundColor = "#282C34";
  bstyle.color = "black";
  hello.innerText = "Have a good morning";
} else if (hr < 20) {
  bstyle.backgroundColor = "#1F2533";
  bstyle.color = "white";
  hello.innerText ="Have a good day!";
} else {
  bstyle.backgroundColor = "#41A5EE";
  bstyle.color = "white";
  hello.innerText = "Have a good night!";
}
}

setInterval(updateBackground, 1000 * 60);
updateBackground();
</script>


<?php
require('footeri.php');
 ?>
