<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php

	include_once 'includes/dbh.php';

	$title = $_GET['title'];

	$sql = "SELECT * FROM resource WHERE title='$title';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) 
	{
    	while($row = mysqli_fetch_assoc($result)) 
    	{
       		echo $row['title'] . " " . $row['publisher'] . " " . $row['resource_id'] . " " . "<br>";
   		}
	} 
	else 
	{
   		echo "0 results";
	}

	?>

</body>
</html>