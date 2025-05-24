<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MUKAMIRA Dairy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
   <link href="css.css" rel="stylesheet" type="text/css">
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
    
    <section id="intro">

      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->

            <div id="mainslider" class="flexslider">

<section id="subintro" style="margin-top: -28px;">
               <div class="container" style="height: 50px;">
                 <div class="row">
                    <div class="span12">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                      
                       <li>
                       <h1><center>Buying Yoghourt to (Gura Yahurute Kuri) Mukamira Dairy</center></h1></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
         <table style="background:#0000f;border-radius:5px; font-size: 22px; width: 945px; margin-top: -40px;">
<tr>
<th class="tds" bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">id</th>
<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">milk_type</th>
<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">capacity</th>
<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;" >price</th>


<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">entry_date</th>


<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">expire_date</th>

<th bgcolor="#ffff" height="50px" STYLE="font-family:Script MT;">buy</th>
<!--<th bgcolor="#996666" width="50px" height="50px">UPDATE</th>-->
</tr>
<?Php
class claude{
  function __construct(){
include("code/connection.php");
try{
  $d=date("Y-m-d");
  
  //$a=$con->prepare("SELECT * FROM `output_milk` WHERE `capacity` >0 and expired_date>='$now'");
  $a=$con->prepare("SELECT * FROM `output_youghurt` WHERE `capacity` >0 and expired_date>'$d'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
  <form action="buyed_yoghourt.php" method="post">

<?php 
$date1=strtotime($row['input_date']);
$date2=strtotime($row['expired_date']);
$diff=$date2-$date1;

$year=0;
$month=0;
$day=0;
$hour=0;
while ($diff>3000) {
  

    if($diff>=31536000)
       {
          $year=floor($diff/31536000);
           $diff=$diff-31536000*$year;
           echo $year;
       }
    elseif($diff>=2592000)
      {
          $month=floor($diff/2592000);
          $diff=$diff-2592000*$month;
      }
    elseif($diff>=86400)
      {
        $day=floor($diff/86400);
        $diff=$diff-86400*$day;
      }
    else{

        $hour=floor($diff/3600);
        $diff=$diff-3600*$hour;
       }
}

?>


<tr>
   <td class="tds" bgcolor="#FFFFFF"  > <?php echo $row['id']; ?></td>
  <td bgcolor="#FFFFFF"height="30px" ><?php echo "youghourt"; ?></td>
  <td bgcolor="#FFFFFF" height="30px"><?php echo $row['capacity']; ?>/ml</td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['price']."rwf"; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['input_date']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['expired_date']; ?></td>
<td style="background:#FFA6FF;font-family:Script MT; font-size: 20px" height="30px" width="80px">
<a href="buyed_yoghourt.php?id=<?php echo $id ?> ">buy/Gura</a>
</td></tr>


<?php
}
  if($a==true){}
     date("Y,d,m");
}catch(PDOException $e){echo"connetion error";}
  }
}
$obj=new claude();

?>

</table>

 
              

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
