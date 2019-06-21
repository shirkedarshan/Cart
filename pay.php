<?php

session_start();

if($_SESSION['vercode']){


	// Retrieve details from HTMl files , like this : 
		$snumber=$_REQUEST['snumber'];
		$bnumber=$_REQUEST['bnumber'];
		
		
		$password=$_REQUEST['pass'];
		$cardno=$_REQUEST['cardno'];



	// check len of the pwd 
	if($_POST["code"]!=$_SESSION['vercode'])
		{
		
		echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>";
		
		echo "Invalid Captcha code<br><br>";
		echo "Transaction Interrupted";
		echo"<br><br>";
			
		echo("<a href='index.php'>CLICK HERE</a> for Home Page");
		unset($_SESSION['vercode']);
		
		echo "</div></div> </body>";
		}
	else{
	
	if(strlen($cardno)<16){
							
			echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>";
			
			echo "Invalid Card No<br><br>";
			
			echo "Transaction Interrupted";
			echo"<br><br>";
			
			echo("<a href='index.php'>CLICK HERE</a> for Home Page");
		
			echo "</div></div> </body>";
		}
	else{
	
	if(strlen($password)<4)
			{
				
			echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>";	
			
			echo "Transaction Interrupted";
			
			echo("<br><b><h3>Password length must be 4</h3></b>");
			
			echo("<a href='index.php'>CLICK HERE</a> for Home Page");
			echo'&nbsp &nbsp ';
			

			echo "</div></div> </body>";
			}
	else{
					
			echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>Transaction Done Successfully.<a href='index.php'/>Click Here</a> To See More Product.</div></div> </body>";										
												
		    }    
		 }		
    }
}else{
	echo "<body><div style='width:1150px;height:60%; text-align: center; margin:100px;border:1px;border-style:solid; background-color: lightyellow;'><div style='padding:100px;'>";	
			
	echo "Transaction Interrupted<br><br>";
	
	echo"Enter Captcha If Entered then Refresh Again And Try<br><br>";
	
	echo("<a href='index.php'>CLICK HERE</a> for Home Page");
		
	echo "</div></div> </body>";
}

	




?>