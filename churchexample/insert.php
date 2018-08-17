<?php
	include_once 'includes/dbh.php';
?>

<html>
<title>Insert Data</title>
<body>

	<form action="includes/insertdata.php" method="get">
		<input type="text" name="first" placeholder="Fisrtname">
		<br>
		<input type="text" name="last" placeholder="Lastname">
		<br>
		<input type="text" name="age" placeholder="Age">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>

</body>
</html>