<?php
echo"You are in a admin file";
echo "<br>";
?>

<?php
 
//This gets all the other information from the form
$prod_name = $_REQUEST['prod_name'];
$city = $_REQUEST['city'];
$prod_type = $_REQUEST['prod_type'];
$brand_type = $_REQUEST['brand_type'];
$file = $_FILES['file']['name'];
$descr = $_REQUEST['prod_descr'];
$cost = $_REQUEST['cost'];


move_uploaded_file($_FILES['file']['tmp_name'], "pics/".$_FILES['file']['name']);

//create connect			
$con=mysqli_connect('localhost','root','') or die(mysqli_connect_error());

//create database
mysqli_select_db($con,'cart') or die(mysqli_error($con));  

//insert query
$sql = "INSERT INTO product(prod_name,city,prod_type,brand_type,file,prod_descr,cost)VALUES('$prod_name','$city','$prod_type','$brand_type','$file','$descr','$cost')";

mysqli_query($con,$sql) or die(mysqli_error($con));//query connect

$sql1 = "Select * from product where prod_name='$prod_name'";

$result = mysqli_query($con,$sql1) or die(mysqli_error($con));

if( mysqli_num_rows($result) == 1 )
{
	echo "Product Inserted Successfully<br>";
	echo "To Insert Another Product<a href='addproduct.html'>Click Here<a/><br>";
	echo "To View Products <a href='index.php'>Click Here<a/>";
}else{
	echo mysqli_error($con);
}

mysqli_close($con);									

?>