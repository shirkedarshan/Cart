<html>
<head>
<title>Welcome</title>

<style type="text/css">
.style1{
	width:180px;
}
</style>

</head>


<div style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px;font-size:20;">
<a href="product.php">
<button><img src="pics/home.png"width="30" height="30" "></button>
</a>&nbsp &nbsp <a href="cartbtn.php">
<button><img src="pics/cart.jpg"width="30" height="30" "></button>
</a>&nbsp &nbsp <a href="logout.php">logout</a></div>
</form>
</div>

<h1> Welcome To Products <h1>
</html>
<?php
session_start();

$text=session_id();
$_SESSION["session_id"]=$text;

$con = mysqli_connect('localhost','root',''); //The Blank string is the password
mysqli_select_db($con,"cart") or die(mysqli_error($con)) ; 

$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
$result = mysqli_query($con,$query);

$count=0;

echo "<table>";

while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results


echo "<td>";
echo "<fieldset class='style1'>";

echo "<div style='font-family:Comic Sans MS;'>";
echo $row['prod_name'];
echo "</div>";
echo "<br>";
//Passing information through hidden tag

$prod_id=$row['prod_id'];
echo"<form action='descp.php' method='post'>
<input type='hidden' name='hidden_prod_id' value='$prod_id'>";
echo '<button><img src="pics/'.$row['file'].'"width="120" height="160" "></button>';
//

//   echo '<img src="pics/'.$row['file'].'"width='80' height='80'>';
//echo '<a href="descp.php"><img src="pics/'.$row['file'].'"width="120" height="160" "></a>';

echo "</form>";

echo "<br>";
echo "Rs: ".$row['cost'];
echo "<br>";


//$row['index'] the index here is a field name

echo "</fieldset>";
echo "</td>";



$count++;
if($count==6){
$count=0;
echo "</tr>";}
}

echo "</table>";

mysqli_close($con); //Make sure to close out the database connection
?>