<!DOCTYPE html>
<html lang="en">
<head>
  <title>Geek Label</title>
  <link rel="icon" href="OC.ico" >
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="common-files/plugins/owl/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
	margin: 0;
	padding: 0;
}
html,body {
	height:100%; 
	width:100%;
}

.mySlides {

	height: 70px;
}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}





.owl-carousel{
	display:none;
	position:relative;
	width:100%;
	-ms-touch-action:pan-y
}











.geek, .geekla, .geeklaa{
	height:100%; 
	width:100%;
}
h1 {
	padding: 0;
	margin: 0;
}
h2 {
	margin: 50px 0 50px 0;
}
.imgr {
	margin-top: 250px;
}
.manimg {
	margin-top: 100px;
}
.clients {
	  position: center;

}
.geeklabp {
	margin-top: 30px;
}

input {
	width: 300px;
	height: 35px;
	border: 2px;
	padding: 0 0 0 10px;
}

textarea {
	width: 300px;
	height: 100px;
	border: 2px;
	padding: 0 0 0 10px;
}
button {
	background-color: #d83454;
	color: #ffffff;
	width: 300px;
	height: 35px;
	border: 2px;
	padding: 0 0 0 10px;
}

.servicebrand {
	width: 150px;
	height: auto;
}
.sbrand {
	width: auto;
	height: 90px;
}

.jumbotron {
	width: 100%;
	height:100%;
	margin: 0;
	padding: 0;
}
.man {
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	background-color: #f1f2f2;
}	
.hero {
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	background-color: #d83454;
	    justify-content: center;
    align-items: center;
}

@media screen and (max-width:680px) {
	h2 {
		margin: 0;
		padding: 0;
	}
.man {
	padding: 0;
	margin: 0;
	width: auto;
	height: auto;
	background-color: #f1f2f2;
}	
.hero {
	width: auto;
	height: auto;
	background-color: #d83454;
}
.imgr {
		padding: 0;

	width: 200px;
	height: auto;
}	
.manimg {
		padding: 0;
	margin: 0;
	width: 200px;
	height: auto;
}
.servicebrand {
	float: left;
		padding: 0;
	margin: 0;
	width: 50px;
	height: auto;
}

.sbrand {
		padding: 0;
	margin: 0;
	width: auto;
	height: 70px;
}
.geeklabp {
	text-align: left;
	padding-left: 20px;
	margin-left: 30px;
}
textarea, input, button {
	width: 200px;
}
}	

</style>
<body>


<div class="jumbotron hero text-center ">

	<img class="imgr" src="geeklab.png" width="300px" />
	<p class="geeklabp">A team of self confessed geeks who are all about great digital design</p> 
	<i class="fa fa-chevron-circle-down bottom" style="font-size:48px;color:white"></i>
</div>
<div class="scroll-down next-section"><span></span></div>



<section class="geekla">
<div class="jumbotron text-center ">
	<div class="man" >
	<img class="manimg" src="man.png" width="600px">
	<p class="geeklabp">Some agencies love <span class="st">design</span>, but don't know how to build</p> 
	<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
</div>
</div>
</section>


<section class="geeklaa">
<div class="jumbotron text-center ">
	<div class="man" >
	<img class="manimg" src="geekl/machineIllustration.png" width="600px">
	<p class="geeklabp">Some agencies know how to <span class="st">build</span> but can't do design</p> 
	<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
	</div>
</div>
</section>



<div class="jumbotron text-center ">
	<div class="man" >
	<img class="manimg" src="geekl/weLoveBoth.png" width="600px">
	<p class="geeklabp">We love <span class="st">both</span></p> 
	<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
	</div>
</div>



<div class="jumbotron text-center ">
<div class="container-fluid text-center">
  <h2>SERVICES</h2>

  <br>
  <div class="row">
    <div class="col-md-3 col-xs">
      <img class="servicebrand" src="geekl/web.png" width="150px">

      <p class="geeklabp">Web Development</p>
    </div>
    <div class="col-md-3 col-xs">
      <img class="servicebrand" src="geekl/design.png" width="150px">

      <p class="geeklabp">Design</p>
    </div>
    <div class="col-md-3 col-xs">
      <img class="servicebrand" src="geekl/branding.png" width="150px">

      <p class="geeklabp">Branding</p>
    </div>
    <div class="col-md-3 col-xs">
      <img class="servicebrand" src="geekl/UX.png" width="150px">

      <p class="geeklabp">UX Research</p>
    </div>
    </div>
	
	<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
	
