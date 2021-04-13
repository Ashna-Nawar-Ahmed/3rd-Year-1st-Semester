<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);


$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];

$pass=md5($_POST['psw']);
$phone=$_POST['phone'];
$department=$_POST['department'];
$year=$_POST['selectyear'];
$semester=$_POST['selectsemester'];
$sql = 'select * from student where StudentID="'.$id.'";';

$result = mysqli_query($link, $sql) ;
$noOfData = mysqli_num_rows($result); 
if($noOfData!=0){
	echo '<script type="text/javascript">
		window.confirm("This ID already has an account! Please use another ID to register");
		location="register.php";
		</script>';
}
else{
	
	
	$_SESSION['id'] = $id;
	$sqlInsert = 'INSERT INTO student (St_Name,StudentID, Email, PWord, Phone_Number,Department,current_Year,current_Semester) VALUES 
	("'.$name.'","'.$id.'","'.$email.'","'.$pass.'","'.$phone.'","'.$department.'","'.$year.'","'.$semester.'")';  
	$resultInsert = mysqli_query($link, $sqlInsert);
	$lastInsertID = mysqli_insert_id($link);

	header("Location: personalpage.php");

}


mysqli_close($link); 
?>
