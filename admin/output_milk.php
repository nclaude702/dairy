<?php
session_start();
if (!isset($_SESSION['Cashier'])) {
  header('location:../../index.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MUKAMIRA Dairy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../assets/css/flexslider.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/color/default.css" rel="stylesheet">
  <link href="../https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
  <div id="wrapper">


    <?php
    include("layouts/header.php");
    ?>
      
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">MUKAMIRA DAILY<span></span></h4>
              <img src="../images/homett.gif"style="height:200px;width:300px; margin-top: 0px;">
              </div>
              
            </aside>
          </div>
          <div class="span8">
            <section id="subintro" style="margin-top: -28px;">
               <div class="container" style="height: 50px;">
                 <div class="row">
                    <div class="span8">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                      
                       <li>
                       <h3>Amata Arigucuruzwa</h3></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
           
             
         <div id="content" style="width: 750px; height: auto; margin-top: -30px;" >

    
  <table border="0" style="margin-top:0px width:auto; margin-top: -30px;">
 <tr>
    <th><input  type="text" value="ID" required style="width: 40px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
    <th><input  type="text" value="MILK_TYPE" required style="width:100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 17px; color: black;" readonly/></span></th>
     <th><input  type="text" value="CAPACITY" required style="width: 90px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 17px; color: black;" readonly/></span></th>
     <th><input  type="text" value="PRICE" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 17px; color: black;" readonly/></span></th>
     
    
     <th><input  type="text" value="entry_date" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span>
     </th>
     <th><input  type="text" value="expire_date" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 18px; color: black;" readonly/></span>
     </th>
    </tr>
<?Php
try{
class claude{
  function __construct(){
$d=date("Y-m-d");

  $now=date("Y,d,m");
   include("../code/connection.php");
  $con=new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
  $price=0;
  $total=0;
      $totalmoney=0;
  $a=$con->prepare("select * from output_milk where expired_date>='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
  <tr>
    <th><input  type="text" value="<?php echo $row['id']; ?>" required style="width: 30px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
    <th><input  type="text" name="product" value="<?php echo $row['milk_type']; ?>" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 16px; color: black;" readonly/></span></th>
    <th><input  type="text" name="quant" value="<?php echo $row['capacity']; ?>" required style="width: 90px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $price=$row['price']; ?>/litre" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <?php $total=$total+$row['capacity']; 
          $price=$price*$row['capacity'];
          $totalmoney=$totalmoney+$price;
     ?>
    
    <th><input  type="text" name="" value="<?php echo $row['input_date']; ?>" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>

    <th><input  type="text" name="" value="<?php echo $row['expired_date']; ?>" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
</tr>
<?php
  }

?>
 <tr>
   
    <th><input  type="text" name="product" value="Report total" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 16px; color: black;" readonly/></span></th>
    <th  colspan=''><input  type="text" name="quant" value="and price" required style="width: 90px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $total; ?>" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $totalmoney; ?>rwf" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
    
   
</tr>




<?php
$price=0;
  $total=0;
      $totalmoney=0;
  $a=$con->prepare("select * from output_milk where expired_date<'$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
  <tr>
    <th><input  type="text" value="<?php echo $row['id']; ?>" required style="width: 30px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
    <th><input  type="text" name="product" value="<?php echo $row['milk_type']; ?>" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 16px; color: black;" readonly/></span></th>
    <th><input  type="text" name="quant" value="<?php echo $row['capacity']; ?>" required style="width: 90px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $price=$row['price']; ?>/litre" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <?php $total=$total+$row['capacity']; 
          $price=$price*$row['capacity'];
          $totalmoney=$totalmoney+$price;
     ?>
    
    <th><input  type="text" name="" value="<?php echo $row['input_date']; ?>" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>

    <th><input  type="text" name="" value="<?php echo $row['expired_date']; ?>" required style="width: 110px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
</tr>
<?php
  }

?>
 <tr>
   
    <th><input  type="text" name="product" value="Report expired" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 16px; color: black;" readonly/></span></th>
    <th  colspan=''><input  type="text" name="quant" value="and price" required style="width: 90px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $total; ?>" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
     <th><input  type="text" name="price" value="<?php echo $totalmoney; ?>rwf" required style="width: 100px; margin-left: 0px; border: 0px double #CCCCCC; padding:0px 0px;font-family:Bahnschrift Light; font-size: 20px; color: black;" readonly/></span></th>
    
   
</tr>

<?php
  } 
}
$obj=new claude();
}catch(PDOException $e){echo"connection problem";}
?>

</table>

</div>
</fieldset>



            
          </div>
        </div>
      </div>
    </section>
    <?php
      include("layouts/footer.php");
    ?>
  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/raphael-min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../assets/js/jquery.elastislide.js"></script>
  <script src="../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../assets/js/jquery.flexslider.js"></script>
  <script src="../assets/js/jquery-hover-effect.js"></script>
  <script src="../assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>

</body>
</html>

<?php }?>