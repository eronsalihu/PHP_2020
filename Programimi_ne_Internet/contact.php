
  <?php
  require('headeri.php');
   ?>
   <?php
   $name = $email = $gender = $message = $subject = "";
   $errName = $errEmail = $errGender = $errMessage = $errSubject = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if(empty($_POST["name"]))
     {
       $errName = "Name is required";
     }
     else{
       $name = $_POST["name"];
     }
   if(empty($_POST["email"]))
   {
    $errEmail = "Email is required";
   }
   else{
    $emailRegex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    if (!preg_match($emailRegex, $_POST["email"])) {
      $errEmail = "Please enter a valid email";
    }
    $email = $_POST["email"];
   }
   if(empty($_POST["gender"]))
   {
    $errGender = "Gender is required";
   }
   else{
    $gender = $_POST["gender"];
   }
   if(empty($_POST["subject"]))
   {
    $errSubject = "Subject is required";
   }
   else{
    $subject = $_POST["subject"];
   }
   if(empty($_POST["message"]))
   {
    $errMessage = "Message is required";
   }
   else{
    $message = $_POST["message"];
   }
   }

   ?>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   <script type="text/javascript">
 function sendMessage() {

       $.ajax({
           url: "contactform.php",
           data:'Name='+$("#firstName").val()+'&userEmail='+
           $("#email").val()+'&subject='+
           $("#subject").val()+'&content='+
           $(message).val(),
           type: "POST",
           async:true,
           success: function (data) {
              console.log(data);
               $("#mail-status").html(data);
           },
           error: function ()
           {
               console.log(data);
           }
       });

}
</script>
    <div class="none" style="background:unset !important">
    <div class="innerdivv" style="margin-left: 1em;">
<style type="text/css">

       #signupi{
          background-color:#7F7C7C;
          color:#1b3b9a;
          color:white;
        }
     form .submit{
     background:#7F7C7C;
     border-color:transparent;
       }
    .innerdiv{

      background-color: :white;
    }
    .none{
  
    box-sizing: content-box;
   
    margin-left: 21%;
 
    width: 56%;
    height: 20%;
    margin-top: 15%;
    margin-bottom: :30%;
    align-content: center;
    }
    .form-control   {
  
    width: 300px;
    background-size: 50px;
    background: transparent;
 
    border-color:transparent;
    border: none;
    border-bottom: 4px solid #464646;
    }
    #contactForm{
    padding-top:5%;
    background-color:white ;
    margin-bottom:10%;
    }
   </style>
    <form id="contactForm" action="" method="post">
           		<br>
           		<input type="text" name="name" id="firstName" class="form-control" placeholder="Enter your name"value=<?php echo $name ?>><br><br>
              <button type="button" class="save" id="signupi">Save Name</button>
              <button type="button" class="access" id="signupi">Get Name</button><br>
              <span class="error"><?php echo $errName ?></span><br>
           		
              <br>
              <input type="text" id="email" name="email"class="form-control" placeholder="Enter your email"value=<?php echo $email ?>><br>
              <span class="error"><?php echo $errEmail ?></span><br>
           		
           		Gender:<br>
           		<input type="radio" name="gender"class="form-control" value="female" checked=""> Male<br>
              
           		<input type="radio" name="gender"class="form-control" value="other"value=<?php echo $gender ?>> Female<br>
              <span class="error"><?php echo $errGender ?></span><br>
             <br>
           		<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"size="20" value=<?php echo $subject ?>><br>
           		 <span class="error"><?php echo $errSubject ?></span><br>
             <br>
              <br>
           		<textarea name="message" placeholder="Your message to us.. "size="500"class="form-control" value=<?php echo $message ?>></textarea><br>
               <span class="error"><?php echo $errMessage ?></span><br>
             <br>
           		<div>Characters left:<span id="char-left"></span></div>
           		Accept Terms and Conditions:<br>
           		<input type="checkbox" name="terms" class="form-control" size="50"><br><br>
           		<input type="submit"  name="sub" class="form-control submit" value="Send" onclick="sendMessage();">
   	     	</form>
          <div id="mail-status"></div>
   		    </div>

   <script>
   var d = new Date();
   document.getElementById("demo").innerHTML = d;
   </script>


               </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script>
   /*function validateEmail(email) {
   	    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   	    return re.test(String(email).toLowerCase());
   	}*/
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
                         /*  if(!validateEmail($('input[name="email"]').val()))
   	  		{
   	  			alert("Email is not valid!");
   	  			return false;
   	  		}*/
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

  <footer >
  <?php
require('footeri.php');
   ?>
