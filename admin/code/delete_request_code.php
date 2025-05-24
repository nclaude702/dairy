
<?php
$id=$_GET['id'];
include("../../code/con2.php");
$sql=("DELETE FROM `request` WHERE `rid` = '$id'");
$a=mysqli_query($con,$sql);
if ($a==true) {
	header("location:../request.php");
}
mysqli_close($con);
?>