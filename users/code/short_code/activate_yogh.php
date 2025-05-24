<?php 
include('../../../code/connection.php');
try{


  $d=date("Y-m-d"); 
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d' AND yoghort_enable='1'");
  $a->execute();
  $yog=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  $yog=$row['yoghort_enable'];}
  if($yog==1){


  $rest=0;
   
  //retrieve and calculate percentage
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php 
      $all=$row['litre'];
      $alltopercentage=$all*20/100;
      $alltoboiled=2*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
  
    //update or insert percentage cheese in order to retrieve well
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET yoghort_per='$rest',yoghort_enable=0 WHERE date='$d'");
  $a->execute();
  
  
  echo "<script>window.alert('Thank You to Ativate Your Yoghourt ');window.location='../../add_yoghourt.php'</script>'";
  }else{echo "<script>window.alert('Please Activate One time Per Day After 9:00pm');window.location='../../add_yoghourt.php'</script>'";}
    }catch(PDOException $e){echo"connection problem";}
  
?>