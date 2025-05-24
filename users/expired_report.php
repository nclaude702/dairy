<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location:../index.php');
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
          
          <div class="span12">
            <section id="subintro">
               <div class="container" style="height: 60px;">
                 <div class="row">
                    <div class="span12">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                       <li><a href="#"></i></a></li>
                       <li>
                       <h2>Selling Product Report To <?php echo $_SESSION["names"]; ?> Users Of Mukamira Dairy</h2></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>

              <table style="border-radius:5px; font-size: 22px;margin-top: -45px; border-style: 2px;" border="2" width="940">
              <tr>
<th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">user_id</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">id</th>

<th bgcolor="#ffff" width="260px" height="50px"STYLE="font-family:Script MT;">product_id</th>
<th bgcolor="#ffff" width="120px" height="50px" STYLE="font-family:Script MT;">type</th>
<th bgcolor="#ffff" width="100px" height="50px" STYLE="font-family:Script MT;">litre</th>


<th bgcolor="#ffff" width="80px" height="50px"STYLE="font-family:Script MT;">price</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">entry_date</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">expired_date</th>



</tr>

<?Php
try{
class market_milk{
  function __construct(){

  $d=date("Y-m-d");
  include("../code/connection.php");
  $a=$con->prepare("select * from output_milk where expired_date<'$d'");
  //$a=$con->prepare("SELECT * FROM `output_milk`");
  //select * from output_milk where expired_date>'2019-09-30';
  $a->execute();
    include("../code/expiration.php");
    $total=0;
      $price=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['user_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['product_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['milk_type'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['capacity'];?></td>
 <?php $total=$total+$row['capacity'];?>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $price=$row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['input_date'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['expired_date'];?></td>

</tr>
<?php
}
  ?>

 
<tr>
  <td bgcolor="#FFFFFF" STYLE="" colspan="2">Market Report</td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;">and</td>
</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">price</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan=""><?php echo $total;?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $total*$price;?>Rwf</td>
</tr>
<?php
}
}
$obj=new market_milk();

}catch(PDOException $e){echo"i am not robot";}
?>
</table>




 <table style="border-radius:5px; font-size: 22px;margin-top: -5px; border-style: 2px;" border="2" width="940">
              <tr>
<th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">user_id</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">id</th>

<th bgcolor="#ffff" width="260px" height="50px"STYLE="font-family:Script MT;">product_id</th>
<th bgcolor="#ffff" width="100px" height="50px" STYLE="font-family:Script MT;">type</th>
<th bgcolor="#ffff" width="120px" height="50px" STYLE="font-family:Script MT;">litre</th>


<th bgcolor="#ffff" width="120px" height="50px"STYLE="font-family:Script MT;">price</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">entry_date</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">expired_date</th>


</tr>

<?Php
try{
class market_youghurt{
  function __construct(){

  $d=date("Y-m-d");
  include("../code/connection.php");
  $a=$con->prepare("select * from output_youghurt where expired_date<'$d'");
  $a->execute();

    $total=0;
      $price=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['user_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['product_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;">Yoghurt</td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['capacity'];?></td>
 <?php $total=$total+$row['capacity'];?>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $price=$row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['input_date'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['expired_date'];?></td>

</tr>
<?php
}
  ?>

 
<tr>
  <td bgcolor="#FFFFFF" STYLE="" colspan="2">Market Report</td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;">and</td>
</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">price</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan=""><?php echo $total;?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $total*$price;?>Rwf</td>
</tr>
<?php
}
}
$obj=new market_youghurt();

}catch(PDOException $e){echo"i am not robot";}
?>



</table>

<table style="border-radius:5px; font-size: 22px;margin-top: 0px; border-style: 2px;" border="2" width="940">
              <tr>
<th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">user_id</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">id</th>

<th bgcolor="#ffff" width="240px" height="50px"STYLE="font-family:Script MT;">product_id</th>
<th bgcolor="#ffff" width="120px" height="50px" STYLE="font-family:Script MT;">type</th>
<th bgcolor="#ffff" width="120px" height="50px" STYLE="font-family:Script MT;">litre</th>


<th bgcolor="#ffff" width="120px" height="50px"STYLE="font-family:Script MT;">price</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">entry_date</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">expired_date</th>


</tr>

<?Php
try{
class market_cheese{
  function __construct(){

  $d=date("Y-m-d");
  include("../code/connection.php");
  $a=$con->prepare("select * from output_cheese where expired_date<'$d'");
  $a->execute();

    $total=0;
      $price=0;
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['cheese_id'];
  ?>
<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['user_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['cheese_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['product_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;">Cheese</td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['capacity'];?></td>
 <?php $total=$total+$row['capacity'];?>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $price=$row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['input_date'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['expired_date'];?></td>

</tr>
<?php
}
  ?>

 
<tr>
  <td bgcolor="#FFFFFF" STYLE="" colspan="2">Market Report</td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;">and</td>
</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">price</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan=""><?php echo $total;?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $total*$price;?>Rwf</td>
</tr>
<?php
}
}
$obj=new market_cheese();

}catch(PDOException $e){echo"i am not robot";}
?>



</table>





            
                  <div class="text-center">
                    <a href="#"><button class="btn btn-theme" type="submit" value="">Expire To Day</button></a>
                    <a href=""onClick="window.print()"><button class="btn btn-theme" type="submit" value="">Click Here To Print This Report</button></a>
                    
                  </div>
                
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
