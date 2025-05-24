<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Our Product</title>
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
    <!-- Subintro
================================================== -->
    <section id="subintro">
      <div class="container">
        <div class="row">
          
          
        </div>
      </div>
    </section>
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">OUR PRODUCT DISTRIBUTION<span></span></h4>
                <font bg color="blue">

                <UL>

               <?Php
                  class distribution{
                      function __construct(){
                            include("code/connection.php");
                            try{
                             $a=$con->prepare("SELECT * FROM `distribitor_center`");
                                      $a->execute();
                             while($row=$a->fetch(PDO::FETCH_ASSOC)){

                             $row['id'];
               ?>
  <LI>
    <?php echo $row['distributor_name'];?>
  </LI>
 
<?php
     }
    }catch(PDOException $e){echo"i am not robot";}
  }
}
$obj=new distribution();

?>
<LI>AND ONLINE BUYING</LI>
</UL>
</font>
  <img src="assets/img/yogh_cho.jpg"style="height:300px;width:315px;">
           

 </div>

                <div class="widget">
                <h4 class="rheading">MILK COLLECTION CENTER<span></span></h4>
                <font bg color="blue">

                <UL>

               <?Php
                  class collector{
                      function __construct(){
                            include("code/connection.php");
                            try{
                             $a=$con->prepare("SELECT * FROM `collector_center`");
                                      $a->execute();
                             while($row=$a->fetch(PDO::FETCH_ASSOC)){

                             $row['id'];
               ?>
  <LI>
    <?php echo $row['collector_name'];?>
  </LI>
 
<?php
     }
    }catch(PDOException $e){echo"i am not robot";}
  }
}
$obj=new collector();

?>
<LI>FARMER CAN REQUEST COLLECTOR</LI>
</UL>
</font>
              </div>
              
            </aside>
          </div>
          <div class="span8">
                <img src="assets/img/milk20.jpg"style="height:300px;width:315px;">
           <img src="assets/img/youghsmoll.jpg"style="height:300px;width:300px;">
           
           
                   <a href="buying_milk.php"><img src="assets/img/milk11.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_milk.php"><img src="assets/img/milk22.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_milk.php"><img src="assets/img/milk33.jpg"style="height:170px;width:158px;"></a>
                   <a href="buying_milk.php"><img src="assets/img/milk55.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_yoghourt.php"><img src="assets/img/yogh22.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_yoghourt.php"><img src="assets/img/yogh11.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_milk.php"><img src="assets/img/milk44.jpg"style="height:170px;width:150px;"></a>
                   <a href="buying_cheese.php"><img src="assets/img/cheese11.jpg"style="height:170px;width:158px;"></a>
           <img src="assets/img/cow3.jpg"style="height:300px;width:315px;">
           <img src="assets/img/milk555.jpg"style="height:300px;width:300px;">
           
            
               
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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
