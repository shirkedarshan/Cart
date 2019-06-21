<html>

<?php
session_start();

$session_id= $_SESSION['session_id'];
$prod_id= $_REQUEST['prod_id'];
$user_id= $_SESSION['user_id'];

// to save in DB perform following steps					
				
				//connect to the DB
					$con= mysqli_connect('localhost','root','')	or die("<b>Sorry, cannot connect to your localhost</b>");           
					
				//select one DB out of many DBs
					mysqli_select_db($con,'cart') or die("<b>Sorry, cart DB not found.</b>");

			
			$query="select prod_id from product";
			$query_res = mysqli_query($con,$query) or die(mysqli_error($con));
			
			if(mysqli_num_rows($query_res)>0)
			{
				$sql="DELETE from product where prod_id='$prod_id'";
				$result = mysqli_query($con,$sql) or die(mysqli_error($con));
			
				$sql0="DELETE from reference where prod_id='$prod_id'";
				$result0 = mysqli_query($con,$sql0) or die(mysqli_error($con));	
					
				$sql1="Select prod_id from product where prod_id='$prod_id' ";
				$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
			}
			
	if(@mysqli_num_rows($result1)>0){
		$message = "Product Can not be deleted.";
		//echo "<script type='text/javascript'>";
		//echo"alert('')";
		echo $message;
		//echo"</script>";
		}else
	{

		header('location:index.php');
			//echo"</script>";

		}

?>
