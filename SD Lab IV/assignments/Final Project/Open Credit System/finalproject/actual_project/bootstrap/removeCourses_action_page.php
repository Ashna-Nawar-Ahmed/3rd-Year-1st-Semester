<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);


$courseid=$_POST['cid'];

$sql = 'Delete from coursecurriculum where CourseNo="'.$courseid.'";';  
	$result = mysqli_query($link, $sql);
	echo '<script type="text/javascript">
		window.confirm("You have successfully removed a new course");
		location="adminProfile.php";
		</script>';
	

mysqli_close($link); 
?>