</div>
</div>




<div class="jumbotron text-center ">
<div class="container-fluid text-center">
  <h2>Clients</h2>

  <div class="row clients pagination-centered" >
    <div class="col-md-4 col-xs-3">
      <img class="sbrand" src="geekl/TPG.png" width="150px"><br>

    </div>
    <div class="col-md-4 col-xs-3">
      <img class="sbrand" src="geekl/vEGAN.png" width="150px"><br>


    </div>
    <div class="col-md-4 col-xs-3">
      <img class="sbrand" src="geekl/PSHE.png" width="150px"><br>


    </div>

    </div>

	<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
	
</div>
</div>




<div class="jumbotron text-center ">
<h1>How to find us</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.4261951964895!2d-0.07804593590550118!3d51.52374234904378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb0a4092cdd%3A0x830197a73f1e8191!2sShoreditch+High+St%2C+London%2C+UK!5e0!3m2!1sen!2sin!4v1484674141053" 
width="100%" height="60%frameborder="0" style="border:0" allowfullscreen></iframe>


<i class="fa fa-chevron-circle-down" style="font-size:48px;color:red"></i>
</div>



<div class="jumbotron text-center ">


<div class="container">  
  <form id="contact" action="" method="post">
    <h1>Contact</h1>

    <fieldset>
      <input placeholder="Name" type="text" tabindex="1" required autofocus>
    </fieldset><br>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" required>
    </fieldset><br>

    <fieldset>
      <textarea placeholder="Message " tabindex="3" required></textarea>
    </fieldset>
    <fieldset><br>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send Message!</button>
    </fieldset><br>
	<p>Or phone on 01923 220121</p>

  </form>
  
  
  
</div>

</div>



<div id="myCarousel" class="owl-carousel slide" data-ride="carousel" data-plugin-options='{"items": 3, "singleItem": false}'>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active">></li>
    <li data-target="#myCarousel" data-slide-to="2" class="active">></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
	<li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="geekl/TPG.png" alt="TPG">
    </div>

    <div class="item active">
      <img src="geekl/vEGAN.png" alt="vEGAN">
    </div>

    <div class="item active">
      <img src="geekl/PSHE.png" alt="PSHE">
    </div>

    <div class="item">
      <img src="geekl/TPG.png" alt="TPG">
    </div>
    <div class="item">
      <img src="geekl/vEGAN.png" alt="vEGAN">
    </div>

    <div class="item">
      <img src="geekl/PSHE.png" alt="PSHE">
    </div>	
  </div>


</div>








<!-- Begin  Logo List -->
<section class="section-content clearfix p-t-30" id="clients">
    <div class="container">
        <div class="row">
            <div class="center m-b-30">
                <h3 class="section-title">Brands working with us</h3>
            </div>
            <figure>
                <div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false}'>
                    <div class="item">
                        <img src="geekl/TPG.png" alt="logo1">
                    </div>
                    <div class="item">
                        <img src="geekl/PSHE.png" alt="logo1">
                    </div>
			<!--
                    <div class="item">
                        <img src="common-files/images/client_logo/samsung.png" alt="logo1">
                    </div>
			-->
                    <div class="item">
                        <img src="geekl/TPG.png" alt="logo1">
                    </div>
                    <div class="item">
                        <img src="geekl/PSHE.png" alt="logo1">
                    </div>
                    <div class="item">
                        <img src="geekl/TPG.png" alt="logo1">
                    </div>

                    <div class="item">
                        <img src="geekl/PSHE.png" alt="logo1">
                    </div>
                    
                    <div class="item">
                        <img src="geekl/TPG.png" alt="logo1">
                    </div>
                    <div class="item">
                        <img src="geekl/PSHE.png" alt="logo1">
                    </div>
				</figure>    
			</div>
		</div>
	</div>
</section>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>



<div class="w3-content w3-display-container">
  <img class="mySlides" src="geekl/PSHE.png">
  <img class="mySlides" src="geekl/TPG.png">
  <img class="mySlides" src="geekl/vEGAN.png"><BR>
  <div class="w3-center w3-display-bottommiddle" style="width:100%">
    <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
  </div>
</div>


</body>
</html>
