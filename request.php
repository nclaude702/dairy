<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Contact us</title>
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
          <div class="span4">
            <aside>
              <div class="widget">
                <h5 class="rheading">SEND REQUEST MUKAMIRA DAILY<span></span></h5>
                <img src="images/homett.gif"style="height:300px;width:300px; margin-top: 0px;">
              </div>
              
            </aside>
          </div>
          <div class="span8">
             <section id="subintro">
               <div class="container" style="height: 60px;">
                 <div class="row">
                    <div class="span8">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                       <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                       <li>
                       <h2>Sending Request To Mukamira Dairy</h2></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section> 

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="code/request_code.php" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="text" name="phone" class="input-block-level" id="phone" placeholder="Your Phone Number" data-rule="minlen:4" data-msg="Please enter Valid Phone Number" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="text" class="input-block-level" name="location" id="location" placeholder="Your Location" data-rule="Location" data-msg="Please enter a Location" />
                  <div class="validation"></div>
                </div>


               
                <div class="span8 form-group">
                  <textarea class="input-block-level" name="request" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Write Here Your Request"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit">Send a request</button>
                  </div>
                </div>
              </div>
            </form>
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
