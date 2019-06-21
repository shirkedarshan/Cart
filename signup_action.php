<?php

session_start();

	if($_POST){


	// Retrieve details from HTMl files , like this : 
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$email=$_REQUEST['email'];



	// check len of the pwd 
		if(strlen($password)<6)
		{
		unset($_SESSION['vercode']);
		session_destroy();
		echo("CLICK HERE To<a href='login.php'>Login</a> or <a href='signup.php'>Signup</a>");
		echo'&nbsp &nbsp ';
		echo'<a href="index.php"><button>home</button></a>';
		die("<br><b><h3>Password length must be greater than 5</h3></b>");
		}
		else{
		if($_POST["code"]!=$_SESSION['vercode'])
		{
		echo "<h4>Invalid Captcha Signup<h4><br>";
		echo("CLICK HERE To<a href='login.php'>Login</a> or <a href='signup.php'>Signup</a>");
		unset($_SESSION['vercode']);
		session_destroy();
		}
		else
			{
				unset($_SESSION['vercode']);
				session_destroy();
			
				// to save in DB perform following steps					
				
				//connect to the DB
					$con= mysqli_connect('localhost','root','')	or die("<b>Sorry, cannot connect to your localhost.</b>");           
					
				//select one DB out of many DBs
					mysqli_select_db($con,'cart') or die("<b>Sorry, cart DB not found.</b>");
					
	            //insert value into user table				
					$sql = "Insert into tbl_users VALUES('','$username','$email','$password','')";	
					
			    //fire query over user_info table		
					$result = mysqli_query($con,$sql) or die(mysqli_error($con));
					
								
					echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>Signup Done Successfully.<a href='login.php'/>Click Here To Login.</a></div></div> </body>";							
					
		
					mysqli_close($con);									
		    }    
		 }		
    }
?>
