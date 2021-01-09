<?php 
	//connecting to our database
	$connection = new mysqli("localhost", "lorvee5_samuel", "hicui4cu258000", "lorvee5_teaser");
	if(mysqli_connect_error()){
		die("Failed to connect to database ". mysqli_connect_errno());
	}
?>