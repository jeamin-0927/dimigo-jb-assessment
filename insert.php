<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	// for($i = 1; $i <= 4; $i++){
	// 	$sql = "insert into membership (id, name, post_num, address, tel, age) values ($i, '이름$i', '포스트넘$i', '주소$i', '010-$i$i$i$i-$i$i$i$i', '$i$i')";
	// 	$result = mysqli_query($connect, $sql);
	// 	if($result)
	// 		echo "Success: record No.$i insert success<br>";
	// 	else
	// 		echo "Error: record No.$i insert fail<br>";
	// }

	$i = 5;
	$sql = "insert into membership (id, name, post_num, address, tel, age) values ($i, '이름$i', '포스트넘$i', '주소$i', '010-$i$i$i$i-$i$i$i$i', '$i$i')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "Success: record No.$i insert success<br>";
		else
			echo "Error: record No.$i insert fail<br>";
	
	// mysqli_close($link);
?>