    <?Php
class input_milk_daily_save{
  function __construct(){
include('../code/connection.php');
try{
  $d=date("Y-m-d"); 
  $rest=0;

  // retrieve yoghourt_per from input milk
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php $ikivug_per=$row['ikivug_per'];
      }
       ?>
<input type="number" name="tlitle" value="<?php echo $ikivug_per; ?>" readonly>
  </td> </tr>
  <tr> <td>
    <input type="text" name="litre" placeholder="Enter number of litre"  ></td> </tr>
    <tr> <td>
    
    
  <?php
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new input_milk_daily_save();
?>

     <tr> <td>

    <?Php
class automated_price{
  function __construct(){
include('../code/connection.php');
try{
  $d=date("Y-d-m"); 
  $a=$con->prepare("SELECT * FROM `input_milk`");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>

  <?php $input_price=$row['litre_amount'];
        $transport=200;
      $production=400;
      $pachage=100;
        }

      $output_price=$input_price+$transport+$production+$pachage;
       ?>
  <select name="package">
    <option value="3">3l</option>
    <option value="5">5l</option>
    <option value="20">20l</option>
  </select>
</td></tr>
  <tr><td>
<input type="text" name="price" value="3l=2400rwf, 5l=4000rwf, 20l=16000rwf" readonly>
  <?php
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new automated_price();
?>
