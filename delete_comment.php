<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query
	mysqli_query($conn,"DELETE FROM comments WHERE comment_id = '$get_id'")
	or die(mysqli_error($conn));  	
	header("Location: home.php");

?>
