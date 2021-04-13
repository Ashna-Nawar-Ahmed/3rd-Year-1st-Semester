<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);
$id=$_POST['id'];
$pass=md5($_POST['psw']);
$sql = 'select * from admin where ID="'.$id.'";'; 
$result = mysqli_query($link, $sql) ;
$noOfData=0;
if($result){
	$noOfData = mysqli_num_rows($result);
}
if($noOfData!=0){	
	
	$row = mysqli_fetch_array($result);
	$passConfirm=$row[1];
	if(strcmp($pass, $passConfirm) == 0){
			
			$_SESSION['adminid'] = $id;
			header("Location: adminProfile.php");
			
	}else{
		header("Location: loginAdmin.php");
		
	}
		
}
mysqli_close($link); 
?>