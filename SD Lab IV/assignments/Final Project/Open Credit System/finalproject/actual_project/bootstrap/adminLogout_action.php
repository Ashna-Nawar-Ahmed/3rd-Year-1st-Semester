<?php
session_start();
session_unset();
session_destroy();
echo '<script type="text/javascript">
		window.confirm("You have successfully logged out");
		location="loginAdmin.php";
		</script>';
?>