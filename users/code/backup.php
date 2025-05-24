
<?php   
 session_start();  ?>
<?php
include("../../code/connection.php");
$userid=$_POST['user'];
$p_id=$_POST['p_id'];
$tlitle=$_POST['tlitle'];
$litre=$_POST['litre'];
//$price=$_POST['price'];
$price=0;
$pack=0;
$package=$_POST['package'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];
$ikivug="IKIVUGUTO";
$d=date("Y-m-d"); 
if($litre<=$tlitle)
  {
   $mlitre=$litre*1000;
    $ch_per=$con->prepare("UPDATE `input_milk_daily_save` SET ikivug_per=ikivug_per-'$litre' WHERE date='$d'");
    $ch_per->execute();
    if ($package=="3l") {
           $pack=$litre/3;
           $price=2400;
            

       }
    elseif ($package=="5l") {
        $pack=$litre/5;
        // $pack=$litre/5;
         $price=4000;
 
   }elseif ($package=="20l") {
        $pack=$litre/20;
         $price=16000;
 
   }else{echo "if condition have problem";}

  try
    {
     include("../../code/connection.php");
      $a=$con->prepare("SELECT * FROM `output_milk` WHERE `input_date` ='$entry' and milk_type='$ikivug'");
        if($a==true)
         {
           $update="UPDATE output_milk set capacity=capacity+'$pack' WHERE input_date = '$d' and package='$package'";
            $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to add to day milk');window.location='../add_ikivuguto.php'</script>'";
            }else{

              /*$insert="insert into output_milk set user_id='$userid',milk_type='$ikivug',capacity='$pack',price='$price',input_date='$d',expired_date='$expired',package='$package',pack='$pack'";*/

              $insert="INSERT INTO output_milk VALUES ('$userid','','$p_id','ikivuguto','$litre','100','$d','$expired','$pack','$package','not exp') ";
                   $b=$con->exec($insert);
                       if($b==true)
                          {
                            echo "<script>window.alert('click ok to insert to day milk ');window.location='../add_ikivuguto.php'</script>'";
                          }
                        else{echo "not added";}
            }
   }
  }catch(PDOException $e){echo "add error";}
}else {echo "<script>window.alert('Enter number Of Litre Available ');window.location='../add_ikivuguto.php'</script>'";}

?>