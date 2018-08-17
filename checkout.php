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

	<form action="checkDupe.php" method="get">
		<input type="text" name="bookcode" placeholder="Enter Book Number" class="inputfield">
		<br>
		<div class="radio">
			<input onchange="update()" type="radio" name="searchBy" value="bCode" id="bCode" checked="checked">Book Code
			<input onchange="update()" type="radio" name="searchBy" value="title" id="title">Title
			<input onchange="update()" type="radio" name="searchBy" value="author" id="author">Author
			<input onchange="update()" type="radio" name="searchBy" value="isbn" id="isbn">ISBN
		</div>
		<br>
		<button type="submit" name="submit" class="searchbutton">Search</button>
	</form>

	<script>
		function home()
		{
			window.location='index.php';
		}

		function update()
		{
			if (document.getElementById('bCode').checked)
			{
				document.getElementsByName('bookcode')[0].placeholder='Enter Book Number';
			}
			else if (document.getElementById('title').checked)
			{
				document.getElementsByName('bookcode')[0].placeholder='Enter Book Title';
			}
			else if (document.getElementById('author').checked)
			{
				document.getElementsByName('bookcode')[0].placeholder='Enter Book Author';
			}
			else if (document.getElementById('isbn').checked)
			{
				document.getElementsByName('bookcode')[0].placeholder='Enter Book ISBN';
			}
			else
			{
				document.getElementsByName('bookcode')[0].placeholder='Please Select A Search Type';
			}
		}

		function test()
		{
			alert("It worked!");
		}


	</script>
</body>
</html>