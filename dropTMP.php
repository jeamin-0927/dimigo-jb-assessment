<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	
	$sql = "drop table membership";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: drop table membership success<br>";
	else
		echo "Error: drop table membership fail<br>";

	$sql = "drop table membership1";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: drop table membership1 success<br><br>";
	else
		echo "Error: drop table membership1 fail<br><br>";


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


	for($i = 1; $i <= 4; $i++){
		$sql = "insert into membership (id, name, post_num, address, tel, age) values ($i, '이름$i', '포스트넘$i', '주소$i', '010-$i$i$i$i-$i$i$i$i', '$i$i')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "Success: record No.$i insert success<br>";
		else
			echo "Error: record No.$i insert fail<br>";
	}
	
	
	// mysqli_close($link);
?>