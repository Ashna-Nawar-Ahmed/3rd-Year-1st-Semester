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
    <link rel="stylesheet" href="css/addCourses.css" />

    <title>Add Courses</title>
</head>
<body>
    <div class="container-fluid">
             

	 <form action="addCourses_action_page.php" class="container" method="POST">
      <h1>Add A Course</h1>
	  
	  <h3><p>Course ID:</p></h3>
	  <p> <input type="text" placeholder="Enter Course ID" name="cid" required></p>
	
	 <h3><p>Course Title:</p></h3>
     <p> <input type="text" placeholder="Enter Course Title" name="ctitle" required></p>
	 
	 <h3><p>Credit Hours:</p></h3> 
	 <label for="crhr"><b></b></label>
	  <b><select name="crhr">
	  <option value="3">3.0</option>
	  <option value="1.5">1.5</option>
	  <option value="0.75">0.75</option>	  
	 </select></b>
     
      
	 <h3><p>Course Type:</p></h3>   
	 <label for="ctype"><b></b></label>
	  <b><select name="ctype">
	  <option value="THEORY">THEORY</option>
	  <option value="LAB">LAB</option>
	  
	 </select></b>
	 
	 
	  
      <p> <input type="submit" class="btn" value="Add"></p>
	  <p><input type="button" class="btn" onclick="window.location='adminProfile.php'" value="Back to Admin Profile"></p>   
	  
      
    </form>		
	</div>
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>