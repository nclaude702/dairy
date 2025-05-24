
<?php
  include("../../code/con2.php");
  $retrive=mysqli_query($con,"select input_milk.id,names,user_id,supplies_id,litre,litre_amount,amount_sold,unpaid,paid from input_milk,supplies where input_milk.id=supplies.sid");

 
  while($row=mysqli_fetch_array($retrive))
  {
  $id=$row['id'];
$uid=$row['user_id'];
$sup_name=$row['names'];
$sup_id=$row['supplies_id'];
$litre=$row['litre'];
$all=$row['amount_sold'];
$paid=$row['paid'];
$todaypay=$row['unpaid'];

$insert="insert into supp_pay_log set supp_id='$sup_id',supp_name='$sup_name',u_id='$uid',litre='$litre',amount=$all,paid='$paid' ,todaypaid='$todaypay'";
$a=mysqli_query($con,$insert);
if($a==true)
	{echo"ok";}
else{echo"fail";}
}
  ?> 