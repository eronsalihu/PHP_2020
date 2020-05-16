<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .fa {
    padding: 20px;
    font-size: 20px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    margin-left:3.1em;
  }

  .fa:hover {
      border:0;
      background-color:white;
      padding: 21px;
      opacity: 0.7;
      color:purple;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }



  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }



</style>
</head>

<?php
  $link_to_facebook = "https://www.facebook.com/Photo-Gallery-614164155297924/";
  $link_to_twitter = "https://thenextweb.com/twitter/2011/08/22/twitter-rolls-out-user-galleries-which-show-every-image-youve-tweeted/";
  $link_to_youtube = "https://www.youtube.com/watch?v=nfewBuxsuBk";
  $link_to_instagram = "https://www.instagram.com/instagram/?hl=en";

?>

<body>


<a href='<?php echo $link_to_facebook; ?>' target='_blank' class="fa fa-facebook"></a><br>
<a href='<?php echo $link_to_twitter; ?>' target='_blank' class="fa fa-twitter"></a><br>
<a href='<?php echo $link_to_youtube; ?>' target='_blank' class="fa fa-youtube"></a><br>
<a href='<?php echo $link_to_instagram; ?>' target='_blank' class="fa fa-instagram"></a><br>

      
</body>
</html> 
