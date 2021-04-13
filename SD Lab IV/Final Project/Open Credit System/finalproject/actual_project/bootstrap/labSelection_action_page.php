<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);
$id=$_SESSION['id'];
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/courseselect.css" />
    
    <title>Course Select</title>
</head>
<body>
<div class="container-fluid">
	<h2 style="text-align:center;">SELECT 4 LAB COURSES</h2>
     <table class="table table-bordered">
     <thead>
      <tr>
      <th scope="col">Course No</th>
      <th scope="col">Course Title</th>
      <th scope="col">Credit Hour</th>
      <th scope="col">Select Courses</th>
      </tr>
    </thead>
      <tbody>

<?php


$sql = 'select * from canSelectTheseLabCourses;';
$result = mysqli_query($link, $sql) or die("Bad query: $sql");


    


?>
<form action="labSelection_action_page1.php" class="container" method="POST">
<?php
while($row = mysqli_fetch_assoc($result)){
	$value=$row['CourseNo'];
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td>";
	echo '<td><input type="checkbox" name="check_list[]" value="'.$value.'"></td></tr>';
	
	
}

	mysqli_close($link); 

?>
    </tbody>
           </table>
		   
	
		<input type="submit" class="btn" value="Submit">   
    </form>		
</div>	


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



