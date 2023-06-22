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

		$sql = "select * from membership";
		$result = mysqli_query($connect, $sql);
		$fields = mysqli_num_fields($result);
		if(!$result)
			echo "Error: select * fail";
		
	?>

	<h2>mysqli_fetch_row()를 이용한 데이터 읽기</h2>
	<table width="800" border="1" cellspacing="0" cellpadding="5">
		<tr align="center">
			<td bgcolor="#ccc">id</td>
			<td bgcolor="#ccc">name</td>
			<td bgcolor="#ccc">post_num</td>
			<td bgcolor="#ccc">address</td>
			<td bgcolor="#ccc">tel</td>
			<td bgcolor="#ccc">age</td>
		</tr>

		<?php
		
			while($row = mysqli_fetch_row($result)){
				echo "<tr>";

				for($i = 0; $i < $fields; $i++){
					echo "<td>$row[$i]</td>";
				}

				echo "</tr>";
			}

		?>

	</table>
</body>
</html>