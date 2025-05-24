<?php 
class activate{
  function __construct(){
include('../../../code/connection.php');
try{
  $d=date("Y-m-d"); 
  $rest=0;
   $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d' AND cheese_enable='1'");
  $a->execute();
  $cheese_enable=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  $cheese_enable=$row['cheese_enable'];}
  if($cheese_enable==1){


  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $b=$a->execute();
 
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php
    
     $all=$row['litre'];
      $alltopercentage=$all*30/100;
      $alltoboiled=4*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
     
          $a=$con->prepare("UPDATE `input_milk_daily_save` SET cheese_per='$rest',cheese_enable=0 WHERE date='$d'");
           $a->execute();
          echo "<script>window.alert('Thank You to Ativate Your Cheese ');window.location='../../add_cheese.php'</script>'";
      }else{echo "<script>window.alert('Please Activate One time Per Day After 9:00pm');window.location='../../add_cheese.php'</script>'";}

    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new activate();
?>