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
	<link href="../css/chstylesheet.css" type="text/css" rel="stylesheet"/>

	<h3 class="header">Please enter your first & last name.</h3>

	<div class="inputfield">
		<form action="checkout2.php" method="get">
			<input type="text" name="firstname" placeholder="Enter First Name" class="inputfield1">
			<br>
			<input type="text" name="lastname" placeholder="Enter Last Name" class="inputfield1">
			<br>
			<button type="submit" name="submit" class="searchbutton">Submit</button>
		</form>

	</div>

	<script>
		function home()
		{
			window.location= '../index.php';
		}
	</script>

</body>
</html>