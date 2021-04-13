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
    <link rel="stylesheet" href="css/register.css" />

    <title>RegistrationPage</title>
</head>
<body>



	<div class="container-fluid">
               <ul>
                 <li><a class="navbuttons" href="register.php">REGISTER</a></li>
                 <li><a class="navbuttons" href="home2.php">HOME</a></li>
                 <li><a class="navbuttons" href="login2.php">LOGIN</a></li>
                 <li><a class="navbuttons"href="contactUs.php">CONTACT ADMIN</a></li>
                </ul>		
    
	<div class="bg-img">
	  
				
	
	 
	 <form action="register_action_page.php" class="container" method="POST">
      <h3>Register</h3>
	  
	  <label for="name"><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
	  
	  <label for="id"><b>Student ID:</b></label>
      <input type="text" placeholder="Enter ID" name="id" required>

      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
	  
	  <label for="phone"><b>Phone:</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phone" required>
	  
	 <p> <label for="department"><b>Department:</b></label>
      <input type="text" placeholder="Enter Department" name="department" required></p>
	  
	  <label for="selectyear"><b>Student Year:</b></label>
	  <b><select name="selectyear">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	 </select></b>
	  
	  <label for="selectsemester"><b>Student Semester:</b></label>
	  <b><select name="selectsemester">
	  <option value="1">1</option>
	  <option value="2">2</option>
	 </select></b>
	 
	 
	  
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