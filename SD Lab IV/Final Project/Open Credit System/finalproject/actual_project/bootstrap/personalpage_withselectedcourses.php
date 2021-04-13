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
	<link rel="stylesheet" href="css/personalpage.css" />

    <title>Personal Page</title>
</head>
<body>
<div class="container-fluid">
               <ul>
			     <li><a class="navbuttons" href="personalpage.php">PROFILE</a></li>
                 <li><a class="navbuttons" href="home2.php">HOME</a></li>
                 <li><a class="navbuttons" href="login2.php">LOGIN</a></li>
                 <li><a class="navbuttons" href="register.php">REGISTER</a></li>
                 <li><a class="navbuttons"href="contactUs.php">CONTACT ADMIN</a></li>
                </ul>

<?php
   
   
   $id=$_SESSION['id'];
   
  $sql = 'select * from student where StudentID="'.$id.'";';
   $result = mysqli_query($link, $sql) or die("Bad query: $sql");
   $row = mysqli_fetch_assoc($result);
   
?>

<div class="topPicContainer">
	<div class="topPic">
		<img src="images/p21.jpg">
		
	</div>
	<div class="centered"><h2><p>Ahsanullah University of Science and Technology</p></h2> <h1><p>Student Profile</p></h1>
	<i class="icon"><img src="images/icon2.png"></i></div>
</div>
<div class="block">
	<div class="formStuff">
			<form action = "" method="POST">
			
				<h3><p>Name:</p></h3>
				<h3><?php echo $row['St_Name']?></h3>
				
				<h3><p>Student ID:</p></h3>
				<h3><?php echo $row['StudentID']?></h3>
				
				<h3><p>Department:</p></h3>
				<h3><?php echo $row['Department']?></h3>
				
				<h3><p>Year:</p></h3>
				<h3><?php echo $row['current_Year']?></h3>
				
				<h3><p>Semester</p></h3>
				<h3><?php echo $row['current_Semester']?></h3>
				
				
				<!--<p><h3><?php echo $row['St_Name']?></p></h3>-->
				
				<p><input type="button" class="button" onclick="window.location='selected_courses_action_page.php'" value="See Selected Courses"/></p>	
				<p><input type="button" class="button" onclick="window.location='home2.php'" value="Home Page" /></p>	
				<p><input type="button" class="button" onclick="window.location='logout_action.php'" value="Log out" /></p>	
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