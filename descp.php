<html>
<head>
<title>Descp</title>

<script type="text/javascript">
		
		function AddToCart(value)
		{	
			var xmlhttp= new XMLHttpRequest();
			
			xmlhttp.open("GET","AddToCart.php?prod_id="+value,true);
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
	
<style type="text/css">

.style1{
	width:180px;
}

</style>
</head>
<?php

session_start();
if(isset( $_SESSION['session_id']) AND isset( $_SESSION['user_id'])){
		
	echo '<div style="float:left;padding-left:15;font-size:30"><b>Welcome '.$_SESSION["user_name"].' To Product.Com</b></div>
	
			<div style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px">
	
			<a href="index.php"><button><img src="pics/home.png"width="30" height="30" "></button></a>
			&nbsp &nbsp 
			
			<a href="cartbtn.php"><button><img src="pics/cart.jpg"width="30" height="30" "></button></a>
			&nbsp &nbsp 
			
			<a href="logout.php" style="text-decoration:none">Logout</a>
			</div>';
			
	
}
else{
	echo"
	<span style='float:left;padding-left:15;font-size:30'><b>Product.Com</b></span>
	
	<span style='font-family:Comic Sans MS;float:right;padding-right:10px;font-size:18;'>
	
	<a href='index.php' style='text-decoration:none'>Home</a>&nbsp &nbsp
	
	<a href='Login.php' style='text-decoration:none'>Login</a>&nbsp &nbsp
	
	<a href='signup.php' style='text-decoration:none'>Signup</a>
	</span>";	
}

echo "<br><br><br>";



$prod_id= $_REQUEST['prod_id'];
$con = mysqli_connect('localhost','root',''); //The Blank string is the password
mysqli_select_db($con,"cart") or die(mysqli_error($con)) ; 

$query = "SELECT * FROM product where prod_id='$prod_id'"; //You don't need a ; like you do in SQL
$result = mysqli_query($con,$query);

$row = mysqli_fetch_assoc($result);

echo "<table>";
echo "<td >";

echo "<fieldset style='align-content:left;float:left;'>";//outermost fieldset start

			echo "<div style='font-family:Comic Sans MS;font-size:20;border-style: solid;border-color:green;text-align:center'>";
			echo $row['prod_name'];
			echo "</div>";
			echo "<br>";

							//Image Div
//   echo '<img src="pics/'.$row['file'].'"width='80' height='80'>';
echo '<img src="pics/'.$row['file'].'"height="300">';

							//Inner Div
echo "<div style='text-align:left;float:right; font-family:Comic Sans MS;font-size:20;padding-left: 5px; border-style: solid;border-color: red;max-width:500px;word-wrap:break-word;'><br>".$row['prod_descr'];
echo "<br><br>";
echo "Rs.".$row['cost'];
echo "<br><br>";
echo "</div>";
							//End Inner Div
echo "<br><br>";

$prod_id=$row['prod_id'];
echo "<div style='padding-left:5px;'>";//     AJAX call
echo "<input type='submit' value='Add To Cart' onclick=AddToCart('$prod_id')>";
echo "&nbsp&nbsp";

/*
echo "<form action='DeleteProduct.php' method='post'>";
echo "<input type='hidden' value='prod_id' value='$prod_id'>";
echo "<input type='submit' value='Delete Product'>";
echo "</form>";
*/

echo "<a href='buy.php'><button>Buy</button></a>";
echo "<br><br>";

///////////            AJAX RESPONSE for AddToCart
echo "<b style ='font-size:20px;' id='response'></b>";
echo "</div>";



echo "</fieldset>";//outermost fieldset end
echo "</td>";

echo "</table>";
mysqli_close($con); //Make sure to close out the database connection
?>

