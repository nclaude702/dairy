<?php
$id=$_POST['id'];
$userid=$_POST['user_id'];

$p_id=$_POST['p_id'];
$type=$_POST['type'];
$litre=$_POST['litre'];
$price=$_POST['price'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];
try
 {
	include("connection.php");
    //$update="UPDATE output_milk set user_id='$userid', product_id='$p_id', milk_type='$type', capacity='$litre', price'$price', input_date='$entry', expired_date='$expired', status='$status' WHERE id= '$id'";
 $update="UPDATE `output_milk` SET `user_id` = '$userid', `product_id` = '$p_id', `milk_type` = '$type', `capacity` = '$litre', `price` = '$price', `input_date` = '$entry', `expired_date` = '$expired'WHERE `id` = '$id'"; 
	    
	  
	  $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to ok to update milk');window.location='../html/market_milk.php'</script>'";
            }else{

              echo "<script>window.alert('not updated click  ok to update again');window.location='../html/market_milk.php'</script>'";
            
            }
 
 }catch(PDOException $e){echo "update error";}
?>