<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);
$id=$_POST['id'];
$pass=md5($_POST['psw']);
$sql = 'SELECT * FROM student WHERE StudentID='.$id.';'; 
$result = mysqli_query($link, $sql) ;
$noOfData=0;
if($result){
	$noOfData = mysqli_num_rows($result);
}
if($noOfData!=0){	
	$row = mysqli_fetch_array($result);
	$passConfirm=$row[2];
	if(strcmp($pass, $passConfirm) == 0){
			$_SESSION['id'] = $id;
			$sql1 = 'select * from labcoursestaken where StudentID='.$id.';'; 
			$result1 = mysqli_query($link, $sql1) ;
			$noOfData1=0;
			if($result){
					$noOfData1 = mysqli_num_rows($result);
			}
			if($noOfData==0){
				header("Location: personalpage.php");
			}
			else{
				header("Location: personalpage_withselectedcourses.php");
				
			}
		}
		
}
mysqli_close($link); 
?>