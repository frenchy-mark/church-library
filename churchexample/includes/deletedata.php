<?php
	include_once 'dbh.php';

	$first = $_GET['first'];

	$sql = "DELETE FROM info WHERE firstname='$first';";

	mysqli_query($conn, $sql);

	header("location: ../index.php?signup=success");