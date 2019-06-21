<html>
<head>

<script type="text/javascript">
		
		function DeleteCart(value)
		{	
			var xmlhttp= new XMLHttpRequest();
			
			xmlhttp.open("GET","DeleteCart.php?prod_id="+value,true);
			//the file get_city.php is their in this folder itself
			xmlhttp.send();
			
			xmlhttp.onreadystatechange=function()
			{	
				if(xmlhttp.readyState==4)
				{	
				document.getElementById('response').innerHTML=xmlhttp.responseText;
}
			}
			
		}
</script>
</head>

<?php
session_start();
if(isset( $_SESSION['session_id']) AND isset( $_SESSION['user_id'])){
		
	echo '<div style="float:left;padding-left:15;font-size:30"><b>Welcome '.$_SESSION["user_name"].' To Your Cart</b></div>
	
			<div style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px">
	
			<a href="index.php"><button><img src="pics/home.png"width="30" height="30" "></button></a>
			&nbsp &nbsp 
			
			<a href="cartbtn.php"><button><img src="pics/cart.jpg"width="30" height="30" "></button></a>
			&nbsp &nbsp 
			
			<a href="logout.php" style="text-decoration:none">Logout</a>
			</div>';
			
			echo"<br><br><br>";
			
			echo "<div style ='font-size:20px;padding-left:10px;' id='response'></div>";
			
	
}
else{
		die("CLICK HERE To<a href='login.php'>Login</a> or <a href='signup.php'>Signup</a>
		&nbsp &nbsp
		<a href='index.php'/>back</a>");
			}

$session_id= $_SESSION['session_id'];
$user_id= $_SESSION['user_id'];

// to save in DB perform following steps					
				
				//connect to the DB
					$con= mysqli_connect('localhost','root','')	or die("<b>Sorry, cannot connect to your localhost</b>");           
					
				//select one DB out of many DBs
					mysqli_select_db($con,'cart') or die("<b>Sorry, cart DB not found.</b>");

					$sql1="Select prod_id from reference where user_id='$user_id' ";
					$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
			
			
if(@mysqli_num_rows($result1)>0){
		
		//$message = "You Have Cart Contents";
		//echo "<script type='text/javascript'>alert('$message');</script>";


$_SESSION['totalcost']=0;		
$count=0;
echo "<table>";
	while($row = mysqli_fetch_assoc($result1)){
				//$sql2="select * from product where product_id=$row['prod_id']";
				echo "<td>";
				
				//Fieldset Starts
				
				echo"<fieldset style='align-content:left'>";
				$prod_id= $row['prod_id'];

				////////For Prod_name query

				$sql2="Select * from product where prod_id='$prod_id'";
				$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
				$column = mysqli_fetch_assoc($result2);	

				//Start of prod_name div

				echo "<div style='font-family:Comic Sans MS;font-size:20;border-style: solid;border-color:green;text-align:center'>";
				echo $column['prod_name'];
				echo "</div>";
				echo "<br>";
				
				/////////For File_Name Query

				//   echo '<img src="pics/'.$row['file'].'"width='80' height='80'>';
				echo '<img src="pics/'.$column['file'].'" height="200" ">';
				
				/////////For Description Query

				echo "<div style='text-align:left;float:right; font-family:Comic Sans MS;font-size:20;padding-left: 5px; border-style: solid;border-color: red;max-width:300px;word-wrap:break-word;'>".$column['prod_descr'];
				echo "<br><br>";
				
				////////// For Cost Query
				
				echo "Rs:". $column['cost'];
				$_SESSION['totalcost'] += $column['cost'];
				echo "<br><br>";
				echo "</div>";
				echo "<br><br>";
				
				//End of outer div

				echo "<div style='padding-left:5px;'>";
				echo "<a href='buy.php'><button>Buy</button></a>";
				echo "&nbsp&nbsp&nbsp";
				//echo "";
				//echo "<a href='delete.php'><button>Buy</button></a>";
				echo "<input type='submit' value='Remove From Cart' onclick=DeleteCart('$prod_id')>";
				//echo "&nbsp &nbsp";
				///////////            AJAX RESPONSE
				echo "";

				echo "</div>";
				
				
				
				//$row['index'] the index here is a field name

				echo "</fieldset>";//outermost fieldset end
				echo "</td>";

				////////////////////////////////////////////

				$count++;

				if($count==2)
				{
				$count=0;
				echo "</tr>";
				}

				}
echo"</table>";
}else{
		$message = "You Dont Have Add To Cart Contents. Add Some.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "Click On Add To Cart To Add Some Contents.";
}

?>
</body>
</html>