<?php
	$conn = mysqli_connect("localhost", "root", "", "db_grade");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>