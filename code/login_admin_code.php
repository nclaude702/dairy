<?php 
session_start();
/*if (isset($_SESSION['t_login'])) 
{
	header("location:t_page.php");
}
*/
if (isset($_POST['login'])) 
{
include("../../code/con2.php");
$my=$_POST['uname'];
$your=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$my' and password='$your'";
$result=mysqli_query($con,$sql);




$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION["Cashier"]=$idd;
	
  if($fetch['type']=="Admin"){
	header("location:../admin/index.php");}
	else{
		echo"<script>window.alert('Incorrect Password,Username!')</script>";
	header("location:../admin_login.php");
}
}
else{
	echo"<script>window.alert('Incorrect Password,Username!')</script>";
	header("location:../request.php");

	}
}
?>