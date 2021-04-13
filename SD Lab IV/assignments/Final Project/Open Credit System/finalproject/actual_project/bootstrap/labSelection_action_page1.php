<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);
$id=$_SESSION['id'];
$selectedCourses = $_POST['check_list'];

  if(empty($selectedCourses))
  {
    echo '<script type="text/javascript">
		window.confirm("You did not select any lab courses");
		location="labSelection_action_page.php";
		</script>';
  }
  
  else
  {
    $N = count($selectedCourses);
	if($N<4){
		echo '<script type="text/javascript">
		window.confirm("You have to select at least 4 lab courses");
		location="labSelection_action_page.php";
		</script>';
	}
	else if($N==4){
		$sqlInsert = 'INSERT INTO labcoursestaken (StudentID, Lab1,Lab2,Lab3,Lab4) VALUES 
		("'.$id.'","'.$selectedCourses[0].'","'.$selectedCourses[1].'","'.$selectedCourses[2].'","'.$selectedCourses[3].'")';  
		$resultInsert = mysqli_query($link, $sqlInsert);
		echo '<script type="text/javascript">
		
		location="personalpage_withselectedcourses.php";
		</script>';
		
	}
    
	
  }
  $sqlDrop1 = 'DROP TABLE CANSELECTTHESECOURSES;';  
  $result1 = mysqli_query($link, $sqlDrop1);
  $sqlDrop2 = 'DROP TABLE CANSELECTTHESETHEORYCOURSES;';  
  $result2 = mysqli_query($link, $sqlDrop2);
  $sqlDrop3 = 'DROP TABLE CANSELECTTHESELABCOURSES;';  
  $result3 = mysqli_query($link, $sqlDrop3);
  $sqlDrop4 = 'DROP TABLE UNPASSEDCOURSES;';  
  $result4 = mysqli_query($link, $sqlDrop4);
  $sqlDrop5 = 'DROP TABLE UNPASSEDCOURSESWITHPREREQ;';  
  $result5 = mysqli_query($link, $sqlDrop5);
  $sqlDrop6 = 'DROP TABLE PREREQUISITESPASSED;';  
  $result6 = mysqli_query($link, $sqlDrop6);
  
  mysqli_close($link); 
  echo '<script type="text/javascript">
		
		location="personalpage.php";
		</script>';

?>
