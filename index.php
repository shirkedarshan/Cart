<html>
<head>
<title>Welcome</title>

<style type="text/css">
.style1{
	width:180px;
}
</style>

</head>


<?php

$page_limit=5;
	/////////////////////////////////////

session_start();


if(isset( $_SESSION['session_id']) AND isset( $_SESSION['user_id'])){
		
	echo '<span style="float:left;padding-left:15;font-size:30"><b>Welcome '.$_SESSION["user_name"].' To Product.Com</b></span>
	
		<span style="font-size:20px;font-family:Comic Sans MS;float:right;padding-right:8px">';
	
	if(isset( $_SESSION['admin']))
		{
		echo "<a href='addproduct.php' style='text-decoration:none;'>Admin Panel</a>";
		}
			echo '&nbsp &nbsp 
			
			<a href="cartbtn.php" style="text-decoration:none">Cart</a>
			&nbsp &nbsp 
			
			<a href="logout.php" style="text-decoration:none">Logout</a>
			
			</span>';
	
	echo "<br>";
			
	
}
else{
	echo"<span style='float:left;padding-left:15;font-size:30'><b>Product.Com</b></span>
	
	<span style='font-family:Comic Sans MS;float:right;padding-right:10px;font-size:18;'>
	<a href='login.php' style='text-decoration:none'>Login</a>&nbsp &nbsp
	
	<a href='signup.php' style='text-decoration:none'>Signup</a>
	</span>";	
	echo "<br>";
}

echo"<br><hr>";
echo "";
//////////////connection
	$con = mysqli_connect('localhost','root',''); //The Blank string is the password
	mysqli_select_db($con,'cart') or die(mysqli_error($con)) ;

	$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
	$result = mysqli_query($con,$query);

	$count=0;
	
//echo "test 1";
	
if(isset ($_GET['page_no']))
	{
	$page_no=$_GET['page_no'];
	}
	else{
	$page_no='1';
	}
///////////////			DECLARATION	
	
$total_prod= mysqli_num_rows($result) ;


$total_pages = ($total_prod/$page_limit);// Calc for Total No of pages
$total_pages = ceil($total_pages);


/////////////////////////////////////////////////
$ini_lim =( ( $page_no - 1)*$page_limit );
//echo "test 2";


$count=0;


$query1 = "SELECT * FROM product LIMIT $ini_lim,$page_limit"; 
	$result1 = mysqli_query($con,$query1);
	
	//echo "test 3";
		
	//echo "test 4";
	echo "<table>";
//echo "<div style='float:left'>";
while($row = mysqli_fetch_assoc($result1)){   //Creates a loop to loop through results


	$prod_id=$row['prod_id']; //unique product id

echo "<td>";
echo "<fieldset class='style1'>";

echo "<div style='font-family:Comic Sans MS;'>";
///////////////////////////////////////////////////////
//echo $row['prod_name'];
//////////////////////////////////////////

echo '<a href="descp.php?prod_id='.$row['prod_id'].'" style="text-decoration:none">';
echo $row['prod_name'];
echo  '</a>';



////////////////////////////////////
echo "</div>";
echo "<br>";
//Passing information through hidden tag


echo '<a href="descp.php?prod_id='.$row['prod_id'].'">';echo "<input type='hidden' name='prod_id' value='$prod_id'>";
echo '<img src="pics/'.$row['file'].'"width="150" height="200" ">';

//   echo '<img src="pics/'.$row['file'].'"width='80' height='80'>';
//echo '<a href="descp.php"><img src="pics/'.$row['file'].'"width="120" height="160" "></a>';

echo "</a>";

echo "<br><br>";
echo "Rs: ".$row['cost'];
echo "<br>";


//$row['index'] the index here is a field name

echo "</fieldset>";
echo "</td>";



$count++;
if($count==6){
$count=0;
echo "</tr>";}	}
//echo"</div>";
echo "<div>";
echo "</table>";

echo"<br>";

echo "<footer>";
if($page_no!=1){
echo"<a href='index.php?page_no=".($page_no-1)."'>prev</a>";
echo "&nbsp";
echo "&nbsp";
}

for($i=1;$i<=$total_pages;$i++)
{
	echo"&nbsp<a href='index.php?page_no=".$i."'>$i</a>";
	echo "&nbsp";
	echo "&nbsp";
	}

	
if($page_no != $total_pages){
echo"<a href='index.php?page_no=".($page_no+1)."'>next</a>";
}

echo "</footer>";

mysqli_close($con);
	
	?>