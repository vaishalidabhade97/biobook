
<html>
<head>
<title>Facebook</title>
<html>
<head>
</head>

</html>
<LINK REL="SHORTCUT ICON" HREF="image/Faceback.ico" />
        <script type="text/javascript" src="validation/Registration_validation.js"> </script>
</head>
<body >
<!--login form-->
   
	
<!-- Registration -->
<div class="color-box" style="background-color: lightgray; margin-left:475px; margin-top:100px; width: 500px; height: 500px; ">
    <form  method="post" action="signup_form.php" name="Reg">
		<div style="position:absolute;left:45%; top:14.5%; color:#000066; font-size:25"> <h5> Create New Account </h5> </div>
		<div style="position:absolute;left:45%; top:24.6%; color:#000000;">  It's free and always will be.  </div>
		<div style="position:absolute;left:40.3%; top:29.1%; height:1; width:385; background-color:#CCCCCC;"> </div>
        
		<div style="position:absolute;left:40%; top:34%; font-size:16px; color:#000000">  First Name: </div>
		<div style="position:absolute;left:50%;   top:32.8%; "> <input type="text" name="first_name" size="25" class="inputbox" maxlength="10" placeholder="   Enter Your First Name"/> </div>
		<div style="position:absolute;left:40%; top:41%; font-size:16px; color:#000000">  Last Name: </div>
		<div style="position:absolute;left:50%;  top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10" placeholder="   Enter Your Last Name" /> </div>
		<div style="position:absolute;left:40%; top:48%; font-size:16px; color:#000000">  Your Email:  </div>
		<div style="position:absolute;left:50%;  top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox" placeholder="   Enter Your Email" /> </div>
		<div style="position:absolute;left:40%; top:55%; font-size:16px; color:#000000">  Re-enter Email:  </div>  
		<div style="position:absolute;left:50%; top:53.8%; "> <input type="text" name="remail"  size="25" class="inputbox" placeholder="   Re-enter Your Email"/> </div>
		<div style="position:absolute;left:40%; top:62%; font-size:16px; color:#000000"> New Password:  </div>
		<div style="position:absolute;left:50%; top:60.8%; "> <input type="password" name="password" size="25" class="inputbox" placeholder="   Enter New Password"/> </div>
		<div style="position:absolute;left:40%; top:68.5%; font-size:16px; color:#000000"> I am:  </div>
		<div style="position:absolute;left:50% ;top:67.8%;">		  
		<select name="sex" style="width:120;height:30;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>
		
<div style="position:absolute;left:40%; top:74.8%; font-size:16px; color:#000000">  Birthday:  </div>

	
	<div style="position:absolute;left:47%; top:74%;">
	<select name="month" style="width:80;font-size:18px;height:30;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>



	<div style="position:absolute; left:54%; top:74%;">
	<select name="day" style="width:63;font-size:18px;height:30;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	

	<div style='position:absolute;left:60%;top:74%;'>
	<select name="year" style="width:70; font-size:18px; height:30; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=2018;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		
<div style="position:absolute;left:50%; top:82%; color:lightseagreen; ">  <input type="submit" name="signup" value="Sign Up"  id="sign_button" style="background-color:green; height:30px; width:100px; font-color:black;" /> </div>
		</form>
</div>
</body>
<?php
	include("fb_error/reg_err.php");
?>
</body>
</html>
