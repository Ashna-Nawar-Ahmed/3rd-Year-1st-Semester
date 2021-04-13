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
		window.confirm("You did not select any theory courses");
		location="theorySelection_action_page.php";
		</script>';
  }
  else
  {
    $N = count($selectedCourses);
    if($N<5){
		echo '<script type="text/javascript">
		window.confirm("You have to select at least 5 theory courses");
		location="theorySelection_action_page.php";
		</script>';
	}
	else if($N==5){
		$sqlInsert = 'INSERT INTO theorycoursestaken (StudentID, Theory1,Theory2,Theory3,Theory4,Theory5) VALUES 
		("'.$id.'","'.$selectedCourses[0].'","'.$selectedCourses[1].'","'.$selectedCourses[2].'","'.$selectedCourses[3].'","'.$selectedCourses[4].'")';  
		$resultInsert = mysqli_query($link, $sqlInsert);
		echo '<script type="text/javascript">
		
		location="labSelection_action_page.php";
		</script>';
		
	}
  }
mysqli_close($link);
?>