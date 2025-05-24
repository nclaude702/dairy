
<?php   
 session_start();  ?>
<?php
include("../../code/connection.php");
$x=0;
$userid=$_POST['user'];
$p_id=$_POST['p_id'];
$tlitle=$_POST['tlitle'];
$litre=$_POST['litre'];
$price=$_POST['price'];

//$package=$_POST['package'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];

$milk_type="INSHUSHU";

$d=date("Y-m-d"); 
if($litre<=$tlitle)
  {
   //$mlitre=$litre*1000;
    $ch_per=$con->prepare("UPDATE `input_milk_daily_save` SET inshushu_per=inshushu_per-'$litre' WHERE date='$d'");
    $ch_per->execute();
  try
    {
     include("../../code/connection.php");
      $a=$con->prepare("SELECT * FROM `output_milk` WHERE `input_date` ='$entry'");
        if($a==true)
         {
           $update="UPDATE output_milk set capacity=capacity+'$litre' WHERE input_date = '$entry' and milk_type='INSHUSHU'";
            $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to add to day milk');window.location='../add_inshushu.php'</script>'";
            }else{

              $insert="insert into output_milk set user_id='$userid',product_id='$p_id',capacity='$litre',milk_type='$milk_type',price='$price',input_date='$entry',package='$litre',expired_date='$expired'";
                   $b=$con->exec($insert);
                       if($b==true)
                          {
                            echo "<script>window.alert('click ok to insert to day milk ');window.location='../add_inshushu.php'</script>'";
                          }
                        else{echo"milk  not added";}
            }
   }
  }catch(PDOException $e){echo "add error";}
}else {echo "<script>window.alert('Enter number Of Litre Available ');window.location='../add_inshushu.php'</script>'";}

?>