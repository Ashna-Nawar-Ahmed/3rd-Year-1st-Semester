
<?php
$filename ='data.csv';

$name=$_POST['person_name'];
$email=$_POST['person_email'];
$pass=$_POST['person_password'];

$new_csv = file('data.csv');
 if(empty($new_csv)){
	 $id=1;
 }	
else {
	$new_csv = fopen("data.csv", "r");
	while ($rec = fgetcsv($new_csv)){
		$id=$rec[0];
	}
	$id=$id+1;	
	echo $rec[0];
	fclose($new_csv);
}
$resOrder = array(
0 => $id,
1 => $name,
2 => $email,
3 => $pass,

);
$new_csv = fopen($filename, 'a');
fputcsv($new_csv, $resOrder);
fclose($new_csv);




?>


<html>
<head>
	<link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

    <div class="container" id="container">
        <table class="gridtable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    if (($csvfile = fopen("data.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            $error='';
                            $colcount = count($csvdata);
                            echo '<tr>';
                            if($colcount==4) {
                                echo '<td>'.$csvdata[0].'</td>';
                                echo '<td>'.$csvdata[1].'</td>';
                                echo '<td>'.$csvdata[2].'</td>';
                                echo '<td>'.$csvdata[3].'</td>';
                            } 
                            echo '</tr>';
                        }
                        fclose($csvfile);
                    }
                ?>
            </tbody>
           </table>
    </div>

</body>
</html>

