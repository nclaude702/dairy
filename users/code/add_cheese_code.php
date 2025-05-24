
<?php   
 session_start();  ?>
<?php
$userid=$_POST['user'];
$p_id=$_POST['p_id'];
$litre=$_POST['litre'];
$pkg=$_POST['pkg'];
$price=$_POST['price'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];

$litre_kg=$litre-$pkg;
$d=date("Y-m-d"); 
try
 {
  if($pkg<=$litre)
  {
  include("../../code/connection.php");
  $ch_per=$con->prepare("UPDATE `input_milk_daily_save` SET cheese_per='$litre_kg' WHERE date='$d'");
  $ch_per->execute();
  $a=$con->prepare("SELECT * FROM `output_cheese` WHERE `input_date` ='$entry'");
  if($a==true)
  {
    $update="UPDATE output_cheese set capacity=capacity+'$pkg' WHERE input_date = '$entry'";
      $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to add to day milk');window.location='../add_cheese.php'</script>'";
            }else{

              $insert="insert into output_cheese set user_id='$userid',product_id='$p_id',capacity='$pkg',price='$price',input_date='$entry',expired_date='$expired'";
                   $b=$con->exec($insert);
                       if($b==true)
                          {
                            echo "<script>window.alert('click ok to insert to day milk ');window.location='../add_cheese.php'</script>'";
                          }
                        else{echo"milk  not added";}
            }
 }
}else{ echo "<script>window.alert('Enter under or equal to available');window.location='../add_cheese.php'</script>'";}

 }catch(PDOException $e){echo "add error";}

?>