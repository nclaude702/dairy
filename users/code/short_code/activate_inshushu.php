<?php 
class activate{
  function __construct(){
include('../../../code/connection.php');
try{
  $d=date("Y-m-d"); 
  $rest=0;
   $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d' AND inshushu_enable='1'");
  $a->execute();
  $inshushu_enable=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  $inshushu_enable=$row['inshushu_enable'];}
  if($inshushu_enable==1){

  //retrieve and calculate percentage
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php $all=$row['litre'];
      $alltopercentage=$all*5/100;
      $alltoboiled=1.5*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
    //update or insert percentage cheese in order to retrieve well
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET inshushu_per='$rest',inshushu_enable=0 WHERE date='$d'");
  $a->execute();
 
  echo "<script>window.alert('Thank You to Ativate Your INSHUSHU ');window.location='../../add_inshushu.php'</script>'";

  }else{echo "<script>window.alert('Please Activate One time Per Day After 9:00pm');window.location='../../add_inshushu.php'</script>'";}

    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new activate();
?>