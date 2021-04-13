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
	<h2 style="text-align:center;">SELECT 5 THEORY COURSES</h2>
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

$sqlInsert0 = 'Create table UnpassedCourses(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL)';
$resultInsert0 = mysqli_query($link, $sqlInsert0);

//selecting unpassed courses
$sqlInsert = 'INSERT into UnpassedCourses
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where CourseNo IN( SELECT CourseNo from courseCurriculum where CourseNo NOT IN
	(SELECT Theory1 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory2 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab5 from PassedCourses where StudentID="'.$id.'"))';
$resultInsert = mysqli_query($link, $sqlInsert);



$sqlInsert01 = 'Create table UnpassedCoursesWithPrereq(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL, Prerequisite1 varchar(255) not null)';
$resultInsert01 = mysqli_query($link, $sqlInsert01);

//selecting unpassed courses with prerequisite1
$sqlInsert1 = 'INSERT into UnpassedCoursesWithPrereq
select CourseNo, CourseTitle, CreditHr, Prerequisite1
FROM courseCurriculum
where CourseNo IN( SELECT CourseNo from courseCurriculum where CourseNo NOT IN
	(SELECT Theory1 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory2 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")AND CourseNo  NOT IN
	(SELECT Lab5 from PassedCourses where StudentID="'.$id.'"))';
$resultInsert1 = mysqli_query($link, $sqlInsert1);


$sqlInsert02 = 'Create table prequisitesPassed(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL)';
$resultInsert02 = mysqli_query($link, $sqlInsert02);

//selecting courses where prequisites were passed
$sqlInsert2 = 'INSERT into prequisitesPassed
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where  Prerequisite1 in(SELECT Theory1 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite1 in(SELECT Theory2 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite1 in(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite1 in(SELECT Lab5 from PassedCourses where StudentID="'.$id.'")	  
	  UNION
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where  Prerequisite2 in(SELECT Theory1 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite2 in(SELECT Theory2 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite2 in(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite2 in(SELECT Lab5 from PassedCourses where StudentID="'.$id.'")	  
	  UNION
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where  Prerequisite3 in(SELECT Theory1 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite3 in(SELECT Theory2 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite3 in(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite3 in(SELECT Lab5 from PassedCourses where StudentID="'.$id.'")	  
	  UNION
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where  Prerequisite4 in(SELECT Theory1 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite4 in(SELECT Theory2 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite4 in(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite4 in(SELECT Lab5 from PassedCourses where StudentID="'.$id.'")	  
	  UNION
select CourseNo, CourseTitle, CreditHr
FROM courseCurriculum
where  Prerequisite5 in(SELECT Theory1 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite5 in(SELECT Theory2 from PassedCourses where StudentID="'.$id.'") or
	   Prerequisite5 in(SELECT Theory3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Theory4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Theory5 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Theory6 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Lab1 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Lab2 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Lab3 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Lab4 from PassedCourses where StudentID="'.$id.'")or
	   Prerequisite5 in(SELECT Lab5 from PassedCourses where StudentID="'.$id.'");';
	   
$resultInsert2 = mysqli_query($link, $sqlInsert2);


$sqlInsert03 = 'Create table canSelectTheseCourses(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL)';
$resultInsert03 = mysqli_query($link, $sqlInsert03);


//inner joining passedPrequisites and unpassedCourse to do intersect's work
$sqlInsert3 = 'INSERT into canSelectTheseCourses
select UnpassedCourses.CourseNo, UnpassedCourses.CourseTitle, UnpassedCourses.CreditHr
from prequisitesPassed inner join UnpassedCourses
on prequisitesPassed.CourseNo=UnpassedCourses.CourseNo';
$resultInsert3 = mysqli_query($link, $sqlInsert3);

//inserting courses with no prerequisites
$sqlInsert4 = 'INSERT into canSelectTheseCourses
select CourseNo,CourseTitle,CreditHr 
from UnpassedCoursesWithPrereq
where Prerequisite1 = ""';
$resultInsert4 = mysqli_query($link, $sqlInsert4);

//table for only theory courses
$sqlInsert04 = 'Create table canSelectTheseTheoryCourses(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL)';
$resultInsert04 = mysqli_query($link, $sqlInsert04);


//table for only lab courses
$sqlInsert05 = 'Create table canSelectTheseLabCourses(CourseNo varchar(255) primary key not null, CourseTitle varchar(255) not null, CreditHr float NOT NULL)';
$resultInsert05 = mysqli_query($link, $sqlInsert05);

$sqlInsert5 = 'INSERT into canSelectTheseTheoryCourses
select CourseNo,CourseTitle,CreditHr 
from canSelectTheseCourses
where CreditHr = 3';
$resultInsert5 = mysqli_query($link, $sqlInsert5);

$sqlInsert6 = 'INSERT into canSelectTheseLabCourses
select CourseNo,CourseTitle,CreditHr 
from canSelectTheseCourses
where CreditHr <> 3';
$resultInsert6 = mysqli_query($link, $sqlInsert6);

$sql = 'select * from canSelectTheseTheoryCourses;';
$result = mysqli_query($link, $sql) or die("Bad query: $sql");


    


?>
<form action="theorySelection_action_page1.php" class="container" method="POST">
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



