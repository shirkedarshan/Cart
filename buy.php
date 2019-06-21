<html>
<head>
<title>Transaction</title>
</head>
<style type="text/css">
	.border{ border:solid 1px;}
	.size{
		height:200px;
		width:200px;
		}
</style>
<body>
<?php
session_start();

if(!isset( $_SESSION['session_id'])or !isset( $_SESSION['user_id'])){
	echo"";
	echo "<div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'>
	<div style='padding:100px;'>
	Sorry To Say You Are Not Logged In
	<a href='login.php' style='text-decoration:none'>Click Here</a> To Login.<br>
	<a href='index.php' style='text-decoration:none'>Click Here</a> To See Products.
	</div>
	</div> ";
}
else{
	
echo '<span style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px">

		<a href="index.php"><button><img src="pics/home.png"width="30" height="30" "></button></a>
		&nbsp &nbsp 
		<a href="cartbtn.php"><button><img src="pics/cart.jpg"width="30" height="30" "></button></a>
		&nbsp &nbsp 
		<a href="logout.php" style="text-decoration:none">logout</a></span>';

echo'<div style="font-family:Comic Sans MS;float:left;border:solid 1px;padding-left:10px;">
		
<form style="float:left;" action="pay.php" method="post">
	<br>
		
		Enter The Following Details To Complete a Transaction
		<br><br>
		
		<div style="font-family:Comic Sans MS;float:left;">
		<fieldset>
		
		Shipping Details.<hr>
		
		First name: <input type="text" name="sfname" required />
		<br><br>
		
		Last name: <input type="text" name="slname" required />
		<br><br>
		
		Address: <input type="text" name="saddress" required />
		<br><br>
		
		Contact No: <input type="text" name="snumber" maxlength="10" required />
		<br><br>
		
		Enter a Captcha Code:</label>  <input type="text" name="code">
		<br>
		
		
		
		
		<img src="captcha.php">
				
				
		</fieldset> 
		
		<br> <br>
		
	</div>
	
<div style="font-family:Comic Sans MS;float:right;">

	<fieldset>
	
		Billing Details.
		<hr>
		
		First name: <input type="text" name="bfname" required />
		<br><br>
		
		Last name: <input type="text" name="blname" required />
		<br><br>
		
		Address: <input type="text" name="baddress" required />
		<br><br>
		
		Contact No: <input type="text" name="bnumber" maxlength="10" required />
		<br><br>
		
		Card Number: <input type="text" name="cardno" maxlength="16" required />
		<br><br>
		
		Password: <input type="password" name="pass" maxlength="4" required />
		<br><br>
		
		<input type="submit" value="Confirm Transaction">
		</fieldset><br>
		
	</div>
	
</form>

</div>';
}

?>

</body>