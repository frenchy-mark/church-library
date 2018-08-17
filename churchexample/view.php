<?php
	include_once 'includes/dbh.php';
?>
<html>
<title>View Data</title>
<body>
	<h4>Here is all the data currently in the database</h4>


	<?php
		$sql = "SELECT firstname, lastname, age FROM info ORDER BY firstname";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0)
		{
    		while($row = mysqli_fetch_assoc($result))
    		{
        		echo $row['firstname'] . " " . $row['lastname'] . " " . $row['age'] . " " . "<br>";
   			}
		}
		else
		{
    		echo "0 results";
		}

	?>

<a href="index.php">Go Back</a>

</body>
</html>
