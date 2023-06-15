<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	
	$sql = "drop table biz_card";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: drop table success";
	else
		echo "Error: drop table fail";
	
	// mysqli_close($link);
?>