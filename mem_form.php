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
	<!-- <div style="color: rgba(0, 0, 0, .1);">알빠노</div> -->
	<form name="mem_form" method="post" action="mem_print.php">
		<input type="hidden" name="title" value="회원가입 양식" />
		<table border="1" width="640" cellspacing="1" cellpadding="4">
			<tr>
				<td align="right">* 아이디: </td>
				<td><input class="input" type="text" size="15" maxlength="12" name="id" value="guest" /></td>
			</tr>

			<tr>
				<td align="right">* 이름: </td>
				<td><input class="input" type="text" size="15" maxlength="12" name="name" /></td>
			</tr>

			<tr>
				<td align="right">* 비밀번호: </td>
				<td><input class="input" type="password" size="15" maxlength="10" name="passwd" /></td>
			</tr>

			<tr>
				<td align="right">* 비밀번호 확인: </td>
				<td><input class="input" type="password" size="15" maxlength="10" name="checkpw" /></td>
			</tr>

			<tr>
				<td align="right">성별: </td>
				<td class="radioInput">
					<div><input type="radio" name="gender" value="M" checked> 남</div>
					<div><input type="radio" name="gender" value="F" checked> 여</div>
				</td>
			</tr>
		</table>

		<table border="0" width="640" class="table2">
			<tr>
				<td align="center" class="btns">
					<input type="submit" value="확인" class="inputbtn">
					<input type="reset" value="다시작성" class="inputbtn">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>