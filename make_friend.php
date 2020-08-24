
<?php include ('session.php');

	

	include("includes/database.php");
           $user=$_SESSION['id'];
	   $friend_id=$_POST['userid'];		
	   $update=mysqli_query($conn," INSERT INTO friends (user_id,friend_id,accepted) VALUES ('$user','$friend_id',1) ") or die (mySQLi_error($conn));
	
	  	
                   
                    
	
?>