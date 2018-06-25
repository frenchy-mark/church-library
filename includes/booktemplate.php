<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>

	<div class="topbar">
			<img src="../images/logoplaceholder.png" class="logo">
		
	</div>

</head>
<body>

	<link href="../css/btstylesheet.css" type="text/css" rel="stylesheet"/>

	<div class="allinfo">
		<img class="bookimage" src="../images/genericBook.jpg">

		<div class="info">
			<h2 class="title" id="booktitle" align="center">Doesn't exist or bad DB connection</h2>
			<div class="container">
				<h3>Description:</h3>
				<p class="description" id="bookdescription">Doesn't exist or bad DB connection</p>
				<h3>Info:</h3>
				<p class="isbn" id="bookisbn">Doesn't exist or bad DB connection</p>
				<p class="publisher" id="bookpublisher">Doesn't exist or bad DB connection</p>
				<p class="author" id="bookauthor">Author: NOT IMPLEMENTED</p>
				<p class="booknumber" id="bookid">Doesn't exist or bad DB connection</p>
				<p class="status">Status: NOT IMPLEMENTED</p>
			</div>
		</div>
	</div>
	<div class="buttons">
		<button type="submit" name="submit" class="button1" onclick="goback()">Go Back</button>
		<button type="submit" name="submit" class="button2" onabort="checkout()">Checkout</button>
	</div>

	<?php
		include_once 'dbh.php';

		$bookcode = $_GET['bookcode'];

		$sql = "SELECT * FROM resource WHERE id='$bookcode';";

		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);

		/*$sql2 = "SELECT * FROM authorship WHERE resource_id='$row['id']';";

		$result2 = mysqli_query($conn, $sql2);

		$row2 = mysqli_fetch_assoc($result2);

		$sql3 = "SELECT * FROM author WHERE id='$row2['author_id']';";

		$result3 = mysqli_query($conn, $sql3);

		$row3 = mysqli_fetch_assoc($result3);*/


	?>

	<script>
		
		var title = <?php echo json_encode($row['title']) ?>;
		var isbn = <?php echo json_encode($row['resource_id']) ?>;
		var publisher = <?php echo json_encode($row['publisher']) ?>;
		var id = <?php echo json_encode($row['id']) ?>;
		var description = <?php echo json_encode($row['description']) ?>;


		if (title == null)
		{
			document.getElementById('booktitle').innerHTML = "Unknown Title";
		}
		else
		{
			document.getElementById('booktitle').innerHTML = title;
		}

		if (isbn == null)
		{
			document.getElementById('bookisbn').innerHTML = "ISBN: Unknown ISBN";
		}
		else
		{
			document.getElementById('bookisbn').innerHTML = "ISBN: " + isbn;
		}

		if (publisher == null)
		{
			document.getElementById('bookpublisher').innerHTML = "Publisher: Unknown Publisher";
		}
		else
		{
			document.getElementById('bookpublisher').innerHTML = "Publisher: " + publisher;
		}

		if (id == null)
		{
			document.getElementById('bookid').innerHTML = "Library Number: Unknown ID";
		}
		else
		{
			document.getElementById('bookid').innerHTML = "Library Number: " + id;
		}

		if (description == null || description == "")
		{
			document.getElementById('bookdescription').innerHTML = "No Description...";
		}
		else
		{
			document.getElementById('bookdescription').innerHTML = description;
		}


		function checkout()
		{
			//window.location='checkout.php';
		}

		function goback()
		{
			window.location='../checkout.php';
		}

	</script>
</body>
</html>

