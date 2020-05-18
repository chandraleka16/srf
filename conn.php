<?php
	$conn = mysqli_connect("localhost", "mychan_user", "password", "lamp_task");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
