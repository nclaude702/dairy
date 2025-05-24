<?php 
class activate{
  function __construct(){
include('../../../code/connection.php');
try{
  $d=date("Y-m-d"); 
  $rest=0;
   $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d' AND ikivug_enable='1'");
  $a->execute();
  $ikivug_enable=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  $ikivug_enable=$row['ikivug_enable'];}
  if($ikivug_enable==1){


  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php $all=$row['litre'];
      $alltopercentage=$all*45/100;
      $alltoboiled=3*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
    //update or insert percentage cheese in order to retrieve well
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET ikivug_per='$rest',ikivug_enable=0 WHERE date='$d'");
  $a->execute();
 
  echo "<script>window.alert('Thank You to Ativate Your Ikivuguto ');window.location='../../add_ikivuguto.php'</script>'";
  }else{echo "<script>window.alert('Please Activate One time Per Day After 9:00pm');window.location='../../add_ikivuguto.php'</script>'";}

    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new activate();
?>