<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MUKAMIR Dairy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
                <h4 class="rheading">Enter Your Identification<span></span></h4>



      <div class="container">
    
    <table>
        <form action="code/buyed_cheese_code.php" method="POST"> 
        <?Php
$id=$_GET['id'];

try{
  include("code/connection.php");
  
  $a=$con->prepare("SELECT * FROM `output_cheese` WHERE `cheese_id` ='$id'");
  $a->execute();
  $row=$a->fetch(PDO::FETCH_ASSOC);

  

  ?>
  <tr> <td>
    <input type="text" name="id" value="<?php echo $row['cheese_id']; ?>" readonly></td> </tr>
    <tr> <input type="text" name="pid" value="<?php echo $row['cheese_id'].$row['product_id']; ?>"></td> </tr>
      <tr> <td>
    <input type="text" placeholder="Enter Your Name" name="name" required></td> </tr>
    <tr> <td>
    <input type="text" placeholder="Enter Your Phone" name="phone" required></td> </tr>
    <tr> <td>
    <input type="text" placeholder="Enter Your E-mail" name="mail" required></td> </tr>


    <tr> <td>
    <input type="text" placeholder="Enter Location or address" name="address" required></td> </tr>
    <tr> <td>
      
    <input type="text" name="type" value="Cheese" readonly></td> </tr>
    <tr> <td>
    <input type="text" name="price" value="<?php echo 'write Quantity not great ',$row['capacity'];?>" readonly></td> </tr>
      
    <tr> <td>
    <input type="number" placeholder="Enter Quantity" name="quant" required></td> </tr>
    <tr> <td>
    <input type="number" name="price" value="<?php echo $row['price'];?>" readonly></td> </tr>
    <td>
    <input type="submit" value="Buy & print"class="btn btn-info" name="insert"></td> </tr>
    
   </form>
  </div>

  <?php 
}catch(PDOException $e){}
?>

   </table>
              


              </div>
              
            </aside>
          </div>
          <div class="span8">
           
           
            <img src="assets/img/cheese11.jpg"style="height:540px;width:600px;">
            
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/raphael-min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
