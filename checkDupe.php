<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<form action="includes/booktemplate.php" method="get" align="center"  id="form" hidden>
		<input type="text" name="bookcode" placeholder="Enter Book Number" class="inputfield">
		<br>
		<div class="radio">
			<input type="radio" name="searchBy" value="bCode" id="bCode" checked="checked">Book Code
		</div>
		<br>
		<button type="submit" name="submit" class="searchbutton">Search</button>
	</form>

	<h4 align="center">More then one result was found! Please enter the unique id (bold number) for your desired result.</h4>

	<h5 align="center"></h5>

	<div align="center">
		<p id="one" hidden></p>
		<p id="two" hidden></p>
		<p id="three" hidden></p>
		<p id="four" hidden></p>
		<p id="five" hidden></p>
		<p id="six" hidden></p>
		<p id="seven" hidden></p>
		<p id="eight" hidden></p>
		<p id="nine" hidden></p>
		<p id="ten" hidden></p>
	</div>




	<?php

	include 'includes/dbh.php';

	$searchTerm = $_GET['bookcode'];
	echo $searchTerm . "<br>";

	$searchBy = $_GET['searchBy'];

	session_start();

	$_SESSION['searchTerm'] = $searchTerm;
	$_SESSION['searchBy'] = $searchBy;

	if ($searchBy == "bCode")
		{
			$sql = "SELECT r.id, r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.id =$searchTerm;";
		}
		if ($searchBy == "author")
		{
			$stringArray = explode(" ", $searchTerm);
			$sql = "SELECT r.id, r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE a.first_name='$stringArray[0]' AND a.last_name='$stringArray[1]';";
		}
		if ($searchBy == "title")
		{
			$sql = "SELECT r.id, r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.title ='$searchTerm';";
		}
		if ($searchBy == "isbn")
		{
			$sql = "SELECT r.id, r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.resource_id =$searchTerm;";
		}
		if ($searchBy == "publisher")
		{
			$sql = "SELECT r.id, r.title, r.publisher, r.resource_id, r.description, a.first_name, a.last_name FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.publisher ='$searchTerm';";
		}

		$result = mysqli_query($conn, $sql);		
		//$row = mysqli_fetch_assoc($result);

		if(mysqli_num_rows($result) > 1)
		{
			$dupe = true;
			$number = mysqli_num_rows($result);

			$count = 0;

			//Putting results into a two dimensional array.
			while ($row = mysqli_fetch_array($result))
			{
    			$array[$count]['id'] = $row['id'];
    			$array[$count]['title'] = $row['title'];
    			$array[$count]['resource_id'] = $row['resource_id'];
    			$array[$count]['first_name'] = $row['first_name'];
    			$array[$count]['last_name'] = $row['last_name'];

    			$count++;
			}
		}
		else
		{
			$dupe = false;
			$number = 1;
		}
	?>

	<script>
		var dupe = <?php echo json_encode($dupe) ?>;
		var number = <?php echo json_encode($number) ?>;
		var row = <?php echo json_encode($array) ?>;

		alert(row[0]['title']);
		alert(row[1]['title']);

		//alert(row['id']);

		//document.getElementById("one").removeAttribute("hidden");

		//document.getElementById("one").innerHTML =  "<b>" + row['id'] + "</b>" + " " + row['title'] + " " + row['resource_id'] + " " + row['first_name'] + " " + row['last_name'];


		


	</script>



</body>
</html>