<?php
class CheckExpiration {
	//function __contruct($date_Expiration)
	public function checkExpiration()
	{
		try {

		include("connection.php");
		$today=date("Y-d-m");
		$query=$con->query("SELECT expired_date,id from output_milk"); 
       while($row=$query->fetch(PDO::FETCH_ASSOC)){

           $id=$row['id'];
	     
	    $expirationdate=$row['expired_date'];
	    	if($expirationdate<=$today)
	    	{
	    	  $update=$con->query("UPDATE output_milk SET status='expired' where id='$id'");	
	    		
	    	}
	    	else
	    	{
	    	 $update=$con->query("UPDATE output_milk SET status='no expired' where id='$id'");
	    	}
	    }	
		} catch (Exception $e) {
			 echo $e->getMessage();
		}
		
	}
}

$expiration = new CheckExpiration();
$expiration->checkExpiration();


?>