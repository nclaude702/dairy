<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>About us</title>
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
  
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5><i class="icon-coffee icon-circled icon-32 active"></i> <font bg color="blue"><b>OUR PRODUCT DISTRIBUTION</b>

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
  
    <?php echo $row['distributor_name'],',';?>
 
 
<?php
     }
    }catch(PDOException $e){echo"i am not robot";}
  }
}
$obj=new distribution();

?>
</UL>
</font>
          </div>
        </div>
        <div class="row">
          <div class="span6">
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#">
							Our History</a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    Mukamira Dairy located in Nyabihu district which has been under construction for five years is now complete.The dairy was dogged by misappropriation cases caused by some managers of the project.

                   The 12th Leadership retreat came out with the resolution of listing jeopardized and stalled projects to enable investigations, identify and punish culprits. Mrs. Mirembe Alphonsine the Director of Cabinet in the Prime Minister’s Office told the press after the12th leadership Retreat that stalling of projects was not related to lack of financial means.

                   Some farmers of Mukamira sector had started expressing worries over the stalled dairy project in which they have great hopes of buying their products.

                   “The dairy has been under construction for five years. We would, by now, have overcome the challenges of cheaply selling our milk, “said Mukamasabo Rose.
                  </div>
                </div>
              </div>
            </div>
            <!--end: Accordion -->
          </div>
          <div class="span6">
            <div class="centered">
              <img src="assets/img/milk1.jpg" width="300px" height="150px" alt="waiting" />
              <img src="assets/img/cow2.jpg" width="300px" height="150px" alt="" />
            </div>
          </div>
        </div>
        <div class="row">



          <div class="span12">
            


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
