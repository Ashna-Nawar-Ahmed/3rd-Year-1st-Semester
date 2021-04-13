<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);


$courseid=$_POST['cid'];
$coursetitle=$_POST['ctitle'];
$credithr=$_POST['crhr'];
$coursetype=$_POST['ctype'];

$sqlInsert = 'INSERT INTO coursecurriculum (CourseNo,CourseTitle,CreditHr,CourseType) VALUES 
	("'.$courseid.'","'.$coursetitle.'",'.$credithr.',"'.$coursetype.'")';  
	$resultInsert = mysqli_query($link, $sqlInsert);
	
	echo '<script type="text/javascript">
		window.confirm("You have successfully added a new course");
		location="adminProfile.php";
		</script>';
	

mysqli_close($link); 
?>
