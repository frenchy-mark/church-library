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

	//echo $firstname . " " . $lastname . " " . $email;

	$sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email');";
	$sql .= "SELECT id FROM users WHERE firstname='$firstname' AND lastname='$lastname';";

	$counter = 0;
		// Execute multi query
	if (mysqli_multi_query($conn,$sql))
	{
  	do
   	 {
   	 	if ($counter == 1)
   	 	{
    	// Store first result set
    	if ($result=mysqli_store_result($conn)) 
    	{
      		// Fetch one and one row
      		while ($data=mysqli_fetch_row($result))
       	 	{
       		 	if ($counter == 1)
       		 	{
       		 		//echo $data[0];
       		 		$_SESSION['userId'] = $data[0];

       		 	}
      	 	}
      		// Free result set
      		mysqli_free_result($result);
      	}
      }
      	$counter++;
      }
  	while (mysqli_next_result($conn));
	}




	?>

	<script>location.href = 'checkout5.php';</script>

</body>
</html>