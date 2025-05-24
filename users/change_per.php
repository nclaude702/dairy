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
  <title>Milk Entry</title>
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
                <h4 class="rheading">Add Milk In order To produce product by <?php echo $_SESSION["names"]; ?><span></span></h4>

      <div class="container">
    <table>

        
        <form action="code/changer_per_code.php" method="POST">  

    <tr> <td>
         <input  type="text" name="user" value="<?php echo $_SESSION["id"]." ".$_SESSION["names"];?>" readonly>
      </td> </tr>
      <tr> <td>
 <?Php
try{
  $all=0;
  $d=date("Y-m-d");
  include('../code/connection.php');

  $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $all=$row['litre_ather_case'];
  ?>
 <input type="text" name="decrement_litre" value="<?php echo $row['litre_ather_case'];?>">

<?php
     }
    }catch(PDOException $e){echo"connection problem";}

?>
</td> </tr>   
  <tr> <td> 
    <select name="type">
      <option value="ikivug_per">IKIVUGUTO</option>
      <option value="inshushu_per">INSHYUSHU</option>
      <option value="cheese_per">CHEESE</option>
      <option value="yoghort_per">YOGHOURT</option>
   </select>  
  </td> </tr>
  <tr> <td>
    <input type="number" name="product_litre" placeholder="Enter quantity"></td> </tr>
  
     <tr><td>
    <input type="submit" value="add milk to be produced"class="btn btn-info" name="insert"></td> </tr>
    
   </form>
  </div>
   </table>
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
                       <h3>Uburyo bwo guhindura Bitewe Na product Z'ikenewe</h3></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
  <table style="border-radius:5px; font-size: 22px;margin-top: -28px; border-style: 2px;" border="2" width="618">
                <?php
                try{
                $litre=0;
                include("../code/connection.php");
                $d=date("Y-m-d");
                $a=$con->prepare("SELECT * FROM `input_milk_daily_save` WHERE date='$d'");
                $a->execute();
               while($row=$a->fetch(PDO::FETCH_ASSOC)){
        

                $litre=$row['litre'];
                $inshushu_per=$row['inshushu_per'];
                $ikivug_per=$row['ikivug_per'];
                $cheese_per=$row['cheese_per'];
                $yoghort_per=$row['yoghort_per'];

                }
  ?>
           <tr>
            <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:;">Ubusobanuro</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:;">Ingano/Quantity</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:;"> Ubwoko/Type</th>
  </tr>
  <tr>
            <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Amata Yaguzwe</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $litre."litre"; ?></th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> inshushu</th>
            </tr>

             <tr>

            <th rowspan="5" class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Ibiteganwa  Kuva mu Mata</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $inshushu_per; ?>litre </th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> inshushu</th>
            </tr>
              <tr>
            <tr>

            
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $ikivug_per; ?>litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> ikivuguto</th>
            </tr>
              <tr>

          
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $cheese_per; ?>g</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Cheese</th>
            </tr>
               <tr>
            
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $yoghort_per; ?>litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Yoghourt</th>
      </tr>
      <tr>
       <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Total Litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $inshushu_per+$yoghort_per+$cheese_per+$ikivug_per; ?>litre </th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Thank you</th>
            </tr>
       
            <?php
            }catch(PDOException $e){echo "add error";}
?>
              
</table>
            
            
          </div>
        </div>
      </div>
    </section>
    
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
</html><?php } ?>
