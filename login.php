<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<p id="test"></p>

	<!-- <form name="myForm" onsubmit="validateForm()" method="post">
		<input type="text" placeholder="Enter Username" name="username">
		<input type="password" placeholder="Enter Password" name="password">
		<input type="submit" value="Submit">
	</form> -->

	<input type="text" name="username" placeholder="Enter Username" id="username">
	<input type="password" name="password" placeholder="Enter Password" id="password">
	<button onclick="validateForm()">Submit</button>

	<?php
		include_once 'includes/dbh.php';

	?>


	<script>
		function validateForm()
		{
			var password = document.getElementById("username").value;
			var username = document.getElementById("password").value;
			
			if (password == null || password == "" || username == null || username == "")
			{
				alert("You must enter something in both password and username.")
			}
			else
			{
				window.location='admin/admin.php';
			}
		}
	</script>

</body>
</html>