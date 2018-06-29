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

	$email = $_GET['email'];

	$firstName = $_SESSION['firstname'];
	$lastName = $_SESSION['lastname'];
	$bookcode = $_SESSION['bookcode'];

	$sql = "SELECT r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.resource_id ='$bookcode';";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	//echo $email . " " . $firstName . " " . $lastName . " " . $bookcode;

	?>

	<script>
		var title = <?php echo json_encode($row['title']) ?>;
		var authorf = <?php echo json_encode($row['first_name']) ?>;
		var authorl = <?php echo json_encode($row['last_name']) ?>;
		var isbn = <?php echo json_encode($row['resource_id']) ?>;
		var userf = <?php echo json_encode($firstName) ?>;
		var userl = <?php echo json_encode($lastName) ?>;
		var email = <?php echo json_encode($email) ?>;

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
			window.location='checkout4.php';
		}

	</script>

</body>
</html>