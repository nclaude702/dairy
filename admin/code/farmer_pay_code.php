<?php

try
 {
    include("log_supplier_save_code.php");
   
        
    
	   include("../../code/connection.php");
             $update="UPDATE `input_milk` SET `paid` = paid+unpaid, `unpaid` = 0"; 
	    
	  
	     $a=$con->exec($update);
            if($a==true)
                   {
                     echo "<script>window.alert('click ok to payment successfull');window.location='../supplier_pay.php'</script>'";
            }else{

                     echo "<script>window.alert('not paid click  ok to update again');window.location='../supplier_pay.php'</script>'";
            
            }
    
 
 }catch(PDOException $e){echo "update error";}
?>
