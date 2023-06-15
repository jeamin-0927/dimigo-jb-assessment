<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<?php
	$connect = mysqli_connect("127.0.0.1", "jeamxn", "s1234", "dimigo_db");
	if(!$connect) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	$sql = "insert into biz_card (num, name, company, tel, hp, address) values (1, 'ssp', 'ssparkcompanay', '031-276-1829', '010-8723-2837', 'bongdam city')";
	$result = mysqli_query($connect, $sql);
	if($result)
		echo "Success: record insert success";
	else
		echo "Error: record insert fail";
	
	mysqli_close($link);
?>