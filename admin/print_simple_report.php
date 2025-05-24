<?php
session_start();
if (!isset($_SESSION['Cashier'])) {
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
                    <div class="span8">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                       <li><a href="#"></i></a></li>
                       <li>
                       <h2>Simple Manager Report To Mukamira Dairy</h2></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>

              <table style="border-radius:5px; font-size: 22px;margin-top: -28px; border-style: 2px;" border="2" width="940">
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
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:;">Agaciro/Price</th>
  </tr>
  <tr>
            <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Amata Yaguzwe</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $litre."litre"; ?></th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> inshushu</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $a=$litre*300; ?>Rwf</th>
            </tr>

             <tr>

            <th rowspan="5" class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Product / Ibyavuve mu mata bigurishwa</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $inshushu_per; ?>litre </th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> inshushu</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $b=$inshushu_per*500; ?>Rwf</th>
            </tr>
              <tr>
            <tr>

            
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $ikivug_per; ?>litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> ikivuguto</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $c=$ikivug_per*800; ?>Rwf</th>
            </tr>
              <tr>

          
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $cheese_per; ?>g</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Cheese</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $d=$cheese_per*700; ?>Rwf</th>
            </tr>
               <tr>
            
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> <?php echo $yoghort_per; ?>litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Yoghourt</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $e=$yoghort_per*300; ?>Rwf</th>
      </tr>
      <tr>
       <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">Total Litre</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $inshushu_per+$yoghort_per+$cheese_per+$ikivug_per; ?>litre </th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> Totol Money</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $sum=$d+$e+$c+$b; ?>Rwf</th>
            </tr>
        <tr>
       <th class="tds" bgcolor="" width="200px" height="50px" STYLE="font-family:Script MT;">boil milk</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $rest=$litre-($inshushu_per+$yoghort_per+$cheese_per+$ikivug_per); ?>litre </th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"> profit</th>
            <th bgcolor="" width="100px" height="50px" STYLE="font-family:Script MT;"><?php echo $profit=$d+$e+$c+$b-$a; ?>Rwf</th>
            </tr>
            <?php
            }catch(PDOException $e){echo "add error";}
?>
              
</table>

            
                  <div class="text-center">
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
