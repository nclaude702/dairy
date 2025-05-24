<?php
try{
include('connection.php');
$name=$_POST['name'];
$location=$_POST['location'];
$phone=$_POST['phone'];
$request=$_POST['request'];
$send="insert into request set name='$name',phone='$phone',location='$location',request='$request'";
$a=$con->exec($send);
if($a==true)
    {echo "<script>window.alert('thank you for sending message ');window.Location='../request.php'</script>'";
}else{echo "<script>window.alert('pease message not sent ');window.location='../request.php'</script>'";}
}catch(PDOException $e){echo "There is a problem within the connection, please try again later";}
?>