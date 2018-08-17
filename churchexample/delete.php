<?php
	include_once 'includes/dbh.php';
?>

<html>
<title>Delete Data</title>
<body>

	<h3>Please type the first name of the person you want to delete.</h3>

	<form action="includes/deletedata.php" method="get">
		<input type="text" name="first" placeholder="Fisrtname">
		<br>
		<button type="submit" name="submit">Delete</button>
	</form>

</body>
</html>
