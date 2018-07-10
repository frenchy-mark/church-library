<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<?php
		include_once 'dbh.php';

		$sql = "SELECT * FROM transaction_log JOIN users ON users.id = transaction_log.users_id JOIN resource ON resource.id = transaction_log.resource_id;";

		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) 
		{
    		while($row = mysqli_fetch_assoc($result)) 
    		{
     	  		echo $row['title'] . " checked out by " . $row['firstname'] . " " . $row['lastname'] . " on " . $row['timestamp'] . "<br>";
   			}
		} 
		else 
		{
   			echo "0 results";
		}

	?>

</body>
</html>