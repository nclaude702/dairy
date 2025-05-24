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
      
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget" style="width: 600px;">
                <h6 class="rheading">ADMIN LOGIN TO MUKAMIRA DAILY</h6>
              <img src="assets/img/dummies/work8.jpg"style="height:300px;width:800px; margin-top: 0px;">
              </div>
            </aside>
          </div>
          <div class="span8">
           

            <div class="spacer30">
            </div>

            <div id="sendmessage">login has successfull. Thank you!</div>
            <div id="errormessage"></div>
            
             
   <center>
  <div class="imgcontainer">
    <img src="assets/img/user.png" alt="Avatar" class="avatar" style="margin-left: 300px;">
  </div>

  <div class="container">
    
    <table>
        <form action="admin/code/login.php" method="POST">  
      <tr><td>

    <label for="username">Username</label></td><td>
    <input type="text" placeholder="Enter Username" name="username" required></td></tr>
    <tr><td>
    <label for="password">Password</label></td><td>
    <input type="password" placeholder="Enter Password" name="password" required></td></tr>
     <tr><td></td><td>
    <input type="submit" value="Admin Login"class="btn btn-info" name="login"></td></tr>
    
   </form>
  </div>

  
   </table>


</center>
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

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
