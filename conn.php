<?php
	$conn = mysqli_connect("localhost", "myuser", "password", "lamp_task");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
