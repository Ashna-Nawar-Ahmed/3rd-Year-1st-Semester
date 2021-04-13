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
    <link rel="stylesheet" href="css/login2.css" />

    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
               <ul>
                 <li><a class="navbuttons" href="login2.php">LOGIN</a></li>
                 <li><a class="navbuttons" href="home2.php">HOME</a></li>
                 <li><a class="navbuttons" href="register.php">REGISTER</a></li>
                 <li><a class="navbuttons"href="contactUs.php">CONTACT ADMIN</a></li>
                </ul>

	<div class="bg-img">

	 <form action="login_action_page.php" class="container" method="POST">
      <h1>LOGIN</h1>
	  
	  <h3><p>Student ID:</p></h3>
     <p> <input type="text" placeholder="Enter ID" name="id" required></p>

      <h3><p>Password:</p></h3>
      <p><input type="password" placeholder="Enter Password" name="psw" required></p>
	 
	  
       <input type="submit" class="btn" value="Submit">
      
    </form>		
	</div>
	<footer>© 2019 AUST CSE 3.1, All Rights Reserved</footer> 

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>