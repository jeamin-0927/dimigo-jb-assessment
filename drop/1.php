<link rel="stylesheet" href="global.css">

<?php
	include '../vars.php';
	
	echo "<script>location.replace('2.php');</script>";
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	$sql = "drop table membership1";
	$result = mysqli_query($connect, $sql);
?>