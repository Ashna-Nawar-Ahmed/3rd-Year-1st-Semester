<?php

session_start();
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/home2.css" />

    <title>Home</title>
	<style>
	   
		* {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
       .mySlides {display: none;}
       img {vertical-align: middle;}


      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
      
       }
	

	</style>
</head>
<body>
   <div class="container-fluid">
               <ul>
                 <li><a class="navbuttons" href="home2.php" >HOME</a></li>
                 <li><a class="navbuttons" href="login2.php">LOGIN</a></li>
                 <li><a class="navbuttons" href="register.php">REGISTER</a></li>
                 <li><a class="navbuttons"href="contactUs.php">CONTACT ADMIN</a></li>
                </ul>
			
 <div class="slideshow-container">

  <div class="mySlides fade">
       
       <img src="images/p28.jpg" class="imagep" >
       <div class="centered">
			  <h2>Ahsanullah University of Science and Technology</h2>
			   <h4>Open Credit System</h4>
			   <h6>CSE Department</h6>	   
			</div>
   </div>

   <div class="mySlides fade">
     
      <img src="images/pic.jpg" class="imagep" >
      <div class="centered">
			  <h2>Ahsanullah University of Science and Technology</h2>
			   <h4>Open Credit System</h4>
			   <h6>CSE Department</h6>
		   
			</div>
   </div>

   <div class="mySlides fade">
     
     <img src="images/s3.jpg" class="imagep" >
     <div class="centered">
			  <h2>Ahsanullah University of Science and Technology</h2>
			   <h4>Open Credit System</h4>
			   <h6>CSE Department</h6>

			</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
	
			
 
 
 
	<footer>© 2019 AUST CSE 3.1, All Rights Reserved</footer> 	
</div>		

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
