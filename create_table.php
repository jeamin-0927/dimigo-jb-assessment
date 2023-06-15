<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	
	$sql = "create table biz_card (
		num int,
		name char(10),
		company char(30),
		tel char(20),
		hp char(20),
		address char(100),
		primary key(num)
	);";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: create table success";
	else
		echo "Error: create table fail";
	
	// mysqli_close($link);
?>