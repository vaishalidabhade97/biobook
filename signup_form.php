
<?php
         
	$conn=mysqli_connect("localhost","root","","biobook");
        
	if (isset($_POST['submit']))
	{ 
           
	include ('session.php');
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$username2=$_POST['username2'];
		$birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$gender=$_POST['gender'];
		$number=$_POST['number'];
		$email=$_POST['email'];
		$email2=$_POST['email2'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		
			$sql=mySQLi_query($conn,"select * from user WHERE email='$email'") or die (mySQLi_error($conn));
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			elseif($password != $password2)
			{
			echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
			}
                        else
		        {    
			$sql=mySQLi_query($conn,"INSERT INTO user (firstname,lastname,username,username2,birthday,gender,number,email,email2,password,password2)
			VALUES ('$firstname','$lastname','$username','$username2','$birthday','$gender','$number','$email','$email2','$password','$password2')")
			or die (mySQLi_error($conn));
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		}
			
	}
	
?>