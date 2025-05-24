<?php
try{
include('connection.php');
$name=$_POST['name'];
$mail=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$send="insert into message set name='$name',phone='$phone',email='$mail',address='$address',message='$message',status='active'";
$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for sending message ');window.Location='../contact.php'</script>'";
}else{echo "<script>window.alert('pease message not sent ');window.location='../contact.php'</script>'";}
}catch(PDOException $e){echo "hello animal";}
?>