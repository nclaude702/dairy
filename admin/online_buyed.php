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
     <section id="subintro" >
      <div class="container" style="height:50px;">
        <div class="row">
          
         
        </div>
      </div>
    </section> 
    <section id="maincontent">
      <div class="container">
        <div class="row">
         
          <div class="span12">
           
             <section id="subintro" style="margin-top: -28px;background-color:#ffff;">
               <div class="container" style="height: 50px;">
                 <div class="row">
                    <div class="span12">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                      
                       <li>
                       <h1>Ibyaguriwe Kukorana buhanga Dairy System</h1></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
                
  
    <table style="margin-top: 0px; font-family: Lucida Calligraphy;background:#3399CC;border-radius:5px;margin-top: -40px;width: 900px;">

  </tr>

  <tr>
    <th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">ID</th>
  
  <th bgcolor="#ffff" width="80px" height="50px"STYLE="font-family:Script MT;">product_ID</th>
  <th bgcolor="#ffff" width="200px" height="50px"STYLE="font-family:Script MT;"> NAME</th>
<th bgcolor="#ffff" width="70px" height="50px" STYLE="font-family:Script MT;">PHONE</th>
  <th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">TYPE</th>

<th bgcolor="#ffff" width="100px" height="50px" STYLE="font-family:Script MT;">QUANTITY</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">PRICE</th>

<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">PAYMENT</th>


<?Php
class online_buyed_product{
  function __construct(){

try{
  $now=date("Y,d,m");
   include("../code/connection.php");
  $con=new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
  
  
  //$a=$con->prepare("SELECT * FROM `output_milk` WHERE `capacity` >0 and expired_date>='$now'");
  $a=$con->prepare("SELECT * FROM `online_buyed_product` order by id desc ");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
 

<tr>
    <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['id'];?></td>
      <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['p_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['names'];?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['phone'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['type'];?></td>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['quantity'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['price'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['total_payment'];?></td>


<?php
}
  if($a==true){}
    date("Y,d,m");
}catch(PDOException $e){echo"connection error_log(wait to solve it)";}
  }
}
$obj=new online_buyed_product();

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
<?php }?>