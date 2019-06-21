<?php
session_start();

$text=session_id();
$_SESSION["session_id"]=$text;
?>
<html>
<h2>Welcome Admin</h2>
<head>
<title>Add Product</title>
</head>
<style type="text/css">
	.border{ border:solid 1px;}
	.size{
		height:200px;
		width:200px;
		padding-left:2px;
		}
</style>
<fieldset>
	<div style='font-family:Comic Sans MS;float:right;padding-right:10px;font-size:18;'>
	<a href='logout.php'/>Logout</a>&nbsp &nbsp
	<a href='index.php'/>Home</a>
	</div>
<div style="font-family:Comic Sans MS;float:left;border:1px;padding-left:10px;padding-top:10px;">
<form action="addproduct_action.php" method="POST" enctype="multipart/form-data" >
Product Name:<input type="text" name="prod_name"/>[Must be Unique Otherwise Gives Duplicate entry Error] for same content
<br><br>
City Name:<input list="OS" name="city" required />
<datalist id="OS">
  <option value="Mumbai">
  <option value="Navi_Mumbai">
  <option value="Thane">
  <option value="Panvel">
  <option value="(Specify)">
</datalist> You Can Edit The List.
<br><br>

Prod_type:<select name="prod_type" required >
<option label=""></option>
<option>Books</option>
<option>Electronics</option>
<option>Home_Accesories</option>
<option>Mobiles</option>
<option>Sports</option>
<option>Other</option>
</select>
<br><br>
Brand type<select name="brand_type" required>
<option label=""></option>
<option>Adidas</option>
<option>Apple</option>
<option>Nike</option>
<option>Samsung</option>
<option>Sony</option>
<option>Other</option>
</select>
<br><br>
Upload Image:<input type="file" name="file" required />
<br><br>
Prod Description:<input type="text" name="prod_descr" required />
<br><br>
Cost:<input type="number" name="cost" required />
<br><br>
<input type="submit" value="Add Product"/><span>&nbsp &nbsp </span>
<input type="reset" value="Reset All"/>
</form>
</div>
</fieldset>
</html>