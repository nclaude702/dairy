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
<input type="number" name="price" value="<?php echo $output_price ?>" readonly>
    
  <?php
   
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new automated_price();
?>
