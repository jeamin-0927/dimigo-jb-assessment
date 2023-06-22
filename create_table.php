<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	
	$sql = "create table membership1 (
		id  varchar(10) not null,
		name varchar(10) not null,
		post_num char(8),
		address varchar(80),
		tel varchar(20),
		age int,
		primary key(id)
		);";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: create table success";
	else
		echo "Error: create table fail";
	
	// mysqli_close($link);
?>