<?php
$id=$_POST['id'];
$userid=$_POST['user'];
$litre=$_POST['litre'];
$price=$_POST['price'];

try
 {
  include('../../code/connection.php');
 $update="UPDATE `output_youghurt` SET `user_id` = '$userid', `capacity` = '$litre', `price` = '$price' WHERE `id` = '$id'"; 
      
    
    $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to ok to update Ikuvuguto');window.location='../output_yoghourt.php'</script>'";
            }else{

              echo "<script>window.alert('not updated click  ok to update again');window.location='../output_yoghourt.php'</script>'";
            
            }
 
 }catch(PDOException $e){echo "update error";}
?>