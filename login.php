<html>
<style type="text/css">
	.border{ border:solid 1px;}
	.size{
		height:200px;
		width:200px;
		}
</style>
<head>
<title>Index Page</title>
</head>
<body style="">
<div style="font-family:Comic Sans MS;float:left;">
<fieldset>




<p>
<a href='index.php' style="font-family:Comic Sans MS;float:right;padding-right:8px;text-decoration:none"><button><img src="pics/home.png"width="30" height="30" ></button></a>
User Login
</p>

<form action="login_action.php" method="post" >
<fieldset>
<br>

User_Name:<input type="text" name="name" required /><br><br>
Email:<input type="email" name="email" required /><br/><br/>
Password:<input type="password" name="pwd" required /><br/><br/>
</fieldset>
<br>
<input type="submit" value="login"/>
<br>
</form>
If you Are not Registered.
<br><br>
Please <a href='signup.php'/><button>Signup</button></a>
<br><br>
</fieldset>
</div>
</body>
</html>
