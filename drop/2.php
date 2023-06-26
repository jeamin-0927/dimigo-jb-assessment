<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	echo "<script>location.replace('3.php');</script>";

	$sql = "create table membership (
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
		echo "Success: create table membership success<br><br>";
	else
		echo "Error: create table membership fail<br><br>";


?>