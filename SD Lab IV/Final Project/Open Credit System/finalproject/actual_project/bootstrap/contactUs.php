<?php
session_start();
if(isset($_SESSION['id'])) { 
   $id = $_SESSION['id'];
}

?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/contact.css" />

    <title>Contact Us</title>
</head>
<body>
<div class="container-fluid">
               <ul>
                 <li><a class="navbuttons" href="contactUs.php">CONTACT ADMIN</a></li>
                 <li><a class="navbuttons" href="home2.php">HOME</a></li>
                 <li><a class="navbuttons" href="login2.php">LOGIN</a></li>
                 <li><a class="navbuttons"href="register.php">REGISTER</a></li>
                </ul>
<div class="topPicContainer">
	<div class="topPic">
		<img src="images/tablet2.png">
	</div>
	<div class="centered"><h2><p>Got a question or suggestion?</p></h2> <h1><p>Contact Us!</p></h1></div>
</div>
<div class="block">
	<div class="formStuff">
			<form action = "contactUs_action_page.php" method="POST">
			
				<h3><p>Name</p></h3>
				<p><input type="text" name="contact_name" value="" placeholder="Enter your name" size="55" style="border-radius:10px"/></p>
				<h3><p>Email</p></h3>
				<p><input type="text" name="contact_email" value="" placeholder="Enter your email address" size="55" style="border-radius:10px"/></p>
				<h3><p>Phone</p></h3>
				<p><input type="text" name="contact_phone" value="" placeholder="Enter your phone number" size="55" style="border-radius:10px"/></p>
				<p><textarea name="contact_problem" placeholder="Describe your issues, suggestions etc. briefly"  rows="5" cols="58" style="border-radius:10px"></textarea></p>
				<input type="submit" name="" value="Send Message" style="margin-left:10%"/>			
	</div>
</div>
<footer>© 2019 AUST CSE 3.1, All Rights Reserved</footer> 


	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>