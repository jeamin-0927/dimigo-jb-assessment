<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<link rel="stylesheet" href="global.css">
</head>
<body link="black" alink="black" vlink="black">
	<?php
		include 'vars.php';
		
		$connect = mysqli_connect("127.0.0.1", $db_username, $db_password, "dimigo_db");
		if(!$connect) {
			echo "Error: Unable to connect to MySQL.";
			exit;
		}

		$id = $_POST["id"];
		$name = $_POST["name"];
		$post_num = $_POST["post_num"];
		$address = $_POST["address"];
		$tel = $_POST["tel"];
		$age = $_POST["age"];

		echo "아이디: $id<br>";
		echo "이름: $name<br>";
		echo "우편번호: $post_num<br>";
		echo "주소: $address<br>";
		echo "전화번호: $tel<br>";
		echo "나이: $age<br>";

		$sql = "insert into membership (id, name, post_num, address, tel, age) values ('$id', '$name', '$post_num', '$address', '$tel', '$age')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "Success: record insert success<br>";
		else
			echo "Error: record insert fail<br>";
	
	?>
</body>
</html>

