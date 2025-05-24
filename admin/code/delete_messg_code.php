
<?php
$id=$_GET['id'];
include("../../code/con2.php");
$sql=("DELETE FROM `message` WHERE `mid` = '$id'");
$a=mysqli_query($con,$sql);
if ($a==true) {
	header("location:../message.php");
}
mysqli_close($con);
?>
