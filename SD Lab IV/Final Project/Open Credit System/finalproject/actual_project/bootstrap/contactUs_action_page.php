<?php
session_start();
$id = $_SESSION['id'];
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);


$name=$_POST['contact_name'];

$email=$_POST['contact_email'];

$phone=$_POST['contact_phone'];

$complaint=$_POST['contact_problem'];


$sqlInsert = 'INSERT INTO contactus (UserID,Name,Email,Phone,Complaint) VALUES 
	("'.$id.'","'.$name.'","'.$email.'","'.$phone.'","'.$complaint.'")';  
	$resultInsert = mysqli_query($link, $sqlInsert);



	header("Location: personalpage.php");




mysqli_close($link); 
?>
