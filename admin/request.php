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
      
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">MUKAMIRA DAILY<span></span></h4>
              <img src="../images/homett.gif"style="height:200px;width:300px; margin-top: 0px;">
              </div>
              
            </aside>
          </div>
          <div class="span8">
           
             
              <section id="subintro">
               <div class="container" style="height: 50px;">
                 <div class="row">
                    <div class="span8">
                      <ul class="breadcrumb" style="margin-top: -6px;">
                      
                       <li>
                       <h2>Reading Request To Mukamira Dairy</h2></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>     
  <table style="background:#3399CC;border-radius:5px; margin-top: -50px;" >
<tr>
<th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">ID</th>
<th bgcolor="#ffff" width="130px" height="50px" STYLE="font-family:Script MT;">NAMES</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">PHONE</th>

<th bgcolor="#ffff" width="120px" height="50px" STYLE="font-family:Script MT;">LOCATION</th>
<th bgcolor="#ffff" width="250px" height="50px" STYLE="font-family:Script MT;">REQUEST</th>
<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">DELETE</th>
<!--<th bgcolor="#996666" width="50px" height="50px">UPDATE</th>-->
</tr>
<?Php
class request{
  function __construct(){
try{
  
 include("../code/connection.php");
  $a=$con->prepare("select * from request");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){
    $id=$row['rid'];
    ?>
  



<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['rid'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['name'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['phone'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['location'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['request'];?></td>
<td style="background:#FFA6FF;">
<a href="code/delete_request_code.php?id=<?php echo $id ?> "><img src="../assets/img/delete.jpg"class="img"style="width:80px;height:30px;" onclick="return confirm('dou you need to delete this message?')"/></a>
</td></tr>
    
   
    
    <?php
  }
  if($a==true)
    {
     
    }
}catch(PDOException $e)
      {echo"exception error_log";}
      }
}
$obj=new request();
?>
</table>
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
