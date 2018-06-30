<!DOCTYPE html>
<html>
<head>
	<title>TEST PAGE...</title>
</head>
<body>

	<?php

	include_once 'dbh.php';

	$sql = "SELECT * FROM resource WHERE id=1;";
	/*$sql .= "SELECT * FROM resource WHERE id=2;";

	mysqli_multi_query($conn, $sql);

	$result = mysqli_store_result($conn);
	while ($row = mysqli_fetch_array($result));

	echo $row['title'];
	echo $row['2'];

	echo "blah";*/

	



	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	echo $row['title'];


	?>

</body>
</html>