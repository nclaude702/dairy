
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

$package=$_POST['package'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];

$d=date("Y-m-d"); 
if($litre<=$tlitle)
  {
   $mlitre=$litre*1000;
    $ch_per=$con->prepare("UPDATE `input_milk_daily_save` SET yoghort_per=yoghort_per-'$litre' WHERE date='$d'");
    $ch_per->execute();
    if ($package=="250ml") {
           $x=$mlitre/250;
            $price=200;

       }
    elseif ($package=="500ml") {
        $x=$mlitre/500;
         $price=400;
 
   }else{echo "if condition have problem";}

  try
    {
     include("../../code/connection.php");
      $a=$con->prepare("SELECT * FROM `output_youghurt` WHERE `input_date` ='$entry'");
        if($a==true)
         {
           $update="UPDATE output_youghurt set capacity=capacity+'$x',package='$package WHERE input_date = '$entry' and package='$package'";
            $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to add to day milk');window.location='../output_yoghourt.php'</script>'";
            }else{

              $insert="insert into output_youghurt set user_id='$userid',product_id='$p_id',capacity='$x',price='$price',input_date='$entry',package='$package',expired_date='$expired'";
                   $b=$con->exec($insert);
                       if($b==true)
                          {
                            echo "<script>window.alert('click ok to insert to day milk ');window.location='../add_yoghourt.php'</script>'";
                          }
                        else{echo"milk  not added";}
            }
   }
  }catch(PDOException $e){echo "add error";}
}else {echo "<script>window.alert('Enter number Of Litre Available ');window.location='../add_yoghourt.php'</script>'";}

?>