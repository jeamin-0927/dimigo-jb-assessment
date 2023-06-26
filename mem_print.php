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

		echo "아이디: ".$_POST["id"]."<br>";
		echo "이름: ".$_POST["name"]."<br>";
		echo "우편번호: ".$_POST["post_num"]."<br>";
		echo "주소: ".$_POST["address"]."<br>";
		echo "전화번호: ".$_POST["tel"]."<br>";
		echo "나이: ".$_POST["age"]."<br>";

	?>
</body>
</html>

