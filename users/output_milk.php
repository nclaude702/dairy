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
          <div class="span4">
            <aside>
              <div class="widget">
                <h6 class="rheading">MUKAMIRA DAILY by<?php echo $_SESSION["names"]; ?><span></span></h6>
              <img src="../assets/img/milk4.jpg"style="height:200px;width:300px; margin-top: 0px;">
              </div>
              <div class="widget">
                
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
           
           <table style="background:#3399CC;border-radius:5px; margin-top: -30px;">
<tr>
<th bgcolor="#ffff" width="80px" height="50px"STYLE="font-family:Script MT;">user_id</th>
<th bgcolor="#ffff" width="160px" height="50px" STYLE="font-family:Script MT;">id</th>


<th bgcolor="#ffff" width="180px" height="50px" STYLE="font-family:Script MT;">type</th>
<th bgcolor="#ffff" width="180px" height="50px" STYLE="font-family:Script MT;">litre</th>


<th bgcolor="#ffff" width="120px" height="50px"STYLE="font-family:Script MT;">price</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">entry_date</th>
<th bgcolor="#ffff" width="150px" height="50px" STYLE="font-family:Script MT;">expired_date</th>


<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;"> </th>
</tr>

<?Php
try{
class market_milk{
  function __construct(){

  $d=date("Y-m-d");
  include("../code/connection.php");
  $a=$con->prepare("select * from output_milk where expired_date>='$d'");
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

<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['milk_type'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['capacity'];?></td>
 <?php $total=$total+$row['capacity'];?>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $price=$row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['input_date'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['expired_date'];?></td>

<td style="background:#FFA6FF;">

</td></tr>
<?php
}
  ?>

 
<tr>
  <td bgcolor="#FFFFFF" STYLE="" colspan="2">Market Report</td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;">and</td>
</td>
  <td bgcolor="#FFFFFF" STYLE="">price</td>
  <td bgcolor="#FFFFFF" STYLE=""><?php echo $total;?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $total*$price;?></td>
</tr>
  <?php

  $d=date("Y-m-d");
  include("../code/connection.php");
  $a=$con->prepare("select * from output_milk where expired_date<'$d'");
  $a->execute();
    $ex_total=0;
  
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
     ?>
<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['user_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['product_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:;"><?php echo $row['milk_type'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['capacity'];?></td>
 <?php $ex_total=$ex_total+$row['capacity'];?>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $price=$row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['input_date'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['expired_date'];?></td>

<td style="background:#FFA6FF;">
</a>
</td></tr>
<?php
}?>
<tr>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">Expired</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">Report</td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;">And</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan="">price</td>
  <td bgcolor="#FFFFFF" STYLE="" colspan=""><?php echo $ex_total;?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $ex_total*$price;?></td>

</tr>
<?php
}
}
$obj=new market_milk();

}catch(PDOException $e){echo"i am not robot";}
?>

</table>
            
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
<?php } ?>

