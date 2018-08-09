<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php

	include 'dbh.php';

	$title = $_POST['title'];
	$publisher = $_POST['publisher'];
	$author_first = $_POST['authorf'];
	$author_last = $_POST['authorl'];
	$isbn = $_POST['isbn'];
	$publishDate = $_POST['publishDate'];
	$pageCount = $_POST['pageCount'];
	$description = $_POST['description'];

	//echo $title . " " . $publisher . " " . $isbn;
	echo $author_first . " " . $author_last . "<br>" /*. " " . $pageCount*/;
	//echo $publishDate . " " . $description;


	//echo $title . $publisher . $authorf . $authorl . $isbn . "<br>";

	$sql = "SELECT * FROM author WHERE first_name='$author_first' AND last_name='author_last';";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	echo $row['first_name'];

	echo mysqli_num_rows($row);

	/*$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	echo $row['first_name'] . " " . $row['last_name'];

	if (mysqli_num_rows($result) <= 0)
	{
		echo "Result is false...";
	}
	else
	{
		echo "Result is true...";
	}*/

	?>

</body>
</html>