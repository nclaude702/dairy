<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
try{
include('connection.php');
$connection=$con;
include('con2.php');
$pid=$_POST['id'];	

$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$address=$_POST['address'];

$type=$_POST['type'];
$quant=$_POST['quant'];
$price=$_POST['price'];
$d=date("Y-d-m");

$qnt=$_POST['quant'];

   if($quant<=49)
      {
	    echo "<script>window.alert('pease online booking it not able if less than 50 litre ');window.location='../buying_milk.php'</script>'";
       }

   elseif($quant>=49)
      {
        
        $sql="SELECT capacity FROM output_milk WHERE id='$pid'";
        $q=mysqli_query($con,$sql);
      while ($r=mysqli_fetch_assoc($q)) {
    if ($r['capacity']>=$quant=$_POST['quant'] AND $quant=$_POST['quant']>0 ) {
      $send="INSERT into online_buyed_product set p_id='$pid',names='$name',phone='$phone',mail='$mail', address='$address',type='$type',quantity='$qnt', price='$price',total_payment=quantity*800,date='$d'";
             $a=$connection->exec($send);
                if($a==true)
                   {
                     $insert="UPDATE output_milk set capacity=capacity-'$qnt' WHERE milk_type='$type' and capacity>0 and id='$pid'";
                     $b=$connection->exec($insert);
             
                           if($b==true)
                              {
                                // echo "<script>window.alert('buying successfull thank you');window.location='../buying_milk.php'</script>'";
                               ?>
                               <body background="imgs/aimable/billbg.jpg">
<center><FIELDSET STYLE="width:400px;background:url('');border:5px solid black;margin:100px;">


<TABLE BORDER="0">
  <img src="../assets/img/log.jpg" width="400" height="100">
  <b>MUKAMAIRA DAIRY LTD BUY PROOF</B></BR>

<TR><TD>Product Id</TD><td><?php echo $pid; ?></td></TR>
<TR><TD>Client Name</TD><td><?php echo $name; ?></td></TR>
<TR><TD>Phone Number</TD><td><?php echo $phone; ?></td></TR>
<TR><TD>E-mail Address</TD><td><?php echo $mail; ?></td></TR>
<TR><TD>Location Address</TD><td><?php echo $address; ?></td></TR>
<TR><TD>Type</TD><td><?php echo $type; ?></td></TR>
<TR><TD>Price Unit</TD><td><?php echo $price ?></td></TR>
<TR><TD>Quantity</TD><td><?php echo $qnt; ?></td></TR>
<TR><TD>Total</TD><td><?php echo $qnt*800; ?>Rwf</td></TR>
<TR><TD>Any Problem Call</TD><td>
              +250788125007<BR>
              +250788860505</td></TR>
<TR><TD>MUKAMIRA DAIRY LTD E-mail</TD><td>info@mukamiradairy.com</td></TR>
<TR></TR>
<TR></TR><tr><td></td><td><a href="../buying_milk.php">Back</A>&nbsp&nbsp&nbsp<a href="#" onClick="window.print()">Print</a></td></tr>
</font></table>
<b> N.B: PAY BEFORE SEND YOUR PRODUCT</B></BR>
  <b> BANK ACCOUNT: 00091-660301-02</B></BR>
</CENTER>

                                 <?php
                               }else{echo "<script>window.alert('your buying request does not reach to mukamira dairy try again');window.location='../buying_milk.php'</script>'";}
                    }else{echo "<script>window.alert('your buying request does not reach to mukamira dairy try again');window.location='../buying_milk.php'</script>'";}

              
      }
    else{
      echo "<script>window.alert('please buy available same type then buy again another type');window.location='../buying_milk.php'</script>'";
        }
          }
         
        }else{echo"fail to buy";}
 
}catch(PDOException $e){echo "connection problem";}
?>


</body>
</html>