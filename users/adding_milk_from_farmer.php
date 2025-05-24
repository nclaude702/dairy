s<?php
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
                <h6 class="rheading">ADD MILK FROM FARMER <?php echo $_SESSION["names"]; ?><span></span></h6>
              
              <table>
        <form action="code/entry_milk_code.php" method="POST"> 

    <tr> <td>
         <input  type="text" name="uid" value="<?php echo $_SESSION["id"]." ".$_SESSION["names"];?>" readonly>
      </td> </tr>
    
     <tr> <td>
    <input type="number" name="sup_id" placeholder="Enter Supplier ID " required></td> </tr>
    <tr> <td>
    <input type="number" name="quant" placeholder="Enter Litre "required ></td> </tr>
    <tr> <td>
    
     <tr><td>
    <input type="submit" value="Add"class="btn btn-info" name="insert"></td> </tr>
    <tr><td></br>
    <a href="entry_milk_farmer_register.php" style="height: 34px; margin-left: 15px; width: 560px; padding: 5px; border: 3px double rgb(204, 204, 204);font-family:Bahnschrift Light; font-size:15px;" />click here to register new farmer</a>
  </td> </tr>
   </form>  
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
                       <center><h3>Aborozi Batugemurira Amata</h3></center></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
           
             <table style="margin-top: -30px; font-family: Lucida Calligraphy;background:#3399CC;border-radius:5px;">
  </tr>
  <tr>
    <th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">user_id</th>
<th bgcolor="#ffff" width="30px" height="50px" STYLE="font-family:Script MT;">id</th>
  <th bgcolor="#ffff" width="200px" height="50px"STYLE="font-family:Script MT;">supplier names</th>
  <th bgcolor="#ffff" width="100px" height="50px"STYLE="font-family:Script MT;">supplier id</th>
<th bgcolor="#ffff" width="70px" height="50px" STYLE="font-family:Script MT;">litre</th>
  <th bgcolor="#ffff" width="50px" height="50px"STYLE="font-family:Script MT;">price/litre</th>

<th bgcolor="#ffff" width="100px" height="50px" STYLE="font-family:Script MT;">amount_sold</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">paid</th>

<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">unpaid</th>


<!--<th bgcolor="#996666" width="50px" height="50px">UPDATE</th>-->
</tr>
<?php
  include("../code/con2.php");
  $retrive=mysqli_query($con,"select input_milk.id,names,user_id,supplies_id,litre,litre_amount,amount_sold,unpaid,paid from input_milk,supplies where input_milk.id=supplies.sid");

 
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['id'];
  ?>

   <tr>
    <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['user_id'];?></td>
      <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['names'];?></td>
  <td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['supplies_id'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['litre'];?></td>

<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['litre_amount'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['amount_sold'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['paid'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['unpaid'];?></td>




</tr>
 
<?php

  }
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
<?php } ?>


