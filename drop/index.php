<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	echo "<script>location.replace('1.php');</script>";

	$sql = "drop table membership";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: drop table membership success<br>";
	else
		echo "Error: drop table membership fail<br>";
?>