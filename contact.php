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
                <h4 class="rheading">Get in touch with us<span></span></h4>
                <ul>
                  <li><label><strong>Phone : </strong></label>
                    <p>
                      +250788125007
                    </p>
                  </li>
                  <li><label><strong>Email : </strong></label>
                    <p>
                      info@mukamiradairy.com
                    </p>
                  </li>
                  <li><label><strong>Adress : </strong></label>
                    <p>
                      Rwanda West Province nyabihu District
                    </p>
                  </li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Find us on social networks<span></span></h4>
                <ul class="social-links">
                  <li><a href="#" title="Twitter"><i class="icon-square icon-32 icon-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="icon-square icon-32 icon-facebook"></i></a></li>
                  <li><a href="#" title="Google plus"><i class="icon-square icon-32 icon-google-plus"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="icon-square icon-32 icon-linkedin"></i></a></li>
                  <li><a href="#" title="Pinterest"><i class="icon-square icon-32 icon-pinterest"></i></a></li>
                </ul>
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
                       <h2>Sending Message To Mukamira Dairy</h2></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
            <div class="spacer30">
            </div>


            <form action="code/message_send_code.php" method="POST" role="form" class="contactForm">
              
              <div class="row">
                <div class="span4 form-group">

                  <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="text" name="address" class="input-block-level" id="address" placeholder="Your Address" data-rule="minlen:4"/>
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="phone" class="input-block-level" name="phone" id="phone" placeholder="Your Phone" data-rule="phone"/>
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea class="input-block-level" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit">Send a message</button>
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
