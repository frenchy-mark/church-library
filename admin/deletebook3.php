<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<meta http-equiv="refresh" content="5; url=admin.php" />

	<?php

		include_once 'dbh.php';

		session_start();

		$title = $_SESSION['deleteTitle'];

		$sql = "DELETE FROM resource WHERE title='$title';";

		mysqli_query($conn, $sql);

		echo "DELETETION SUCCESSFUL";

	?>
</body>
</html>