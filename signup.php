<html>

	<head>
		<title>Registration</title>

	</head>
	<body>
		
		<div style="margin:100px;border:1px;border-style:solid; background-color: lightyellow;">

		   <div style="text-align:center;margin:10px 40px 40px 40px;">
				<h1>User Signup</h1>
		   </div>
            

		<pre style="font-size:20px; margin:-20px;">
		<form action="signup_action.php" method="post">
			
			<label for="username">Username:</label>  <input type="text" id= "username" name="username" required> <span style="font-style:italic; font-size:15px;">(It Must be Unique)</span>
			
			<label for="email">Email:</label>  <input type="email" id="email" name="email" required> <span style="font-style:italic; font-size:15px;"></span>
			
			<label for="password">Password:</label>  <input type="password" id="password" name="password" required> <span style="font-style:italic; font-size:15px;">(6 characters minimum)</span>
			
			<label for="captcha">Enter a Captcha Code:</label>  <input type="text" name="code">
			<img src="captcha.php">
			<span style="font-style:italic; font-size:15px;">
			
			<input type="submit" value="Sign Up" style="font-weight:bold; color:blue"/>

		</form>
		</pre>
			
		</div>	   
	   
	</body>

</html>