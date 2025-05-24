<?php 
include('../../code/connection.php');
try{
  $d=date("Y-m-d");


$decrement_litre=$_POST['decrement_litre'];
$type=$_POST['type'];
$product_litre=$_POST['product_litre'];
if($decrement_litre>0 and $product_litre<=$decrement_litre){
if($type=="ikivug_per"){
  $boil=$product_litre*3/100;
  $rest=$product_litre+$boil;
  $decrement_litre=$decrement_litre-$rest;
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET litre_ather_case='$decrement_litre',ikivug_per=ikivug_per+'$product_litre',ikivug_enable=0 WHERE date='$d'");
           $a->execute();

          echo "<script>window.alert('Urakoze kwinjiza IKIVUGUTO');window.location='../change_per.php'</script>'";
}
elseif($type=="cheese_per"){
  $boil=$product_litre*4/100;
  $rest=$product_litre+$boil;
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET litre_ather_case=litre_ather_case-'$rest',cheese_per=cheese_per+'$product_litre',cheese_enable=0 WHERE date='$d'");
           $a->execute();
          echo "<script>window.alert('Urakoze kwinjiza Formage');window.location='../change_per.php'</script>'";
}
elseif($type=="inshushu_per"){
  $boil=$product_litre*1.5/100;
  $rest=$product_litre+$boil;
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET litre_ather_case=litre_ather_case-'$rest',inshushu_per=inshushu_per+'$product_litre',inshushu_enable=0 WHERE date='$d'");
           $a->execute();
          echo "<script>window.alert('Urakoze kwinjiza Inshyushu');window.location='../change_per.php'</script>'";
}
elseif($type=="yoghort_per"){
  $boil=$product_litre*2/100;
  $rest=$product_litre+$boil;
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET litre_ather_case=litre_ather_case-'$rest',yoghort_per=yoghort_per+'$product_litre',yoghort_enable=0 WHERE date='$d'");
           $a->execute();
          echo "<script>window.alert('Urakoze kwinjiza Yoghourt');window.location='../change_per.php'</script>'";
}
else{echo "<script>window.alert('ntahantu wahisemo');window.location='../change_per.php'</script>'";}

}else{echo "<script>window.alert('Hitamo Ingano Ihari');window.location='../change_per.php'</script>'";}


/*
   
  $rest=0;
  $cheese_per=0;
  //retrieve and calculate percentage
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d' and cheese_enable='YES'");
  $b=$a->execute();
 
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php
     $cheese_per=$row['cheese_per'];
     $all=$row['litre'];
      $alltopercentage=$all*30/100;
      $alltoboiled=3*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
          $a=$con->prepare("UPDATE `input_milk_daily_save` SET cheese_per='$rest',cheese_enable='NO' WHERE date='$d'");
           $a->execute();
          echo "<script>window.alert('Thank You to Ativate Your Cheese ');window.location='../../add_cheese.php'</script>'";
      //}else{echo "<script>window.alert('you activate one only per day ');window.location='../../add_cheese.php'</script>'";}
*/
    }catch(PDOException $e){echo"connection problem";}
?>