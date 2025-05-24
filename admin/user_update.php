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
                <h4 class="rheading">Update User<span></span></h4>



      <div class="container">
    
    <table>
        <form action="code/user_update_code.php" method="POST">  

    <tr> <td>
         <input  type="text" name="user" value="<?php echo $_SESSION["Cashier"];?>" readonly>
      </td> </tr>
   <?php
   $id=$_GET['id'];
  include('../code/con2.php');
  $retrive=mysqli_query($con,"select * from users where uid='$id'");
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['uid'];
  ?>
    <tr> <td>
    <input type="text" name="id" value="<?php echo $row['uid'];?>" readonly></td> </tr>
    <tr> <td>
    <input type="text" name="names" value="<?php echo $row['names'];?>" required></td> </tr>
     <tr> <td>
    <input type="text" name="username" value="<?php echo $row['username'];?>" required></td> </tr>
    <tr> <td>
    <input type="text" name="phone"  value="<?php echo $row['phone'];?>"required ></td> </tr>
    <tr> <td>
    <input type="text" name="mail" value="<?php echo $row['mail'];?>"required></td> </tr>
    <tr> <td>
    <input type="password" name="password" value="<?php echo $row['password'];?>"></td> </tr>
    <tr> <td>
    <select name="type" value="<?php echo $row['type'];?>">
       <option>Admin</option>
       <option>Cashier</option>
   </select></td> </tr>
    <tr><td>
    <input type="submit" value=" Update"class="btn btn-info" name="insert"></td> </tr> 
    <?php

  }
  ?> 
   </form>
  </div>

  
   </table>
              



              </div>
             
            </aside>
          </div>
          <div class="span8">
           
             
                
  <table style="background:#3399CC;border-radius:5px; border:2px solid pink;" >
<tr>
<th bgcolor="#996666" width="50px" height="50px"STYLE="font-family:Script MT;">ID</th>
<th bgcolor="#996666" width="130px" height="50px" STYLE="font-family:Script MT;">NAMES</th>
<th bgcolor="#996666" width="130px" height="50px" STYLE="font-family:Script MT;">USERNAME</th>
<th bgcolor="#996666" width="80px" height="50px" STYLE="font-family:Script MT;">PHONE</th>

<th bgcolor="#996666" width="130px" height="50px" STYLE="font-family:Script MT;">EMAIL</th>


<th bgcolor="#996666" width="200px" height="50px" STYLE="font-family:Script MT;">TYPE</th>
<th bgcolor="#996666" width="200px" height="50px" STYLE="font-family:Script MT;">ADD</th>
<th bgcolor="#996666" width="200px" height="50px" STYLE="font-family:Script MT;">EDIT</th>

<th bgcolor="#996666" width="50px" height="50px" STYLE="font-family:Script MT;">DELETE</th>
<!--<th bgcolor="#996666" width="50px" height="50px">UPDATE</th>-->
</tr>
<?php
  include('../code/con2.php');
  $retrive=mysqli_query($con,"select * from users");
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['uid'];
  ?>
  

<tr>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['uid'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['names'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['username'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['phone'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['mail'];?></td>
<td bgcolor="#FFFFFF" STYLE="font-family:Script MT;"><?php echo $row['type'];?></td>

<td style="background:#FFA6FF;">
<a href="#"><img src="../assets/img/add.png"class="img"style="width:80px;height:30px;"/></a>
</td>
<td style="background:#FFA6FF;">
<a href="user_update.php?id=<?php echo $id ?> "><img src="../assets/img/edit.jpg"class="img"style="width:80px;height:30px;"/></a>
</td>

<td style="background:#FFA6FF;">
<a href="code/delete_user_code.php?id=<?php echo $id ?> "><img src="../assets/img/delete.jpg"class="img"style="width:80px;height:30px;" onclick="return confirm('dou you need to delete this user?')"/></a>
</td>


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
<?php }?>
