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
    <link rel="stylesheet" href="css/removeCourse.css" />

    <title>Remove Courses</title>
</head>
<body>
    <div class="container-fluid">
             

	 <form action="removeCourses_action_page.php" class="container" method="POST">
      <h1>Remove A Course</h1>
	  
	  <h3><p>Course ID:</p></h3>
	  <p> <input type="text" placeholder="Enter Course ID" name="cid" required></p>
	
	
	 
	 
	  
       <input type="submit" class="btn" value="Remove">
	   <p><input type="button" class="btn" onclick="window.location='adminProfile.php'" value="Back to Admin Profile"></p> 
      
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