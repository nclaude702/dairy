<?php
$userid=$_POST['user'];
$names=$_POST['names'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$address=$_POST['address'];
try
 {
	include("../../code/connection.php");
    $insert="insert into supplies set names='$names',phone='$phone',mail='$mail',address='$address',status='active'";
    $a=$con->exec($insert);
    $a=$con->prepare("SELECT * FROM `supplies` WHERE `names` ='$names' and phone='$phone'");
    $a->execute();
          while($row=$a->fetch(PDO::FETCH_ASSOC))
             {

                     $id=$row['sid'];
                     $insert="insert into input_milk set user_id='$userid',supplies_id='$id',litre=0,litre_amount=300";
                    $b=$con->exec($insert);
                   }

  
 if($a==true)
          {
    	    echo "<script>window.alert('click ok to add supplier');window.location='../entry_milk.php'</script>'";
             }
   else{echo "<script>window.alert('former not regostered try again');window.location='../entry_milk.php'</script>'";
             }
 }catch(PDOException $e){echo "Connection Poblem";}
?>