<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	echo "<script>location.replace('2.php');</script>";

	$sql = "drop table membership1";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: drop table membership1 success<br><br>";
	else
		echo "Error: drop table membership1 fail<br><br>";

?>