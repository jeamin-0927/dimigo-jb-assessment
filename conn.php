<link rel="stylesheet" href="global.css">

<?php
	$link = mysqli_connect("127.0.0.1", "jeamxn", "s1234", "dimigo_db");
	if(!$link) {
		echo "Error: Unable to connect to MySQL.";
		exit;
	}

	echo "Success: A proper connection to MySQL was made!";
	mysqli_close($link);
?>