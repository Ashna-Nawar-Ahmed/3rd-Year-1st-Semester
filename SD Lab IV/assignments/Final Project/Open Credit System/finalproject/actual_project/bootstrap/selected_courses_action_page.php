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
    
    <title>Selected Courses</title>
</head>
<body>
<div class="container-fluid">
	<h2 style="text-align:center;">SELECTED COURSES</h2>
     <table class="table table-bordered">
     <thead>
      <tr>
      <th scope="col">Course No</th>
      <th scope="col">Course Title</th>
      <th scope="col">Credit Hour</th>
     
      </tr>
    </thead>
      <tbody>

<?php
$total=0;
$totalLab=0;
$totalTheory=0;
$sql000= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM theoryCoursesTaken inner join courseCurriculum
on theoryCoursesTaken.Theory1=courseCurriculum.CourseNo
where theoryCoursesTaken.StudentID='.$id.';';
$result000 = mysqli_query($link, $sql000) or die("Bad query: $sql000");
while($row = mysqli_fetch_assoc($result000)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalTheory=$totalTheory+$row['CreditHr'];
}
$sql001= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM theoryCoursesTaken inner join courseCurriculum
on theoryCoursesTaken.Theory2=courseCurriculum.CourseNo
where theoryCoursesTaken.StudentID='.$id.';';
$result001 = mysqli_query($link, $sql001) or die("Bad query: $sql001");
while($row = mysqli_fetch_assoc($result001)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalTheory=$totalTheory+$row['CreditHr'];
}
$sql002= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM theoryCoursesTaken inner join courseCurriculum
on theoryCoursesTaken.Theory3=courseCurriculum.CourseNo
where theoryCoursesTaken.StudentID='.$id.';';
$result002 = mysqli_query($link, $sql002) or die("Bad query: $sql002");
while($row = mysqli_fetch_assoc($result002)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalTheory=$totalTheory+$row['CreditHr'];
}
$sql003= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM theoryCoursesTaken inner join courseCurriculum
on theoryCoursesTaken.Theory4=courseCurriculum.CourseNo
where theoryCoursesTaken.StudentID='.$id.';';
$result003 = mysqli_query($link, $sql003) or die("Bad query: $sql003");
while($row = mysqli_fetch_assoc($result003)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalTheory=$totalTheory+$row['CreditHr'];
}
$sql004= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM theoryCoursesTaken inner join courseCurriculum
on theoryCoursesTaken.Theory5=courseCurriculum.CourseNo
where theoryCoursesTaken.StudentID='.$id.';';
$result004 = mysqli_query($link, $sql004) or die("Bad query: $sql004");
while($row = mysqli_fetch_assoc($result004)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalTheory=$totalTheory+$row['CreditHr'];
}



$sql005= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM labCoursesTaken inner join courseCurriculum
on labCoursesTaken.Lab1=courseCurriculum.CourseNo
where labCoursesTaken.StudentID='.$id.';';
$result005 = mysqli_query($link, $sql005) or die("Bad query: $sql005");
while($row = mysqli_fetch_assoc($result005)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalLab=$totalLab+$row['CreditHr'];
}
$sql006= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM labCoursesTaken inner join courseCurriculum
on labCoursesTaken.Lab2=courseCurriculum.CourseNo
where labCoursesTaken.StudentID='.$id.';';
$result006 = mysqli_query($link, $sql006) or die("Bad query: $sql006");
while($row = mysqli_fetch_assoc($result006)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalLab=$totalLab+$row['CreditHr'];
}
$sql007= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM labCoursesTaken inner join courseCurriculum
on labCoursesTaken.Lab3=courseCurriculum.CourseNo
where labCoursesTaken.StudentID='.$id.';';
$result007 = mysqli_query($link, $sql007) or die("Bad query: $sql007");
while($row = mysqli_fetch_assoc($result007)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalLab=$totalLab+$row['CreditHr'];
}
$sql008= 'SELECT courseCurriculum.CourseNo, courseCurriculum.CourseTitle,courseCurriculum.CreditHr 
FROM labCoursesTaken inner join courseCurriculum
on labCoursesTaken.Lab4=courseCurriculum.CourseNo
where labCoursesTaken.StudentID='.$id.';';
$result008 = mysqli_query($link, $sql008) or die("Bad query: $sql008");
while($row = mysqli_fetch_assoc($result008)){
	echo "<tr><td>{$row['CourseNo']}</td><td>{$row['CourseTitle']}</td><td>{$row['CreditHr']}</td></tr>";
	$total=$total+$row['CreditHr'];
	$totalLab=$totalLab+$row['CreditHr'];
}


	mysqli_close($link); 


?>

    </tbody>
     </table>
	 <h2>TOTAL CREDIT:</h2>
	 
	 <?php 
		echo "TOTAL THEORY HOURS=".$totalTheory."<br>";
		echo "TOTAL LAB HOURS=".$totalLab."<br>";
		echo "TOTAL HOURS=".$total."<br>";
	 ?>
	 
	<p><input type="button" class="button" onclick="window.location='personalpage_withselectedcourses.php'" value="Back To Profile"/></p>	   
		
</div>	


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



