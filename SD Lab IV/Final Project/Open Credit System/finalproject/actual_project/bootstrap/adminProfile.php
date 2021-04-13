<?php
   session_start();
   $host = 'localhost'; 
   $user = 'root'; 
   $password = ''; 
   $db = 'project'; 
   $link = mysqli_connect( $host, $user, $password, $db);
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/adminProfile.css" />

    <title> Admin Personal Page</title>
</head>
<body>


<?php
   
  
   $sql = 'select * from admin;';
   
   $result = mysqli_query($link, $sql) or die("Bad query: $sql");
   $row = mysqli_fetch_assoc($result);
   
?>

<div class="topPicContainer">
	<div class="topPic">
		<img src="images/p21.jpg">
		
	</div>
	<div class="centered"><h2><p>Ahsanullah University of Science and Technology</p></h2> <h1><p>Admin Profile</p></h1>
	<i class="icon"><img src="images/icon2.png"></i></div>
</div>
<div class="block">
	<div class="formStuff">
			<form action = "" method="POST">				
				<p><input type="button" class="button" onclick="window.location='addCourses.php'" value="Add Courses"/></p>	
				<p><input type="button" class="button" onclick="window.location='removeCourses.php'" value="Remove Courses" /></p>	
				<p><input type="button" class="button" onclick="window.location='complaints.php'" value="See Complaints" /></p>	
				<p><input type="button" class="button" onclick="window.location='adminLogout_action.php'" value="Log out" /></p>	
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