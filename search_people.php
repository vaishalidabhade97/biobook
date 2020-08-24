<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
                <link rel="stylesheet" type="text/css" href="css/photos.css">
	</head>

<body>
<?php include ('session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Biobook"><b>biobook</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li>
				<li><a href="profile.php" title="Profile"><label class="active">Profile</label></a></li>
				<li><a href="photos.php" title="Settings"><label>Photos</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				 <link rel="stylesheet" type="text/css" href="css/photos.css">
				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>
				
				</div>

				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
                                </div>
                    
			<h2>Personal Info</h2>
                        <div style="background-color: #73cfff;">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
                        </table>
                        </div>
		</div>		
				
		
		
		
            
                     
                    
                <div style="padding-top: 20px;">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <center><input type="search" placeholder="Search..." style="width:250px;"name="search" value="<?php echo $_POST['search']; ?>" class="search_people" required>
				
                                    <button class="btn" name="search_btn" value="Search">Search</button></center>
			</form>
	</div>
           <div id="right-nav" >
             
                    <h3>People</h3>
                    <hr />
			<br />
			<?php
			include('includes/database.php');
                        $name=$_POST['search'];
                        $user=$_SESSION['id'];
                        
			$result=mysqli_query($conn,"SELECT * FROM user where firstname like '%$name%' or lastname like '%$name%' order by firstname ASC ");
			
			while($test = mysqli_fetch_array($result))
			{
                            $friend_id=$test['user_id'];
                            $result1=mysqli_query($conn,"SELECT * FROM friends where friend_id like '%$friend_id%' ");
			    $test1 = mysqli_fetch_array($result1);
                            if (!($test['user_id']== $test1['user_id']))
                            {
				echo " <div class='info-user'>";
                                echo "<a href='#' style='text-decoration:none;'>".$test['firstname']."".$test['lastname']."";
				echo "</a>";
				echo " <div >";
                          if($test['profile_picture'])    { 
                        ?>
                   
                            <img src="<?php echo $test['profile_picture'];?>" >
                            <?php
                          }
                            else{
                                ?>
                            
                                <img src="image/faceback.ico" width="10" height="10">
                            <?php
                            }
                            ?>
                                
                                <?php
                                while($test1)
			{
                                 ?>
                                <input type="text" name="userid" value="<?php echo $test1['friend_id']; ?>">
                        <a href="#"><button class="btn" name="search_btn" value="Search" >Message</button> </a><?php } ?>
                                    <form action="make_friend.php" method="post">
                                <input type="text" name="userid" value="<?php echo $test['user_id']; ?>">
                        <button class="btn" name="search_btn" value="Search" >Add Friend</button>
                                </form><?php 
                        
                                
                                echo "<hr />";
				echo "</div> ";
						
				echo "<br /> ";	
                        }
                        }      ?>
			
		</div></center>
        </div>

	
	

</body>

</html>