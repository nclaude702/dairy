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
                <h4 class="rheading">Update Ikivuguto by <?php echo $_SESSION["names"]; ?><span></span></h4>

      <div class="container">
    
    <table>

          

 <form action="code/update_ikivuguto_code.php" method="POST">  

    <tr> <td>
         <input  type="text" name="user" value="<?php echo $_SESSION["id"];?>" readonly>
      </td> </tr>
      <?Php
class update_ikivuguto{
  function __construct(){
include('../code/connection.php');
try{
  $id=$_GET['id'];
  $d=date("d-m-y"); 
  $a=$con->prepare("SELECT * FROM `output_milk` where id='$id'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>
  <tr> <td>
        <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
    
    </td> </tr>
    <tr> <td>
        <input type="text" name="litre" value="<?php echo $row['capacity']; ?>">
    
    </td> </tr>
     
    <tr> <td>

<input type="text" name="price" value="<?php echo $row['price']; ?>">
  </td> </tr>
 
    <tr> <td>
    <input type="date" name="entry" value="<?php echo $row['input_date']; ?>" readonly></td> </tr>
    <tr> <td>
    <input type="date" name="expired" value="<?php echo $row['expired_date']; ?>" readonly></td> </tr>



    <?php
     }
    }catch(PDOException $e){echo"connection problem";}
  }
}
$obj=new update_ikivuguto();

?>
     <tr><td>

    <input type="submit" onclick="alert('thank you to Update yoghourt!')" value="Update Ikivuguto"class="btn btn-info" name="insert"></td> </tr>
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
                       <h3>Ongera Amata Y'Ikivuguto</h3></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </section>
           
           <table style="background:#3399CC;border-radius:5px; margin-top: -30px; ">
<tr>
<th class="tds" bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">user id</th>
<th bgcolor="#ffff" width="50px" height="50px" STYLE="font-family:Script MT;">id</th>
<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">capacity</th>
<th bgcolor="#ffff" width="30px" height="50px" STYLE="font-family:Script MT;" >price</th>
<th bgcolor="#ffff" width="30px" height="50px" STYLE="font-family:Script MT;" >milk type</th>

<th bgcolor="#ffff" width="180px" height="50px" STYLE="font-family:Script MT;">entry_date</th>


<th bgcolor="#ffff" width="180px" height="50px" STYLE="font-family:Script MT;">expire_date</th>
<th bgcolor="#ffff" width="170px" height="50px" STYLE="font-family:Script MT;">n package</th>

<th bgcolor="#ffff" width="170px" height="50px" STYLE="font-family:Script MT;">type of package</th>

<th bgcolor="#ffff" width="80px" height="50px" STYLE="font-family:Script MT;">update</th>

  <?Php
class market_ikivuguto{
  function __construct(){
;
try{
  include("../code/connection.php");
  
   //include("code/expiration_yoghourt.php");
  $a=$con->prepare("SELECT * FROM `output_milk`  where milk_type='IKIVUGUTO'");
  $a->execute();
  while($row=$a->fetch(PDO::FETCH_ASSOC)){

    $id=$row['id'];
  ?>


<tr>
  <td class="tds" bgcolor="#FFFFFF"  > <?php echo $row['user_id']; ?></td>
 
  <td class="tds" bgcolor="#FFFFFF"  > <?php echo $row['id']; ?></td>
  <td bgcolor="#FFFFFF" height="30px"><?php echo $row['capacity']."litre"; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $row['price']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $x=$row['milk_type']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $x=$row['input_date']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo $y=$row['expired_date']; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo  $y=$row['package']."package"; ?></td>
<td bgcolor="#FFFFFF" height="30px"><?php echo  $y=$row['pack']; ?></td>
<td style="background:#FFA6FF;font-family:Script MT; font-size: 20px" height="30px" width="80px">
<a href="update_ikivuguto.php?id=<?php echo $id ?> "> update</a>
</td></tr>

<?php
}
  if($a==true){}
}catch(PDOException $e){echo"i am not robot";}
  }
}

$obj=new market_ikivuguto();

?>
    </table>
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
