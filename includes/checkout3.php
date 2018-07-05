<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>

	<div class="topbar">
		<img src="../images/logoplaceholder.png" class="logo">
		<button type="submit" name="submit" class="navbutton" onclick="home()">Home</button>	
	</div>

</head>
<body>

	<link href="../css/ch3stylesheet.css" type="text/css" rel="stylesheet"/>

	<div class="container1">
		<h3>Please confirm your information before proceeding.</h3>
		<h4>Book Info:</h4>
		<p id="title">Title: Unkown</p>
		<p id="author">Author: Unknown</p>
		<p id="isbn">ISBN: Unknown</p>
	</div>

	<div class="container2">
		<h4>User Info:</h4>
		<p id="name">Name: Unknown</p>
		<p id="email">E-Mail: Unknown</p>
	</div>

	<div class="buttons">
		<button class="button1" onclick="goback()">Go Back</button>
		<button class="button2" onclick="confirm()">Confirm</button>
	</div>

	<?php

	include_once 'dbh.php';

	session_start();

	$email = "Unknown";
	$flag = $_SESSION['userFlag'];

	if ($flag == false)
	{
		$email = $_GET['email'];
		$_SESSION['email'] = $email;
	}

	$firstName = $_SESSION['firstname'];
	$lastName = $_SESSION['lastname'];
	$bookcode = $_SESSION['bookcode'];



	$sql = "SELECT r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.resource_id ='$bookcode';";
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
       		 		if ($flag == true)
       		 		{
       		 			$email = $data;
       		 		}
       		 	}
      	 	}
      		// Free result set
      		mysqli_free_result($result);
      	}
      	$counter++;
      }
  	while (mysqli_next_result($conn));
}

	//echo $email . " " . $firstName . " " . $lastName . " " . $bookcode;

	?>

	<script>
		var title = <?php echo json_encode($row[0]) ?>;
		var authorf = <?php echo json_encode($row[4]) ?>;
		var authorl = <?php echo json_encode($row[5]) ?>;
		var isbn = <?php echo json_encode($row[2]) ?>;
		var userf = <?php echo json_encode($firstName) ?>;
		var userl = <?php echo json_encode($lastName) ?>;
		var email = <?php echo json_encode($email) ?>;
		var flag = <?php echo json_encode($flag) ?>;

		console.log(title + authorf + authorl);

		if (title == null)
		{
			document.getElementById('title').innerHTML = "Title: Unknown Title";
		}
		else
		{
			document.getElementById('title').innerHTML = "Title: " + title;

		}

		if (authorf == null && authorl == null)
		{
			document.getElementById('author').innerHTML = "Author: Unknown Author";
		}
		else
		{
			document.getElementById('author').innerHTML = "Author: " + authorf + " " + authorl;
		}

		if (isbn == null)
		{
			document.getElementById('isbn').innerHTML = "ISBN: Unknown";
		}
		else 
		{
			document.getElementById('isbn').innerHTML = "ISBN: " + isbn;
		}

		document.getElementById('name').innerHTML = userf + " " + userl;
		document.getElementById('email').innerHTML = "E-Mail: " + email;

		function home()
		{
			window.location='../index.php';
		}

		function goback()
		{
			window.location='checkout1.php';
		}

		function confirm()
		{
			if (flag == true)
			{
				window.location='checkout5.php';
			}
			else
			{
				window.location='checkout4.php';
			}

		}

	</script>

</body>
</html>