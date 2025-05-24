<?php
$uid=$_POST['uid'];
$sup_id=$_POST['sup_id'];
$quant=$_POST['quant'];
try{
	include("../../code/connection.php");

  $d=date("Y-m-d"); 

$a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE `date` ='$d'");
  if($a==true)
     {
           $update="UPDATE input_milk_daily_save set litre=litre+'$quant', litre_ather_case=litre WHERE `date`='$d'";
           $a=$con->exec($update);
           if($a==true){}
            else{ 
			      $insert="insert into input_milk_daily_save set litre='$quant',date='$d'";
                   $b=$con->exec($insert);           
             } 
     }
 $insert="UPDATE input_milk set user_id='$uid',litre=litre+'$quant',amount_sold=litre*litre_amount,unpaid=amount_sold-paid WHERE supplies_id = '$sup_id'";
     $a=$con->exec($insert);
if($a==true)
    {
    	echo "<script>window.alert('click ok to update supplier');window.location='../adding_milk_from_farmer.php'</script>'";
    }
    else{echo"supplier not updated";}

}catch(PDOException $e){echo "update error";}
?>