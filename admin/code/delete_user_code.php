
<?php

include("../../code/con2.php"); 
$id=$_GET['id'];
$sql=("DELETE FROM `users` WHERE `uid` = '$id'");
$a=mysqli_query($con,$sql);
if ($a==true) {
	header("location:../users.php");
}
mysqli_close($con);
?>
