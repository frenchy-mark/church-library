<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>

	<div class="topbar">
			<img src="images/logoplaceholder.png" class="logo">
			<button type="submit" name="submit" class="navbutton" onclick="home()">Home</button>
		
	</div>
</head>
<body>

	<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>

	<form action="includes/booktemplate.php" method="get">
		<input type="text" name="bookcode" placeholder="Enter Book Number" class="inputfield">
		<br>
		<button type="submit" name="submit" class="searchbutton">Search</button>
	</form>

	<script>
		function home()
		{
			window.location='index.php';
		}

	</script>
</body>
</html>