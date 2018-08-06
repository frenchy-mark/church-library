<!DOCTYPE html>
<html>
<head>
	<title>TEST PAGE...</title>
</head>
<body>

	<?php

  include 'dbh.php';

  $sql = "SELECT * FROM resource WHERE title='Test';";

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  echo $row['resource_id'];

  $sql = "SELECT * FROM resource WHERE title='Test';";

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  echo $row['resource_id'];

  //$sql = "SELECT * FROM deleted_resource WHERE id=$row['resource_id'];";

  //$sql = "new";

  /*
  $string = "Quinn Roemer";
  echo $string;
  $stringArray = explode(" ", $string);
  echo $stringArray[0] . $stringArray[1];
  */

	/*
  include_once 'dbh.php';

	$bookcode = 2;
	$firstName = "Quinn";

	$sql = "SELECT r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.id ='$bookcode';";
	$sql .= "SELECT email FROM users WHERE firstname='$firstName'";

	$counter = 0;

		// Execute multi query
	if (mysqli_multi_query($conn,$sql))
	{
  	do
   	 {
    	// Store first result set
    	if ($result=mysqli_store_result($conn)) 
    	{
      		// Fetch one and one row
      		while ($data=mysqli_fetch_row($result))
       	 	{
       	 		if ($counter == 0)
       	 		{
       	 			$row = $data;
       	 		}
       		 	if ($counter == 1)
       		 	{
       		 		echo $data[0];
       		 	}
      	 	}
      		// Free result set
      		mysqli_free_result($result);
      	}
      	$counter++;
      }
  	while (mysqli_next_result($conn));
}

echo $row[0];*/


	/*$sql = "SELECT * FROM resource WHERE id=2;";
	$sql .= "SELECT * FROM users WHERE firstname='Quinn'";

	// Execute multi query
	if (mysqli_multi_query($conn,$sql))
	{
  	do
   	 {
    	// Store first result set
    	if ($result=mysqli_store_result($conn)) 
    	{
      		// Fetch one and one row
      		while ($row=mysqli_fetch_row($result))
       	 	{
       		 	//printf("%s\n",$row[0]);
       		 	//$row = mysqli_fetch_assoc($result);
       		 	echo $row[3];
      	 	}
      		// Free result set
      		mysqli_free_result($result);
      	}
      }
  	while (mysqli_next_result($conn));
}

mysqli_close($conn);*/


	//$sql = "SELECT * FROM resource WHERE id=1;";
	/*$sql .= "SELECT * FROM resource WHERE id=2;";

	mysqli_multi_query($conn, $sql);

	$result = mysqli_store_result($conn);
	while ($row = mysqli_fetch_array($result));

	echo $row['title'];
	echo $row['2'];

	echo "blah";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	echo $row['title'];*/


	?>

</body>
</html>