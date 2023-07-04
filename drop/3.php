<link rel="stylesheet" href="global.css">

<?php
	include '../vars.php';
	
	echo "<script>location.replace('/index.php');</script>";
	$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	for($i = 1; $i <= 4; $i++){
		$sql = "insert into membership (id, name, post_num, address, tel, age) values ($i, '이름$i', '포스트넘$i', '주소$i', '010-$i$i$i$i-$i$i$i$i', '$i$i')";
		$result = mysqli_query($connect, $sql);
	}
?>