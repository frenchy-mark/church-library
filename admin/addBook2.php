<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php

	include_once 'dbh.php';

	$title = $_GET['title'];
	$publisher = $_GET['publisher'];
	$author_first = $_GET['authorf'];
	$author_last = $_GET['authorl'];
	$isbn = $_GET['isbn'];

	//echo $title . $publisher . $authorf . $authorl . $isbn . "<br>";

	$sql = "SELECT * FROM author WHERE first_name='$author_first' AND last_name='author_last';";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	echo $row['first_name'] . " " . $row['last_name'];

	/*if ($row['first_name'] == "" || $row['first_name'] == null)
	{
		echo "Result is false...";
	}
	else
	{
		echo "Result...";
	}*/

	?>

</body>
</html>