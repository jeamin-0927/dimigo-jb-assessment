<link rel="stylesheet" href="global.css">

<?php

	echo "데이터베이스에서 레코드 검색 <br><br>";
	echo "2023학년 1학기 수행평가 <br><br>";
	echo "1. 학번 이름: 2629 최재민<br>";
	echo "2. 공인 IP 주소: "."<br>";
	echo "3. 웹서버 IP 주소: ".$_SERVER["SERVER_ARRD"]."<br>";
	echo "4. 서버 포트 주소: ".$_SERVER["SERVER_PORT"]."<br><br>";


?>
<a href="conn.php">데이터베이스 접속</a><br>
<a href="membership_table_.php">테이블 생성</a><br>
<a href="insert.php">테이블에 레코드 삽입</a><br>
<a href="mem_form.php">form을 이용한 서버 전송</a><br>
<a href="mysql_fetch_row.php">데이터베이스에서 레코드 검색</a><br>