<?php
$names=$_POST['names'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$type=$_POST['type'];

try{
	include("../../code/connection.php");
$insert="insert into users set names='$names',username='$username',phone='$phone',mail='$mail',password=$password,type='$type'";
$a=$con->exec($insert);
if($a==true)
    {
    	echo "<script>window.alert('click ok to add user');window.location='../users.php'</script>'";
    }
    else{echo "<script>window.alert('user not added');window.location='../users.php'</script>'";}
}catch(PDOException $e){echo "add error";}
?>