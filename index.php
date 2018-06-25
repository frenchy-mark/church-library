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

	<button onclick="checkout();" class="homeButton button1" id="checkout" type="button">Check Out Book</button>
	<button onclick="view();" class="homeButton button2" id="view" type="button">View Inventory</button>

	<a href="login.php" class="adminlink">Log in as Admin</a>

	<script>
		function checkout()
		{
			window.location='checkout.php';
		}

		function view()
		{
			window.location='view.php';
		}

		function home()
		{
			window.location='index.php';
		}
	</script>
</body>
</html>