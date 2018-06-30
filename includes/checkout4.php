<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php

	//Only run this when a new user needs to be added.
	
	include_once 'dbh.php';

	session_start();

	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
	$email = $_SESSION['email'];

	echo $firstname . " " . $lastname . " " . $email;

	$sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email');";

	mysqli_query($conn, $sql);

	?>

</body>
</html>