<link rel="stylesheet" href="global.css">

<?php
	include 'vars.php';
	
	echo "<div class='title'><div class='t'>데이터베이스에서 레코드 검색</div>";
	echo "<div class='sp'>2023학년 1학기 수행평가</div></div>";
	echo "1. 학번 이름: $number $name<br>";
	echo "2. 공인 IP 주소: ".$my_ip_addr."<br>";
	echo "3. 웹서버 IP 주소: ".$_SERVER["SERVER_ADDR"]."<br>";
	echo "4. 서버 포트 주소: ".$_SERVER["SERVER_PORT"]."<br><br>";

?>

<a href="conn.php">데이터베이스 접속</a><br>
<a href="create_table.php">테이블 생성</a><br>
<a href="insert.php">테이블에 레코드 삽입</a><br>
<a href="mem_form.php">form을 이용한 서버 전송</a><br>
<a href="mysqli_fetch_row.php">데이터베이스에서 레코드 검색</a><br><br>

<a href="drop.php">리셋</a><br>
