
<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location:../index.php');
}
else
{
$uid=$_SESSION["id"];
$id=$_GET['id'];
include("../../code/con2.php");

$sql=("UPDATE `supp_pay_log` SET `payment_success`='yishuwe',`user_id_pay` = '$uid',`todaypaid`=0 WHERE `id` = '$id'");
$a=mysqli_query($con,$sql);
if ($a==true) {
	header("location:../approve_payment.php");

}
mysqli_close($con);
}
?>
