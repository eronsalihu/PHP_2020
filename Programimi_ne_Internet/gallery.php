<?php session_start(); ?> 
<?php require('headeri.php'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
  $(".photo").hover(function(){
    $(".teksti").slideToggle("slow");


  });
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
  $(".photo1").hover(function(){
    $(".teksti").slideToggle("slow");


  });
});
</script>

<script type="text/javascript">
	function buttonclick()
	{
		window.location="https://magazine.artland.com/gallery-sign-up/";
	}
</script>
  <style >
	body
	{
		background-color: #1F2531

	}
	h1
	{
		font-size: 3.1rem;
		line-height: 1.4;
		letter-spacing: 0.5rem;
		text-align: center;
		color :gold;
		margin-top: 50px;
		margin-right: 100px;
	}
	/* pjesa e 6 fotove me slider - poshte dhe larte */

	.foto1
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 38%;
		top: 550px;
		transform:translate(-250%,230%);
		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider2 9s infinite linear;
	}

	.foto2
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 45.5%;
		top: 550px;
		transform:translate(-120%,230%);
		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider 9s infinite linear;
	}
	.foto3
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 53%;
		top: 550px;
		transform:translate(10%,230%);

		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider 9s infinite linear;
	}
	.foto4
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 61%;
		transform:translate(140%,230%);
		top: 550px;
		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider2 9s infinite linear;

	}
	.foto5
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 38%;
		top: -175px;
		transform:translate(-250%,230%);
		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider1 9s infinite linear;

	}

	.foto6
	{
		width:13%;
		height:200px;
		position: absolute;
		left: 60.7%;
		transform:translate(140%,230%);
		top: -175px;
		background-image:url('images/techSliderimages/6.jpg');
		background-size: 100% 100%;
		box-shadow: 1px 2px 10px 10px black;
		animation:slider1 9s infinite linear;

	}
	/* pjesa e 6 fotove poshte dhe larte eshte deri ketu */

	/* pjesa e fotove rrotulluese */
		.fotorrotulluese{

			margin:auto;
			padding-top: -550px;
			height: 700px;
			box-sizing: border-box;
			margin-top: 220px;

		}
		.permbajtja
		{
			margin:auto;
			left: -18px;
			width: 190px;
			perspective: 1000px;
			position: relative;
			padding-top: 10px;


		}
		.permbajtja-1
		{
			width: 100%;
			position: absolute;
			float: right;
			animation:rotar 15s infinite linear;
			transform-style: preserve-3d;


		}
		.permbajtja-1:hover
		{
			animation-play-state: paused;
			cursor: pointer;


		}
		.permbajtja-1 figure
		{
			width: 100%;
			height: 120px;
			border:1px solid #4d444d;
			overflow: hidden;
			position:absolute;

		}

		.permbajtja-1 figure:nth-child(1)
		{
			transform:rotateY(0deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(2)
		{
			transform:rotateY(40deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(3)
		{
			transform:rotateY(80deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(4)
		{
			transform:rotateY(120deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(5)
		{
			transform:rotateY(160deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(6)
		{
			transform:rotateY(200deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(7)
		{
			transform:rotateY(240deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(8)
		{
			transform:rotateY(280deg) translateZ(300px);
		}
		.permbajtja-1 figure:nth-child(9)
		{
			transform:rotateY(320deg) translateZ(300px);
		}
		.shadow
		{
			position: absolute;
			box-shadow: 0px 0px 20px 0px #000;
			border-radius: 2px;
		}
		.permbajtja-1 img
		{
			image-rendering: auto;
			transition:all 300ms;
			width: 100%;
			height:100%;


		}
		.permbajtja-1 img:hover
		{
			transform: scale(1.2);
			transition: all 300ms;
		}
		/* pjesa e fotove rrotulluese deri ketu */

			/* css i fotos se pare djathtas*/
			.photo, .photo img
		{
			width:13%;
			height:200px;
			bottom: -95px;
			right: 122px;
			transition: 3s transform ease-out ;
		}
		.photo
		{
			margin: 0 auto;
			margin-top: 100px;
			margin-right: 1200px;

		}
		.photo img
		{
			box-shadow: 12px 12px 10px rgba(0,0,0,0.2);
			position: absolute;
			transform-origin: center;

		}
		div.photo:hover img:nth-child(3)
		{
			transform:translateY(152px);
		}
		div.photo:hover img:nth-child(4)
		{
			transform:translateY(-152px);
		}

		div.photo:hover img:nth-child(5)
		{
			transform:translateY(150px);
		}
		div.photo:hover img:nth-child(6)
		{
			transform:translateY(-150px);
		}
		div.photo:hover img:nth-child(7)
		{
			transform:translateY(80px);
		}
		div.photo:hover img:nth-child(8)
		{
			transform:translateY(-80px);
		}
		/* css i fotos se pare djathtas mbaron ketu */
		/* css i fotos se dyte majtas */
			.photo1, .photo1 img
		{
			width:13%;
			height:200px;
			left: 84px;
			bottom: -95px;
			transition: 3s transform ease-out ;

		}
		.photo1
		{
			margin: 0 auto;
			margin-top: 100px;
			margin-right: 1200px;
		}
		.photo1 img
		{
			box-shadow: 12px 12px 10px rgba(0,0,0,0.2);
			position: absolute;
			transform-origin: center;

		}
		div.photo1:hover img:nth-child(3)
		{
			transform:translateY(152px);
		}
		div.photo1:hover img:nth-child(4)
		{
			transform:translateY(-152px);
		}

		div.photo1:hover img:nth-child(5)
		{
			transform:translateY(150px);
		}
		div.photo1:hover img:nth-child(6)
		{
			transform:translateY(-150px);
		}
		div.photo1:hover img:nth-child(7)
		{
			transform:translateY(80px);
		}
		div.photo1:hover img:nth-child(8)
		{
			transform:translateY(-80px);
		}
		/* css i fotos se dyte majtas mbaron ketu */

		/* pjesa e 2 fotove majtas dhe djathtas  */

		.photo1:hover img:nth-child(5):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 52%;
			left: 210px;
			margin-left: 400px;



		}
		.photo1:hover img:nth-child(6):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 12%;
			left: 210px;
			margin-left: 400px;


		}
		.photo1:hover img:nth-child(7):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 42%;
			left: 210px;
			margin-left: 400px;


		}
		.photo1:hover img:nth-child(8):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 21%;
			left: 210px;
			margin-left: 400px;


		}
		.photo1:hover img:nth-child(9):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 33%;
			left: 210px;
			margin-left: 400px;

		}

		.photo:hover img:nth-child(5):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 52%;
			left: 210px;
			margin-left: 400px;


		}
		.photo:hover img:nth-child(6):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 12%;
			left: 210px;
			margin-left: 400px;


		}
		.photo:hover img:nth-child(7):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 42%;
			left: 210px;
			margin-left: 400px;


		}
		.photo:hover img:nth-child(8):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 21%;
			left: 210px;
			margin-left: 400px;


		}
		.photo:hover img:nth-child(9):active
		{
			width: 230px;
			height: 230px;
			border:2px white;
			border-style: dotted;
			border-radius: 35%;
			bottom: 33%;
			left: 210px;
			margin-left: 400px;
		}
		/* pjesa e 2 fotove majtas dhe djathtas mbaron ketu */
		/* pjesa e footerit poshte*/
		.footer-bottom
		{
			margin-top:100px;
			margin-bottom: 25px;
			color: white;
		}
		/* pjesa e shkrimit me drite*/
		 *
    {
      margin:0;
      padding: 0;
      box-sizing: border-box;

    }

	
    h2
    {
      font-size: 2em;
      color: #333;
      font-weight: 500;
      padding-left: 190px;
      padding-top: 200px;
    }
	
    h2 span
    {
        animation: animate 1s linear infinite;

    }
    h2 span:nth-child(1)
    {
      animation-delay: 0s;
    }
    h2 span:nth-child(2)
    {
      animation-delay: 0.2s;
    }
    h2 span:nth-child(3)
    {
      animation-delay: 0.4s;


    }
    h2 span:nth-child(4)
    {
      animation-delay: 0.8s;
         padding-left: 20px;

    }
    h2 span:nth-child(5)
    {
      animation-delay: 1s;
    }
    h2 span:nth-child(6)
    {
      animation-delay: 1.2s;
    }
    h2 span:nth-child(7)
    {
      animation-delay: 1.4s;
    }
    h2 span:nth-child(8)
    {
      animation-delay: 1.6s;
    }
     h2 span:nth-child(9)
    {
      animation-delay: 1.8s;
    }
     h2 span:nth-child(10)
    {
      animation-delay: 2s;
    }
     h2 span:nth-child(11)
    {
      animation-delay: 2.2s;
      padding-left: 40px;

    }
     h2 span:nth-child(12)
    {
      animation-delay: 2.4s;
    }
     h2 span:nth-child(13)
    {
      animation-delay: 2.6s;
    }
     h2 span:nth-child(14)
    {
      animation-delay: 2.8s;
    }
     h2 span:nth-child(15)
    {
      animation-delay: 3s;
    }
     h2 span:nth-child(16)
    {
      animation-delay: 3.2s;

    }
     h2 span:nth-child(17)
    {
      animation-delay: 3.4s;

    }
     h2 span:nth-child(18)
    {
      animation-delay: 3.6s;
       padding-left: 40px;
    }
     h2 span:nth-child(19)
    {
      animation-delay: 3.8s;
    }
     h2 span:nth-child(20)
    {
      animation-delay: 4s;
    }
     h2 span:nth-child(21)
    {
      animation-delay: 4.2s;
    }
     h2 span:nth-child(22)
    {
      animation-delay: 4.4s;
    }
     h2 span:nth-child(23)
    {
      animation-delay: 4.6s;

    }
    h2 span:nth-child(24)
    {
      animation-delay: 4.8s;

    }
    h2 span:nth-child(25)
    {
      animation-delay: 5s;

    }
      h2 span:nth-child(26)
    {
      animation-delay: 5.2s;
       padding-left: 40px;

    }
      h2 span:nth-child(27)
    {
      animation-delay: 5.4s;
       padding-left: 70px;
    }
      h2 span:nth-child(28)
    {
      animation-delay: 5.6s;

    }
      h2 span:nth-child(29)
    {
      animation-delay: 5.8s;

    }
      h2 span:nth-child(30)
    {
      animation-delay: 6s;

    }
      h2 span:nth-child(31)
    {
      animation-delay: 6.2s;

    }
      h2 span:nth-child(32)
    {
      animation-delay: 6.4s;


    }
      h2 span:nth-child(33)
    {
      animation-delay: 6.6s;
       padding-left: 40px;

    }
      h2 span:nth-child(34)
    {
      animation-delay: 6.8s;

    }
      h2 span:nth-child(35)
    {
      animation-delay: 7s;
       padding-left: 40px;
    }
      h2 span:nth-child(36)
    {
      animation-delay: 7.2s;

    }
     h2 span:nth-child(37)
    {
      animation-delay: 7.4s;

    }
     h2 span:nth-child(38)
    {
      animation-delay: 7.6s;

    }
     h2 span:nth-child(39)
    {
      animation-delay: 7.8s;

    }
     h2 span:nth-child(40)
    {
      animation-delay: 8s;
       padding-left: 20px;

    }
     h2 span:nth-child(41)
    {
      animation-delay: 8.2s;

    }
     h2 span:nth-child(42)
    {
      animation-delay: 8.4s;

    }
    /* pjesa e shkrimit me drite mbaron ketu*/


  	/* pjesa e fakteve me orange color*/
    div.tedhenat
    {

   	 width: 380px;
	 height: 480px;
	 background-color : lightblue;
	 color : black;
   	background-color: <?php if(isset($_GET["sub"])) {echo $_GET["txt1"];} ?>;
	color:<?php if(isset($_GET["sub"])) {echo $_GET["txt2"];} ?>;
	margin-top: 20px;
   	margin-right: 1em;
	margin-left: 1em;
	border-radius: 40px;
	padding: 1em;
	margin-left: 2em;
	margin-right: 2em;
	text-align: center;



    }

    .tabelanefund
    {
    	padding-left: 65px;
    }
    p.firstperson
    {
    	margin-top: 40px;
    }
    .firstphoto
    {
    	border-radius: 40px;
    }
    h3.firsttitle
    {
    	margin-top: 5px;
    	font-size: 21px;
    	margin-bottom: 40px;
    }
    /* pjesa e fakteve me orange color*/

    /* pjesa e fundit e 2 tabelave per regjister dhe vleresim*/
    div.butonat
    {
    	height: 180px;
    	width: 500px;
    	border-radius: 90px;
    	background-color: lightblue;
    	color: black;
    	text-align: center;
    	margin-right: 1px;
    	margin-left: 150px;
    	margin-top: 50px;

    }
    h3.butoni1
    {
    	font-size: 18px;
    	padding-top: 30px;
    	color: black;
    	padding-bottom: 10px;
    	padding-left: 30px;
    	padding-right: 30px;


    }
    input.button
    {
    	height: 40px;
    	width: 150px;
    	background-color: #1F2531;
    	color: white;
    	border-radius: 20px;
    	font-size: 15px;
    	transition: .6s;
    	overflow: hidden;
    }

    input.button:focus
    {
    	outline: none;
    }
 	input.button:before
 	{
 		content:'';
 		display: block;
 		background:rgba(255,255,255,.5);
 		width: 60px;
 		height: 100%;
 		opacity: .5;
 		filter: blur(30px);
 		transform:translateX(-130px) skewX(-15deg);
 	}
 	input.button:after
 	{
 		content: '';
 		display: block;
 		position: absolute;
 		background: rgba(255,255,255,.2);
 		width: 30px;
 		height:100%;
 		opacity: 0;
 		filter:blur(30px);
 		transform: translate(-100px) scaleX(-15deg);
 	}

    input.button:hover
    {
		background: purple;
		cursor: pointer;
    }

    input.button:hover:before
    {
    	transform: translateX(300px) skewX(-15deg);
    	opacity: .6;
    	transition: 2s;
    }

     input.button:hover:after
    {
    	transform: translateX(300px) skewX(-15deg);
    	opacity: 1;
    	transition: 2s;
    }



    div.rating
    {
    	width: 400px;
    	padding-top: 40px;
    	padding-left: 105px;
    }
    div.rating1
    {
    	position:relative;
    	display: flex;
    	flex-direction: row-reverse;
    	margin-top: 10px;
    	border:1px solid #000;
    	box-sizing: border-box;
    	background: linear-gradient(to right,#f00,#ff0,#0f0);
    }
    div.rating1 input
    {
    	display: none;
    }
    div.rating1 label
    {
    	display: block;
    	cursor: pointer;
    	width: 50px;
    	height: 40px;
    	display: flex;
    	justify-content: center;
    	align-items: center;
    	transition: .5s;
    	background: #fff;
    	color: #000;
    	font-size: 20px;
    	border-right: 1px solid #000;
    	border-radius: 10px;
    }
    .rating1 input[type="radio"]:hover ~ label,
    .rating1 input[type="radio"]:checked ~ label

    {
    	background: transparent;

    }


    h3.ratingid
    {
    	font-size: 20px;
    	color: black ;
    	padding-bottom: 20px;
    	align-content: center;


    }
    /* ketu mbaron pjesa e tabelave me buttona*/
	* {
 	 box-sizing: border-box;
	}
	form#f{
		margin-top:2em;
		padding:2em;
		padding-left:28em;
		color:lightblue;
	}

	.column {
		text-align:center;	
		margin-top:4em;
		margin-left:6.8em;	
		float: left;
		width: 22.33%;
		padding: 7px;
		height: 100px; 
		color:purple;
	}

	.row:after {
		text-align:center;	
		content: "";
		display: table;
		clear: both;
	}
     @keyframes animate
    {
      0%,80%
      {

        color: #fff;
        text-shadow: none;

      }
      100%
      {
        color: #fff;
        text-shadow: 0 0 10px #fff,
                    0 0 20px #fff,
                    0 0 40px #fff,
                    0 0 80px #fff,
                    0 0 120px #fff,
                    0 0 160px #fff;

      }
    }
		/* pjesa e fotove rrotulluese */
		@keyframes rotar {
			from {
				transform:rotateY(0deg);
			}
			to{
				transform:rotateY(360deg);
			}
		}
		/* pjesa e 4 fotove poshte me slider*/
	@keyframes slider
	{
		0% { background-image: url('images/techSliderimages/1.jpg');}
		35% { background-image: url('images/techSliderimages/2.jpg');  }
		75% {background-image: url('images/techSliderimages/3.jpg'); }

	}
	@keyframes slider1
	{
		0% { background-image: url('images/techSliderimages/4.jpg');}
		35% { background-image: url('images/techSliderimages/5.jpg');  }
		75% {background-image: url('images/techSliderimages/6.jpg'); }

	}
	@keyframes slider2
	{
		0% { background-image: url('images/techSliderimages/4.jpg');}
		35% { background-image: url('images/techSliderimages/5.jpg');  }
		75% {background-image: url('images/techSliderimages/6.jpg'); }

	}
	/* fund */
</style>

        <table class="pos">
		<tr>
			<td>

			<div class="foto1">


			</div>
			</td>
			<td>

			<div class="foto2">


			</div>
			</td>
			<td>

			<div class="foto3">


			</div>
			</td>
			<td>

			<div class="foto4">


			</div>
			</td>
			<td>

			<div class="foto5">


			</div>
			</td>
			<td colspan="2">


				 <h2>
	 	<div class="teksti">
	   <span>.</span>
	    <span>.</span>
	    <span>.</span>
	    <span>b</span>
	   	 <span>e</span>
	   	 <span>c</span>
   		 <span>a</span>
  	 	 <span>u</span>
  	 	 <span>s</span>
   		 <span>e</span>
   		 <span></span>
   		 <span>e</span>
   		 <span>v</span>
   		 <span>e</span>
   		 <span>r</span>
   		 <span>y</span>
   		 <span></span>
  	 	 <span>p</span>
  	 	 <span>i</span>
  	 	 <span>c</span>
  	 	 <span>t</span>
  	 	 <span>u</span>
  	 	 <span>r</span>
  	 	 <span>e</span>
  	 	 <span></span>
  	 	 <br>
  	 	 <span>t</span>
  	 	 <span>e</span>
  	 	 <span>l</span>
   	 	 <span>l</span>
   		 <span>s</span>
   		 <span></span>
   	 	 <span>a</span>
   		 <span></span>
   		 <span>s</span>
  	 	 <span>t</span>
  	     <span>o</span>
  		 <span>r</span>
   		 <span>y</span>
		 <span>.</span>
  		 <span>.</span>
   	 	 <span>.</span>
    </h2>

	</div>
			</td>

			<td>

			<div class="foto6">


			</div>
			</td>

		</tr>
	</table>
	<section class="fotorrotulluese">
		<div class="permbajtja">
			<div class="permbajtja-1">
				    <figure class="shadow">
                    <a href="images/techBigImages/1large.jpg">
                        <img src="images/techimages/1.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/2large.jpg">
                        <img src="images/techimages/2.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/3large.jpg">
                        <img src="images/techimages/3.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/large.jpg">
                        <img src="images/techimages/8.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/5large.jpg">
                        <img src="images/techimages/5.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/6large.jpg">
                        <img src="images/techimages/6.jpg">
                    </a>
                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/7large.jpg">
                        <img src="images/techimages/7.jpg">

                    </a>

                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/8large.jpg">
                        <img src="images/techimages/4.jpg">
                    </a>

                </figure>
                <figure class="shadow">
                    <a href="images/techBigImages/9large.jpg">
                        <img src="images/techimages/9.jpg">
                    </a>




			</div>

		</div>


		<div class="photo">
			<img src="images/techimages/1.jpg">
			<img src="images/techimages/2.jpg">
			<img src="images/techimages/3.jpg">
			<img src="images/techimages/4.jpg">
			<img src="images/techimages/5.jpg">
			<img src="images/techimages/6.jpg">
			<img src="images/techimages/7.jpg">
			<img src="images/techimages/8.jpg">
			<img src="images/techimages/9.jpg">

		</div>
		<div class="photo1">
			<img src="images/techimages/7.jpg">
			<img src="images/techimages/8.jpg">
			<img src="images/techimages/9.jpg">
			<img src="images/TechFuturistic/1.jpg">
			<img src="images/TechFuturistic/2.jpg">
			<img src="images/TechFuturistic/3.jpg">
			<img src="images/TechFuturistic/6.jpg">
			<img src="images/TechFuturistic/5.jpg">
			<img src="images/TechFuturistic/4.png">
			

		</div>


			
	</section>
		<div class="footer">
		<table class="tabelanefund">

			<tr>
				<td>
					<div class="tedhenat">

						<h3 class="firsttitle">Technology facts you could never heard.</h3>

					<img src="images/techFact/1.jpg" width="320px" height="180px" align="center" class="firstphoto">

					 <p class="firstperson">Over 3.8 billion people use the internet today, which is 40% of the world's population.
					 8 billion devices will be connected to the internet by 2020.More than 570 new websites are created every minute.There are over 3.5 billion searches per day on Google.
</p>
				</div>
				</td>
				<td>
					<div class="tedhenat">
						<h3 class="firsttitle">Alexa is always listening to your conversations.</h3>

					<img src="images/techFact/2.jpeg" width="320px" height="180px" align="center" class="firstphoto">

					 <p class="firstperson">
					 This probably isn’t new to you. Siri has been doing it forever.
					 Alexa stores your dialogue history to its cloud to help improve your Alexa experience.But, you can review and delete these recordings, either in bulk, or individually.
</p>
					</div>

				</td>
				<td>
					<div class="tedhenat">
						<h3 class="firsttitle"> Computer Security Day is celebrated on November 30th.
</h3>

					<img src="images/techFact/3.jpg" width="320px" height="180px" align="center" class="firstphoto">

					 <p class="firstperson">
					 
					 It was started in 1988 to help raise the awareness of computer related security issues.
					To celebrate Computer Security Day is easy, and important – check your privacy settings on Facebook, change your passwords to something stronger.
					</p>
					</div>
				</td>
			</tr>
		</table>
<div>
  <form id="f">
    <label for="fname">Background-Color : </label>
    <input type="text" id="fname" name="txt1" placeholder="Any color..">

    <label for="lname">Text Color :</label>
    <input type="text" id="lname" name="txt2" placeholder="Any color..">

  
    <input id="ss" type="submit" value="submit" name="sub"/>
  </form>
</div>
	<table>
		<tr>
			<td >


				<div class="butonat">
				<h3 class="butoni1"> If you make a lot of photos every day and want to share them with us and also get a lot of amazing photos , register now :
				</h1>
				<br>
				<input class="button" type="submit" value="Register" onclick="location.href='login.php#register'">
			</div>
			</td>
			<td >
				<div class="butonat">
				<div class="rating">
					<h3 class="ratingid" align="center">
						Rate our Gallery
					</h3>
				<div class="rating1">
					<input type="radio" name="rating" id="rate10" onclick="alert('Thank you')">
					<label for="rate10">10</label>
					<input type="radio" name="rating" id="rate9" onclick="alert('Thank you')">
					<label for="rate9">9</label>
					<input type="radio" name="rating" id="rate8" onclick="alert('Thank you')">
					<label for="rate8">8</label>
					<input type="radio" name="rating" id="rate7" onclick="alert('Thank you')">
					<label for="rate7">7</label>
					<input type="radio" name="rating" id="rate6" onclick="alert('Thank you , we will try better next time .')">
					<label for="rate6">6</label>
					<input type="radio" name="rating" id="rate5" onclick="alert('Thank you .')">
					<label for="rate5">5</label>
					<input type="radio" name="rating" id="rate4" onclick="alert('Thank you , we will try better next time .')">
					<label for="rate4">4</label>
					<input type="radio" name="rating" id="rate3" onclick="alert('Thank you , we will try better next time .')">
					<label for="rate3">3</label>
					<input type="radio" name="rating" id="rate2" onclick="alert('Thank you , we will try better next time .')">
					<label for="rate2">2</label>
					<input type="radio" name="rating" id="rate1" onclick="alert('Thank you , we will try better next time .')">
					<label for="rate1">1</label>
				</div>
			</div>
			</div>



		</tr>
	</table>
	
		<div class="row">
  <div class="column" style = "background-color:lightgreen;">
   
    <p><?php require('inheritance.php'); ?></p>
  </div>
  <div class="column" style = "background-color:lightblue;" >
    
    <p><form action="WriteToFile.php" method="POST">
<br>Give us advices :
    <input name="field1" type="text" />
    <input type="submit" name="submit" value="Send">
</form>
<form action="readToFile.php" method="POST">
<br>
	Read the advices :
    <input type="submit" name="submit" value="Read" >
</form></p>
  </div>
  <div class="column" style = "background-color:lightgreen; padding-top:2.2em;">
  <p><?php require('personNumber.php'); ?></p>
  </div>
</div>
<?php
require('rotateimg.php'); ?>
<?php
require('footeri.php'); ?>
