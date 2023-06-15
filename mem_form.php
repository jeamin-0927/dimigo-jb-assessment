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

		$sql = "select * from biz_card";
		$result = mysqli_query($connect, $sql);
		$fields = mysqli_num_fields($result);
		if(!$result)
			echo "Error: select * fail";
		
	?>
	<h2>회원가입</h2>
	<form name="mem_form" method="post" action="mem_print.php">
		
	</form>

</body>
</html>