<?php
$name=$_POST['name'];
$photo=$_POST['photo'];
$price=$_POST['price'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];
$available=$_POST['avr'];
$p="photo/";

$photos=$p.$photo;
include("con1.php");

mysqli_query($con,"insert into`store`value('','$name','$photos','$price','$entry','$expired','$available')");

echo "<script> window.alert('another product has been added');window.location='../html/milk_store.php'</script>";


?>