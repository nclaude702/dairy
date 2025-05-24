
<?php
$userid=$_POST['user'];
$p_id=$_POST['p_id'];
$type=$_POST['type'];
$litre=$_POST['litre'];
$price=$_POST['price'];
$entry=$_POST['entry'];
$expired=$_POST['expired'];
try
 {
	include("../../code/connection.php");
  $a=$con->prepare("SELECT * FROM `output_milk` WHERE `input_date` ='$entry'");
  if($a==true)
  {
    $update="UPDATE output_milk set capacity=capacity+'$litre',`input_date` ='$entry' WHERE milk_type = '$type' and input_date = '$entry'";
      $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to add to day milk');window.location='../add_milk.php'</script>'";
                    }
            else{

              $insert="insert into output_milk set user_id='$userid',product_id='$p_id',milk_type='$type',capacity='$litre',price='$price',input_date='$entry',expired_date='$expired'";
                   $b=$con->exec($insert);
                       if($b==true)
                          {
                            echo "<script>window.alert('click ok to insert to day milk ');window.location='../add_milk.php'</script>'";
                          }
                        else{
                        echo "<script>window.alert('milk  not added ');window.location='../add_milk.php'</script>'";
                      }
            }
    }

 }catch(PDOException $e){echo "add error";}
?>