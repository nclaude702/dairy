    <?Php
class input_milk_daily_save{
  function __construct(){
include('../code/connection.php');
try{
  $d=date("Y-m-d"); 
  $rest=0;
  /*
  //retrieve and calculate percentage
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php $all=$row['litre'];
      $alltopercentage=$all*30/100;
      $alltoboiled=3*$all/100;
      $rest=$alltopercentage-$alltoboiled;
      }
    //update or insert percentage cheese in order to retrieve well
  $a=$con->prepare("UPDATE `input_milk_daily_save` SET cheese_per='$rest' WHERE date='$d'");
  $a->execute();
*/
  // retrieve cheese_per from input milk
  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
  ?>
  <?php $cheese_per=$row['cheese_per'];
      }
       ?>
<input type="text" name="litre" value="<?php echo $cheese_per; ?>" readonly>
  </td> </tr>
  <tr> <td>
    <input type="text" name="" value="1 KG package only" readonly ></td> </tr>
    <tr> <td>
    <tr> <td>
    <input type="number" name="pkg" placeholder="Enter kg to be package  "  required >
  <?php
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new input_milk_daily_save();
?>
