<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>

		<div class="topbar">
			<img src="images/logoplaceholder.png" class="logo">
		
		</div>
</head>

<body>

	<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>

	<button onclick="checkout();" class="homeButton button1" id="checkout" type="button">Check Out Book</button>
	<button onclick="view();" class="homeButton button2" id="view" type="button">View Inventory</button>

	<a href="login.php" class="homelink">Log in as Admin</a>

	<script>
		//This is a test
		function checkout()
		{
			window.location='checkout.php';
		}

		function view()
		{
			window.location='view.php';
		}
	</script>
</body>
</html>
