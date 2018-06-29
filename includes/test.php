<?php

include_once 'dph.php';

$sql = "SELECT r.title, r.publisher, r.resource_id, r.description, CONCAT(a.first_name + ' ' + a.last_name) FROM resource r JOIN authorship au ON au.resource_id = r.id JOIN author a ON au.author_id = a.id WHERE r.id = '1';";"

?>SELECT r.title, r.publisher, r.resource_id, r.description, CONCAT(a.first_name + ' ' + a.last_name)
		FROM resource r
		JOIN authorship au ON au.resource_id = r.id
		JOIN author a ON au.author_id = a.id
		WHERE id = '$bookcode';";