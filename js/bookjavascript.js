			var title = <?php echo json_encode($row['title']) ?>;
			var isbn = <?php echo json_encode($row['resource_id']) ?>;
			var publisher = <?php echo json_encode($row['publisher']) ?>;
			var id = <?php echo json_encode($row['id']) ?>;

			
			console.log("title");
			document.getElementById('booktitle').innerHTML = "test, test, test";