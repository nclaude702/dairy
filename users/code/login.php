<?php 
session_start();
/*if (isset($_SESSION['t_login'])) 
{
	header("location:t_page.php");
}
*/
if (isset($_POST['login'])) 
{
$servername="localhost";
$username="root";
$password="";
$db="dairy";
$con=mysqli_connect($servername,$username,$password,$db);
$my=$_POST['username'];
$your=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$my' and password='$your'";
$result=mysqli_query($con,$sql);

$fetch=mysqli_fetch_array($result);
$name=$fetch['names'];
$idd=$fetch['uid'];

$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION["id"]=$idd;
	$_SESSION["names"]=$name;
	if($fetch['type']=="Cashier"){
	     
         header("location:../index.php");
    }

	elseif($fetch['type']=="Admin"){
	
      header("location:../../admin_login.php?msg=You%20have%20login%20to%20Admin!");
    }
	else{
		echo"<script>window.alert('Incorrect Password,Username!')</script>";
	 header("location:../../users_login.php?msg=Your%20Username%20and%20password%20incorect!");
	}
}
else{
	echo"<script>window.alert('Incorrect Password,Username!')</script>";
	header("location:../../admin_login.php");

	}
}
?>