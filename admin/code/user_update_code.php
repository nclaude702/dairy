<?php
$id=$_POST['id'];
$names=$_POST['names'];
$username=$_POST['username'];
$phone=$_POST['phone'];

$mail=$_POST['mail'];
$password=$_POST['password'];
$type=$_POST['type'];


try
 {
	include("../../code/connection.php");
 $update="UPDATE `users` SET `names` = '$names', `username` = '$username', `phone` = '$phone', `mail` = '$mail', `password` = '$password', `type` = '$type' WHERE `uid` = '$id'"; 
	    
	  //mail(to, subject, message)`
	  $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to ok to update users');window.location='../users.php'</script>'";
            }else{

              echo "<script>window.alert('not updated click  ok to update users again');window.location='../users.php'</script>'";
            
            }
 
 }catch(PDOException $e){echo "update error";}
?>