<?php

	include_once 'dbh.php';

	$first = $_GET['first'];
	$last = $_GET['last'];
	$age = $_GET['age'];

	//This can be any sequal command.
	$sql = "INSERT INTO info (firstname, lastname, age) VALUES ('$first', '$last', '$age');";

	mysqli_query($conn, $sql);

	header("location: ../index.php?signup=success");