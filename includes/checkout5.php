<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<h3 align="center"><font color="green">SUCCESS!!!</font></h3>



	<meta http-equiv="refresh" content="5;url=../index.php" />



	<?php

	include_once 'dbh.php';

	session_start();

	date_default_timezone_set("America/Los_Angeles");

	$store = date("Y-m-d H:i:sa");
	//echo $store;

	$rId = $_SESSION['rId'];

	$userID = $_SESSION['userId'];
	//echo $rId . " " . $userID . " " . $store;

	$sql = "INSERT INTO transaction_log (resource_id, users_id, type, timestamp) VALUES ('$rId', '$userID', 2, '$store');";

	mysqli_query($conn, $sql);

	?>

</body>
</html>