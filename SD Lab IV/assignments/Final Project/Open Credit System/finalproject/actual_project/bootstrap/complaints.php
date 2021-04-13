<?php
session_start();
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'project'; 
$link = mysqli_connect( $host, $user, $password, $db);

?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/complain.css" />
    
    <title>Complaints And Suggestions</title>
</head>
<body>
<div class="container-fluid">
	<h2 style="text-align:center;">Complaints And Suggestions</h2>
     <table class="table table-bordered">
     <thead>
      <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
	  <th scope="col">Complaint</th>
      </tr>
    </thead>
      <tbody>

<?php


$sql = 'select * from contactus;';
$result = mysqli_query($link, $sql) or die("Bad query: $sql");

?>
<form action="adminProfile.php" class="container" method="POST">
<?php
while($row = mysqli_fetch_assoc($result)){	
	echo "<tr><td>{$row['UserID']}</td><td>{$row['Name']}</td><td>{$row['Email']}</td><td>{$row['Phone']}</td><td>{$row['Complaint']}</td></tr>";
	
}

	mysqli_close($link); 

?>
    </tbody>
           </table>
		   
	
		<input type="submit" class="btn" value="Back to Admin Profile">   
    </form>		
</div>	


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



